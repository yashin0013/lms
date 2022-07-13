<style>

     @media screen and (max-width: 1023px) {
        .btn_1{
            font-size: 10px;
        }
        .log{
            padding:20px;
            margin-top:10px;
            margin-right:30px;
        }
        .hamburger{
            margin-top:25px;
        }
       #top_menu{
          margin-right:20px!important;
       }
       ul#top_menu li a.shopping_cart, ul#top_menu li a.search-overlay-menu-btn , ul#top_menu li a.btn_1{
         margin-top:0!important;
    }
    
    #logo {
    float: none;
    position: absolute;
    top: 30px!important;
    left: -300px!important;
    width: 100%;
    } 
    }
    @media screen and (max-width: 767px){
    #logo {
    float: none;
    position: absolute;
    top: 3px!important;
    left: -127px!important;
    width: 100%;
    }
    .hamburger{
            margin-top:10px;
        }
    }
    @media(min-width:576px){
        
    .main-menu ul .mobile-menu-bar span a{
        display:none;
    }
    }
    
    @media(max-width:576px){
    ul#top_menu li a.shopping_cart, ul#top_menu li a.search-overlay-menu-btn , ul#top_menu li a.btn_1{
        display:none;
    }
   
    }
    
    .hamburger{
    right: 20px!important;
    position: absolute!important;
}


    
    .btn_1:hover {
  background-color: white!important;
  color:black!important;
}

</style>


<header class="header menu_2 d-print-none" style="background: hsla(51, 100%, 50%, 1);

background: linear-gradient(0deg, hsla(51, 100%, 50%, 1) 0%, hsla(9, 91%, 55%, 1) 100%);

background: -moz-linear-gradient(0deg, hsla(51, 100%, 50%, 1) 0%, hsla(9, 91%, 55%, 1) 100%);

