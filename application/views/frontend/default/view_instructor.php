<?php
$instructor_details = $this->user_model->get_instructor($instructor_id)->row_array();
$social_links  = json_decode($instructor_details['social_links'], true);
$course_ids = $this->crud_model->get_instructor_wise_courses($instructor_id, 'simple_array');
//$course_details = $this->get_course_by_id('5')->row_array();
?>
<section class="instructor-header-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="instructor-name"><?php echo $instructor_details['first_name'].' '.$instructor_details['last_name']; ?></h1>
                <h2 class="instructor-title"><?php echo $instructor_details['title']; ?></h2>
            </div>
        </div>
    </div>
</section>

<section class="instructor-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="instructor-left-box text-center">
                    <div class="instructor-image">
                        <img src="<?php echo $this->user_model->get_user_image_url($instructor_details['id']);?>" alt="" class="img-fluid">
                    </div>
                    <!--<div class="instructor-social">-->
                    <!--    <ul>-->
                    <!--        <li><a href="<?php echo $social_links['twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>-->
                    <!--        <li><a href="<?php echo $social_links['facebook']; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>-->
                    <!--        <li><a href="<?php echo $social_links['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>-->
                    <!--    </ul>-->
                    <!--</div>-->
                </div>
                <h3></h3>
            </div>
            <div class="col-lg-9">
                <div class="instructor-right-box">

                    <div class="biography-content-box view-more-parent">
                        <!--<div class="view-more" onclick="viewMore(this,'hide')"><b><?php echo site_phrase('show_full_biography'); ?></b></div>-->
                        <div class="biography-content">
                            <?php echo $instructor_details['biography']; ?>
                        </div>
                        </div>

                    <div class="instructor-stat-box">
                        <h3>Courses</h3>
                          <ol>
                              <?php 
                                                foreach ($course_ids as $cids) :
                                               $course_details = $this->crud_model->get_course_by_id($cids)->row_array();
                                                //$category_details = $this->crud_model->get_category_details_by_id($cids)->row_array();
                                                   // foreach ($category_details as $enc) :
                                                // if($cids == $enc['id']){
                                                ?>
                                                <li><?php echo $course_details['title']; ?></li>
                                            
                                            <?php //}$course_list = $this->crud_model->get_courses()->result_array();
                                                //foreach ($course_list as $course):
                                                // endforeach;
                                           endforeach; 
                                            ?>
                                           
                                        </ol>
                                       
                                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
