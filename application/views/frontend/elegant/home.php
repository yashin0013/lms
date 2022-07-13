<!-- Slider starts -->
<?php include 'slider.php'; ?>
<!-- Slider ends -->

<!-- The black banner content starts -->
<div class="features clearfix">
	<div class="container">
		<ul>
			<li><i class="pe-7s-study"></i>
				<h4>
					<?php
					 //$counter = 1;
		
					$status_wise_courses = $this->crud_model->get_status_wise_courses();
					//foreach($status_wise_courses as $number_of_courses){
					$number_of_courses = $status_wise_courses['active']->num_rows();
					  $number_of_courses = $this->db->count_all('course');
			         echo $number_of_courses++ .' ' . site_phrase('online_courses');
				    ?>
			
				</h4><span><?php echo site_phrase('explore_your_knowledge'); ?></span>
			</li>
			<li><i class="pe-7s-cup"></i>
				<h4><?php echo site_phrase('expert_instruction'); ?></h4>
				<span><?php echo site_phrase('find_the_right_course_for_you'); ?></span>
			</li>
			<li><i class="pe-7s-target"></i>
				<h4><?php echo site_phrase('lifetime_access'); ?></h4>
				<span><?php echo site_phrase('learn_on_your_schedule'); ?></span>
			</li>
		</ul>
	</div>
</div>
<!-- The black banner content ends -->

<!-- Top Course Portion Starts -->
<?php include 'top_courses.php' ?>
<!-- Top Course Portion Ends -->

<!-- Categories start -->
<div id="category" class="container pt-5 mt-5  margin_40_95" >
	<div class="main_title_2">
		<span><em></em></span>
		<h2><?php echo site_phrase('categories'); ?></h2>
		<p><?php echo site_phrase('get_category_wise_different_courses'); ?></p>
	</div>
	<div class="row justify-content-center">
		<?php foreach ($this->crud_model->get_categories()->result_array() as $category):
			if($category['parent'] > 0)
			continue; ?>
			<!-- /grid_item -->
			<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
				<a href="<?php echo site_url('home/courses2?category='.$category['slug']); ?>" class="grid_item">
					<figure class="block-reveal"style="border-radius: 20px;">
						<div class="block-horizzontal" style="background: linear-gradient(0deg, hsla(51, 100%, 50%, 1) 0%, hsla(9, 91%, 55%, 1) 100%);"></div>
						<img src="<?php echo base_url('uploads/thumbnails/category_thumbnails/'.$category['thumbnail']); ?>" class="img-fluid" style="border-radius: 20px;" alt="">
						<div class="info"style="border-radius: 20px;">
							<small><i class="ti-layers"></i>
								<?php echo $this->crud_model->get_category_wise_courses($category['id'])->num_rows().' '.site_phrase('courses'); ?>
							</small>
							<h3><?php echo $category['name']; ?></h3>
						</div>
					</figure>
				</a>
			</div>
			<!-- /grid_item -->
		<?php endforeach; ?>
	</div>
</div>
<div class="container">
  <p  style="text-align: center;"><a href="<?php echo site_url('home/all_categories'); ?>" style="background:black;" class="btn_1 rounded"><?php echo site_phrase('view_all_categories'); ?></a></p>
</div>
<!-- Categories end -->


<!-- Contact Portion Starts -->
<?php include 'contact.php' ?>
<!-- Contact Portion Ends -->
<hr>
<!-- Download Portion Starts -->
<?php include 'downloads.php' ?>
<!-- Download Portion Ends -->



