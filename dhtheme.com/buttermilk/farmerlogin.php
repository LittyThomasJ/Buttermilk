<?php
include("index.php/features/joomla-virtuemart/connection.php");
  include("check_session.php");
  
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
    
<!-- Mirrored from dhtheme.com/buttermilk/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Sep 2019 13:50:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                                <!-- head -->
                <base  />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="generator" content="Joomla! - Open Source Content Management" />
	<title>Home</title>
	<link href="templates/buttermilk/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<link href="components/com_sppagebuilder/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="components/com_sppagebuilder/assets/css/animate.min.css" rel="stylesheet" type="text/css" />
	<link href="components/com_sppagebuilder/assets/css/sppagebuilder.css" rel="stylesheet" type="text/css" />
	<link href="components/com_sppagebuilder/assets/css/sppagecontainer.css" rel="stylesheet" type="text/css" />
	<link href="components/com_sppagebuilder/assets/css/magnific-popup.css" rel="stylesheet" type="text/css" />
	<link href="components/com_virtuemart/assets/css/jquery.fancybox-1.3.4a567.css?vmver=4632b4a7" rel="stylesheet" type="text/css" />
	<link href="templates/buttermilk/css/vm-ltr-commona567.css?vmver=4632b4a7" rel="stylesheet" type="text/css" />
	<link href="templates/buttermilk/css/vm-ltr-sitea567.css?vmver=4632b4a7" rel="stylesheet" type="text/css" />
	<link href="templates/buttermilk/css/vm-ltr-reviewsa567.css?vmver=4632b4a7" rel="stylesheet" type="text/css" />
	<link href="components/com_virtuemart/assets/css/chosena567.css?vmver=4632b4a7" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Catamaran:100,200,300,regular,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet" type="text/css" />
	<link href="templates/buttermilk/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="templates/buttermilk/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="templates/buttermilk/css/legacy.css" rel="stylesheet" type="text/css" />
	<link href="templates/buttermilk/css/template.css" rel="stylesheet" type="text/css" />
	<link href="templates/buttermilk/css/presets/preset1.css" rel="stylesheet" type="text/css" class="preset" />
	<link href="plugins/system/helix3/assets/css/pagebuilder.css" rel="stylesheet" type="text/css" />
	<link href="templates/buttermilk/css/frontend-edit.css" rel="stylesheet" type="text/css" />
	<link href="media/com_uniterevolution2/assets/rs-plugin/css/settings.css" rel="stylesheet" type="text/css" />
	<link href="index2b2e.css?option=com_uniterevolution2&amp;action=getcaptions" rel="stylesheet" type="text/css" />
	<link href="media/com_uniterevolution2/assets/rs-plugin/css/static-captions.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
.sp-page-builder .page-content #section-id-1504857442348{padding:70px 0px 70px 0px;margin:0px 0px 0px 0px;}#sppb-addon-1505460476222 h3.sppb-addon-title {margin:0px 0px 45px 0px; padding:0px 0px 0px 0px; }#sppb-addon-1505460476204 .sppb-addon-title {margin-top:20px;margin-bottom:20px;color:rgba(32, 139, 243, 1);font-size:22px;line-height:22px;}#sppb-addon-1505460476204 .sppb-img-container {display:block;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1505460476204 .sppb-media .sppb-media-body {width:auto;}}@media (max-width:767px) {#sppb-addon-1505460476204 .sppb-media .sppb-media-body {width:auto;}}#sppb-addon-1505460476211 .sppb-addon-title {margin-top:20px;margin-bottom:20px;color:rgba(32, 139, 243, 1);font-size:22px;line-height:22px;}#sppb-addon-1505460476211 .sppb-img-container {display:block;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1505460476211 .sppb-media .sppb-media-body {width:auto;}}@media (max-width:767px) {#sppb-addon-1505460476211 .sppb-media .sppb-media-body {width:auto;}}#sppb-addon-1505460476216 .sppb-addon-title {margin-top:20px;margin-bottom:20px;color:rgba(32, 139, 243, 1);font-size:22px;line-height:22px;}#sppb-addon-1505460476216 .sppb-img-container {display:block;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1505460476216 .sppb-media .sppb-media-body {width:auto;}}@media (max-width:767px) {#sppb-addon-1505460476216 .sppb-media .sppb-media-body {width:auto;}}.sp-page-builder .page-content #section-id-1505550578146{padding:70px 0px 70px 0px;margin:0px 0px 0px 0px;background-color:rgba(242, 242, 242, 1);}#sppb-addon-1505550578148 h3.sppb-addon-title {margin:0px 0px 45px 0px; padding:0px 0px 0px 0px; }#sppb-addon-1505550578168 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(32, 139, 243, 1);color:#ffffff;border-radius:50px;}#sppb-addon-1505550578175 {margin:20px 0px 0px 0px;}#sppb-addon-1505550578175 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(254, 198, 58, 1);color:#ffffff;border-radius:50px;}#sppb-addon-1505550578202 {margin:20px 0px 0px 0px;}#sppb-addon-1505550578202 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(32, 139, 243, 1);color:#ffffff;border-radius:50px;}#sppb-addon-1505550578182 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(32, 139, 243, 1);color:#ffffff;border-radius:50px;}#sppb-addon-1505550578185 {margin:20px 0px 0px 0px;}#sppb-addon-1505550578185 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(254, 198, 58, 1);color:#ffffff;border-radius:50px;}#sppb-addon-1505550578205 {margin:20px 0px 0px 0px;}#sppb-addon-1505550578205 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(32, 139, 243, 1);color:#ffffff;border-radius:50px;}.sp-page-builder .page-content #section-id-1505550578246{padding:70px 0px 70px 0px;margin:0px 0px 0px 0px;}#sppb-addon-1505550578253 h3.sppb-addon-title {margin:0px 0px 45px 0px; padding:0px 0px 0px 0px; }.sp-page-builder .page-content #section-id-1505467892044{padding:70px 0px 70px 0px;margin:0px 0px 0px 0px;background-color:rgba(254, 198, 58, 1);background-image:url(images/Demo/elements/farm.png);background-repeat:no-repeat;background-size:inherit;background-attachment:scroll;background-position:50% 0;}#sppb-addon-1505467892063 {color:rgba(255, 255, 255, 1);}#sppb-addon-1505467892063 .sppb-addon-title {font-size:24px;line-height:24px;}#sppb-addon-1505467892063 h4.sppb-addon-title {margin:0px 0px 35px 0px; padding:0px 0px 0px 0px; }#sppb-addon-1505467892080 {margin:20px 0px 0px 0px;}#sppb-addon-1505467892080 #btn-1505467892080.sppb-btn-custom{font-weight:bold;}#sppb-addon-1505467892080 #btn-1505467892080.sppb-btn-custom { background-color:rgba(32, 139, 243, 1); color:rgba(255, 255, 255, 1);}#sppb-addon-1505467892080 #btn-1505467892080.sppb-btn-custom:hover { background-color:rgba(255, 255, 255, 1); color:rgba(32, 139, 243, 1);}#sppb-addon-1505467892123 {color:rgba(255, 255, 255, 1);}#sppb-addon-1505467892123 .sppb-addon-title {font-size:24px;line-height:24px;}#sppb-addon-1505467892123 h4.sppb-addon-title {margin:0px 0px 35px 0px; padding:0px 0px 0px 0px; }#sppb-addon-1505467892097 {margin:20px 0px 0px 0px;}#sppb-addon-1505467892097 #btn-1505467892097.sppb-btn-custom{font-weight:bold;}#sppb-addon-1505467892097 #btn-1505467892097.sppb-btn-custom { background-color:rgba(255, 255, 255, 1); color:rgba(32, 139, 243, 1);}#sppb-addon-1505467892097 #btn-1505467892097.sppb-btn-custom:hover { background-color:rgba(32, 139, 243, 1); color:#ffffff;}
body{font-family:Catamaran, sans-serif; font-weight:normal; }
h1{font-family:Catamaran, sans-serif; font-weight:700; }
h2{font-family:Catamaran, sans-serif; font-weight:700; }
h3{font-family:Catamaran, sans-serif; font-weight:700; }
h4{font-family:Catamaran, sans-serif; font-weight:700; }
h5{font-family:Catamaran, sans-serif; font-weight:700; }
h6{font-family:Catamaran, sans-serif; font-weight:700; }
.sp-megamenu-parent{font-family:Catamaran, sans-serif; font-size:16px; font-weight:700; }
	</style>
	<script type="application/json" class="joomla-script-options new">{"csrf.token":"a89392f302fa4882263609b98e7cec3b","system.paths":{"root":"\/buttermilk","base":"\/buttermilk"}}</script>
	<script src="media/jui/js/jquery.min86d6.js?19a092cf799ed6c41792146343f78261" type="text/javascript"></script>
	<script src="media/jui/js/jquery-noconflict86d6.js?19a092cf799ed6c41792146343f78261" type="text/javascript"></script>
	<script src="media/jui/js/jquery-migrate.min86d6.js?19a092cf799ed6c41792146343f78261" type="text/javascript"></script>
	<script src="components/com_sppagebuilder/assets/js/jquery.parallax.js" type="text/javascript"></script>
	<script src="components/com_sppagebuilder/assets/js/sppagebuilder.js" type="text/javascript"></script>
	<script src="components/com_sppagebuilder/assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
	<script src="components/com_virtuemart/assets/js/jquery-ui.mine17e.js?vmver=1.9.2" type="text/javascript"></script>
	<script src="components/com_virtuemart/assets/js/jquery.ui.autocomplete.html.js" type="text/javascript"></script>
	<script src="components/com_virtuemart/assets/js/jquery.noconflict.js" type="text/javascript" async="async"></script>
	<script src="components/com_virtuemart/assets/js/vmsitea567.js?vmver=4632b4a7" type="text/javascript"></script>
	<script src="components/com_virtuemart/assets/js/fancybox/jquery.fancybox-1.3.4.packa909.js?vmver=1.3.4" type="text/javascript"></script>
	<script src="components/com_virtuemart/assets/js/vmpricesa567.js?vmver=4632b4a7" type="text/javascript" defer="defer"></script>
	<script src="components/com_virtuemart/assets/js/chosen.jquery.mina567.js?vmver=4632b4a7" type="text/javascript"></script>
	<script src="templates/buttermilk/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="templates/buttermilk/js/jquery.sticky.js" type="text/javascript"></script>
	<script src="templates/buttermilk/js/main.js" type="text/javascript"></script>
	<script src="templates/buttermilk/js/frontend-edit.js" type="text/javascript"></script>
	<script src="media/com_uniterevolution2/assets/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
	<script src="media/com_uniterevolution2/assets/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
	<script src="modules/mod_virtuemart_cart/assets/js/update_carta567.js?vmver=4632b4a7" type="text/javascript"></script>
	<script src="media/system/js/core86d6.js?19a092cf799ed6c41792146343f78261" type="text/javascript"></script>
	<script type="text/javascript">
