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
	<link href="<?php get_theme_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/assets/css/bootstrap-theme.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/assets/css/font.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php get_header(); ?>

  </head>


  <body id="<?php get_page_slug(); ?>" >

  	<!-- site header -->
  	<header>
  		<div class="header">

  			<!-- logo/sitename -->
  			<a class="pull-left" href="<?php get_site_url(); ?>" id="logo" ><img src="<?php get_theme_url(); ?>/assets/img/logo.png"/></a>

  			<div id="contact-info" class="pull-right">
  				<span class='phone'>01896 833161 <i class='icon-phone'></i></span>
  				<span class='phone'>07950 023813<i class='icon-mobile'></i></span>
  				<span class='phone'>enquiries@tglg.co.uk<i class='icon-mail'></i></span>
  			</div>

  		</div>
  		<div class="soil-strip"></div>
  		<!-- main navigation -->
  		<nav id="main-nav">
  			<ul>
  				<?php get_nested_navigation(); ?>
  			</ul>
  		</nav>

  		<!-- breadcrumbs: only show when NOT on homepage -->
  		<p class="breadcrumbs" >
  			<span class="wrapper">
  				<a href="<?php get_site_url(); ?>">Home</a> &nbsp;&nbsp;&#149;&nbsp;&nbsp; <?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b><?php get_page_clean_title(); ?></b>
  			</span>
  		</p>

  	</header>
