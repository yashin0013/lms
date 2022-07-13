<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'metas.php'; ?>
	<title><?php echo get_settings('system_title'); ?> | <?php echo $page_title; ?></title>
	<?php include 'includes_top.php'; ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	    .float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 20px;
    right: 20px;
    background-color: #1fa01f;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    box-shadow: 2px 2px 3px #999;
    z-index: 9999;
}
.my-float {
    margin-top: 18px;
}


 .floats {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 100px;
    right: 20px;
    background-color: #32709b;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    box-shadow: 2px 2px 3px #999;
    z-index: 9999;
}
.my-floats {
    margin-top: 18px;
}






.social-media-icons{
 padding: 9px 10px;
    font-size: 23px;
    width: 40px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
}

.social-media-icons:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

	</style>
</head>

<body <?php if ($page_name == 'login' || $page_name == 'login2' || $page_name == 'sign_up' || $page_name == 'sign_up2' || $page_name == 'forgot_password'): ?> id="login_bg" <?php endif; ?>>
	<?php if ($page_name != 'login' && $page_name != 'login2' && $page_name != 'sign_up' && $page_name != 'sign_up2' && $page_name != 'forgot_password'): ?>
		<div id="page">
			<!-- Header -->
			<?php include 'header.php'; ?>
			<!-- Main content starts from here -->
			<main>
				<?php include $page_name.'.php'; ?>
			</main>
			<!-- footer -->
			<?php include 'footer.php'; ?>
		</div>
		<!-- end of page -->
	<?php elseif ($page_name == 'login' || $page_name == 'login2' || $page_name == 'sign_up' || $page_name == 'sign_up2' || $page_name == 'forgot_password'):?>
		<nav id="menu" class="fake_menu"></nav>
		<!--<div id="preloader1">-->
		<!--	<div data-loader="circle-side"></div>-->
		<!--</div>-->
		<div id="login">
			<?php include $page_name.'.php'; ?>
		</div>
	<?php endif; ?>
	<!-- COMMON SCRIPTS -->
	<?php include 'includes_bottom.php'; ?>
	<?php include 'common_scripts.php'; ?>
	<?php include 'modal.php'; ?>
	<?php include 'demoModal.php'; ?>
	
	<!--<a href="https://api.whatsapp.com/send?phone=9136391363&amp;text=Text here about your  Enquiry%20Demo%20 and Support" class="float">-->
 <!--   <i class="fab fa-whatsapp my-float" style="font-size: 1.5rem;" aria-hidden="true"></i>-->
 <!--   </a>-->
    
 <!--   <a href="tel:9136391363" class="floats">-->
 <!--   <i class="fa fa-phone my-floats" style="font-size: 1.5rem;" aria-hidden="true"></i>-->
 <!--   </a>-->
    
    


</body>
</html>