;(function ($) {
	$.ajaxSetup({
		headers: {
			'X-CSRF-Token': Joomla.getOptions('csrf.token')
		}
	});
})(jQuery);
//<![CDATA[ 
if (typeof Virtuemart === "undefined"){
	var Virtuemart = {};}
var vmSiteurl = 'index.html' ;
Virtuemart.vmSiteurl = vmSiteurl;
var vmLang = '&lang=en';
Virtuemart.vmLang = vmLang; 
var vmLangTag = 'en';
Virtuemart.vmLangTag = vmLangTag;
var Itemid = '&Itemid=101';
Virtuemart.addtocart_popup = "1" ; 
var usefancy = true;
 //]]>

var sp_preloader = '1';

var sp_gotop = '1';

var sp_offanimation = 'fullscreen';

	</script>
	<meta property="og:title" content="Home" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://dhtheme.com/buttermilk/index.php" />
	<meta property="og:site_name" content="ButterMilk - Organic Dairy Farm VirtueMart Joomla Template" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="ButterMilk - Organic Dairy Farm VirtueMart Joomla Template" />

                                </head>
                <body class="site com-sppagebuilder view-page no-layout no-task itemid-101 en-gb ltr  sticky-header layout-fluid off-canvas-menu-init">

                    <div class="body-wrapper">
                        <div class="body-innerwrapper">
                            <div class="sp-pre-loader"><div class="sp-loader-with-logo"><div class="logo"><img src="templates/buttermilk/images/presets/preset1/logo.png" alt=""></div><div class="line" id="line-load"></div></div></div><section id="sp-toolbar" class=" hidden-xs"><div class="container"><div class="row"><div id="sp-toolbar1" class="col-sm-6 col-md-6"><div class="sp-column "><ul class="sp-contact-info"><li class="sp-contact-phone"><i class="fa fa-phone"></i> <a href="tel:07001237654">0700 123 7654</a></li><li class="sp-contact-email"><i class="fa fa-envelope"></i> <a href="mailto:contact@example.com">buttermilk@gmail.com</a></li><li class="sp-contact-time"><i class="fa fa-clock-o"></i>Mon - Fri 09:00 - 18:00</li></ul></div></div><div id="sp-toolbar2" class="col-sm-6 col-md-6"><div class="sp-column "><div class="sp-module "><div class="sp-module-content">
<!-- Virtuemart 2 Ajax Card -->
<div class="vmCartModule " id="vmCartModule">

	<div class="total">
			</div>
<a href="index.php/viewcart.php">
<!--<div class="total_products">Go to Cart </div>

<div class="show_cart">
	<i class="fa fa-shopping-basket"></i>&nbsp;</div>--></a>

<div class="payments-signin-button" ></div><noscript>
Please wait</noscript>
</div>

</div></div></div></div></div></div></section><header id="sp-header" class="container"><div class="container"><div class="row"><div id="sp-logo" class="col-xs-6 col-sm-3 col-md-4"><div class="sp-column "><div class="logo"><a href="index.html"><img class="sp-default-logo" src="templates/buttermilk/images/presets/preset1/logo.png" alt="ButterMilk - Organic Dairy Farm VirtueMart Joomla Template"><img class="sp-retina-logo" src="templates/buttermilk/images/presets/preset1/logo%402x.png" alt="ButterMilk - Organic Dairy Farm VirtueMart Joomla Template" width="308" height="60"></a></div></div></div><div id="sp-menu" class="col-xs-6 col-sm-9 col-md-8"><div class="sp-column ">			<div class='sp-megamenu-wrapper'>
				<a id="offcanvas-toggler" class="visible-sm visible-xs" href="#"><i class="fa fa-bars"></i></a>
				<ul class="sp-megamenu-parent menu-fade hidden-sm hidden-xs"><li class="sp-menu-item current-item active"><a  href="index-2u.php"  >Home</a></li>


<!--<li class="sp-menu-item"><a  href="index.php/profile.php"  >Profile</a></li>-->
<li class="sp-menu-item"><a  href="logout.php"  >Logout</a></li>
				</ul>			
				</div>
		</div></div></div></div></header><section id="sp-page-title"><div class="row"><div id="sp-title" class="col-sm-12 col-md-12"><div class="sp-column "></div></div></div></section><section id="sp-slider"><div class="row"><div id="sp-slider" class="col-sm-12 col-md-12"><div class="sp-column "><div class="sp-module "><div class="sp-module-content"><!-- START REVOLUTION SLIDER 5.0.14 fullwidth mode -->

<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;max-height:600px;">
	<div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:600px;height:600px;">
