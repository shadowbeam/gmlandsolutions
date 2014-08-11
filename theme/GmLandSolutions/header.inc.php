<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			header.inc.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>

	
	<meta name="robots" content="index, follow">

	<link href="<?php get_theme_url(); ?>/assets/css/reset.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/assets/css/font.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/assets/css/asap.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/assets/css/style.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php get_header(); ?>


  </head>


  <body id="<?php get_page_slug(); ?>" class="<?php get_parent(); ?>" >
  	<div class="wrapper">
  		<!-- site header -->
  		<header>
  			<div id="tier-first" class="dark-soil">
  				<div class="container">

  					<a class="pull-left" href="<?php get_site_url(); ?>" id="logo" ><img src="<?php get_theme_url(); ?>/assets/img/logo.png"/></a>


  					<div class="contact-info pull-right">
  						<span class='phone'>01896 833161<i class='icon icon-phone'></i></span>
  						<span class='mobile'>07950 023813<i class='icon icon-mobile'></i></span>
  						<span class='email'><a href="mailto:enquiries@tglg.co.uk">enquiries@tglg.co.uk</a><i class='icon icon-mail'></i></span>
  					</div>


  					
  				</div>
  			</div>
  			<div class="soil-strip light-soil"></div>
  			<!-- main navigation -->
  			<nav id="main-nav" class="light-soil">
  				<div class="container">
  					<ul>
  						<?php get_nested_navigation(); ?>
  					</ul>
  				</div>

  				<?php go_child_menu(); ?>
  			</nav>


  		</header>
