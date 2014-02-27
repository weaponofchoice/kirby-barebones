<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
	<meta charset="utf-8">
	<meta name = "viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
	<title>Modiste Furniture</title>

	<meta name="description" content="<?php echo html($site->title()) ?>">

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!-- Facebook Open Graph -->
	<meta name="og:title" content="<?php echo html($site->title()) ?>">
	<meta name="og:description" content="<?php echo html($site->title()) ?>">
	
	<meta name="og:image" content="<?= url('assets/img/ogimage.jpg') ?>">
	<meta name="og:url" content="<?php echo html($site->url()) ?>">
	<meta name="og:site_name" content="<?php echo html($site->title()) ?>">
	
	<link rel="shortcut icon" href="<?= url('assets/img/favicon.ico') ?>">
	
	<?php echo css('assets/css/app.css') ?>
	
	
	<!-- build:js js/vendor/modernizr.js -->
	<?php echo js('assets/bower_components/modernizr/modernizr.js') ?>
	<?php echo js('assets/bower_components/isMobile/isMobile.min.js') ?>
	<!-- endbuild -->
	<?php require_once  'assets/mobileDetect.php' ?>

  <?php echo css('assets/css/app.css') ?>

</head>

<body>

  <header>
    <h1><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></h1>
  </header>