<ul>	<!-- SLIDE  1-->
	<li data-transition="slidedown" data-slotamount="7" data-masterspeed="700" data-thumb="http://dhtheme.com/buttermilk/images/Demo/elements/slide1.jpg"  data-saveperformance="off"  data-title="Slide">
		<!-- MAIN IMAGE -->
		<img src="images/Demo/elements/slide1.jpg"  alt="slide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption lfr"
			data-x="right" data-hoffset="600"
			data-y="bottom" data-voffset="280"
			data-speed="700"
			data-start="1300"
			data-easing="easeInOutExpo"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-end="8700"
 data-endspeed="300"

			style="z-index: 5;"><img src="images/Demo/elements/board.png" alt="">
		</div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption lfl"
			data-x="-200"
			data-y="-100" 
			data-speed="700"
			data-start="1600"
			data-easing="easeInOutExpo"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-end="8700"
 data-endspeed="300"

			style="z-index: 6;"><img src="images/Demo/elements/butter.png" alt="">
		</div>

		<!-- LAYER NR. 3 -->
		<div class="tp-caption lfb"
			data-x="-200"
			data-y="bottom" data-voffset="150"
			data-speed="700"
			data-start="1900"
			data-easing="easeInOutExpo"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-end="8700"
 data-endspeed="300"

			style="z-index: 7;"><img src="images/Demo/elements/spoon.png" alt="">
		</div>

		<!-- LAYER NR. 4 -->
		<div class="tp-caption lft"
			data-x="right" data-hoffset="210"
			data-y="bottom" data-voffset="120"
			data-speed="700"
			data-start="2200"
			data-easing="easeInOutExpo"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-end="8700"
 data-endspeed="300"

			style="z-index: 8;"><img src="images/Demo/elements/cheese.png" alt="">
		</div>

		<!-- LAYER NR. 5 -->
		<div class="tp-caption sfb"
			data-x="10"
			data-y="bottom" data-voffset="-60"
			data-speed="700"
			data-start="2500"
			data-easing="easeInOutExpo"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-end="8700"
 data-endspeed="300"

			style="z-index: 9;"><img src="images/Demo/elements/coffee.png" alt="">
		</div>

		<!-- LAYER NR. 6 -->
		<div class="tp-caption lfb"
			data-x="-100"
			data-y="bottom" data-voffset="150"
			data-speed="700"
			data-start="2800"
			data-easing="easeInOutExpo"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-end="8700"
 data-endspeed="300"

			style="z-index: 10;"><img src="images/Demo/elements/mint.png" alt="">
		</div>

		<!-- LAYER NR. 7 -->
		<div class="tp-caption sfb"
			data-x="center" data-hoffset="0"
			data-y="bottom" data-voffset="0"
			data-speed="700"
			data-start="3000"
			data-easing="easeInOutExpo"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-end="8700"
 data-endspeed="300"

			style="z-index: 11;"><img src="images/Demo/elements/toast.png" alt="">
		</div>

		<!-- LAYER NR. 8 -->
		<div class="tp-caption large_bold_white_butter sft tp-resizeme"
			data-x="center" data-hoffset="0"
			data-y="center" data-voffset="-100"
			data-speed="900"
			data-start="3500"
			data-easing="easeOutElastic"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-end="8700"
 data-endspeed="300"

			style="z-index: 12; max-width: none; max-height: none; white-space: nowrap;">Good food,
		</div>

		<!-- LAYER NR. 9 -->
		<div class="tp-caption large_bold_yellow_butter sfb tp-resizeme"
			data-x="center" data-hoffset="0"
			data-y="center" data-voffset="-20"
			data-speed="900"
			data-start="4100"
			data-easing="easeOutElastic"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-end="8700"
 data-endspeed="300"

			style="z-index: 13; max-width: none; max-height: none; white-space: nowrap;">good life!
		</div>

		<!-- LAYER NR. 10 -->
		<div class="tp-caption large_text lfb tp-resizeme"
			data-x="center" data-hoffset="0"
			data-y="center" data-voffset="70"
			data-speed="700"
			data-start="4700"
			data-easing="easeOutSine"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-end="8700"
 data-endspeed="300"

			style="z-index: 14; max-width: none; max-height: none; white-space: nowrap;"><a href="index.php/shop.html" class="button">Shop Now</a>
		</div>
	</li>
	<!-- SLIDE  2-->
	<li data-transition="fadefrombottom" data-slotamount="7" data-masterspeed="700" data-thumb="http://dhtheme.com/buttermilk/images/Demo/elements/slide2.jpg"  data-saveperformance="off"  data-title="Slide">
		<!-- MAIN IMAGE -->
		<img src="images/Demo/elements/slide2.jpg"  alt="slide2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption randomrotate"
			data-x="center" data-hoffset="0"
			data-y="center" data-voffset="0"
			data-speed="700"
			data-start="700"
			data-easing="Elastic.easeOut"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-end="8700"
 data-endspeed="300"

			style="z-index: 5;"><img src="images/Demo/elements/circle.png" alt="">
		</div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption large_bold_white_butter sfl tp-resizeme"
			data-x="center" data-hoffset="0"
			data-y="center" data-voffset="-50"
			data-speed="700"
			data-start="1400"
			data-easing="Power2.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-end="8700"
 data-endspeed="300"

			style="z-index: 6; max-width: none; max-height: none; white-space: nowrap;">
		</div>

		<!-- LAYER NR. 3 -->
		<div class="tp-caption medium_white_butter sfb tp-resizeme"
			data-x="center" data-hoffset="0"
			data-y="center" data-voffset="50"
			data-speed="700"
			data-start="2100"
			data-easing="Power2.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-end="8700"
 data-endspeed="300"

			style="z-index: 7; max-width: none; max-height: none; white-space: nowrap;">
		</div>
	</li>
	<!-- SLIDE  3-->
	<li data-transition="fadetobottomfadefromtop" data-slotamount="7" data-masterspeed="700" data-thumb=""  data-saveperformance="off"  data-title="Slide">
		<!-- MAIN IMAGE -->
		<img src="media/com_uniterevolution2/assets/images/transparent.png" style='background-color:#fafafa' alt="slide3"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption skewfromrightshort"
			data-x="right" data-hoffset="-10"
			data-y="center" data-voffset="0"
			data-speed="700"
			data-start="700"
			data-easing="Power4.easeInOut"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-endspeed="300"

			style="z-index: 5;"><img src="images/Demo/elements/banana-yogurt.png" alt="">
		</div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption medium_large_bold_gray_butter lfl tp-resizeme"
			data-x="10"
			data-y="center" data-voffset="-80"
			data-speed="700"
			data-start="1400"
			data-easing="easeOutCirc"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-endspeed="300"

			style="z-index: 6; max-width: none; max-height: none; white-space: nowrap;">You & Me are<br> meant to be
		</div>

		<!-- LAYER NR. 3 -->
		<div class="tp-caption medium_large_bold_blue_butter lfb tp-resizeme"
			data-x="10"
			data-y="center" data-voffset="20"
			data-speed="700"
			data-start="2100"
			data-easing="easeOutCirc"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-endspeed="300"

			style="z-index: 7; max-width: none; max-height: none; white-space: nowrap;">together!
		</div>

		<!-- LAYER NR. 4 -->
		<div class="tp-caption large_text skewfromleftshort tp-resizeme"
			data-x="10"
			data-y="center" data-voffset="100"
			data-speed="700"
			data-start="2800"
			data-easing="Power3.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			 data-endspeed="300"

			style="z-index: 8; max-width: none; max-height: none; white-space: nowrap;"><a href="#" target="_blank" class="button2"></a>
		</div>
	</li>
</ul>
<div class="tp-bannertimer tp-bottom"></div>	</div>
			
			<script type="text/javascript">

					
				/******************************************
					-	PREPARE PLACEHOLDER FOR SLIDER	-
				******************************************/
								
				 
						var setREVStartSize = function() {
							var	tpopt = new Object(); 
								tpopt.startwidth = 1170;
								tpopt.startheight = 600;
								tpopt.container = jQuery('#rev_slider_1_1');
								tpopt.fullScreen = "off";
								tpopt.forceFullWidth="off";

							tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
						};
						
						/* CALL PLACEHOLDER */
						setREVStartSize();
								
				
				var tpj=jQuery;				
				tpj.noConflict();				
				var revapi1;
				
				
				
				tpj(document).ready(function() {
				
					
								
				if(tpj('#rev_slider_1_1').revolution == undefined){
					revslider_showDoubleJqueryError('#rev_slider_1_1');
				}else{
				   revapi1 = tpj('#rev_slider_1_1').show().revolution(
					{
											
						dottedOverlay:"none",
						delay:10000,
						startwidth:1170,
						startheight:600,
						hideThumbs:200,
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:3,
													
						simplifyAll:"off",						
						navigationType:"none",
						navigationArrows:"none",
						navigationStyle:"preview1",						
						touchenabled:"on",
						onHoverStop:"off",						
						nextSlideOnWindowFocus:"off",
						
						swipe_threshold: 75,
						swipe_min_touches: 1,
						drag_block_vertical: false,
																		
																		
						keyboardNavigation:"off",
						
						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,
								
						shadow:0,
						fullWidth:"on",
						fullScreen:"off",

												spinner:"spinner0",
																		
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",
						
						autoHeight:"off",						
						forceFullWidth:"off",						
												
												
												
						hideThumbsOnMobile:"off",
						hideNavDelayOnMobile:1500,
						hideBulletsOnMobile:"off",
						hideArrowsOnMobile:"off",
						hideThumbsUnderResolution:0,
						
												hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						isJoomla: true
					});
					
					
					
									}					
				});	/*ready*/
									
			</script>
			</div>
<!-- END REVOLUTION SLIDER -->	</div></div></div></div></div></section><section id="sp-main-body"><div class="row"><div id="sp-component" class="col-sm-12 col-md-12"><div class="sp-column "><div id="system-message-container">
	</div>

