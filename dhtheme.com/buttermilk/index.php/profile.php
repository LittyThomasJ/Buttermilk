<?php
//$username=$_SESSION[''];
include("check_session.php");
include("features/joomla-virtuemart/connection.php");
//echo $lid;
$sel="SELECT * FROM tb_reg where login_id=$lid";
	$obj=new db();
	$select=$obj->execute($sel);
	$row=mysqli_fetch_array($select);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
    
<!-- Mirrored from dhtheme.com/buttermilk/index.php/contact by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Sep 2019 13:53:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                                <!-- head -->
                <base  />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="generator" content="Joomla! - Open Source Content Management" />
	<title>Profile</title>
	<link href="../templates/buttermilk/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<link href="../components/com_sppagebuilder/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="../components/com_sppagebuilder/assets/css/animate.min.css" rel="stylesheet" type="text/css" />
	<link href="../components/com_sppagebuilder/assets/css/sppagebuilder.css" rel="stylesheet" type="text/css" />
	<link href="../components/com_sppagebuilder/assets/css/sppagecontainer.css" rel="stylesheet" type="text/css" />
	<link href="../components/com_sppagebuilder/assets/css/magnific-popup.css" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Catamaran:100,200,300,regular,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet" type="text/css" />
	<link href="../templates/buttermilk/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../templates/buttermilk/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="../templates/buttermilk/css/legacy.css" rel="stylesheet" type="text/css" />
	<link href="../templates/buttermilk/css/template.css" rel="stylesheet" type="text/css" />
	<link href="../templates/buttermilk/css/presets/preset1.css" rel="stylesheet" type="text/css" class="preset" />
	<link href="../plugins/system/helix3/assets/css/pagebuilder.css" rel="stylesheet" type="text/css" />
	<link href="../templates/buttermilk/css/frontend-edit.css" rel="stylesheet" type="text/css" />
	<link href="../modules/mod_bt_googlemaps/tmpl/css/style.css" rel="stylesheet" type="text/css" />
	<link href="../components/com_virtuemart/assets/css/chosena567.css?vmver=4632b4a7" rel="stylesheet" type="text/css" />
	<link href="../templates/buttermilk/css/vm-ltr-commona567.css?vmver=4632b4a7" rel="stylesheet" type="text/css" />
	<link href="../templates/buttermilk/css/vm-ltr-sitea567.css?vmver=4632b4a7" rel="stylesheet" type="text/css" />
	<link href="../templates/buttermilk/css/vm-ltr-reviewsa567.css?vmver=4632b4a7" rel="stylesheet" type="text/css" />
	<style type="text/css">
.sp-page-builder .page-content #section-id-1504601283914{padding:70px 0px 70px 0px;margin:0px 0px 0px 0px;}
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
	<script src="../media/jui/js/jquery.min86d6.js?19a092cf799ed6c41792146343f78261" type="text/javascript"></script>
	<script src="../media/jui/js/jquery-noconflict86d6.js?19a092cf799ed6c41792146343f78261" type="text/javascript"></script>
	<script src="../media/jui/js/jquery-migrate.min86d6.js?19a092cf799ed6c41792146343f78261" type="text/javascript"></script>
	<script src="../components/com_sppagebuilder/assets/js/jquery.parallax.js" type="text/javascript"></script>
	<script src="../components/com_sppagebuilder/assets/js/sppagebuilder.js" type="text/javascript"></script>
	<script src="../components/com_sppagebuilder/assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
	<script src="../templates/buttermilk/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../templates/buttermilk/js/jquery.sticky.js" type="text/javascript"></script>
	<script src="../templates/buttermilk/js/main.js" type="text/javascript"></script>
	<script src="../templates/buttermilk/js/frontend-edit.js" type="text/javascript"></script>
	<script src="http://maps.google.com/maps/api/js?language=en-GB&amp;key=AIzaSyAzK04OC-IXFmLWGtjpyuE2XrODRBdW_e0" type="text/javascript"></script>
	<script src="../modules/mod_bt_googlemaps/tmpl/js/btbase64.min.js" type="text/javascript"></script>
	<script src="../modules/mod_bt_googlemaps/tmpl/js/default.js" type="text/javascript"></script>
	<script src="../components/com_virtuemart/assets/js/jquery-ui.mine17e.js?vmver=1.9.2" type="text/javascript"></script>
	<script src="../components/com_virtuemart/assets/js/jquery.ui.autocomplete.html.js" type="text/javascript"></script>
	<script src="../components/com_virtuemart/assets/js/jquery.noconflict.js" type="text/javascript" async></script>
	<script src="../modules/mod_virtuemart_cart/assets/js/update_carta567.js?vmver=4632b4a7" type="text/javascript"></script>
	<script src="../components/com_virtuemart/assets/js/chosen.jquery.mina567.js?vmver=4632b4a7" type="text/javascript"></script>
	<script src="../components/com_virtuemart/assets/js/vmpricesa567.js?vmver=4632b4a7" type="text/javascript" defer></script>
	<script src="../components/com_virtuemart/assets/js/vmsitea567.js?vmver=4632b4a7" type="text/javascript"></script>
	<script src="../media/system/js/core86d6.js?19a092cf799ed6c41792146343f78261" type="text/javascript"></script>
	<script type="text/javascript">
