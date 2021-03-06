$(document).ready(function() { 
	$('body').on('click','.add_course_top_bar',function(){
		$(this).prev().prev().show();
		$(this).prev().hide();
		$(this).hide();
	});

	$('body').on('click','.add_course_top_bar_in_db',function(){
		var _that = $(this);
		var e = $('<div class="card mt1 mb0 pa2 move_me">'+$(this).prev().val()+'</div>');

		$(this).closest('.mb1').prev().prev().append(e); 
		$('.move_me').draggable(); 

		var main_div = $(this).closest('.mb1').prev().prev().attr('data-main');
		var div_type = $(this).closest('.mb1').prev().prev().attr('data-div');
		var div_id = $(this).closest(".active").attr('data-div-id');
		
		$(this).closest('.main_div').hide();
		$(this).closest('.main_div').next().show();
		$(this).closest('.main_div').next().next().show();

		if($.trim($(this).prev().val()!="")){
			var arr = [];
			$(this).closest('.pointer').prev().prev().find('div').each(function(){
			  arr.push($(this).text());
			});

			let page_id = $('#page_id').val();

			$.ajax({
			   type: "POST",
			   data: {div_type:div_type,card_element:arr,page_id:page_id,main_div:main_div,div_id:div_id},
			   url: "./save_callback",
			   success: function(msg){
			     _that.prev().val('');
			   }
			});
		}
	});

	$('body').on('click','.add_course_top_bar_in_cancel',function(){
		$(this).closest('.main_div').hide();
		$(this).closest('.main_div').next().show();
		$(this).closest('.main_div').next().next().show();
	});

	$('body').on('click','.add_year',function(){
		let count_div = $(".clone_div_append").find('.active').length;
		let page_id = $('#page_id').val();

		//count_div = parseInt(count_div) + 1;

		$.get('max_div_id/'+page_id,function(div_id){
			if(div_id){
				div_id = parseInt(div_id) + 1;
				$(".clone_div").clone().appendTo(".clone_div_append").show().addClass('active').attr('data-div-id',div_id);
				$('.active').removeClass('clone_div');
			}else{
				$(".clone_div").clone().appendTo(".clone_div_append").show().addClass('active').attr('data-div-id',1);
				$('.active').removeClass('clone_div');
			}
		});
	});

	$('body').on('click','.remove_me',function(){
		let div_id = $(this).closest('.active').attr('data-div-id');
		let page_id = $('#page_id').val();
		var _that = $(this);
		
		if(div_id){
			$.get('delete_div/'+div_id+'/'+page_id,function(data){
				if(data){
					_that.closest('.row').remove();
				}else{
					alert('there is something wrong');
				}
			})	
		}
	});


     $( function() {
	    $( ".mh3" ).sortable({
     	 placeholder: "ui-state-highlight",
     	 stop: function() { alert('stop'); }
    	});

	    $( ".mh3" ).disableSelection();
	  });
});