<div id="sp-page-builder" class="sp-page-builder  page-3">

	
	<div class="page-content">
				<section id="section-id-1504857442348" class="sppb-section " ><div class="sppb-row-overlay"></div><div class="sppb-row-container"><div class="sppb-row"><div class="sppb-col-md-12" id="column-wrap-id-1504857442349"><div id="column-id-1504857442349" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1505460476222" class="clearfix" ><div class="sppb-addon sppb-addon-header butter sppb-text-center"><h3 class="sppb-addon-title">How to order</h3></div></div></div></div></div><div class="sppb-col-md-4" id="column-wrap-id-1505460476199"><div id="column-id-1505460476199" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1505460476204" class="clearfix" ><div class="sppb-addon sppb-addon-feature  butter"><div class="sppb-addon-content sppb-text-center"><span class="sppb-img-container"><img class="sppb-img-responsive" src="images/Demo/elements/process1.png" alt="Step 1"></span><div class="sppb-media-content"><h4 class="sppb-addon-title sppb-feature-box-title">Step 1</h4>
				<div class="sppb-addon-text">Milky  farm produces.<br />We produce healthy 100% organic dairy products for your table.</div></div></div></div></div></div></div></div><div class="sppb-col-md-4" id="column-wrap-id-1505460476200"><div id="column-id-1505460476200" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1505460476211" class="clearfix" ><div class="sppb-addon sppb-addon-feature  butter"><div class="sppb-addon-content sppb-text-center"><span class="sppb-img-container"><img class="sppb-img-responsive" src="images/Demo/elements/process2.png" alt="Step 2"></span><div class="sppb-media-content"><h4 class="sppb-addon-title sppb-feature-box-title">Step 2</h4><div class="sppb-addon-text">Choose your products.<br />Select your products from our shop and place your order.</div></div></div></div></div></div></div></div><div class="sppb-col-md-4" id="column-wrap-id-1505460476219"><div id="column-id-1505460476219" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1505460476216" class="clearfix" ><div class="sppb-addon sppb-addon-feature  butter"><div class="sppb-addon-content sppb-text-center"><span class="sppb-img-container"><img class="sppb-img-responsive" src="images/Demo/elements/process3.png" alt="Step 3"></span><div class="sppb-media-content"><h4 class="sppb-addon-title sppb-feature-box-title">Step 3</h4><div class="sppb-addon-text">We will deliver for free.<br />Depending on the delivery method you choose we can deliver for free.</div></div></div></div></div></div></div></div></div></div></section><section id="section-id-1505550578146" class="sppb-section " ><div class="sppb-row-overlay"></div><div class="sppb-row-container"><div class="sppb-row"><div class="sppb-col-md-12" id="column-wrap-id-1505550578147"><div id="column-id-1505550578147" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1505550578148" class="clearfix" ><div class="sppb-addon sppb-addon-header butter sppb-text-center"><h3 class="sppb-addon-title">Why to choose us</h3></div></div></div></div></div><div class="sppb-col-md-4" id="column-wrap-id-1505550578149"><div id="column-id-1505550578149" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1505550578168" class="clearfix" ><div class="sppb-addon sppb-addon-blocknumber "><div class="sppb-addon-content"><div class="sppb-blocknumber sppb-media"><div class="pull-left"><span class="sppb-blocknumber-number">1</span></div><div class="sppb-media-body sppb-text-left"><h3 class="sppb-media-heading">Organic and non-GMO</h3>
				                      <p>A Healthy Treat for All.</p>
				</div></div></div></div></div><div id="sppb-addon-1505550578175" class="clearfix" ><div class="sppb-addon sppb-addon-blocknumber "><div class="sppb-addon-content"><div class="sppb-blocknumber sppb-media"><div class="pull-left"><span class="sppb-blocknumber-number">2</span></div><div class="sppb-media-body sppb-text-left"><h3 class="sppb-media-heading">Award wining quality</h3>
				          <p>A good reputation is a sensation.</p>
				</div></div></div></div></div><div id="sppb-addon-1505550578202" class="clearfix" ><div class="sppb-addon sppb-addon-blocknumber "><div class="sppb-addon-content"><div class="sppb-blocknumber sppb-media"><div class="pull-left"><span class="sppb-blocknumber-number">3</span></div><div class="sppb-media-body sppb-text-left"><h3 class="sppb-media-heading">Best dairy products</h3>
				          <p>Skim Milk Does Not Come From Skinny Cows.</p>
				</div></div></div></div></div></div></div></div><div class="sppb-col-md-4" id="column-wrap-id-1505550578151"><div id="column-id-1505550578151" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1505550578165" class="clearfix" ><div class="sppb-addon sppb-addon-single-image sppb-text-center "><div class="sppb-addon-content"><div class="sppb-addon-single-image-container"><img class="sppb-img-responsive" src="images/Demo/elements/why.jpg" alt="Why To Choose Us" title=""></div></div></div></div></div></div></div><div class="sppb-col-md-4" id="column-wrap-id-1505550578153"><div id="column-id-1505550578153" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1505550578182" class="clearfix" ><div class="sppb-addon sppb-addon-blocknumber "><div class="sppb-addon-content"><div class="sppb-blocknumber sppb-media"><div class="pull-right"><span class="sppb-blocknumber-number">4</span></div><div class="sppb-media-body sppb-text-right"><h3 class="sppb-media-heading">Healthy and nutritious</h3>
				                <p>Good Food Good Life</p>
				</div>
				</div></div></div></div><div id="sppb-addon-1505550578185" class="clearfix" ><div class="sppb-addon sppb-addon-blocknumber "><div class="sppb-addon-content"><div class="sppb-blocknumber sppb-media"><div class="pull-right"><span class="sppb-blocknumber-number">5</span></div><div class="sppb-media-body sppb-text-right"><h3 class="sppb-media-heading">500 acres of pasture</h3>
				          Milky was made with 100% organic milk in our coffee cups while developing.				</div></div></div></div></div><div id="sppb-addon-1505550578205" class="clearfix" ><div class="sppb-addon sppb-addon-blocknumber "><div class="sppb-addon-content"><div class="sppb-blocknumber sppb-media"><div class="pull-right"><span class="sppb-blocknumber-number">6</span></div><div class="sppb-media-body sppb-text-right"><h3 class="sppb-media-heading">Delivery to your door</h3>
				                    <p>A click away from your pick				          .</p>
				          </div></div></div></div></div></div></div></div></div></div></section><section id="section-id-1505550578246" class="sppb-section " ><div class="sppb-row-overlay"></div><div class="sppb-row-container"><div class="sppb-row"><div class="sppb-col-md-12" id="column-wrap-id-1505550578247"><div id="column-id-1505550578247" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1505550578253" class="clearfix" ><div class="sppb-addon sppb-addon-header butter sppb-text-center"><h3 class="sppb-addon-title">Featured products</h3></div></div><div id="sppb-addon-1505550578250" class="clearfix" ><div class="sppb-addon sppb-addon-module "><div class="sppb-addon-content"><div class="vmgroup">

			<div class="vmproduct productdetails">
						<div class="product-container  width25 floatleft">
				<div class="spacer">
					<a href="index.php/butter/grass-fed-organic-ghee-detail.html" title="Grass-Fed Organic Ghee"><img src="images/virtuemart/product/resized/ghee_500x500.jpg" alt="ghee" class="featuredProductImage" /></a><div class="clear"></div>					<a href="index.php/butter/grass-fed-organic-ghee-detail.html">Grass-Fed Organic Ghee</a>        <div class="clear"></div><div class="productdetails"><div class="product-price"><div class="PricesalesPrice vm-display vm-price-value"><span class="PricesalesPrice">$11.90</span></div></div>	<div class="addtocart-area">
		<form method="post" class="product js-recalculate" action="http://dhtheme.com/buttermilk/index.php/component/virtuemart/" autocomplete="off" >
			<div class="vm-customfields-wrap">
							</div>			
				
    <div class="addtocart-bar">
	            <!-- <label for="quantity1" class="quantity_box">Quantity: </label> -->
            <span class="quantity-box">
				<input type="text" class="quantity-input js-recalculate" name="quantity[]"
                       data-errStr="You can buy this product only in multiples of %s pieces!"
                       value="1" init="1" step="1"  />
			</span>
			                <span class="quantity-controls js-recalculate">
				<input type="button" class="quantity-controls quantity-plus"/>
				<input type="button" class="quantity-controls quantity-minus"/>
			</span>
			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />                </span>             <input type="hidden" name="virtuemart_product_id[]" value="1"/>
            <noscript><input type="hidden" name="task" value="add"/></noscript> 
    </div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="1"/>
			<input type="hidden" name="pname" value="Grass-Fed Organic Ghee"/>
			<input type="hidden" name="pid" value="1"/>
			<input type="hidden" name="Itemid" value="101"/>		</form>

	</div>

</div>				</div>
			</div>
						<div class="product-container  width25 floatleft">
				<div class="spacer">
					<a href="index.php/cheese/white-cheese-detail.html" title="White Cheese"><img src="images/virtuemart/product/resized/white-cheese_500x500.jpg" alt="white-cheese" class="featuredProductImage" /></a><div class="clear"></div>					<a href="index.php/cheese/white-cheese-detail.html">White Cheese</a>        <div class="clear"></div><div class="productdetails"><div class="product-price"><div class="PricesalesPrice vm-display vm-price-value"><span class="PricesalesPrice">$12.90</span></div></div>	<div class="addtocart-area">
		<form method="post" class="product js-recalculate" action="http://dhtheme.com/buttermilk/index.php/component/virtuemart/" autocomplete="off" >
			<div class="vm-customfields-wrap">
							</div>			
				
    <div class="addtocart-bar">
	            <!-- <label for="quantity3" class="quantity_box">Quantity: </label> -->
            <span class="quantity-box">
				<input type="text" class="quantity-input js-recalculate" name="quantity[]"
                       data-errStr="You can buy this product only in multiples of %s pieces!"
                       value="1" init="1" step="1"  />
			</span>
			                <span class="quantity-controls js-recalculate">
				<input type="button" class="quantity-controls quantity-plus"/>
				<input type="button" class="quantity-controls quantity-minus"/>
			</span>
			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />                </span>             <input type="hidden" name="virtuemart_product_id[]" value="3"/>
            <noscript><input type="hidden" name="task" value="add"/></noscript> 
    </div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="3"/>
			<input type="hidden" name="pname" value="White Cheese"/>
			<input type="hidden" name="pid" value="3"/>
			<input type="hidden" name="Itemid" value="101"/>		</form>

	</div>

