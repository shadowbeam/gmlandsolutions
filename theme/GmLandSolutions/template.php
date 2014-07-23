<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		GMLandSolutions theme for GetSimple CMS
*
*****************************************************/

# Include the header template
include('header.inc.php'); 
?>


	<article>
		<section class="container">

			<!-- title and content -->
			<h1><?php get_page_title(); ?></h1>
			<?php get_page_content(); ?>
		</section>

	</article>





<!-- include the footer template -->
<?php include('footer.inc.php'); ?>