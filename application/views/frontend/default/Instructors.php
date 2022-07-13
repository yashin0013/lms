<?php
$instructor_details = $this->user_model->get_instructor()->result_array();
$social_links  = json_decode($instructor_details['social_links'], true);
$course_ids = $this->crud_model->get_instructor_wise_courses($instructor_id, 'simple_array');
?>
<section class="instructor-header-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <!--<h1 class="instructor-name text-center">Instructors</h1>-->
                <!--<h2 class="instructor-title"><?php echo $instructor_details['title']; ?></h2>-->
                <img src="https://internationalfertilityacademy.com/uploads/system/ifa-ins.png" class="img-thumbnail" alt="instructor">
            </div>
        </div>
    </div>
</section>

<!--<?php echo site_url('home/course/' . rawurlencode(slugify($course_details['title'])) . '/' . $course_details['id']); ?>-->

<section class="instructor-details-area">
    <div class="container">
        <div class="row">
            
             <?php
                            foreach ($instructor_details as $key => $user) : ?>
            
            <div class="col-lg-3">
                <div class="instructor-left-box text-center">
                    <div class="instructor-image">
                       <a href="<?php echo site_url('home/view_instructor/'. $user['id']) ?>"> <img src="<?php echo $this->user_model->get_user_image_url($user['id']); ?>" alt="" class="img-fluid"> </a>
                    </div>
                    <div class="instructor-social">
                        <h3 style="font-size: 18px;"><?php echo $user['first_name'] . ' ' . $user['last_name']; ?></h3>
                        <!--<h5 style="font-size: 10px;"><?php //echo $user['email']; ?></h5>-->
                        <!--<ul>-->
                        <!--    <li><a href="<?php echo $social_links['twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>-->
                        <!--    <li><a href="<?php echo $social_links['facebook']; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>-->
                        <!--    <li><a href="<?php echo $social_links['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>-->
                        <!--</ul>-->
                    </div>
                </div>
            </div>
            
             <?php endforeach; ?>
            
            <!--<div class="col-lg-3">-->
            <!--    <div class="instructor-left-box text-center">-->
            <!--        <div class="instructor-image">-->
            <!--            <img src="<?php echo $this->user_model->get_user_image_url($instructor_details['id']);?>" alt="" class="img-fluid">-->
            <!--        </div>-->
            <!--        <div class="instructor-social">-->
            <!--            <ul>-->
            <!--                <li><a href="<?php echo $social_links['twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>-->
            <!--                <li><a href="<?php echo $social_links['facebook']; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>-->
            <!--                <li><a href="<?php echo $social_links['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>-->
            <!--            </ul>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            
          
        </div>
    </div>
</section>
<!------------------------------------------------------------------------------------------------->

 