</div>				</div>
			</div>
						<div class="product-container  width25 floatleft">
				<div class="spacer">
					<a href="index.php/milk/strawberry-yogurt-detail.html" title="Strawberry Yogurt"><img src="images/virtuemart/product/resized/yogurt-strawberry_500x500.jpg" alt="yogurt-strawberry" class="featuredProductImage" /></a><div class="clear"></div>					<a href="index.php/milk/strawberry-yogurt-detail.html">Strawberry Yogurt</a>        <div class="clear"></div><div class="productdetails"><div class="product-price"><div class="PricesalesPrice vm-display vm-price-value"><span class="PricesalesPrice">$3.20</span></div></div>	<div class="addtocart-area">
		<form method="post" class="product js-recalculate" action="http://dhtheme.com/buttermilk/index.php/component/virtuemart/" autocomplete="off" >
			<div class="vm-customfields-wrap">
							</div>			
				
    <div class="addtocart-bar">
	            <!-- <label for="quantity13" class="quantity_box">Quantity: </label> -->
            <span class="quantity-box">
				<input type="text" class="quantity-input js-recalculate" name="quantity[]"
                       data-errStr="You can buy this product only in multiples of %s pieces!"
                       value="1" init="1" step="1"  />
			</span>
			                <span class="quantity-controls js-recalculate">
				<input type="button" class="quantity-controls quantity-plus"/>
				<input type="button" class="quantity-controls quantity-minus"/>
			</span>
			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />                </span>             <input type="hidden" name="virtuemart_product_id[]" value="13"/>
            <noscript><input type="hidden" name="task" value="add"/></noscript> 
    </div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="13"/>
			<input type="hidden" name="pname" value="Strawberry Yogurt"/>
			<input type="hidden" name="pid" value="13"/>
			<input type="hidden" name="Itemid" value="101"/>		</form>

	</div>

</div>				</div>
			</div>
						<div class="product-container  width25 floatleft">
				<div class="spacer">
					<a href="index.php/features/joomla-virtuemart/single-product.html" title="Bulgarian Yogurt"><img src="images/virtuemart/product/resized/yogurt-bulgarian_500x500.jpg" alt="yogurt-bulgarian" class="featuredProductImage" /></a><div class="clear"></div>					<a href="index.php/features/joomla-virtuemart/single-product.html">Bulgarian Yogurt</a>        <div class="clear"></div><div class="productdetails"><div class="product-price"><div class="PricesalesPrice vm-display vm-price-value"><span class="PricesalesPrice">$3.30</span></div></div>	<div class="addtocart-area">
		<form method="post" class="product js-recalculate" action="http://dhtheme.com/buttermilk/index.php/component/virtuemart/" autocomplete="off" >
			<div class="vm-customfields-wrap">
							</div>			
				
    <div class="addtocart-bar">
	            <!-- <label for="quantity15" class="quantity_box">Quantity: </label> -->
            <span class="quantity-box">
				<input type="text" class="quantity-input js-recalculate" name="quantity[]"
                       data-errStr="You can buy this product only in multiples of %s pieces!"
                       value="1" init="1" step="1"  />
			</span>
			                <span class="quantity-controls js-recalculate">
				<input type="button" class="quantity-controls quantity-plus"/>
				<input type="button" class="quantity-controls quantity-minus"/>
			</span>
			<span class="addtocart-button">
				<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />                </span>             <input type="hidden" name="virtuemart_product_id[]" value="15"/>
            <noscript><input type="hidden" name="task" value="add"/></noscript> 
    </div>			<input type="hidden" name="option" value="com_virtuemart"/>
			<input type="hidden" name="view" value="cart"/>
			<input type="hidden" name="virtuemart_product_id[]" value="15"/>
			<input type="hidden" name="pname" value="Bulgarian Yogurt"/>
			<input type="hidden" name="pid" value="15"/>
			<input type="hidden" name="Itemid" value="101"/>		</form>

	</div>

</div>				</div>
			</div>
					</div>
		<br style='clear:both;'/>

		</div>






<script id="ready.vmprices-js" type="text/javascript">//<![CDATA[ 
jQuery(document).ready(function($) {

		Virtuemart.product($("form.product"));
}); //]]>
</script>

<script id="updateChosen-js" type="text/javascript">//<![CDATA[ 
if (typeof Virtuemart === "undefined")
	var Virtuemart = {};
	Virtuemart.updateChosenDropdownLayout = function() {
		var vm2string = {editImage: 'edit image',select_all_text: 'Select all',select_some_options_text: 'Available for all'};
		jQuery("select.vm-chzn-select").chosen({enable_select_all: true,select_all_text : vm2string.select_all_text,select_some_options_text:vm2string.select_some_options_text,disable_search_threshold: 5});
		//console.log("updateChosenDropdownLayout");
	}
	jQuery(document).ready( function() {
		Virtuemart.updateChosenDropdownLayout($);
	}); //]]>
</script>
<script id="vm-countryState-js" type="text/javascript">//<![CDATA[ 
jQuery(document).ready( function($) {
			$("#virtuemart_country_id_field").vm2front("list",{dest : "#virtuemart_state_id_field",ids : "",prefiks : ""});
		}); //]]>
</script>
<script id="vm-countryStateshipto_-js" type="text/javascript">//<![CDATA[ 
jQuery(document).ready( function($) {
			$("#shipto_virtuemart_country_id_field").vm2front("list",{dest : "#shipto_virtuemart_state_id_field",ids : "",prefiks : "shipto_"});
		}); //]]>
</script>
</div></div></div></div></div></div></div></div></section><section id="section-id-1505467892044" class="sppb-section " ><div class="sppb-row-overlay"></div><div class="sppb-row-container"><div class="sppb-row"><div class="sppb-col-md-4" id="column-wrap-id-1505467892045"><div id="column-id-1505467892045" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1505467892060" class="clearfix" ><div class="sppb-addon sppb-addon-single-image sppb-text-center "><div class="sppb-addon-content"><div class="sppb-addon-single-image-container"><img class="sppb-img-responsive" src="images/Demo/elements/bottles.png" alt="Pour Some Milk!" title=""></div></div></div></div></div></div></div><div class="sppb-col-md-4" id="column-wrap-id-1505467892057"><div id="column-id-1505467892057" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1505467892063" class="clearfix" ><div class="sppb-addon sppb-addon-header sppb-text-left"><h4 class="sppb-addon-title">Shop Online Now!</h4></div></div><div id="sppb-addon-1505467892070" class="clearfix" ><div class="sppb-addon sppb-addon-text-block 0 sppb-text-left ">
  <div class="sppb-addon-content">In our online store, you can order all of the products that we produce in Milky organic dairy farm.<br />You can choose free delivery or you can pickup your basket directly from our stores.<br /><br />Each month we have different promotions that you can choose from.<br /><br />
  </div></div></div><div id="sppb-addon-1505467892080" class="clearfix" ><div class="sppb-text-left"><a href="index.php/shop.html" id="btn-1505467892080" class="sppb-btn  sppb-btn-custom sppb-btn-lg sppb-btn-round">Browse Products</a></div></div></div></div></div><div class="sppb-col-md-4" id="column-wrap-id-1505467892120"><div id="column-id-1505467892120" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1505467892123" class="clearfix" ><div class="sppb-addon sppb-addon-header sppb-text-left"><h4 class="sppb-addon-title">Visit Our Stores!</h4></div></div><div id="sppb-addon-1505467892126" class="clearfix" ><div class="sppb-addon sppb-addon-text-block 0 sppb-text-left ">
    <div class="sppb-addon-content">If you are interested in what we have to offer you can visit our store, located in different places accross Kannur.<br />You can taste any of the products that we produce, just visit any of our stores.<br /><br />We also provide a subscription box, which can be picked up from our stores.<br /><br />
  </div></div></div><div id="sppb-addon-1505467892097" class="clearfix" ><div class="sppb-text-left"><a href="index.php/contact.html" id="btn-1505467892097" class="sppb-btn  sppb-btn-custom sppb-btn-lg sppb-btn-round">Locate Stores</a></div></div></div></div></div></div></div></section>			</div>
