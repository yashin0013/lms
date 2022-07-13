<footer class="d-print-none">
  <div class="container margin_120_95">
    <div class="row">
      <div class="col-lg-5 col-md-12 p-r-5">
        <p><img src="<?php echo base_url().'uploads/system/'.get_frontend_settings('light_logo'); ?>" height="42" data-retina="true" alt=""></p>
        <p><?php echo get_settings('slogan').'<br/>'.get_settings('address'); ?></p>
        
        
<!-- Add font awesome icons -->
<a href="#" class="fa fa-facebook social-media-icons"></a>
<a href="#" class="fa fa-twitter social-media-icons"></a>
<a href="#" class="fa fa-instagram social-media-icons" style="    background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
    color: white;"></a>
<a href="#" class="fa fa-linkedin social-media-icons"></a>


        <!-- <div class="follow_us">
          <ul>
            <li>Follow us</li>
            <li><a href="#0"><i class="ti-facebook"></i></a></li>
            <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
            <li><a href="#0"><i class="ti-google"></i></a></li>
            <li><a href="#0"><i class="ti-pinterest"></i></a></li>
            <li><a href="#0"><i class="ti-instagram"></i></a></li>
          </ul>
        </div> -->
      </div>
      <div class="col-lg-3 col-md-6 ml-lg-auto">
      <h5><?php echo site_phrase('contact_us'); ?></h5>
        <ul class="contacts">
          <li><a href="tel://<?php echo get_settings('phone'); ?>"><i class="ti-mobile"></i> <?php echo get_settings('phone'); ?></a></li>
          <li><a href="mailto:<?php echo get_settings('system_email'); ?>"><i class="ti-email"></i> <?php echo get_settings('system_email'); ?></a></li>
          <!--<li><a href=""><img src="<?php echo base_url().'uploads/system/gp.png' ?>" height="42" data-retina="true" alt=""></a></li>-->
        </ul>
      
        <!--<h5><?php echo site_phrase('useful_links'); ?></h5>-->
        <!--<ul class="links">-->
        <!--  <li><a href="<?php echo site_url('home/courses'); ?>"><?php echo site_phrase('courses'); ?></a></li>-->
        <!--  <li><a href="<?php echo site_url('home/login'); ?>"><?php echo site_phrase('login'); ?></a></li>-->
        <!--  <li><a href="<?php echo site_url('home/sign_up'); ?>"><?php echo site_phrase('register'); ?></a></li>-->
        <!--</ul>-->
      </div>
      <div class="col-lg-3 col-md-6">
        <!--<h5><?php echo site_phrase('contact_us'); ?></h5>-->
        <!--<ul class="contacts">-->
        <!--  <li><a href="tel://<?php echo get_settings('phone'); ?>"><i class="ti-mobile"></i> <?php echo get_settings('phone'); ?></a></li>-->
        <!--  <li><a href="mailto:<?php echo get_settings('system_email'); ?>"><i class="ti-email"></i> <?php echo get_settings('system_email'); ?></a></li>-->
          <!--<li><a href=""><img src="<?php echo base_url().'uploads/system/gp.png' ?>" height="42" data-retina="true" alt=""></a></li>-->
        <!--</ul>-->
        <!-- <div id="newsletter">
          <h6>Newsletter</h6>
          <div id="message-newsletter"></div>
          <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
            <div class="form-group">
              <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
              <input type="submit" value="Submit" id="submit-newsletter">
            </div>
          </form>
        </div> -->
      </div>
    </div>
    <!--/row-->
    <hr>
    <div class="row">
      <div class="col-md-6 mt-2">
        <ul id="additional_links">
          <li><a href="<?php echo site_url('home/terms_and_condition'); ?>"><?php echo site_phrase('terms_&_conditions'); ?></a></li>
          <li><a href="<?php echo site_url('home/privacy_policy'); ?>"><?php echo site_phrase('privacy_policy'); ?></a></li>
          <li><a href="<?php echo site_url('home/about_us'); ?>"><?php echo site_phrase('about_us'); ?></a></li>
        </ul>
      </div>
      <div class="col-md-3 text-left mt-2">
        <div id="copy text-left">© 
        <!--<a href="<?php echo get_settings('footer_link'); ?>" style="color: unset;">-->
            <?php echo get_settings('system_name').' | '.site_phrase('2021').' . '.get_settings(''); ?>
        <!--</a>-->
        </div>
      </div>
      <div class="col-md-3 mt-2">
       
      </div>
    </div>
  </div>
</footer>





<script type="text/javascript">
    function switch_language(language) {
        $.ajax({
            url: '<?php echo site_url('home/site_language'); ?>',
            type: 'post',
            data: {language : language},
            success: function(response) {
                setTimeout(function(){ location.reload(); }, 500);
            }
        });
    }
</script>