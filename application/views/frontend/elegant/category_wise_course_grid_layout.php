<div class="col-lg-9">
  <div class="row">
    <?php
    $cart_items = $this->session->userdata('cart_items');
    foreach($courses as $course):
      $instructor_details = $this->user_model->get_all_user($course['user_id'])->row_array();?>
      <!-- A single course Starts -->
      <div class="col-md-6">
        <div class="box_grid wow">
          <figure class="block-reveal">
            <div class="block-horizzontal" style="background: linear-gradient(0deg, hsla(51, 100%, 50%, 1) 0%, hsla(9, 91%, 55%, 1) 100%);" ></div>
            <a href="javascript::" class="wishlist-btn wishlist-btn-<?php echo $course['id']; ?> <?php if($this->crud_model->is_added_to_wishlist($course['id'])):?> active <?php endif; ?> tooltip" onclick="handleWishList(this)" id = "<?php echo $course['id']; ?>">
              <i class="fas fa-heart"></i>
              <?php if($this->crud_model->is_added_to_wishlist($course['id'])):?>
                <span class="tooltiptext" id = "tooltiptext-<?php echo $course['id']; ?>"><?php echo site_phrase('remove_from_wishlist'); ?></span>
              <?php else: ?>
                <span class="tooltiptext" id = "tooltiptext-<?php echo $course['id']; ?>"><?php echo site_phrase('add_to_wishlist'); ?></span>
              <?php endif; ?>
          </a>
          <a href="<?php echo site_url('home/course/'.slugify($course['title']).'/'.$course['id']); ?>"><img src="<?php echo $this->crud_model->get_course_thumbnail_url($course['id']); ?>" class="img-fluid" alt=""></a>
          <?php if ($course['is_free_course'] == 1): ?>
            <div class="price"><?php echo site_phrase('free'); ?></div>
          <?php else: ?>
            <?php if ($course['discount_flag'] == 1): ?>
              <div class="price"><?php echo currency($course['discounted_price']); ?></div>
            <?php else: ?>
              <div class="price"><?php echo currency($course['price']); ?></div>
            <?php endif; ?>
          <?php endif; ?>
          <div class="preview"><span><?php echo site_phrase('preview_course'); ?></span></div>
        </figure>
        <div class="wrapper">
          <small>
            <?php
            $category_details = $this->crud_model->get_category_details_by_id($course['category_id'])->row_array();
            $sub_category_details = $this->crud_model->get_category_details_by_id($course['sub_category_id'])->row_array();
            echo $category_details['name'].' : '.$sub_category_details['name'];
            ?>
          </small>
          <h3><a href="<?php echo site_url('home/course/'.slugify($course['title']).'/'.$course['id']); ?>"><?php echo $course['title']; ?></a></h3>
          <p><?php echo ellipsis($course['short_description'], 100); ?></p>
          <div class="rating">
            <?php
            $total_rating =  $this->crud_model->get_ratings('course', $course['id'], true)->row()->rating;
            $number_of_ratings = $this->crud_model->get_ratings('course', $course['id'])->num_rows();
            if ($number_of_ratings > 0) {
              $average_ceil_rating = ceil($total_rating / $number_of_ratings);
            }else {
              $average_ceil_rating = 0;
            }

            for($i = 1; $i < 6; $i++):?>
            <?php if ($i <= $average_ceil_rating): ?>
              <i class="icon_star voted"></i>
            <?php else: ?>
              <i class="icon_star"></i>
            <?php endif; ?>
          <?php endfor; ?>
          <small>(<?php echo $number_of_ratings; ?>)</small>
        </div>
      </div>
      <ul>
        <li><i class="icon-play-circled2"></i><?php echo $this->crud_model->get_lessons('course', $course['id'])->num_rows().' '.site_phrase('lessons'); ?></li>
        <li>
          <i class="icon_clock_alt"></i>
          <?php
          $total_duration = 0;
          $lessons = $this->crud_model->get_lessons('course', $course['id'])->result_array();
          foreach ($lessons as $lesson) {
            if ($lesson['lesson_type'] != "other") {
              $time_array = explode(':', $lesson['duration']);
              $hour_to_seconds = $time_array[0] * 60 * 60;
              $minute_to_seconds = $time_array[1] * 60;
              $seconds = $time_array[2];
              $total_duration += $hour_to_seconds + $minute_to_seconds + $seconds;
            }
          }
          echo gmdate("H:i:s", $total_duration);
          ?>
        </li>
        <li>
          <?php if (is_purchased($course['id'])): ?>
            <a href="<?php echo site_url('home/my_courses'); ?>"><i class="icon-check-1"></i> <?php echo site_phrase('Enroled'); ?></a>
          <?php else: ?>
            <?php if ($course['is_free_course'] == 1):
              if($this->session->userdata('user_login') != 1) {
                $url = "javascript::";
              }else {
                  
             
                $url = site_url('home/course/'.slugify($course['title']).'/'.$course['id']);
              }?>
              
              
              
              
              
              
              
              
              
              
              
              
              <!--<a href="<?php echo $url; ?>" class="" onclick="handleEnrolledButton()"><?php echo site_phrase('Enrol'); ?></a>-->
            <?php else: ?>
              <a href="javascript::" class="big-cart-button-<?php echo $course['id'];?> <?php if(in_array($course['id'], $cart_items)) echo 'addedToCart'; ?>" id = "<?php echo $course['id']; ?>" onclick="handleCartItems(this)">
                <?php
                if(in_array($course['id'], $cart_items))
                echo site_phrase('added_to_cart');
                else
                echo site_phrase('add_to_cart');
                ?>
              </a>
            <?php endif; ?>
          <?php endif; ?>
        </li>
        