</div>
</div></div></div></section><section id="sp-bottom-b"><div class="container"><div class="row"><div id="sp-bottom9" class="col-sm-12 col-md-12"><div class="sp-column "><div class="sp-module "><div class="sp-module-content"><div class="mod-sppagebuilder  sp-page-builder" data-module_id="87">
	<div class="page-content">
		<div id="section-id-1502955594868" class="sppb-section " ><div class="sppb-row-overlay"></div><div class="sppb-container-inner"><div class="sppb-row"><div class="sppb-col-md-3" id="column-wrap-id-1502955594869"><div id="column-id-1502955594869" class="sppb-column " ><div class="sppb-column-addons"><div id="sppb-addon-1502955638608" class="clearfix" ><div class="sppb-addon sppb-addon-feature sppb-text-left "><div class="sppb-addon-content sppb-text-center"><div class="sppb-media"><div class="pull-left"><div class="sppb-icon"><span class="sppb-icon-container"><i aria-hidden="true" aria-label="0700 123 456" class="fa fa-truck"></i></span></div></div><div class="sppb-media-body"><div class="sppb-media-content"><h4 class="sppb-addon-title sppb-feature-box-title sppb-media-heading">0700 123 456</h4><div class="sppb-addon-text">				Call our support line.</div></div></div></div></div></div></div></div></div></div><div class="sppb-col-md-4" id="column-wrap-id-1502955638604"><div id="column-id-1502955638604" class="sppb-column " ><div class="sppb-column-addons"><div id="sppb-addon-1502955869992" class="clearfix" ><div class="sppb-addon sppb-addon-feature sppb-text-left "><div class="sppb-addon-content sppb-text-center"><div class="sppb-media"><div class="pull-left"><div class="sppb-icon"><span class="sppb-icon-container"><i aria-hidden="true" aria-label="hq (@) bttmk.com" class="fa fa-envelope"></i></span></div></div><div class="sppb-media-body"><div class="sppb-media-content">
		                        <h4 class="sppb-addon-title sppb-feature-box-title sppb-media-heading">milky@gmail.com</h4><div class="sppb-addon-text">			Send your comments or thoughts.</div></div></div></div></div></div></div></div></div></div><div class="sppb-col-md-3" id="column-wrap-id-1502955638605"><div id="column-id-1502955638605" class="sppb-column " ><div class="sppb-column-addons"><div id="sppb-addon-1502956168115" class="clearfix" ><div class="sppb-addon sppb-addon-feature sppb-text-left "><div class="sppb-addon-content sppb-text-center"><div class="sppb-media"><div class="pull-left"><div class="sppb-icon"><span class="sppb-icon-container"><i aria-hidden="true" aria-label="9:00 - 18:00" class="fa fa-clock-o"></i></span></div></div><div class="sppb-media-body"><div class="sppb-media-content">
		                                          <h4 class="sppb-addon-title sppb-feature-box-title sppb-media-heading">Full Day</h4><div class="sppb-addon-text">			Our working hours.</div></div></div></div></div></div></div></div></div></div><div class="sppb-col-md-2" id="column-wrap-id-1502958164475"><div id="column-id-1502958164475" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1502958298684" class="clearfix" ><div class="sppb-text-center"><a href="index.php/shop.html" id="btn-1502958298684" class="sppb-btn  sppb-btn-custom sppb-btn-lg sppb-btn-block sppb-btn-round">Shop Now</a></div></div></div></div></div></div></div></div><style type="text/css">.sp-page-builder .page-content #section-id-1504857442348{padding:70px 0px 70px 0px;margin:0px 0px 0px 0px;}#sppb-addon-1505460476222 h3.sppb-addon-title {margin:0px 0px 45px 0px; padding:0px 0px 0px 0px; }#sppb-addon-1505460476204 .sppb-addon-title {margin-top:20px;margin-bottom:20px;color:rgba(32, 139, 243, 1);font-size:22px;line-height:22px;}#sppb-addon-1505460476204 .sppb-img-container {display:block;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1505460476204 .sppb-media .sppb-media-body {width:auto;}}@media (max-width:767px) {#sppb-addon-1505460476204 .sppb-media .sppb-media-body {width:auto;}}#sppb-addon-1505460476211 .sppb-addon-title {margin-top:20px;margin-bottom:20px;color:rgba(32, 139, 243, 1);font-size:22px;line-height:22px;}#sppb-addon-1505460476211 .sppb-img-container {display:block;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1505460476211 .sppb-media .sppb-media-body {width:auto;}}@media (max-width:767px) {#sppb-addon-1505460476211 .sppb-media .sppb-media-body {width:auto;}}#sppb-addon-1505460476216 .sppb-addon-title {margin-top:20px;margin-bottom:20px;color:rgba(32, 139, 243, 1);font-size:22px;line-height:22px;}#sppb-addon-1505460476216 .sppb-img-container {display:block;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1505460476216 .sppb-media .sppb-media-body {width:auto;}}@media (max-width:767px) {#sppb-addon-1505460476216 .sppb-media .sppb-media-body {width:auto;}}.sp-page-builder .page-content #section-id-1505550578146{padding:70px 0px 70px 0px;margin:0px 0px 0px 0px;background-color:rgba(242, 242, 242, 1);}#sppb-addon-1505550578148 h3.sppb-addon-title {margin:0px 0px 45px 0px; padding:0px 0px 0px 0px; }#sppb-addon-1505550578168 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(32, 139, 243, 1);color:#ffffff;border-radius:50px;}#sppb-addon-1505550578175 {margin:20px 0px 0px 0px;}#sppb-addon-1505550578175 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(254, 198, 58, 1);color:#ffffff;border-radius:50px;}#sppb-addon-1505550578202 {margin:20px 0px 0px 0px;}#sppb-addon-1505550578202 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(32, 139, 243, 1);color:#ffffff;border-radius:50px;}#sppb-addon-1505550578182 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(32, 139, 243, 1);color:#ffffff;border-radius:50px;}#sppb-addon-1505550578185 {margin:20px 0px 0px 0px;}#sppb-addon-1505550578185 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(254, 198, 58, 1);color:#ffffff;border-radius:50px;}#sppb-addon-1505550578205 {margin:20px 0px 0px 0px;}#sppb-addon-1505550578205 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(32, 139, 243, 1);color:#ffffff;border-radius:50px;}.sp-page-builder .page-content #section-id-1505550578246{padding:70px 0px 70px 0px;margin:0px 0px 0px 0px;}#sppb-addon-1505550578253 h3.sppb-addon-title {margin:0px 0px 45px 0px; padding:0px 0px 0px 0px; }.sp-page-builder .page-content #section-id-1505467892044{padding:70px 0px 70px 0px;margin:0px 0px 0px 0px;background-color:rgba(254, 198, 58, 1);background-image:url(images/Demo/elements/farm.png);background-repeat:no-repeat;background-size:inherit;background-attachment:scroll;background-position:50% 0;}#sppb-addon-1505467892063 {color:rgba(255, 255, 255, 1);}#sppb-addon-1505467892063 .sppb-addon-title {font-size:24px;line-height:24px;}#sppb-addon-1505467892063 h4.sppb-addon-title {margin:0px 0px 35px 0px; padding:0px 0px 0px 0px; }#sppb-addon-1505467892080 {margin:20px 0px 0px 0px;}#sppb-addon-1505467892080 #btn-1505467892080.sppb-btn-custom{font-weight:bold;}#sppb-addon-1505467892080 #btn-1505467892080.sppb-btn-custom { background-color:rgba(32, 139, 243, 1); color:rgba(255, 255, 255, 1);}#sppb-addon-1505467892080 #btn-1505467892080.sppb-btn-custom:hover { background-color:rgba(255, 255, 255, 1); color:rgba(32, 139, 243, 1);}#sppb-addon-1505467892123 {color:rgba(255, 255, 255, 1);}#sppb-addon-1505467892123 .sppb-addon-title {font-size:24px;line-height:24px;}#sppb-addon-1505467892123 h4.sppb-addon-title {margin:0px 0px 35px 0px; padding:0px 0px 0px 0px; }#sppb-addon-1505467892097 {margin:20px 0px 0px 0px;}#sppb-addon-1505467892097 #btn-1505467892097.sppb-btn-custom{font-weight:bold;}#sppb-addon-1505467892097 #btn-1505467892097.sppb-btn-custom { background-color:rgba(255, 255, 255, 1); color:rgba(32, 139, 243, 1);}#sppb-addon-1505467892097 #btn-1505467892097.sppb-btn-custom:hover { background-color:rgba(32, 139, 243, 1); color:#ffffff;}.sp-page-builder .page-content #section-id-1502960570801{padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;}#sppb-addon-1502960952306 #btn-1502960952306.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502960952306 #btn-1502960952306.sppb-btn-custom { background-color:rgba(77, 112, 168, 1); color:#ffffff;}#sppb-addon-1502960952306 #btn-1502960952306.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}#sppb-addon-1502961127801 {margin:10px 0px 0px 0px;}#sppb-addon-1502961127801 #btn-1502961127801.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502961127801 #btn-1502961127801.sppb-btn-custom { background-color:rgba(0, 187, 242, 1); color:#ffffff;}#sppb-addon-1502961127801 #btn-1502961127801.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}#sppb-addon-1502961303142 {margin:10px 0px 0px 0px;}#sppb-addon-1502961303142 #btn-1502961303142.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502961303142 #btn-1502961303142.sppb-btn-custom { background-color:rgba(227, 64, 29, 1); color:#ffffff;}#sppb-addon-1502961303142 #btn-1502961303142.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}#sppb-addon-1502961303149 {margin:10px 0px 0px 0px;}#sppb-addon-1502961303149 #btn-1502961303149.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502961303149 #btn-1502961303149.sppb-btn-custom { background-color:rgba(203, 55, 55, 1); color:#ffffff;}#sppb-addon-1502961303149 #btn-1502961303149.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}.sp-page-builder .page-content #section-id-1502955594868{padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;}#sppb-addon-1502955638608 .sppb-addon-title {color:rgba(255, 255, 255, 1);font-size:23px;line-height:23px;}#sppb-addon-1502955638608 .sppb-icon .sppb-icon-container {display:inline-block;text-align:center;padding:0;color:rgba(255, 255, 255, 0.3);}#sppb-addon-1502955638608 .sppb-icon .sppb-icon-container > i {font-size:52px;width:52px;height:52px;line-height:52px;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1502955638608 .sppb-media .sppb-media-body {width:auto;}}@media (max-width:767px) {#sppb-addon-1502955638608 .sppb-media .sppb-media-body {width:auto;}}#sppb-addon-1502955869992 .sppb-addon-title {color:rgba(255, 255, 255, 1);font-size:24px;line-height:24px;}#sppb-addon-1502955869992 .sppb-icon .sppb-icon-container {display:inline-block;text-align:center;padding:0;color:rgba(255, 255, 255, 0.3);}#sppb-addon-1502955869992 .sppb-icon .sppb-icon-container > i {font-size:52px;width:52px;height:52px;line-height:52px;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1502955869992 .sppb-media .sppb-media-body {width:auto;}}@media (max-width:767px) {#sppb-addon-1502955869992 .sppb-media .sppb-media-body {width:auto;}}#sppb-addon-1502956168115 .sppb-addon-title {color:rgba(255, 255, 255, 1);font-size:24px;line-height:24px;}#sppb-addon-1502956168115 .sppb-icon .sppb-icon-container {display:inline-block;text-align:center;padding:0;color:rgba(255, 255, 255, 0.3);}#sppb-addon-1502956168115 .sppb-icon .sppb-icon-container > i {font-size:52px;width:52px;height:52px;line-height:52px;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1502956168115 .sppb-media .sppb-media-body {width:auto;}}@media (max-width:767px) {#sppb-addon-1502956168115 .sppb-media .sppb-media-body {width:auto;}}#sppb-addon-1502958298684 #btn-1502958298684.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502958298684 #btn-1502958298684.sppb-btn-custom { background-color:rgba(255, 255, 255, 1); color:rgba(32, 139, 243, 1);}#sppb-addon-1502958298684 #btn-1502958298684.sppb-btn-custom:hover { background-color:rgba(116, 250, 255, 1); color:rgba(32, 139, 243, 1);}</style>	</div>
