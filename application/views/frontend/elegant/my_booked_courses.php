<?php
$my_courses = $this->user_model->my_courses()->result_array();
$banners = themeConfiguration(get_frontend_settings('theme'), 'banners');
$my_courses_banner = $banners['my_courses_banner'];
?>
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
<div class="table-responsive-sm mt-4">
    <table id="course-datatable" class="table table-striped dt-responsive nowrap" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>#</th>
                <th><?php echo get_phrase('Course_name'); ?></th>
                <th><?php echo get_phrase('Assigend_teacher'); ?></th>
                <th><?php echo get_phrase('Status'); ?></th>
                <th><?php echo get_phrase('Time'); ?></th>
                <th><?php echo get_phrase('Date'); ?></th>
                 <th><?php echo get_phrase('Join'); ?></th>
                <th><?php echo get_phrase('actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
            // $webinarId=$this->uri->segment(3);
             $user_id= $this->session->userdata('user_id');
             $demo = $this->db->get_where('demo_class', array('user_id'=>  $user_id))->result_array();
            //  foreach ($web as $list) {
            //  $user_id= $list['user_id'];
            //  $demo = $this->db->get('demo_class')->result_array();
            $i=1;
            foreach ($demo as $key) :
                                ?>
            <tr>
                <!--<td><?php echo ++$key; ?></td>-->
                
                <?php echo form_open(site_url('home/delete_webinar') , array('target'=>'_top'));?>
                <input type="hidden" name="webinarId" value="<?php echo $key['id']; ?>" />
                 <td>
                    <span ><?php echo $i++ ?></span>
                </td>
                <!--<td>-->
                <!--    <strong><a-->
                <!--            href="<?php echo site_url('admin/guest_list/' . $key['id']); ?>"><?php echo ellipsis($key['event_name']); ?></a></strong><br>-->
                    
                <!--</td>-->
                <td>
                    <?php
                    $name = $this->db->get_where('course', array('id'=>  $key['course_id']))->result_array();
                    foreach($name as $n) :
                    ?>
                    <span class=""><?php echo $n['title']; ?></span>
                     <?php endforeach; ?>
                </td>
                 <td>
                    <span class=""><?php 
                            $t_name =$this->db->get_where('users', array('id' => $key['assigened_teacher']))->result_array();
                            foreach ($t_name as $li) {
                            echo $li['first_name'];
                            } ?></span>
                </td>
                 <td>
                    <span class=""><?php echo $key['status']; ?></span>
                </td>
                 <td>
                    <span class=""><?php echo $key['time']; ?></span>
                </td>
                <td>
                    <span class=""><?php echo $key['date']; ?></span>
                </td>
                 <td>
                      <?php
                          $today = date("Y-m-d");
                        $expire = $key['date']; //from database
                        $today_time = strtotime($today);
                        $expire_time = strtotime($expire);
                        // echo var_dump($expire_time);
                        if ($expire_time < $today_time) { ?>
                            <span class="badge badge-dark-lighten"><a href="#" class="btn btn-danger" >Class End</a></span>
                          <?php   }elseif($expire_time == $today_time){ 
                                            //   $currentTime = time() + 19800;
                                            //      $webTime = $key['time'];
                                            //      $t= $webTime - $currentTime;
                                                //   echo $t;
                                            //  if()
                          ?>
                    <span class="badge badge-dark-lighten"><a href="<?php echo site_url('home/web/' . $key['zoom_id']); ?>" class="btn btn-success" >Join Now</a></span> 
                           <?php   
                          }else{  ?>
                            <span class="badge badge-dark-lighten"><a href="#" class="btn btn-warning" >Activate on <?php echo $expire ?></a></span> 
                        <?php }
                        ?>
                    <!--<span class=""><a href="#" class="btn btn-success" >Join</a></span> -->
                </td>
                 <td>
                    <span class=""><a href="<?php echo site_url('home/booked_courses_edit/' . $key['id']); ?>" class="btn btn-primary" >Edit</a></span> 
                    <span class=""><a href="<?php echo site_url('home/booked_courses_delete/' . $key['id']); ?>" class="btn btn-danger" >Delete</a></span>
                    
                    <!--<span class=""><a href="<?php // echo site_url('addons/liveclass/join/' . $key['id']); ?>" class="btn btn-primary" >Join Class</a></span>-->
                    
                    <!--https://dexito.in/addons/liveclass/join/135-->
                </td>
                
               </form>
              
              
            </tr>
            <?php endforeach; 
             ?>
        </tbody>
    </table>
</div>
</div>
<!-- /row -->
</div>
<!-- /container -->
<!-- /bg_color_1 -->
