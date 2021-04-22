

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"> -->
  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard 
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  
  
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets/david/assets/css/material-dashboard.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/david/assets/css/styles.css" rel="stylesheet" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


</head>

<body class="">
 
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-background-color="black" style="background-color: #154734">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="#" class="simple-text logo-normal">
          Logo
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
        <?php if($pages) { 
          foreach ($pages as $value) { ?>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>/page/<?php echo $value->id ?>">
              <i class="material-icons"><img src="<?php echo base_url(); ?>assets/david/assets/img/download.png" width=20 height=10></i>
              <p><?php echo $value->name ?></p>
            </a>
          </li>

        <?php    
          } }
        ?>  
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <input type="hidden" name="page_id" id="page_id" value="<?php echo $page_id; ?>">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top " style="background-color: #e87500!important;">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
              
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content" style="background-color: black!important;">
        <div class="container-fluid clone_div_append">
          <div class="row">
            <div class="col-lg-1 d-flex items-center justify-content-center card vertical-text">
              
              <span class="" style="cursor: pointer;">YEAR</span>
              
            </div>
          <div class="col-lg-11">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card">
                <div class="text-center">
                <p class="text-black b mb0">Full semester</p>
                <span>0 Credit Hours</span>
              </div>
              <hr class="mt1" />
              <div class="mh3" data-main="yes" data-div="div_1">
                <?php
                  if($main_div){
                  foreach ($main_div as $value) {
                    if($value->main_div=="yes"){
                       $items = unserialize($value->div_1);
                       if($items){
                       foreach ($items as $item) {
                          ?>
                            <div class="card mt1 mb0 pa2 move_me"><?php echo $item; ?></div>
                          <?php
                       }
                       }
                    } 
                  }
                  }
                ?>
              </div>
              <hr class="mb1" />
                <div class="d-flex items-center pointer mb1">
                  <div class="main_div" style="display: none;">
                    <input type="text" name="my_val" class="my_val"data-type="others" data-page-id="<?php echo $page_id; ?>" style="margin: 5px;">
                    <span class="add_course_top_bar_in_db" data-page-id="<?php echo $page_id; ?>">Save</span>
                    <span class="add_course_top_bar_in_cancel" data-page-id="<?php echo $page_id; ?>">Cancel</span>
                  </div>
                  <i class="material-icons">add</i>
                  <span class="add_course_top_bar" data-page-id="<?php echo $page_id; ?>">Add course</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card">
                <div class="text-center">
                <p class="text-black b mb0">Spring semester</p>
                <span>0 Credit Hours</span>
              </div>
              <hr class="mt1" />
              <div class="mh3" data-main="yes" data-div="div_2">
                  <?php
                  if($main_div){
                  foreach ($main_div as $value) {
                    if($value->main_div=="yes"){
                       $items = unserialize($value->div_2);
                       if($items){
                       foreach ($items as $item) {
                          ?>
                            <div class="card mt1 mb0 pa2 move_me"><?php echo $item; ?></div>
                          <?php
                       }
                       }
                    } 
                  }
                  }
                ?>
              </div>
              <hr class="mb1" />
                <div class="d-flex items-center pointer mb1">
                  <div class="main_div" style="display: none;">
                    <input type="text" name="my_val" class="my_val"data-type="others" data-page-id="<?php echo $page_id; ?>" style="margin: 5px;">
                    <span class="add_course_top_bar_in_db" data-page-id="<?php echo $page_id; ?>">Save</span>
                    <span class="add_course_top_bar_in_cancel" data-page-id="<?php echo $page_id; ?>">Cancel</span>
                  </div>
                  <i class="material-icons">add</i>
                  <span class="add_course_top_bar" data-page-id="<?php echo $page_id; ?>">Add course</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card">
                <div class="text-center">
                <p class="text-black b mb0">Summer semester</p>
                <span>0 Credit Hours</span>
              </div>
              <hr class="mt1" />
              <div class="mh3" data-main="yes" data-div="div_3">
                  <?php
                  if($main_div){
                  foreach ($main_div as $value) {
                    if($value->main_div=="yes"){
                       $items = unserialize($value->div_3);
                       if($items){
                       foreach ($items as $item) {
                          ?>
                            <div class="card mt1 mb0 pa2 move_me"><?php echo $item; ?></div>
                          <?php
                       }
                       }
                    } 
                  }
                  }
                ?>
              </div>
              <hr class="mb1" />
                <div class="d-flex items-center pointer mb1">
                  <div class="main_div" style="display: none;">
                    <input type="text" name="my_val" class="my_val"data-type="others" data-page-id="<?php echo $page_id; ?>" style="margin: 5px;">
                    <span class="add_course_top_bar_in_db" data-page-id="<?php echo $page_id; ?>">Save</span>
                    <span class="add_course_top_bar_in_cancel" data-page-id="<?php echo $page_id; ?>">Cancel</span>
                  </div>
                  <i class="material-icons">add</i>
                  <span class="add_course_top_bar" data-page-id="<?php echo $page_id; ?>">Add course</span>
                </div>
              </div>
            </div>
           
          </div>
          </div>
          </div>

          <?php include ('dynamic_div.php'); ?>

          <div class="row clone_div" style="display: none;">
            <div class="col-lg-1 d-flex items-center justify-content-center card vertical-text">
              <span class="remove_me" style="cursor: pointer;">YEAR x</span>
            </div>
            <div class="col-lg-11">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card">
                <div class="text-center">
                <p class="text-black b mb0">Full semester</p>
                <span>0 Credit Hours</span>
              </div>
              <hr class="mt1" />
              <div class="mh3" data-main="no" data-div="div_1">
                
              </div>
              <hr class="mb1" />
                <div class="d-flex items-center pointer mb1">
                  <div class="main_div" style="display: none;">
                    <input type="text" name="my_val" class="my_val"data-type="others" data-page-id="<?php echo $page_id; ?>" style="margin: 5px;">
                    <span class="add_course_top_bar_in_db" data-page-id="<?php echo $page_id; ?>">Save</span>
                    <span class="add_course_top_bar_in_cancel" data-page-id="<?php echo $page_id; ?>">Cancel</span>
                  </div>
                  <i class="material-icons">add</i>
                  <span class="add_course_top_bar" data-page-id="<?php echo $page_id; ?>">Add course</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card">
                <div class="text-center">
                <p class="text-black b mb0">Spring semester</p>
                <span>0 Credit Hours</span>
              </div>
              <hr class="mt1" />
              <div class="mh3" data-main="no" data-div="div_2">
                
              </div>
              <hr class="mb1" />
                <div class="d-flex items-center pointer mb1">
                  <div class="main_div" style="display: none;">
                    <input type="text" name="my_val" class="my_val"data-type="others" data-page-id="<?php echo $page_id; ?>" style="margin: 5px;">
                    <span class="add_course_top_bar_in_db" data-page-id="<?php echo $page_id; ?>">Save</span>
                    <span class="add_course_top_bar_in_cancel" data-page-id="<?php echo $page_id; ?>">Cancel</span>
                  </div>
                  <i class="material-icons">add</i>
                  <span class="add_course_top_bar" data-page-id="<?php echo $page_id; ?>">Add course</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card">
                <div class="text-center">
                <p class="text-black b mb0">Summer semester</p>
                <span>0 Credit Hours</span>
              </div>
              <hr class="mt1" />
              <div class="mh3" data-main="no"  data-div="div_3">
               
              </div>
              <hr class="mb1" />
                <div class="d-flex items-center pointer mb1">
                  <div class="main_div" style="display: none;">
                    <input type="text" name="my_val" class="my_val"data-type="others" data-page-id="<?php echo $page_id; ?>" style="margin: 5px;">
                    <span class="add_course_top_bar_in_db" data-page-id="<?php echo $page_id; ?>">Save</span>
                    <span class="add_course_top_bar_in_cancel" data-page-id="<?php echo $page_id; ?>">Cancel</span>
                  </div>
                  <i class="material-icons">add</i>
                  <span class="add_course_top_bar" data-page-id="<?php echo $page_id; ?>">Add course</span>
                </div>
              </div>
            </div>
           
          </div>
          </div>
          </div>
          
          
        </div>
        <button class="btn btn-default add_year">Add Year</button>
      </div>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="<?php echo base_url(); ?>assets/david/assets/js/core/jquery.min.js"></script>
  
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/david/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/david/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/david/assets/js/core/bootstrap-material-design.min.js"></script>
  
  <!-- Plugin for the momentJs  -->
  <script src="<?php echo base_url(); ?>assets/david/assets/js/plugins/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/david/assets/js/plugins/jquery.validate.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/david/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <script src="<?php echo base_url(); ?>assets/david/assets/js/plugins/material-dashboard.min.js" type="text/javascript"></script>

  <script src="<?php echo base_url(); ?>assets/david/assets/js/custom.js" type="text/javascript"></script>
  
  <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/draggable/1.0.0-beta.12/draggable.min.js" integrity="sha512-VTqyB/kLQGaTnF5kYAgeEFo8fwqdlAGNUQeoQi4EOmmBYTEQ/XrYC7lnzCvBBp1PR+1ODEQiT075oeUdPeFHwA==" crossorigin="anonymous"></script>  


  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  
  
 
 
  
</body>

</html>