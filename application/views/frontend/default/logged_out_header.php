<style>
    .menu-icon-box .icon a {
    height: 45px;
    /* width: 45px; */
    text-align: center;
    line-height: 45px;
    /* display: inline-block; */
    border-radius: 50%;
    color: #686f7a;
    border: 1px solid transparent;
    margin: 10px 0;
    font-size: 18px;
}

.dropdown-item {
    display: inline!important;
}
</style>

<script>
function fun() {
alert("Under construction ");
}
</script>

<section class="menu-area">
  <div class="container-xl">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

          <ul class="mobile-header-buttons">
            <li><a class="mobile-nav-trigger" href="#mobile-primary-nav">Menu<span></span></a></li>

            <li><a class="mobile-search-trigger" href="#mobile-search">Search<span></span></a></li>
          </ul>

          <a href="<?php echo site_url(''); ?>" class="navbar-brand" href="#"><img src="<?php echo base_url('uploads/system/'.get_frontend_settings('dark_logo')); ?>" alt="" height="35"></a>

          <?php include 'menu.php'; ?>


<div class="instructor-box menu-icon-box">
              <div class="icon">
                <a href="<?php echo site_url('Home/Instructor'); ?>" style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0;">Instructor</a>
              </div>
            </div>
            
            
            <div class="instructor-box menu-icon-box">
              <div class="icon">
                <a  style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0;" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">IUI</a>
                
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="https://internationalfertilityacademy.com/home/courses?category=iui-courses">IUI All Courses</a>
    <a class="dropdown-item" href="<?php echo site_url('Home/otp1'); ?>" onclick = "">IUI Online Training Program</a>
    <a class="dropdown-item" href="<?php echo site_url('Home/hot1'); ?>" onclick = "">IUI Hands-on Training</a>
  </div>
                
              </div>
            </div>
            
<div class="instructor-box menu-icon-box">
              <div class="icon">
                <a  style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0;" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">IVF</a>
                
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="https://internationalfertilityacademy.com/home/courses?category=ivf-courses">IVF All Courses</a>
    <a class="dropdown-item" href="<?php echo site_url('Home/otp2'); ?>" onclick = "">IVF Online Training Program</a>
    <a class="dropdown-item" href="<?php echo site_url('Home/hot2'); ?>" onclick = "">IVF Hands-on Training</a>
  </div>
                
              </div>
            </div>

            



          <form class="inline-form" action="<?php echo site_url('home/search'); ?>" method="get" style="width: 100%;">
            <div class="input-group search-box mobile-search">
                
                
<!--<div class="dropdown">-->
<!--  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--    IUI-->
<!--  </a>-->

<!--  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">-->
<!--    <a class="dropdown-item" href="#">Action</a>-->
<!--    <a class="dropdown-item" href="#">Another action</a>-->
<!--    <a class="dropdown-item" href="#">Something else here</a>-->
<!--  </div>-->
<!--</div>  -->


                             
                             
                             <!--<a href="<?php echo site_url('Home/iui'); ?>" class="btn btn-instructors mr-2">IUI</a><br/>-->
                             
                             <!--<a href="<?php echo site_url('Home/ivf'); ?>" class="btn btn-instructors mr-2" style="color: #686f7a;background-color: #fff;border: 1px solid #505763;">IVF</a><br/>-->
                             
                             
                             
                             
                             <!--<a href="" class="btn btn-instructors mr-2" onclick = "fun()">FAQ</a><br/>-->
                             
                             <!--<a href="<?php echo site_url('Home/about_us'); ?>" class="btn btn-instructors" style="color: #686f7a;background-color: #fff;border: 1px solid #505763;">ABOUT</a>-->
                             
              <!--<input type="text" name = 'query' class="form-control" placeholder="<?php echo site_phrase('search_for_courses'); ?>">-->
              <!--<div class="input-group-append">-->
              <!--  <button class="btn" type="submit"><i class="fas fa-search"></i></button>-->
              <!--</div>-->
            </div>
            
            
          </form>





<div class="instructor-box menu-icon-box">
              <div class="icon">
                <a href="<?php echo site_url('Home/faq'); ?>"  style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0;">FAQ</a>
              </div>
            </div>
            
            <div class="instructor-box menu-icon-box">
              <div class="icon">
                <a href="<?php echo site_url('Home/about_us'); ?>" style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0;">ABOUT</a>
              </div>
            </div>



          <?php if ($this->session->userdata('admin_login')): ?>
            <div class="instructor-box menu-icon-box">
              <div class="icon">
                <a href="<?php echo site_url('admin'); ?>" style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0;"><?php echo site_phrase('administrator'); ?></a>
              </div>
            </div>
          <?php endif; ?>

          <div class="cart-box menu-icon-box" id = "cart_items">
            <?php include 'cart_items.php'; ?>
          </div>

          <span class="signin-box-move-desktop-helper"></span>
          <div class="sign-in-box btn-group">

            <a href="<?php echo site_url('home/login'); ?>" class="btn btn-sign-in"><?php echo site_phrase('log_in'); ?></a>

            <a href="<?php echo site_url('home/sign_up'); ?>" class="btn btn-sign-up"><?php echo site_phrase('sign_up'); ?></a>

          </div> <!--  sign-in-box end -->
        </nav>
      </div>
    </div>
  </div>
</section>
