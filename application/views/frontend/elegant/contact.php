

<?php
$banners = themeConfiguration(get_frontend_settings('theme'), 'banners');
$about_us_banner = $banners['about_us_banner'];
?>
<!--<section id="hero_in" class="general">-->
<!--	<div class="banner-img" style="background: url(<?php //echo base_url($about_us_banner); ?>) center center no-repeat;"></div>-->
<!--	<div class="wrapper">-->
<!--		<div class="container">-->
<!--			<h1 class="fadeInUp"><span></span><?php// echo site_phrase('contact').' '.get_settings('system_name'); ?></h1>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->
<!--/hero_in-->

<div id="contact" class="container-fluid margin_120" >
	<?php //echo get_frontend_settings('about_us'); ?>
        <hr>
<!--<div class="container ">-->
    <div class="row" >
        <span><em></em></span>

        <div class="col-md-4"></div>
        <div class="col-md-4" style="text-align: center;"><br>
        	<div class="main_title_2">
		<span><em></em></span>
		<h2><?php echo site_phrase('Contact_us'); ?></h2>
		<p><?php echo site_phrase('Let_us_know_if_you_need_our_assistance'); ?></p>
	</div>
            <!--<h1 >Contact us </h1><br>-->
            <!--<p>Let us know if you need our assistance</p>-->
            <br>
            <div class="row">                
                <div class="col-md-6"> <a href="tel:91363 91363" class="btn_1  rounded full-width add_top_6" style="background: black; padding:15px; font-size:15px; ">  <i class="fa fa-phone-square"></i>&nbsp; Call Us</a></div>
        
                <div class="col-md-6"><a  href="https://api.whatsapp.com/send?phone=+91 91363 91363 &amp;text=Hey,I'd like to chat with you!!" style="background: black;padding:15px;font-size:15px;" class=" btn_1 rounded  full-width add_top_6" target="_blank"> <i class="fa fa-whatsapp"></i>&nbsp; WhatsApp</a></div>    
                
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
<!--</div>-->
</div>