;(function ($) {
	$.ajaxSetup({
		headers: {
			'X-CSRF-Token': Joomla.getOptions('csrf.token')
		}
	});
})(jQuery);
var sp_preloader = '1';

var sp_gotop = '1';

var sp_offanimation = 'fullscreen';

jQuery(function($){ initTooltips(); $("body").on("subform-row-add", initTooltips); function initTooltips (event, container) { container = container || document;$(container).find(".hasTooltip").tooltip({"html": true,"container": "body"});} });
//<![CDATA[ 
if (typeof Virtuemart === "undefined"){
	var Virtuemart = {};}
var vmSiteurl = '../index.html' ;
Virtuemart.vmSiteurl = vmSiteurl;
var vmLang = '&lang=en';
Virtuemart.vmLang = vmLang; 
var vmLangTag = 'en';
Virtuemart.vmLangTag = vmLangTag;
var Itemid = '&Itemid=105';
Virtuemart.addtocart_popup = "1" ; 
var usefancy = true;
 //]]>

	</script>
	<meta property="og:title" content="Contact" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://dhtheme.com/buttermilk/index.php/contact" />
	<meta property="og:site_name" content="ButterMilk - Organic Dairy Farm VirtueMart Joomla Template" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="ButterMilk - Organic Dairy Farm VirtueMart Joomla Template" />

                                </head>
                <body class="site com-sppagebuilder view-page no-layout no-task itemid-105 en-gb ltr  sticky-header layout-fluid off-canvas-menu-init">

                    <div class="body-wrapper">
                        <div class="body-innerwrapper">
                            <div class="sp-pre-loader"><div class="sp-loader-with-logo"><div class="logo"><img src="../templates/buttermilk/images/presets/preset1/logo.png" alt=""></div><div class="line" id="line-load"></div></div></div><section id="sp-toolbar" class=" hidden-xs"><div class="container"><div class="row"><div id="sp-toolbar1" class="col-sm-6 col-md-6"><div class="sp-column "><ul class="sp-contact-info"><li class="sp-contact-phone"><i class="fa fa-phone"></i> <a href="#">0700 123 7654</a></li><li class="sp-contact-email"><i class="fa fa-envelope"></i> <a href="#">buttermilk@gmail.com</a></li><li class="sp-contact-time"><i class="fa fa-clock-o"></i>Mon - Fri 09:00 - 18:00</li></ul></div></div><div id="sp-toolbar2" class="col-sm-6 col-md-6"><div class="sp-column "><div class="sp-module "><div class="sp-module-content">
<!-- Virtuemart 2 Ajax Card -->
<div class="vmCartModule " id="vmCartModule">

	<div class="total">
			</div>
<!--
<div class="total_products">(Cart empty)</div>
<div class="show_cart">
	<i class="fa fa-shopping-basket"></i>&nbsp;</div>-->

