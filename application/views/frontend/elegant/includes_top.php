<!-- Favicons-->
<link name="favicon" type="image/x-icon" href="<?php echo base_url().'uploads/system/'.get_frontend_settings('favicon'); ?>" rel="shortcut icon" />
<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

<!-- GOOGLE WEB FONT -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

<!-- font awesome 5 -->
<link rel="stylesheet" href="<?php echo base_url().'assets/frontend/elegant/css/fontawesome-all.min.css'; ?>">

<!-- BASE CSS -->
<link href="<?php echo base_url('assets/frontend/elegant/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/frontend/elegant/css/style.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/frontend/elegant/css/vendors.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/frontend/elegant/css/icon_fonts/css/all_icons.min.css'); ?>" rel="stylesheet">

<!-- SPECIFIC CSS For Course Page-->
<link href="<?php echo base_url('assets/frontend/elegant/css/skins/square/grey.css'); ?>" rel="stylesheet">

<!-- TOASTR -->
<link rel="stylesheet" href="<?php echo base_url().'assets/global/toastr/toastr.css' ?>">
<!-- YOUR CUSTOM CSS -->
<link href="<?php echo base_url('assets/frontend/elegant/css/custom.css'); ?>" rel="stylesheet">

<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "f526db37-b14d-4de1-876c-5c3d12a402c3",
      safari_web_id: "web.onesignal.auto.33cdb166-8fda-4ab6-bcd3-b18b9bc1d285",
      notifyButton: {
        enable: true,
      },
    });
  });
</script>