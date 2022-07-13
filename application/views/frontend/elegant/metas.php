<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="<?php echo get_settings('author') ?>" />

<?php
$seo_pages = array('course_page');
if (in_array($page_name, $seo_pages)):
	$course_details = $this->crud_model->get_course_by_id($course_id)->row_array();?>
	<meta name="keywords" content="<?php echo $course_details['meta_keywords']; ?>"/>
	<meta name="description" content="<?php echo $course_details['meta_description']; ?>" />
<?php else: ?>
	<meta name="keywords" content="<?php echo get_settings('website_keywords'); ?>"/>
	<meta name="description" content="<?php echo get_settings('website_description'); ?>" />
<?php endif; ?>

<!--Whatsapp-->
<meta property="og:title" content="<?php echo get_settings('system_name'); ?>" />
<meta property="og:url" content="<?php echo site_url(); ?>" />
<meta property="og:description" content="<?php echo get_settings('website_description'); ?>">
<meta property="og:image" content="<?= base_url("uploads/system/".get_frontend_settings('banner_image')); ?>">
<meta property="og:type" content="website" />
<!--Whatsapp-->