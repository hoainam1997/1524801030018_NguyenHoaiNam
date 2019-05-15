<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php 
	include 'connect.php';
	include 'function.php';
	 ?>
	<title>MaxShop : Đồ án tốt nghiệp</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?= base_url()  ?>public/frontend/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()  ?>public/frontend/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<style>
body { background-color: #fff; color: #000; padding: 0; margin: 0; }
.container { width: 900px; margin: auto; padding-top: 1em; }
.container .ism-slider { margin-left: auto; margin-right: auto; }
</style>

<link rel="stylesheet" href="ism/css/my-slider.css"/>
<script src="ism/js/ism-2.2.min.js"></script>


	
	<script  src="<?= base_url()  ?>public/frontend/js/jquery-3.2.1.min.js"></script>
	<script  src="<?= base_url()  ?>public/frontend/js/bootstrap.min.js"></script>
<script  src="<?= base_url()  ?>/css/wow.js"></script>
	<!---->
	<link rel="stylesheet" type="text/css" href="<?= base_url()  ?>public/frontend/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url()  ?>public/frontend/css/slick-theme.css"/>
	<!--slide-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()  ?>public/frontend/css/style.css">
<script>var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null // optional scroll container selector, otherwise use window
  }
);
wow.init();</script>
	
</head>