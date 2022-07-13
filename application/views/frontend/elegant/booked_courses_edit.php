                <?php
                $my_courses = $this->user_model->my_courses()->result_array();
                $banners = themeConfiguration(get_frontend_settings('theme'), 'banners');
                $my_courses_banner = $banners['my_courses_banner'];
                ?>
                
<style>
    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
        .timeD{
            margin-left:200px;
        }
    }
</style>
                
                <section id="hero_in" class="courses">
                	<div class="banner-img" style="background: url(<?php echo base_url($my_courses_banner); ?>) center center no-repeat;"></div>
                	<div class="wrapper">
                		<div class="container">
                			<h1 class="fadeInUp"><span></span><?php echo site_phrase('my_booked_courses'); ?></h1>
                		</div>
                	</div>
                </section>
                <!--/hero_in-->
                
                <div class="container margin_60_35">
                    <!--<h2 class="text-center" >My Booked Courses</h2>-->
                    
                	<div class="row justify-content-center">
                	    <div class="col-md-4" >
                        <div class="card" style="width: 18rem;">
                              <div class="card-body">
                                   <?php 
                                        $demoId=$this->uri->segment(3);
                                        $demo= $this->db->get_where('demo_class', array('id'=>  $demoId))->result_array();
                                        
                                        foreach ($demo as $list) {
                                            $id = $list['course_id'];
                                            // echo var_dump($id);
                                            $course = $this->db->get_where('course', array('id'=> $id ))->result_array();

                                        //  $demo = $this->db->get('demo_class')->result_array();
                                        //  $user_id= $this->session->userdata('user_id');
                                         
                                        foreach ($course as $key) {
                                ?>
                                <h5 class="card-title"><?php echo $key['title']; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Time:- 
                                <?php 
                                    // $demo = $this->db->get_where('demo_class', array('course_id'=>  $user_id))->result_array();
                                    echo $list['time'];
                                ?>
                                </h6>
                                <h6 class="card-subtitle mb-2 text-muted">Date:- 
                                <?php 
                                    // $demo = $this->db->get_where('demo_class', array('course_id'=>  $user_id))->result_array();
                                    echo $list['date'];
                                ?>
                                </h6>
                                <h6 class="card-subtitle mb-2 text-muted">Status:- 
                                <?php 
                                    // $demo = $this->db->get_where('demo_class', array('course_id'=>  $user_id))->result_array();
                                    echo $list['status'];
                                ?>
                                </h6>
                              </div>
                            </div>
                    </div>
                <div class="col-md-4 timeD mt-4">
                  <form action="<?php echo site_url('home/update_booked_courses/'.$demoId ); ?>" method="post" >
                  <div class="form-group">
                    <label for="time">Time</label>
                    <input type="time" class="form-control" id="time" name="time" value="<?php echo $list['time'];?>">
                  </div>
                  <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" name="date" value="<?php echo $list['date'];?>" id="date">
                  </div>
                  <div class="form-group">
                    <label for="date">Native Language</label>
                    <input type="text" class="form-control" name="language" value="<?php echo $list['language'];?>" id="date">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                   <a href="" type="submit" class="btn btn-secondary">Cancel</a>
                </form>
     
            <?php 
            
                                        }
                   }
             ?>
        </div>
        </div>
        <!-- /row -->
        </div>
        <!-- /container -->
        <!-- /bg_color_1 -->