<div class="payments-signin-button" ></div><noscript>
Please wait</noscript>
</div>








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
</div></div></div></div></div></div></section><header id="sp-header" class="container"><div class="container"><div class="row"><div id="sp-logo" class="col-xs-6 col-sm-3 col-md-4"><div class="sp-column "><div class="logo"><a href="../index.html"><img class="sp-default-logo" src="../templates/buttermilk/images/presets/preset1/logo.png" alt="ButterMilk - Organic Dairy Farm VirtueMart Joomla Template"><img class="sp-retina-logo" src="../templates/buttermilk/images/presets/preset1/logo%402x.png" alt="ButterMilk - Organic Dairy Farm VirtueMart Joomla Template" width="308" height="60"></a></div></div></div><div id="sp-menu" class="col-xs-6 col-sm-9 col-md-8"><div class="sp-column ">			<div class='sp-megamenu-wrapper'>
				<a id="offcanvas-toggler" class="visible-sm visible-xs" href="#"><i class="fa fa-bars"></i></a>
				<ul class="sp-megamenu-parent menu-fade hidden-sm hidden-xs"><li class="sp-menu-item"><a  href="../index-2u.php"  >Home</a></li><li class="sp-menu-item sp-has-child"><a  href="userhome.php"  >Shop</a>

				<!--	<div class="sp-dropdown sp-dropdown-main sp-dropdown-mega sp-menu-center" style="width: 600px;left: -300px;"><div class="sp-dropdown-inner"><div class="row"><div class="col-sm-4"><ul class="sp-mega-group"><li class="sp-menu-item sp-has-child"><a class="sp-group-title" href="javascript:void(0);"  >Categories</a><ul class="sp-mega-group-child sp-dropdown-items"><li class="sp-menu-item"><a  href="shop/categories/milk.html"  >Milk</a></li><li class="sp-menu-item"><a  href="shop/categories/cheese.html"  >Cheese</a></li><li class="sp-menu-item"><a  href="shop/categories/butter.html"  >Butter</a></li></ul></li></ul></div><div class="col-sm-8"><div class="sp-module "><div class="sp-module-content">

<div class="custom"  >
	<a href="shop.html"><img src="../images/Demo/elements/categories.png" alt="Milk"></a></div>
</div></div></div></div></div> </div>--> </li>


<!--

<li class="sp-menu-item"><a  href="about-usu.php"  >About us</a></li><li class="sp-menu-item"><a  href="blogu.php"  >Blog</a></li>
<li class="sp-menu-item current-item active"><a  href="contactu.html"  >Contact</a></li>-->
<li class="sp-menu-item current-item active"></li>
<li class="sp-menu-item"><a  href="profile.php"  >Profile</a></li>
<li class="sp-menu-item"><a  href="logout.php"  >Logout</a></li>
				</ul>			
				</div>
		</div></div></div></div></header><section id="sp-page-title"><div class="row"><div id="sp-title" class="col-sm-12 col-md-12"><div class="sp-column "><div class="sp-page-title"><div class="container"><h2>Dear&nbsp<?php echo $row['fname'];?> its Ur Profile</h2>
<ol class="breadcrumb">
	<span></span><li><a href="#" class="pathway"></a></li></ol>
</div></div></div></div></div></section>





<section id="sp-main-body"><div class="row"><div id="sp-component" class="col-sm-12 col-md-12"><div class="sp-column "><div id="system-message-container">
	</div>

<div id="sp-page-builder" class="sp-page-builder  page-1">

	
	<div class="page-content">
				<section id="section-id-1504601283914" class="sppb-section " ><div class="sppb-row-overlay"></div><div class="sppb-row-container"><div class="sppb-row"><div class="sppb-col-md-4" id="column-wrap-id-1504601283915"><div id="column-id-1504601283915" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1504603360568" class="clearfix" ><div class="sppb-addon sppb-addon-single-image sppb-text-center "><div class="sppb-addon-content"><div class="sppb-addon-single-image-container"><!--<img class="sppb-img-responsive" src="#" alt="" title="">--></div></div></div></div></div></div></div><div class="sppb-col-md-8" id="column-wrap-id-1504603360565"><div id="column-id-1504603360565" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1504603360571" class="clearfix" ><div class="sppb-addon sppb-addon-ajax-contact "><div class="sppb-ajax-contact-content">
					<form action="editprof.php" id="create_customer" name="create_customer" accept-charset="UTF-8" method="post"  enctype="multipart/form-data">

																																			<div class="form-group">
																										
									<div class="group-control">
									</div>
									</div>
									<div class="form-group">
									<label id="jform_name-lbl" for="jform_name" class="hasPopover required" title="Name" data-content="Enter your name.">
	                                First Name : <?php echo $row['fname'];?></label>
																		
									
								</div>
								
									<div class="form-group">
									<label id="jform_username-lbl" for="jform_username" class="hasPopover required" title="Username" data-content="Enter your desired username.">
	                                Last Name : <?php echo $row['lname'];?></label>
																		
									
								</div>
								
								<div class="form-group">
									<label id="jform_email2-lbl" for="jform_email2" class="hasPopover required" title="Confirm Email Address" data-content="Phone number.">
									Phone    : <?php echo $row['phone'];?></label>
																		
									
								</div>
								
																
																												
																						
				<div class="form-group">
					<input type="submit" id="submit" name="submit" value=" Want to Edit" style="color:white;background-color:#1D75D3;border: none;padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer; ">
					<a href="changepass.php">Change password</a>
				</div>
							</form>
					<div style="display:none;margin-top:10px;" class="sppb-ajax-contact-status"></div></div></div></div></div></div></div></div></div></section>			</div>