background: -webkit-linear-gradient(0deg, hsla(51, 100%, 50%, 1) 0%, hsla(9, 91%, 55%, 1) 100%);">
  <!--<div id="preloader"><div data-loader="circle-side"></div></div>-->
  <!-- /Preload -->
  <div id="logo">
    <a href="<?php echo site_url('home'); ?>"><img src="<?php echo base_url().'uploads/system/'.get_frontend_settings('light_logo'); ?>" height="50px" data-retina="true" alt=""></a>
  </div>
  
  <ul id="top_menu">
    <li><a href="<?php echo site_url('home/shopping_cart'); ?>" class="shopping_cart"><?php echo site_phrase('shopping_cart'); ?></a></li>
    <li><a href="#0" class="search-overlay-menu-btn"><?php echo site_phrase('search'); ?></a></li>
    <?php if ($this->session->userdata('user_login') == 1 || $this->session->userdata('admin_login') == 1): ?>
      <li class=""><a href="<?php echo site_url('login/logout'); ?>" style="background:black;" class="btn_1 log rounded"><?php echo site_phrase('log_out'); ?></a></li>
    <?php else: ?>
      <li class=""><a href="<?php echo site_url('home/login'); ?>" style="background:black;" class="btn_1 log rounded"><?php echo site_phrase('Login/Sign_up'); ?></a></li>
    <?php endif; ?>
  </ul>
  
  
  
  <!-- /top_menu -->
  <a href="#menu" class="btn_mobile">
    <div class="hamburger hamburger--spin" id="hamburger">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </div>
  </a>
  <nav id="menu" class="main-menu">
    <ul>
      <li><span><a href="<?php echo site_url('home'); ?>"><?php echo site_phrase('home'); ?></a></span></li>
      
      
      <li><span><a href="https://dexito.in/home/about_us"><?php echo site_phrase('About Us'); ?></a></span></li>
       <li>
        <!--<span><a id="top_courses" href="javascript::"><?php echo site_phrase('courses'); ?></a></span>-->
        <span><a href="https://dexito.in/#category"><?php echo site_phrase('Category'); ?></a></span>
        <ul>
          <?php
            $parent_categories = $this->crud_model->get_categories()->result_array();
            foreach ($parent_categories as $key => $parent_category): ?>
            <li><a href="<?php echo site_url('home/courses2?category='.$parent_category['slug']); ?>"><?php echo $parent_category['name']; ?></a></li>
          <?php endforeach; ?>
          <li class="highlighter-menu"><a href="<?php echo site_url('home/all_categories'); ?>"><?php echo site_phrase('all_categories'); ?></a></li>
          <?php if(addon_status('course_bundle')): ?>
            <li class="highlighter-menu"><a href="<?php echo site_url('course_bundles'); ?>"><?php echo site_phrase('course_bundles'); ?></a></li>
          <?php endif; ?>
        </ul>
      </li>
       <li>
           <span><a href="https://dexito.in/home/#contact"><?php echo site_phrase('contact'); ?></a></span>
                <ul>
                    <li ><a href="tel:91363 91363">Call Now</a></li>
                    <li ><a href="https://api.whatsapp.com/send?phone=+91 91363 91363 &amp;text=Hey,I'd like to chat with you!!" target="_blank">WhatsApp</a></li>
                </ul>
       </li>
    
        <li>
            <span><a href="https://dexito.in/home/#downloads"><?php echo site_phrase('download'); ?></a></span>
                <ul>
                    <li ><a href="https://www.apple.com/in/app-store/">Get on App Store</a></li>
                    <li ><a href="https://play.google.com/">Get on PlayStore</a></li>
                </ul>
       </li>
        
      <!--<li>-->
      <!--  <span><a id="top_courses" href="javascript::"><?php echo site_phrase('courses'); ?></a></span>-->
      <!--  <span><a ><?php echo site_phrase('contact us'); ?></a></span>-->
        
   
      <!--  <ul>-->
      <!--    <li><span><a href="https://dexito.in/home/contact"><?php echo site_phrase('About Us'); ?></a></span></li>-->
      <!--    <li><a href="tel:9136391363">Call Us</a></li>-->
      <!--  </ul>-->
      <!--  </li>-->
        
        <!--<span><a href="#top_courses"><?php echo site_phrase('download123'); ?></a></span>-->
        
        
        <!--<ul>-->
        <!--  <li><a href="">Playstore</a></li>-->
        <!--  <li><a href="">Appstore</a></li>-->
        <!--</ul>-->
        
        <li class="mobile-menu-bar"><span><a href="https://dexito.in/home/shopping_cart">Cart</a></span></li>
        
        
        <li class="mobile-menu-bar"><span>
            <a href="<?php echo site_url('home/mob_search'); ?>" class="search-overlay-menu-btn"><?php echo site_phrase('search'); ?></a>
            <!--<a href="#0">Search</a>-->
        <!--    <div class="mobile-menu-bar" id="#0">-->
        <!--  <span class="search-overlay-close">Search</span>-->
        <!--  <form action="<?php echo site_url('home/search'); ?>" role="search" id="searchform" method="get">-->
        <!--    <input value="" name="query" type="search" placeholder="<?php echo site_phrase('search'); ?>..." />-->
        <!--    <button type="submit"><i class="icon_search"></i>-->
        <!--    </button>-->
        <!--  </form>-->
        <!--</div>-->
                    </span></li>
        
         <?php if ($this->session->userdata('user_login') == 1 ): ?>
        <li class="mobile-menu-bar" ><span><a href="<?php echo site_url('login/logout'); ?>"><?php echo site_phrase('logout'); ?></a></span></li>
        <?php else: ?>
        <li class="mobile-menu-bar"><span><a href="<?php echo site_url('home/login'); ?>"><?php echo site_phrase('login'); ?></a></span></li> 
        <?php endif; ?>
       
        <!--<li class="mobile-menu-bar"><span><a href="https://dexito.in/home/login">Login</a></span></li>-->
        <!--<li class="mobile-menu-bar"><span><a href="">Download Dexito</a></span></li>-->
      </li>
      
      <?php if ($this->session->userdata('admin_login') == 1): ?>
        <li><span><a href="<?php echo site_url('admin'); ?>"><?php echo site_phrase('administrator'); ?></a></span></li>
          <?php elseif ($this->session->userdata('user_login') == 1 && get_settings('allow_instructor') == 1): ?>
        <li><span><a href="<?php echo site_url('user'); ?>"><?php echo site_phrase('instructor'); ?></a></span></li>
        <?php endif; ?>
      
     
    <!-- Show an onrdinary students options -->
    <?php if ($this->session->userdata('user_login') == 1): ?>
      <li>
        <span><a href="javascript::"><?php echo site_phrase('manage_account'); ?></a></span>
        <ul>
          <li><a href="<?php echo site_url('home/my_courses'); ?>"><?php echo site_phrase('my_courses'); ?></a></li>
          <li><a href="<?php echo site_url('home/my_booked_courses'); ?>"><?php echo site_phrase('my_booked_courses'); ?></a></li>
          <?php if(addon_status('course_bundle')): ?>
            <li><a href="<?php echo site_url('home/my_bundles'); ?>"><?php echo site_phrase('my_bundles'); ?></a></li>
          <?php endif; ?>
          <li><a href="<?php echo site_url('home/my_wishlist'); ?>"><?php echo site_phrase('my_wishlist'); ?></a></li>
          <li><a href="<?php echo site_url('home/my_messages'); ?>"><?php echo site_phrase('my_messages'); ?></a></li>
          <li><a href="<?php echo site_url('home/purchase_history'); ?>"><?php echo site_phrase('purchase_history'); ?></a></li>
          <li><a href="<?php echo site_url('home/profile/user_profile'); ?>"><?php echo site_phrase('user_profile'); ?></a></li>
        </ul>
      </li>
    <?php endif; ?>
  </ul>
</nav>


<!-- Search Menu web -->
<div class="search-overlay-menu" id="#0">
  <span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
  <form action="<?php echo site_url('home/search'); ?>" role="search" id="searchform" method="get">
    <input value="" name="query" type="search" placeholder="<?php echo site_phrase('search'); ?>..." />
    <button type="submit"><i class="icon_search"></i>
    </button>
  </form>
</div>
<!-- End Search Menu web -->


</header>
<div style="    margin: 50px;"></div>

