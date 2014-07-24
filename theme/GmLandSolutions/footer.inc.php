<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 		footer.inc.php
* @Package:		GetSimple
* @Action:		GMLandSolutions theme for GetSimple CMS
*
*****************************************************/
?>

<!-- site footer -->
<footer class="clearfix" >

	<?php get_footer(); ?>

	<div class="container">
		<div class="left"></div>
		<div class="pull-right">
			<?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a><br>
			Designed by <a href="http://www.allanwatson.me" >Allan Watson</a> &middot; <?php get_site_credits(); ?></div>
		</div>
	</footer>

</body>
</html>