</div>
</div></div></div></section>
<!--<section id="sp-parallax-section-2"><div class="row"><div id="sp-parallax2" class="col-sm-12 col-md-12"><div class="sp-column "><div class="sp-module "><div class="sp-module-content"><div id="cavas_id101" class="bt-googlemaps"></div>
<script type="text/javascript">var config = {mapType				:'roadmap',width					:'auto',height					:'400',cavas_id				:"cavas_id101", zoom					:13,zoomControl			:true,scaleControl			:true,panControl				:true,mapTypeControl			:true,streetViewControl		:true,overviewMapControl		:true,draggable		:true,disableDoubleClickZoom		:false,scrollwheel		:true,weather				:0,temperatureUnit		:'f',replaceMarkerIcon		:1,displayWeatherInfo					:1,owm_api: "", mapCenterType			:"coordinate",mapCenterAddress		:"New York, United States",mapCenterCoordinate	:"42.6458768,23.2685364",enableStyle			:"1",styleTitle				:"Map",createNewOrDefault		:"createNew",enableCustomInfoBox	:"0",boxPosition			:"-150,-155",closeBoxMargin			:"-9px",closeBoxImage			:"",url:"http://dhtheme.com/buttermilk/"};var boxStyles = {"background":"#ffffff","opacity":" 0.85","width":" 280px","height":"100px","border":" 1px solid grey","borderRadius":"3px","padding":" 10px","boxShadow":"30px 10px 10px 1px grey"};var markersCode ="W3sibWFya2VyVGl0bGUiOiJTdG9yZSBCb3lhbmEiLCJtYXJrZXJUeXBlIjoiY29vcmRpbmF0ZSIsIm1hcmtlclZhbHVlIjoiNDIuNjQ1ODc2OCwyMy4yNjg1MzY0IiwibWFya2VySWNvbiI6ImltYWdlcy9EZW1vL2VsZW1lbnRzL21hcDEucG5nIiwibWFya2VyU2hvd0luZm9XaW5kb3ciOiIwIiwibWFya2VySW5mb1dpbmRvdyI6IlN0b3JlIEJveWFuYVxuKzU1NSAxMjM0IDU2NzgifSx7Im1hcmtlclRpdGxlIjoiU3RvcmUgRHJhZ2FsZXZ0emkiLCJtYXJrZXJUeXBlIjoiY29vcmRpbmF0ZSIsIm1hcmtlclZhbHVlIjoiNDIuNjI5NzUyMSwyMy4zMDkyNjMxIiwibWFya2VySWNvbiI6ImltYWdlcy9EZW1vL2VsZW1lbnRzL21hcDIucG5nIiwibWFya2VyU2hvd0luZm9XaW5kb3ciOiIwIiwibWFya2VySW5mb1dpbmRvdyI6IlN0b3JlIERyYWdhbGV2dHppXG4rNTU1IDU2NzggMTIzNCJ9XQ=="; var stylesCode ="W3siZmVhdHVyZVR5cGUiOiJyb2FkIiwiZWxlbWVudFR5cGUiOiJnZW9tZXRyeSIsInZpc2liaWxpdHkiOiJzaW1wbHkiLCJpbnZlcnRMaWdodG5lc3MiOiJmYWxzZSIsIm1hcENvbG9yIjoiIzIwOGFmMyIsIndlaWdodCI6IiIsImh1ZSI6IiIsInNhdHVyYXRpb24iOiIiLCJsaWdodG5lc3MiOiIzMCIsImdhbW1hIjoiIn0seyJmZWF0dXJlVHlwZSI6ImFsbCIsImVsZW1lbnRUeXBlIjoibGFiZWxzLnRleHQuc3Ryb2tlIiwidmlzaWJpbGl0eSI6IiIsImludmVydExpZ2h0bmVzcyI6ImZhbHNlIiwibWFwQ29sb3IiOiIjZmZmZmZmIiwid2VpZ2h0IjoiIiwiaHVlIjoiIiwic2F0dXJhdGlvbiI6IiIsImxpZ2h0bmVzcyI6IiIsImdhbW1hIjoiIn0seyJmZWF0dXJlVHlwZSI6ImxhbmRzY2FwZSIsImVsZW1lbnRUeXBlIjoiYWxsIiwidmlzaWJpbGl0eSI6IiIsImludmVydExpZ2h0bmVzcyI6ImZhbHNlIiwibWFwQ29sb3IiOiIjZmZmZmZmIiwid2VpZ2h0IjoiIiwiaHVlIjoiIiwic2F0dXJhdGlvbiI6IiIsImxpZ2h0bmVzcyI6IiIsImdhbW1hIjoiIn0seyJmZWF0dXJlVHlwZSI6IndhdGVyIiwiZWxlbWVudFR5cGUiOiJhbGwiLCJ2aXNpYmlsaXR5IjoiIiwiaW52ZXJ0TGlnaHRuZXNzIjoiZmFsc2UiLCJtYXBDb2xvciI6IiMyMDhhZjMiLCJ3ZWlnaHQiOiIiLCJodWUiOiIiLCJzYXR1cmF0aW9uIjoiIiwibGlnaHRuZXNzIjoiNzAiLCJnYW1tYSI6IiJ9LHsiZmVhdHVyZVR5cGUiOiJwb2kucGFyayIsImVsZW1lbnRUeXBlIjoiYWxsIiwidmlzaWJpbGl0eSI6IiIsImludmVydExpZ2h0bmVzcyI6ImZhbHNlIiwibWFwQ29sb3IiOiIjMjA4YWYzIiwid2VpZ2h0IjoiIiwiaHVlIjoiIiwic2F0dXJhdGlvbiI6IiIsImxpZ2h0bmVzcyI6IjkwIiwiZ2FtbWEiOiIifV0="; initializeMap(config, markersCode, stylesCode, boxStyles);</script>
</div></div></div></div></div></section>-->