</div>
</div></div></div></div></div></div></section><section id="sp-bottom-c"><div class="container"><div class="row"><div id="sp-bottom13" class="col-sm-3 col-md-3"><div class="sp-column "><div class="sp-module "><h3 class="sp-module-title">Certificate</h3><div class="sp-module-content">

<div class="custom"  >
	<img src="images/Demo/elements/certified.png" alt="Certificate"></div>
</div></div></div></div><div id="sp-bottom14" class="col-sm-3 col-md-3"><div class="sp-column "><div class="sp-module "><h3 class="sp-module-title">Site Information</h3><div class="sp-module-content"><ul class="nav menu">
<li class="item-107"><a href="#" > Privacy Policy</a></li><li class="item-108"><a href="#" > Terms &amp; Conditions</a></li><li class="item-109"><a href="#" > Return Policy</a></li><li class="item-110"><a href="#" > Complaints Policy</a></li><li class="item-111"><a href="#" > Delivery Terms</a></li></ul>
</div></div></div></div><div id="sp-bottom15" class="col-sm-3 col-md-3"><div class="sp-column "><div class="sp-module "><h3 class="sp-module-title">Payment Methods</h3><div class="sp-module-content">

<div class="custom"  >
	<img src="images/Demo/elements/payment-methods.png" alt="Payment Methods"></div>
