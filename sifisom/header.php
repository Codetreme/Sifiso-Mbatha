<?php
/**
 * The header section

 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en-US"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
	<![endif]-->

	<title>Sifiso Mbatha</title>
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/style.css">
	<link rel='stylesheet' id='contact-form-7-css'  href='<?= get_template_directory_uri() ?>/assets/css/contactform.css' type='text/css' media='all' />


	<link rel='stylesheet' id='be-themes-woocommerce-css-css'  href='<?= get_template_directory_uri() ?>/assets/css/woocommerce.css' type='text/css' media='all' />
	<link rel='stylesheet' id='rs-plugin-settings-css'  href='<?= get_template_directory_uri() ?>/assets/css/settings.css' type='text/css' media='all' />
	<link rel='stylesheet' id='be-themes-layout-css'  href='<?= get_template_directory_uri() ?>/assets/css/layout.css' type='text/css' media='all' />
	<link rel='stylesheet' id='be-themes-shortcodes-css'  href='<?= get_template_directory_uri() ?>/assets/css/shortcodes.css' type='text/css' media='all' />
	<link rel='stylesheet' id='be-themes-css-css'  href='<?= get_template_directory_uri() ?>/assets/css/theme-options.css' type='text/css' media='all' />
	<link rel='stylesheet' id='fontello-css'  href='<?= get_template_directory_uri() ?>/assets/css/be-themes.css' type='text/css' media='all' />
	<link rel='stylesheet' id='fontello-css2'  href='<?= get_template_directory_uri() ?>/assets/css/be-themes-embedded.css' type='text/css' media='all' />
	<link rel='stylesheet' id='fontello-css3'  href='<?= get_template_directory_uri() ?>/assets/css/font-awesome.css' type='text/css' media='all' />
	<link rel='stylesheet' id='be-lightbox-css-css'  href='<?= get_template_directory_uri() ?>/assets/css/magnific-popup.css' type='text/css' media='all' />
	<link rel='stylesheet' id='be-flexslider-css'  href='<?= get_template_directory_uri() ?>/assets/css/flexslider.css' type='text/css' media='all' />
	<link rel='stylesheet' id='be-animations-css'  href='<?= get_template_directory_uri() ?>/assets/css/animate-custom.css' type='text/css' media='all' />
	<link rel='stylesheet' id='be-animations-css2'  href='<?= get_template_directory_uri() ?>/assets/css/animation.css' type='text/css' media='all' />
	<link rel='stylesheet' id='be-slider-css'  href='<?= get_template_directory_uri() ?>/assets/css/be-slider.css' type='text/css' media='all' />
	<link rel='stylesheet' id='woocommerce_chosen_styles-css'  href='<?= get_template_directory_uri() ?>/assets/css/chosen.css' type='text/css' media='all' />
		
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/assets/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?= get_template_directory_uri() ?>/assets/images/favicon.ico" type="image/x-icon">

	<script type='text/javascript' src='<?= get_template_directory_uri() ?>/assets/js/jquery.js'></script>
	<script type='text/javascript' src='<?= get_template_directory_uri() ?>/assets/js/jquery-migrate.min.js'></script>
	<script type='text/javascript' src='<?= get_template_directory_uri() ?>/assets/js/modernizr-2.6.2.min.js'></script>
<?php wp_head()?>
</head>
<body class="page page-template-default transparent-sticky header-transparent" <?php body_class()?>>	

<div class="sb-slidebar sb-right">
	<div id="sb-slidebar-content" class="sb-slidebar-content ajaxable">
		<div id="logo-sidebar">
			<a href="index.html"><img class="transparent-logo dark-scheme-logo" src="" alt=""/></a>
		</div>
		<div class="widget_text widget">
			<h6>Follow Me</h6>
			<div class="textwidget">
				<p>
					<a href="https://www.facebook.com/iamsifisombatha" class="icon-shortcode " data-animation="fadeIn"><i class="font-icon icon-facebook small circle" style="border-style: solid; border-width: 1px; border-color: #fff; background-color: inherit; color: #fff;" data-animation="fadeIn" data-bg-color="inherit" data-hover-bg-color="#26cda4" data-color="#fff" data-hover-color="#fff" data-border-color="#fff" data-hover-border-color="#26cda4"></i></a>

					<a href="#" class="icon-shortcode " data-animation="fadeIn"><i class="font-icon icon-twitter small circle" style="border-style: solid; border-width: 1px; border-color: #fff; background-color: inherit; color: #fff;" data-animation="fadeIn" data-bg-color="inherit" data-hover-bg-color="#26cda4" data-color="#fff" data-hover-color="#fff" data-border-color="#fff" data-hover-border-color="#26cda4"></i></a>

					<a href="#" class="icon-shortcode " data-animation="fadeIn"><i class="font-icon icon-linkedin small circle" style="border-style: solid; border-width: 1px; border-color: #fff; background-color: inherit; color: #fff;" data-animation="fadeIn" data-bg-color="inherit" data-hover-bg-color="#26cda4" data-color="#fff" data-hover-color="#fff" data-border-color="#fff" data-hover-border-color="#26cda4"></i></a>

					<a href="#" class="icon-shortcode " data-animation="fadeIn"><i class="font-icon icon-youtube small circle" style="border-style: solid; border-width: 1px; border-color: #fff; background-color: inherit; color: #fff;" data-animation="fadeIn" data-bg-color="inherit" data-hover-bg-color="#26cda4" data-color="#fff" data-hover-color="#fff" data-border-color="#fff" data-hover-border-color="#26cda4"></i></a>
				</p>
				<p>
					Copyright 2018 Sifiso Mbatha, All Rights Reserved.
				</p>
			</div>
		</div>
	</div>
</div>

<div id="main-wrapper">
	<div id="main" class="ajaxable layout-wide">
		<header id="header">
		<div id="header-inner-wrap" class="">
			<div id="header-wrap" class="be-wrap clearfix" data-default-height="122" data-sticky-height="58">
				<div id="logo">
					<a href="index.html"><img class="transparent-logo dark-scheme-logo" src="" alt=""/><img class="transparent-logo light-scheme-logo" src="" alt=""/><img class="normal-logo" src="<?php // get_template_directory_uri() ?>/assets/images/logo.png" alt=""/></a>
				</div>

				<div class="header-controls">

					<div class="menu-controls sliderbar-menu-controller right" title="Sidebar Menu Controller">
						<i class="fa fa-thumbs-up" style="color:#fff"></i>
					</div>


					<div class="mobile-nav-controller-wrap">
						<div class="menu-controls mobile-nav-controller" title="Mobile Menu Controller">
							<i class="font-icon icon-menu"></i>
						</div>
					</div>
				</div>

				<nav id="navigation" class="clearfix">
				
					<?php 
						wp_nav_menu(
							array(
								'menu'=>'Main Menu',
								'container'=>false,
								'menu-class'=>'menu left',
								'menu_id'=>''
							)
						);
					?>
				
				</nav>
				<!-- End Navigation -->
			</div>

			<!-- Navigation Mobile -->
			 <!-- <div class="clearfix">
				
					<?php 
						// wp_nav_menu( array(
						// 	'menu'=>'Main Menu',
						// 	'container'=>false,
						// 	'menu-class'=>'mobile-menu',
						// 	'menu_id'=>''
						// ));
					?>
			
			</div>  -->
		</div>
		</header>
		<!-- END HEADER -->

		<div class="header-hero-section" id="hero-section">

			<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullscreen-container" style="background-color:#E9E9E9;padding:0px;">
				<!-- START REVOLUTION SLIDER 4.6.5 fullscreen mode -->
				<div id="rev_slider_3_1" class="rev_slider fullscreenbanner" style="display:none;">
					<ul>
						<!-- SLIDE  -->
						<li data-transition="parallaxtobottom" data-slotamount="0" data-masterspeed="1000" data-saveperformance="off">
						<!-- MAIN IMAGE -->
						<img src="<?= get_template_directory_uri() ?>/assets/images/bg1.jpg" alt="ipad-namo" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYERS -->
						<!-- LAYER NR. 1 -->
						<div class="tp-caption only_white_large_prata sft tp-resizeme" data-x="20" data-y="100" data-speed="1300" data-start="500" data-easing="easeInOutBack" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8700" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
							Sifiso Mbatha
						</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption be_med_light_white sft tp-resizeme" data-x="20" data-y="200" data-speed="1300" data-start="900" data-easing="easeInOutBack" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8700" data-endspeed="300" style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">
							<br/>
							#KonkeKuyenzeka
						</div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption trans-but sft tp-resizeme" data-x="20" data-y="300" data-speed="1300" data-start="1300" data-easing="easeInOutBack" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8700" data-endspeed="300" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
							<a class="be-shortcode mediumbtn be-button rounded " href="#" style="border-style: solid; background-color: #26cda4; color: rgb(255, 255, 255); border-color: #26cda4;" data-animation="fadeIn" data-bg-color="#26cda4" data-hover-bg-color="#26cda4" data-color="#fff" data-hover-color="#fff" data-icon-color="#fff" data-hover-icon-color="#fff" data-border-color="#26cda4" data-hover-border-color="#26cda4">SAY HELLO</a>
						</div>
						</li>
						<!-- SLIDE  -->
						<li data-transition="fadetobottomfadefromtop" data-slotamount="0" data-masterspeed="1000" data-saveperformance="off">
						<!-- MAIN IMAGE -->
						<img src="<?= get_template_directory_uri() ?>/assets/images/bg5.jpg" alt="hipster-mobile" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYERS -->
						<!-- LAYER NR. 1 -->
						<div class="tp-caption only_white_large_prata sfb tp-resizeme" data-x="left" data-hoffset="-5" data-y="48" data-speed="1500" data-start="500" data-easing="easeInOutBack" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8700" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
						Music & Togetherness
						</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption be_med_light_white sfb tp-resizeme" data-x="center" data-hoffset="-84" data-y="150" data-speed="1500" data-start="800" data-easing="easeInOutBack" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8700" data-endspeed="300" style="z-index: 6; max-width: auto; max-height: auto; white-space: normal;">
							#KonkeKuyenzeka Crew
						</div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption trans-but sfb tp-resizeme" data-x="733" data-y="290" data-speed="1300" data-start="1100" data-easing="easeInOutBack" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8700" data-endspeed="300" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
							<a class="be-shortcode mediumbtn be-button rounded " href="#" style="border-style: solid; background-color: rgb(0, 0, 0); color: rgb(255, 255, 255); border-color: rgb(0,0, 0);" data-animation="fadeIn" data-bg-color="#26cda4" data-hover-bg-color="#26cda4" data-color="#fff" data-hover-color="#fff" data-icon-color="#fff" data-hover-icon-color="#fff" data-border-color="#26cda4" data-hover-border-color="#26cda4">SAY HELLO</a>
						</div>
						</li>
						<!-- SLIDE  -->
						<li data-transition="fadetotopfadefrombottom" data-slotamount="7" data-masterspeed="1000" data-saveperformance="off">
						<!-- MAIN IMAGE -->
						<img src="<?= get_template_directory_uri() ?>/assets/images/bg3.jpg" alt="btw" data-bgposition="left bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYERS -->
						<!-- LAYER NR. 1 -->
						<div class="tp-caption only_white_large_prata sft tp-resizeme" data-x="center" data-hoffset="21" data-y="center" data-voffset="-139" data-speed="1500" data-start="900" data-easing="easeInOutBack" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
							Hand Crafted Sounds
						</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption be_med_light_white_new sft tp-resizeme" data-x="402" data-y="157" data-speed="1500" data-start="1200" data-easing="easeInOutBack" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">
							Energized <br/>
							and Happy always
						</div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption trans-but sfr tp-resizeme" data-x="636" data-y="291" data-speed="1000" data-start="1200" data-easing="easeInOutBack" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
							<a class="be-shortcode mediumbtn be-button rounded " href="#" style="background-color: rgb(38, 205, 164); color: rgb(255, 255, 255); border: 2px solid rgb(38, 205, 164);" data-animation="fadeIn" data-bg-color="#26cda4" data-hover-bg-color="#26cda4" data-color="#fff" data-hover-color="#fff" data-icon-color="#fff" data-hover-icon-color="#fff" data-border-color="#26cda4" data-hover-border-color="#26cda4">INVITE ME</a>
						</div>
						<!-- LAYER NR. 4 -->
						<div class="tp-caption trans-but sfl tp-resizeme" data-x="466" data-y="291" data-speed="1200" data-start="1500" data-easing="easeInOutBack" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">
							<a class="be-shortcode mediumbtn be-button rounded" href="#" style="border: 2px solid #fff; background-color:inherit; color: #fff;" data-animation="fadeIn" data-bg-color="inherit" data-hover-bg-color="#26cda4" data-color="#ffffff" data-hover-color="#ffffff" data-icon-color="#fff" data-hover-icon-color="#fff" data-border-color="#fff" data-hover-border-color="#26cda4">SEE MORE</a>
						</div>
						</li>
						<!-- SLIDE  -->
						<li data-transition="fadetoleftfadefromright" data-slotamount="7" data-masterspeed="1000" data-saveperformance="off">
						<!-- MAIN IMAGE -->
						<img src="<?= get_template_directory_uri() ?>/assets/images/bg4.jpg" alt="looking-at-the-sea" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYERS -->
						<!-- LAYER NR. 1 -->
						<div class="tp-caption only_white_large_prata sfr tp-resizeme" data-x="4" data-y="100" data-speed="800" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8700" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
							I am Original
						</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption be_med_light_white sfl tp-resizeme" data-x="8" data-y="192" data-speed="800" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8700" data-endspeed="300" style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">
							Sifiso Mbatha is an Original Artist<br/> Everything comes from the heart
						<!-- LAYER NR. 3 -->
						<div class="tp-caption trans-but sfr tp-resizeme" data-x="9" data-y="335" data-speed="800" data-start="1100" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8700" data-endspeed="300" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
							<a class="be-shortcode mediumbtn be-button rounded" href="#" style="border: 2px solid rgb(255, 255, 255); background-color: inherit; color: rgb(255, 255, 255);" data-animation="fadeIn" data-bg-color="inherit" data-hover-bg-color="#26cda4" data-color="#ffffff" data-hover-color="#ffffff" data-icon-color="#fff" data-hover-icon-color="#fff" data-border-color="#ffffff" data-hover-border-color="#26cda4">Read About</a>
						</div>
						</li>
					</ul>
					<div class="tp-bannertimer">
					</div>
				</div>
			</div>
			<!-- END REVOLUTION SLIDER -->
		</div>