<section id="sp-bottom-b"><div class="container"><div class="row"><div id="sp-bottom9" class="col-sm-12 col-md-12"><div class="sp-column "><div class="sp-module "><div class="sp-module-content"><div class="mod-sppagebuilder  sp-page-builder" data-module_id="87">
	<div class="page-content">
		<div id="section-id-1502955594868" class="sppb-section " ><div class="sppb-row-overlay"></div><div class="sppb-container-inner"><div class="sppb-row"><div class="sppb-col-md-3" id="column-wrap-id-1502955594869"><div id="column-id-1502955594869" class="sppb-column " ><div class="sppb-column-addons"><div id="sppb-addon-1502955638608" class="clearfix" ><div class="sppb-addon sppb-addon-feature sppb-text-left "><div class="sppb-addon-content sppb-text-center"><div class="sppb-media"><div class="pull-left"><div class="sppb-icon"><span class="sppb-icon-container"><i aria-hidden="true" aria-label="0700 123 456" class="fa fa-truck"></i></span></div></div><div class="sppb-media-body"><div class="sppb-media-content"><h4 class="sppb-addon-title sppb-feature-box-title sppb-media-heading">0700 123 456</h4><div class="sppb-addon-text">				Call our support line.</div></div></div></div></div></div></div></div></div></div><div class="sppb-col-md-4" id="column-wrap-id-1502955638604"><div id="column-id-1502955638604" class="sppb-column " ><div class="sppb-column-addons"><div id="sppb-addon-1502955869992" class="clearfix" ><div class="sppb-addon sppb-addon-feature sppb-text-left "><div class="sppb-addon-content sppb-text-center"><div class="sppb-media"><div class="pull-left"><div class="sppb-icon"><span class="sppb-icon-container"><i aria-hidden="true" aria-label="hq (@) bttmk.com" class="fa fa-envelope"></i></span></div></div><div class="sppb-media-body"><div class="sppb-media-content">
		                        <h4 class="sppb-addon-title sppb-feature-box-title sppb-media-heading">buttermilk@gmail.com</h4><div class="sppb-addon-text">			Send your comments or thoughts.</div></div></div></div></div></div></div></div></div></div><div class="sppb-col-md-3" id="column-wrap-id-1502955638605"><div id="column-id-1502955638605" class="sppb-column " ><div class="sppb-column-addons"><div id="sppb-addon-1502956168115" class="clearfix" ><div class="sppb-addon sppb-addon-feature sppb-text-left "><div class="sppb-addon-content sppb-text-center"><div class="sppb-media"><div class="pull-left"><div class="sppb-icon"><span class="sppb-icon-container"><i aria-hidden="true" aria-label="9:00 - 18:00" class="fa fa-clock-o"></i></span></div></div><div class="sppb-media-body"><div class="sppb-media-content">
		                                          <h4 class="sppb-addon-title sppb-feature-box-title sppb-media-heading">Last Day</h4><div class="sppb-addon-text">			Our working hours.</div></div></div></div></div></div></div></div></div></div><div class="sppb-col-md-2" id="column-wrap-id-1502958164475"><div id="column-id-1502958164475" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1502958298684" class="clearfix" ><div class="sppb-text-center"><a href="shop.php" id="btn-1502958298684" class="sppb-btn  sppb-btn-custom sppb-btn-lg sppb-btn-block sppb-btn-round">Shop Now</a></div></div></div></div></div></div></div></div><style type="text/css">.sp-page-builder .page-content #section-id-1504601283914{padding:70px 0px 70px 0px;margin:0px 0px 0px 0px;}.sp-page-builder .page-content #section-id-1502960570801{padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;}#sppb-addon-1502960952306 #btn-1502960952306.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502960952306 #btn-1502960952306.sppb-btn-custom { background-color:rgba(77, 112, 168, 1); color:#ffffff;}#sppb-addon-1502960952306 #btn-1502960952306.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}#sppb-addon-1502961127801 {margin:10px 0px 0px 0px;}#sppb-addon-1502961127801 #btn-1502961127801.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502961127801 #btn-1502961127801.sppb-btn-custom { background-color:rgba(0, 187, 242, 1); color:#ffffff;}#sppb-addon-1502961127801 #btn-1502961127801.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}#sppb-addon-1502961303142 {margin:10px 0px 0px 0px;}#sppb-addon-1502961303142 #btn-1502961303142.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502961303142 #btn-1502961303142.sppb-btn-custom { background-color:rgba(227, 64, 29, 1); color:#ffffff;}#sppb-addon-1502961303142 #btn-1502961303142.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}#sppb-addon-1502961303149 {margin:10px 0px 0px 0px;}#sppb-addon-1502961303149 #btn-1502961303149.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502961303149 #btn-1502961303149.sppb-btn-custom { background-color:rgba(203, 55, 55, 1); color:#ffffff;}#sppb-addon-1502961303149 #btn-1502961303149.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}.sp-page-builder .page-content #section-id-1502955594868{padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;}#sppb-addon-1502955638608 .sppb-addon-title {color:rgba(255, 255, 255, 1);font-size:23px;line-height:23px;}#sppb-addon-1502955638608 .sppb-icon .sppb-icon-container {display:inline-block;text-align:center;padding:0;color:rgba(255, 255, 255, 0.3);}#sppb-addon-1502955638608 .sppb-icon .sppb-icon-container > i {font-size:52px;width:52px;height:52px;line-height:52px;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1502955638608 .sppb-media .sppb-media-body {width:auto;}}@media (max-width:767px) {#sppb-addon-1502955638608 .sppb-media .sppb-media-body {width:auto;}}#sppb-addon-1502955869992 .sppb-addon-title {color:rgba(255, 255, 255, 1);font-size:24px;line-height:24px;}#sppb-addon-1502955869992 .sppb-icon .sppb-icon-container {display:inline-block;text-align:center;padding:0;color:rgba(255, 255, 255, 0.3);}#sppb-addon-1502955869992 .sppb-icon .sppb-icon-container > i {font-size:52px;width:52px;height:52px;line-height:52px;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1502955869992 .sppb-media .sppb-media-body {width:auto;}}@media (max-width:767px) {#sppb-addon-1502955869992 .sppb-media .sppb-media-body {width:auto;}}#sppb-addon-1502956168115 .sppb-addon-title {color:rgba(255, 255, 255, 1);font-size:24px;line-height:24px;}#sppb-addon-1502956168115 .sppb-icon .sppb-icon-container {display:inline-block;text-align:center;padding:0;color:rgba(255, 255, 255, 0.3);}#sppb-addon-1502956168115 .sppb-icon .sppb-icon-container > i {font-size:52px;width:52px;height:52px;line-height:52px;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1502956168115 .sppb-media .sppb-media-body {width:auto;}}@media (max-width:767px) {#sppb-addon-1502956168115 .sppb-media .sppb-media-body {width:auto;}}#sppb-addon-1502958298684 #btn-1502958298684.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502958298684 #btn-1502958298684.sppb-btn-custom { background-color:rgba(255, 255, 255, 1); color:rgba(32, 139, 243, 1);}#sppb-addon-1502958298684 #btn-1502958298684.sppb-btn-custom:hover { background-color:rgba(116, 250, 255, 1); color:rgba(32, 139, 243, 1);}</style>	</div>