<li>
            <?php if (is_purchased($course['id'])): ?>
              <a href="<?php echo site_url('home/my_courses'); ?>" style="background:black;" ><i class="icon-check-1"></i> <?php echo site_phrase('Booked'); ?></a>
            <?php else: ?>
              <?php if ($course['is_free_course'] == 1):
                   if ($course['level'] == 'premium'){
					?>
					<?php 
					$user_id= $this->session->userdata('user_id');
				// 	$Id=$this->uri->segment(4);
                     $demo = $this->db->get_where('demo_class', array('user_id'=>  $user_id,'course_id'=>$course['id']))->result_array();
                    //  echo var_dump($demo);
                    //  foreach ($demo as $key) {
                    //      $course_Id=$key['course_id'];
                    //      echo var_dump($courseId);
                    //         }
                        //  echo var_dump($Id);
                    if($demo){  ?>
                             <a style="background: black; border-color:black; color:white;" class="btn_1"><?php echo site_phrase('Booked'); ?></a>
                       	<?php    }else{  ?>
                       	    
                       	    <a href="<?php echo site_url('home/form/'.slugify($course['title']).'/'.$course['id']);; ?>" style="background: black; border-color:black; color:white;" class="btn_1"><?php echo site_phrase('Book_Trial'); ?></a>
                          <?php 	} ?>
                                  
					
				<?php }else{ 
                            if($this->session->userdata('user_login') != 1) {
                              $url = "javascript::";
                            }else {
                              $url = site_url('home/get_enrolled_to_free_course/'.$course['id']);
                            }?>
                            
                            
                <a href="<?php echo $url; ?>" style="background:black; color:white; border-color:black;" class="btn_1" onclick="handleEnrolledButton()"><?php echo site_phrase('Enrol'); ?></a>
              <?php } else: ?>
                <a href="javascript::" style="background:black; color:white; border-color:black;" class="btn_1 px-1 big-cart-button-<?php echo $course['id'];?> <?php if(in_array($course['id'], $cart_items)) echo 'addedToCart'; ?>" id = "<?php echo $course['id']; ?>" onclick="handleCartItems(this)">
                  <?php
                  if(in_array($course['id'], $cart_items))
                  echo site_phrase('added_to_cart');
                  else
                  echo site_phrase('add_to_cart');
                  ?>
                </a>
              <?php endif; ?>
            <?php endif; ?>
          </li>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
      </ul>
    </div>
  </div>
  <!-- A single course ends -->
<?php endforeach; ?>
</div>
<!-- /row -->
<div class="row justify-content-center">
  <nav aria-label="...">
    <?php if ($selected_category_id == "all" && $selected_price == 0 && $selected_level == 'all' && $selected_language == 'all' && $selected_rating == 'all'){
      echo $this->pagination->create_links();
    }?>
  </nav>
</div>
</div>
