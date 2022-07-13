<!-- Categories start -->
<div id="category" class="container pt-5 mt-5  margin_40_95" >
	<div class="main_title_2">
		<!--<span><em></em></span>-->
		<h2>All Categories</h2>
		<p><?php echo site_phrase('get_category_wise_different_courses'); ?></p>
	</div>
	<div class="row justify-content-center">
		<?php foreach ($this->crud_model->get_categories1()->result_array() as $category):
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
<!--<div class="container">-->
<!--  <p  style="text-align: center;"><a href="<?php echo site_url('home/courses'); ?>" style="background:black;" class="btn_1 rounded"><?php echo site_phrase('view_all_categories'); ?></a></p>-->
<!--</div>-->
<!-- Categories end -->