</div>
</div></div></div></div></div></div></section><section id="sp-bottom-c"><div class="container"><div class="row"><div id="sp-bottom13" class="col-sm-3 col-md-3"><div class="sp-column "><div class="sp-module "><h3 class="sp-module-title">Certificate</h3><div class="sp-module-content">

<div class="custom"  >
	<img src="../images/Demo/elements/certified.png" alt="Certificate"></div>
</div></div></div></div><div id="sp-bottom14" class="col-sm-3 col-md-3"><div class="sp-column "><div class="sp-module "><h3 class="sp-module-title">Site Information</h3><div class="sp-module-content"><ul class="nav menu">
<li class="item-107"><a href="#" > Privacy Policy</a></li><li class="item-108"><a href="#" > Terms &amp; Conditions</a></li><li class="item-109"><a href="#" > Return Policy</a></li><li class="item-110"><a href="#" > Complaints Policy</a></li><li class="item-111"><a href="#" > Delivery Terms</a></li></ul>
</div></div></div></div><div id="sp-bottom15" class="col-sm-3 col-md-3"><div class="sp-column "><div class="sp-module "><h3 class="sp-module-title">Payment Methods</h3><div class="sp-module-content">

<div class="custom"  >
	<img src="../images/Demo/elements/payment-methods.png" alt="Payment Methods"></div>
