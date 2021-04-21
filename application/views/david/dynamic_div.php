<?php
  foreach ($other_div as $value) {
?>
<div class="row active" data-div-id="<?php echo $value->div_id; ?>">
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
                <?php
                  if($value){
                   $items = unserialize($value->div_1);
                   if($items){
                   foreach ($items as $item) {
                      ?>
                        <div class="card mt1 mb0 pa2 move_me"><?php echo $item; ?></div>
                      <?php
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
              <div class="mh3" data-main="no" data-div="div_2">
                <?php
                  if($value){
                   $items = unserialize($value->div_2);
                   if($items){
                   foreach ($items as $item) {
                      ?>
                        <div class="card mt1 mb0 pa2 move_me"><?php echo $item; ?></div>
                      <?php
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
              <div class="mh3" data-main="no"  data-div="div_3">
                <?php
                  if($value){
                   $items = unserialize($value->div_3);
                   if($items){
                   foreach ($items as $item) {
                      ?>
                        <div class="card mt1 mb0 pa2 move_me"><?php echo $item; ?></div>
                      <?php
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


<?php        
  }
?>