<?php if(get_frontend_settings('recaptcha_status')): ?>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php endif; ?>

<?php
  $banners = themeConfiguration(get_frontend_settings('theme'), 'banners');
  $signup_banner = $banners['sign_up_banner'];
 ?>
 <style>
     .btn_1:hover {
  background-color: white!important;
  color:black!important;
}
 </style>
 
<aside>
	<figure style="background: linear-gradient(to right,#FFD900,#E93400);">
		<a href="<?php echo site_url('home'); ?>"><img src="<?php echo base_url().'uploads/system/'.get_frontend_settings('light_logo'); ?>" height="42" data-retina="true" alt=""></a>
	</figure>
    <?php
    	if($this->uri->segment(3)){
    	    $course=$this->uri->segment(3);
              $courseId=$this->uri->segment(4);
              	?>
              <form action="<?php echo site_url('login/register2/'.$course.'/'.$courseId); ?>" method="post" autocomplete="off">
        <?php	}else{ 	?>
                        <form action="<?php echo site_url('login/register'); ?>" method="post" autocomplete="off">
      <?php  } ?>
		<div class="form-group">

			<span class="input">
				<input class="input_field" type="text" name="first_name" required>
				<label class="input_label">
					<span class="input__label-content"><?php echo site_phrase('first_name'); ?></span>
				</label>
			</span>

			<span class="input">
				<input class="input_field" type="text" name="last_name" required>
				<label class="input_label">
					<span class="input__label-content"><?php echo site_phrase('last_name'); ?></span>
				</label>
			</span>
			<!--edit by gunjan-->
			<span class="input">
				<input class="input_field" pattern="^\d{10}$" type="phone" name="mobile" required>
				<label class="input_label">
					<span class="input__label-content" ><?php echo site_phrase('Mobile no.'); ?></span>
				</label>
			</span>

			<span class="input">
				<input class="input_field" type="email" name="email" required>
				<label class="input_label">
					<span class="input__label-content"><?php echo site_phrase('email'); ?></span>
				</label>
			</span>

			<span class="input">
				<input class="input_field" type="password" id="password1" name="password" required>
				<label class="input_label">
					<span class="input__label-content"><?php echo site_phrase('password'); ?></span>
				</label>
			</span>

			<!--<div id="pass-info" class="clearfix"></div>-->
		</div>

		<?php if(get_frontend_settings('recaptcha_status')): ?>
	      <div class="form-group">
	        <span class="input">
	          <div class="g-recaptcha" data-sitekey="<?php echo get_frontend_settings('recaptcha_sitekey'); ?>"></div>
	        </span>
	      </div>
	    <?php endif; ?>

    
		<button type="submit" style="background:black;" class="btn_1 rounded full-width add_top_30"><?php echo site_phrase('register'); ?></button>
		<div class="text-center add_top_10"><?php echo site_phrase('already_have_an_account'); ?>? <strong><a href="<?php echo site_url('home/login'); ?>"><?php echo site_phrase('sign_in'); ?></a></strong></div>
		<div class="text-center add_top_10"> <strong><a href="<?php echo site_url('home'); ?>"><?php echo site_phrase('back_to_home'); ?></a></strong> </div>
	</form>
	<div class="copy">© <?php echo get_settings('system_name'); ?></div>
</aside>

<style media="screen">
#login_bg {
  background: url(<?php echo base_url($signup_banner); ?>) center center no-repeat fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  min-height: 100vh;
  width: 100%;
}
</style>