</div></div></div></div><div id="sp-bottom16" class="col-sm-3 col-md-3"><div class="sp-column "><div class="sp-module "><h3 class="sp-module-title">Follow Us</h3><div class="sp-module-content"><div class="mod-sppagebuilder  sp-page-builder" data-module_id="100">
	<div class="page-content">
		<div id="section-id-1502960570801" class="sppb-section " ><div class="sppb-row-overlay"></div><div class="sppb-container-inner"><div class="sppb-row"><div class="sppb-col-md-12" id="column-wrap-id-1502960570802"><div id="column-id-1502960570802" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1502960952306" class="clearfix" ><div class="sppb-text-center"><a target="_blank" href="#" id="btn-1502960952306" class="sppb-btn  sppb-btn-custom sppb-btn-lg sppb-btn-block sppb-btn-round"><i class="fa fa-facebook"></i> Facebook</a></div></div><div id="sppb-addon-1502961127801" class="clearfix" ><div class="sppb-text-center"><a target="_blank" href="#" id="btn-1502961127801" class="sppb-btn  sppb-btn-custom sppb-btn-lg sppb-btn-block sppb-btn-round"><i class="fa fa-twitter"></i> Twitter</a></div></div><div id="sppb-addon-1502961303142" class="clearfix" ><div class="sppb-text-center"><a target="_blank" href="#" id="btn-1502961303142" class="sppb-btn  sppb-btn-custom sppb-btn-lg sppb-btn-block sppb-btn-round"><i class="fa fa-google-plus"></i> Google +</a></div></div><div id="sppb-addon-1502961303149" class="clearfix" ><div class="sppb-text-center"><a target="_blank" href="#" id="btn-1502961303149" class="sppb-btn  sppb-btn-custom sppb-btn-lg sppb-btn-block sppb-btn-round"><i class="fa fa-youtube"></i> YouTube</a></div></div></div></div></div></div></div></div><style type="text/css">.sp-page-builder .page-content #section-id-1504601283914{padding:70px 0px 70px 0px;margin:0px 0px 0px 0px;}.sp-page-builder .page-content #section-id-1502960570801{padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;}#sppb-addon-1502960952306 #btn-1502960952306.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502960952306 #btn-1502960952306.sppb-btn-custom { background-color:rgba(77, 112, 168, 1); color:#ffffff;}#sppb-addon-1502960952306 #btn-1502960952306.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}#sppb-addon-1502961127801 {margin:10px 0px 0px 0px;}#sppb-addon-1502961127801 #btn-1502961127801.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502961127801 #btn-1502961127801.sppb-btn-custom { background-color:rgba(0, 187, 242, 1); color:#ffffff;}#sppb-addon-1502961127801 #btn-1502961127801.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}#sppb-addon-1502961303142 {margin:10px 0px 0px 0px;}#sppb-addon-1502961303142 #btn-1502961303142.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502961303142 #btn-1502961303142.sppb-btn-custom { background-color:rgba(227, 64, 29, 1); color:#ffffff;}#sppb-addon-1502961303142 #btn-1502961303142.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}#sppb-addon-1502961303149 {margin:10px 0px 0px 0px;}#sppb-addon-1502961303149 #btn-1502961303149.sppb-btn-custom{font-weight:bold;}#sppb-addon-1502961303149 #btn-1502961303149.sppb-btn-custom { background-color:rgba(203, 55, 55, 1); color:#ffffff;}#sppb-addon-1502961303149 #btn-1502961303149.sppb-btn-custom:hover { background-color:rgba(36, 36, 36, 0.5); color:#ffffff;}</style>	</div>
