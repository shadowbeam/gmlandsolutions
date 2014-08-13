<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template-case-studies.php
* @Package:		GetSimple
* @Action:		GMLandSolutions theme for GetSimple CMS
*
*****************************************************/

# Include the header template
include('header.inc.php'); 
?>


<article>
	<section class="container">
		<div id="section-header" class="full-width">
			<img src="<?php get_theme_url(); ?>/assets/img/default-header.png"/>
			<h1 class="title"><?php get_page_title(); ?></h1>

		</div>

		<div id="section-content" >

			<div id="side-menu" class="no-pad">
				<?php go_child_menu(); ?>
			</div>

			<div  class="">
				<?php get_page_content(); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>

</article>


</div>


<!-- include the footer template -->
<?php include('footer.inc.php'); ?>