</div></div></div></div><div id="sp-bottom16" class="col-sm-3 col-md-3"><div class="sp-column "><div class="sp-module "><h3 class="sp-module-title">Follow Us</h3><div class="sp-module-content"><div class="mod-sppagebuilder  sp-page-builder" data-module_id="100">
	<div class="page-content">
		<div id="section-id-1502960570801" class="sppb-section " ><div class="sppb-row-overlay"></div><div class="sppb-container-inner"><div class="sppb-row"><div class="sppb-col-md-12" id="column-wrap-id-1502960570802"><div id="column-id-1502960570802" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1502960952306" class="clearfix" ><div class="sppb-text-center"><a target="_blank" href="https://www.facebook.com/" id="btn-1502960952306" class="sppb-btn  sppb-btn-custom sppb-btn-lg sppb-btn-block sppb-btn-round"><i class="fa fa-facebook"></i> Facebook</a></div></div><div id="sppb-addon-1502961127801" class="clearfix" ><div class="sppb-text-center"><a target="_blank" href="https://twitter.com/" id="btn-1502961127801" class="sppb-btn  sppb-btn-custom sppb-btn-lg sppb-btn-block sppb-btn-round"><i class="fa fa-twitter"></i> Twitter</a></div></div><div id="sppb-addon-1502961303142" class="clearfix" ><div class="sppb-text-center"><a target="_blank" href="https://plus.google.com/" id="btn-1502961303142" class="sppb-btn  sppb-btn-custom sppb-btn-lg sppb-btn-block sppb-btn-round"><i class="fa fa-google-plus"></i> Google +</a></div></div><div id="sppb-addon-1502961303149" class="clearfix" ><div class="sppb-text-center"><a target="_blank" href="https://www.youtube.com/" id="btn-1502961303149" class="sppb-btn  sppb-btn-custom sppb-btn-lg sppb-btn-block sppb-btn-round"><i class="fa fa-youtube"></i> YouTube</a></div></div></div></div></div></div></div></div><style type="text/css">.sp-page-builder .page-content #section-id-1504857442348{padding:70px 0px 70px 0px;margin:0px 0px 0px 0px;}#sppb-addon-1505460476222 h3.sppb-addon-title {margin:0px 0px 45px 0px; padding:0px 0px 0px 0px; }#sppb-addon-1505460476204 .sppb-addon-title {margin-top:20px;margin-bottom:20px;color:rgba(32, 139, 243, 1);font-size:22px;line-height:22px;}#sppb-addon-1505460476204 .sppb-img-container {display:block;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1505460476204 .sppb-media .sppb-media-body {width:auto;}}@media (max-width:767px) {#sppb-addon-1505460476204 .sppb-media .sppb-media-body {width:auto;}}#sppb-addon-1505460476211 .sppb-addon-title {margin-top:20px;margin-bottom:20px;color:rgba(32, 139, 243, 1);font-size:22px;line-height:22px;}#sppb-addon-1505460476211 .sppb-img-container {display:block;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1505460476211 .sppb-media .sppb-media-body {width:auto;}}@media (max-width:767px) {#sppb-addon-1505460476211 .sppb-media .sppb-media-body {width:auto;}}#sppb-addon-1505460476216 .sppb-addon-title {margin-top:20px;margin-bottom:20px;color:rgba(32, 139, 243, 1);font-size:22px;line-height:22px;}#sppb-addon-1505460476216 .sppb-img-container {display:block;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1505460476216 .sppb-media .sppb-media-body {width:auto;}}@media (max-width:767px) {#sppb-addon-1505460476216 .sppb-media .sppb-media-body {width:auto;}}.sp-page-builder .page-content #section-id-1505550578146{padding:70px 0px 70px 0px;margin:0px 0px 0px 0px;background-color:rgba(242, 242, 242, 1);}#sppb-addon-1505550578148 h3.sppb-addon-title {margin:0px 0px 45px 0px; padding:0px 0px 0px 0px; }#sppb-addon-1505550578168 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(32, 139, 243, 1);color:#ffffff;border-radius:50px;}#sppb-addon-1505550578175 {margin:20px 0px 0px 0px;}#sppb-addon-1505550578175 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(254, 198, 58, 1);color:#ffffff;border-radius:50px;}#sppb-addon-1505550578202 {margin:20px 0px 0px 0px;}#sppb-addon-1505550578202 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(32, 139, 243, 1);color:#ffffff;border-radius:50px;}#sppb-addon-1505550578182 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(32, 139, 243, 1);color:#ffffff;border-radius:50px;}#sppb-addon-1505550578185 {margin:20px 0px 0px 0px;}#sppb-addon-1505550578185 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(254, 198, 58, 1);color:#ffffff;border-radius:50px;}#sppb-addon-1505550578205 {margin:20px 0px 0px 0px;}#sppb-addon-1505550578205 .sppb-blocknumber-number {width:48px; height:48px; line-height:48px;background-color:rgba(32, 139, 243, 1);color:#ffffff;border-radius:50px;}.sp-page-builder .page-content #section-id-1505550578246{padding:70px 0px 70px 0px;margin:0px 0px 0px 0px;}#sppb-addon-1505550578253 h3.sppb-addon-title {margin:0px 0px 45px 0px; padding:0px 0px 0px 0px; }.sp-page-builder .page-content #section-id-1505467892044{padding:70px 0px 70px 0px;margin:0px 0px 0px 0px;background-color:rgba(254, 198, 58, 1);background-image:url(images/Demo/elements/farm.png);background-repeat:no-repeat;background-size:inherit;background-attachment:scroll;background-position:50% 0;}#sppb-addon-1505467892063 {color:rgba(255, 255, 255, 1);}#sppb-addon-1505467892063 .sppb-addon-title {font-size:24px;line-height:24px;}#sppb-addon-1505467892063 h4.sppb-addon-title {margin:0px 0px 35px 0px; padding:0px 0px 0px 0px; }#sppb-addon-1505467892080 {margin:20px 0px 0px 0px;}#sppb-addon-1505467892080 #btn-1505467892080.sppb-btn-custom{font-weight:bold;}#sppb-addon-1505467892080 #btn-1505467892080.sppb-btn-custom { background-color:rgba(32, 139, 243, 1); color:rgba(255, 255, 255, 1);}#sppb-addon-1505467892080 #btn-1505467892080.sppb-btn-custom:hover { background-color:rgba(255, 255, 255, 1); color:rgba(32, 139, 243, 1);}#sppb-addon-1505467892123 {color:rgba(255, 255, 255, 1);}#sppb-addon-1505467892123 .sppb-addon-title {font-size:24px;line-height:24px;}#sppb-addon-1505467892123 h4.sppb-addon-title {margin:0px 0px 35px 0px; padding:0px 0px 0px 0px; }#sppb-addon-1505467892097 {margin:20px 0px 0px 0px;}#sppb-addon-1505467892097 #btn-1505467892097.sppb-btn-custom{font-weight:bold;}#sppb-addon-1505467892097 #btn-1505467892097.sppb-btn-custom { background-color:rgba(255, 255, 255, 1); color:rgba(32, 139, 243, 1);}#sppb-addon-1505467892097 #btn-1505467892097.sppb-btn-custom:hover { background-color:rgba(32, 139, 243, 1); color:#ffffff;}.sp-page-builder .page-content #section-id-1502960570801{padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;}#sppb-addon-1502960952306 #btn-1502960952306.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502960952306 #btn-1502960952306.sppb-btn-custom { background-color:rgba(77, 112, 168, 1); color:#ffffff;}#sppb-addon-1502960952306 #btn-1502960952306.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}#sppb-addon-1502961127801 {margin:10px 0px 0px 0px;}#sppb-addon-1502961127801 #btn-1502961127801.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502961127801 #btn-1502961127801.sppb-btn-custom { background-color:rgba(0, 187, 242, 1); color:#ffffff;}#sppb-addon-1502961127801 #btn-1502961127801.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}#sppb-addon-1502961303142 {margin:10px 0px 0px 0px;}#sppb-addon-1502961303142 #btn-1502961303142.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502961303142 #btn-1502961303142.sppb-btn-custom { background-color:rgba(227, 64, 29, 1); color:#ffffff;}#sppb-addon-1502961303142 #btn-1502961303142.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}#sppb-addon-1502961303149 {margin:10px 0px 0px 0px;}#sppb-addon-1502961303149 #btn-1502961303149.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502961303149 #btn-1502961303149.sppb-btn-custom { background-color:rgba(203, 55, 55, 1); color:#ffffff;}#sppb-addon-1502961303149 #btn-1502961303149.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}</style>	</div>
</div>
</div></div></div></div></div></div></section><footer id="sp-footer"><div class="container"><div class="row"><div id="sp-footer1" class="col-sm-12 col-md-12"><div class="sp-column "><span class="sp-copyright">© 2018 Your Company. All Rights Reserved. Designed By DHtheme</span></div></div></div></div></footer>                        </div> <!-- /.body-innerwrapper -->
                    </div> <!-- /.body-innerwrapper -->

                    <!-- Off Canvas Menu -->
                    <div class="offcanvas-menu">
                        <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
                        <div class="offcanvas-inner">
                                                          <div class="sp-module "><div class="sp-module-content"><ul class="nav menu">
<li class="item-101  current active"><a href="index-2.html" > Home</a></li><li class="item-102  deeper parent"><a href="index.php/shop.html" > Shop</a><span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-102"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-102"><li class="item-160  divider deeper parent"><a class="separator ">Categories</a>
<span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-160"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-160"><li class="item-153"><a href="index.php/shop/categories/milk.html" > Milk</a></li><li class="item-154"><a href="index.php/shop/categories/cheese.html" > Cheese</a></li><li class="item-155"><a href="index.php/shop/categories/butter.html" > Butter</a></li></ul></li></ul></li><li class="item-103"><a href="index.php/about-us.html" > About us</a></li><li class="item-104"><a href="index.php/blog.html" > Blog</a></li><li class="item-105"><a href="index.php/contact.html" > Contact</a></li><li class="item-116  divider deeper parent"><a class="separator ">Features</a>
<span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-116"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-116"><li class="item-161  divider deeper parent"><a class="separator ">Features</a>
<span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-161"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-161"><li class="item-165"><a href="index.php/features/features/feature-box.html" > Feature Box</a></li><li class="item-169"><a href="index.php/features/features/buttons.html" > Buttons</a></li><li class="item-171"><a href="index.php/features/features/accordions-tabs.html" > Accordions &amp; Tabs</a></li><li class="item-172"><a href="index.php/features/features/progress-bars-pies.html" > Progress Bars &amp; Pies</a></li><li class="item-176"><a href="index.php/features/features/pricing-tables.html" > Pricing Tables</a></li><li class="item-179"><a href="index.php/features/features/team-testimonials.html" > Team &amp; Testimonials</a></li></ul></li><li class="item-162  divider deeper parent"><a class="separator ">More Features</a>
<span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-162"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-162"><li class="item-170"><a href="index.php/features/more-features/animated-numbers-and-countdown.html" > Animated Numbers &amp; Countdown</a></li><li class="item-149"><a href="index.php/features/more-features/typography.html" > Typography</a></li><li class="item-156"><a href="index.php/features/more-features/module-variations.html" > Module Variations</a></li><li class="item-166"><a href="index.php/features/more-features/module-positions.html" > Module Positions</a></li><li class="item-167"><a href="index114a.html?tmpl=comingsoon" > Coming Soon</a></li><li class="item-168"><a href="index.php/features/more-features/404-error-page.html" > 404 Error Page</a></li></ul></li><li class="item-163  divider deeper parent"><a class="separator ">Joomla &amp; Virtuemart</a>
<span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-163"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-163"><li class="item-164"><a href="index.php/features/joomla-virtuemart/single-article.html" > Single Article</a></li><li class="item-173"><a href="index.php/blog.html" > Category Blog</a></li><li class="item-174"><a href="index.php/features/joomla-virtuemart/joomla-registration.html" > Joomla! Registration</a></li><li class="item-175"><a href="index.php/features/joomla-virtuemart/search.html" > Search</a></li><li class="item-177"><a href="index.php/features/joomla-virtuemart/single-product.html" > Single Product</a></li><li class="item-178"><a href="index.php/shop/categories/milk.html" > Product Category</a></li></ul></li></ul></li></ul>
</div></div>
                                                    </div> <!-- /.offcanvas-inner -->
                    </div> <!-- /.offcanvas-menu -->

                    
                    
                    <!-- Preloader -->
                    
                    <!-- Go to top -->
                                            <a href="javascript:void(0)" class="scrollup">&nbsp;</a>
                    
                </body>
                
<!-- Mirrored from dhtheme.com/buttermilk/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Sep 2019 13:50:30 GMT -->
</html>