</div>
</div></div></div></div></div></div></section><footer id="sp-footer"><div class="container"><div class="row"><div id="sp-footer1" class="col-sm-12 col-md-12"><div class="sp-column "><span class="sp-copyright">© 2018 Your Company. All Rights Reserved. Designed By DHtheme</span></div></div></div></div></footer>                        </div> <!-- /.body-innerwrapper -->
                    </div> <!-- /.body-innerwrapper -->

                    <!-- Off Canvas Menu -->
                    <div class="offcanvas-menu">
                        <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
                        <div class="offcanvas-inner">
                                                          <div class="sp-module "><div class="sp-module-content"><ul class="nav menu">
<li class="item-101"><a href="../index-2.html" > Home</a></li><li class="item-102  deeper parent"><a href="shop.html" > Shop</a><span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-102"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-102"><li class="item-160  divider deeper parent"><a class="separator ">Categories</a>
<span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-160"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-160"><li class="item-153"><a href="shop/categories/milk.html" > Milk</a></li><li class="item-154"><a href="shop/categories/cheese.html" > Cheese</a></li><li class="item-155"><a href="shop/categories/butter.html" > Butter</a></li></ul></li></ul></li><li class="item-103"><a href="about-us.html" > About us</a></li><li class="item-104"><a href="blog.html" > Blog</a></li><li class="item-105  current active"><a href="contact.html" > Contact</a></li><li class="item-116  divider deeper parent"><a class="separator ">Features</a>
<span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-116"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-116"><li class="item-161  divider deeper parent"><a class="separator ">Features</a>
<span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-161"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-161"><li class="item-165"><a href="features/features/feature-box.html" > Feature Box</a></li><li class="item-169"><a href="features/features/buttons.html" > Buttons</a></li><li class="item-171"><a href="features/features/accordions-tabs.html" > Accordions &amp; Tabs</a></li><li class="item-172"><a href="features/features/progress-bars-pies.html" > Progress Bars &amp; Pies</a></li><li class="item-176"><a href="features/features/pricing-tables.html" > Pricing Tables</a></li><li class="item-179"><a href="features/features/team-testimonials.html" > Team &amp; Testimonials</a></li></ul></li><li class="item-162  divider deeper parent"><a class="separator ">More Features</a>
<span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-162"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-162"><li class="item-170"><a href="features/more-features/animated-numbers-and-countdown.html" > Animated Numbers &amp; Countdown</a></li><li class="item-149"><a href="features/more-features/typography.html" > Typography</a></li><li class="item-156"><a href="features/more-features/module-variations.html" > Module Variations</a></li><li class="item-166"><a href="features/more-features/module-positions.html" > Module Positions</a></li><li class="item-167"><a href="../index114a.html?tmpl=comingsoon" > Coming Soon</a></li><li class="item-168"><a href="features/more-features/404-error-page.html" > 404 Error Page</a></li></ul></li><li class="item-163  divider deeper parent"><a class="separator ">Joomla &amp; Virtuemart</a>
<span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-163"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-163"><li class="item-164"><a href="features/joomla-virtuemart/single-article.html" > Single Article</a></li><li class="item-173"><a href="blog.html" > Category Blog</a></li><li class="item-174"><a href="features/joomla-virtuemart/joomla-registration.html" > Joomla! Registration</a></li><li class="item-175"><a href="features/joomla-virtuemart/search.html" > Search</a></li><li class="item-177"><a href="features/joomla-virtuemart/single-product.html" > Single Product</a></li><li class="item-178"><a href="shop/categories/milk.html" > Product Category</a></li></ul></li></ul></li></ul>
</div></div>
                                                    </div> <!-- /.offcanvas-inner -->
                    </div> <!-- /.offcanvas-menu -->

                    
                    
                    <!-- Preloader -->
                    
                    <!-- Go to top -->
                                            <a href="javascript:void(0)" class="scrollup">&nbsp;</a>
                    
                </body>
                
<!-- Mirrored from dhtheme.com/buttermilk/index.php/contact by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Sep 2019 13:53:59 GMT -->
</html>
