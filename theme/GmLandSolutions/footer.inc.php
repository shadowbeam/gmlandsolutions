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
		<div class="col-sm-7">
			<div class="contact-info">
				<span class='address'><i class='icon icon-home'></i>GM Land Solutions, 9 Eastgate, Peebles, EH45 8AD </span>
				<span class='phone'><i class='icon icon-phone'></i>01896 833161</span>
				<span class='mobile'><i class='icon icon-mobile'></i>07950 023813</span>
				<span class='email'><i class='icon icon-mail'></i><a href="mailto:enquiries@tglg.co.uk">enquiries@tglg.co.uk</a></span>
			</div>			
		</div>
		<div class="credits col-sm-5">
			<!-- Go to your Addthis.com Dashboard to update any options -->
			<div class="addthis_custom_follow"></div>
			Copyright &copy; <?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a><br>
			Designed by <a href="http://www.allanwatson.me" >Allan Watson</a> &middot; <?php get_site_credits(); ?></div>
		</div>

		<div class="clearfix"></div>
	</footer>


	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script src="http://s7.addthis.com/js/300/addthis_widget.js" type="text/javascript"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- 	<script>$('button').click(function() {$(this).toggleClass('pressed');});</script>
 -->	
	<script src="<?php get_theme_url(); ?>/assets/js/bootstrap.min.js"></script>


</body>
</html>