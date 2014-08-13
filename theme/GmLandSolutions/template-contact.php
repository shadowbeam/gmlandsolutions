<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template-contact.php
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
			<div class="col-md-6">
				<?php get_page_content(); ?>

			</div>




			<div id="contact-form" class="col-md-6 clearfix">  


				<ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : 'hidden'; ?>">  
					<li id="info">There were some problems with your form submission:</li>  
					<?php  
					if(isset($cf['errors']) && count($cf['errors']) > 0) :  
						foreach($cf['errors'] as $error) :  
							?>  
						<li><?php echo $error ?></li>  
						<?php  
						endforeach;  
						endif;  
						?>  
					</ul>  


					<div id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : 'hidden'; ?>">

						<h1>Thanks Your Email Was Sent Successfully</h1>

						<p>For more immediate enquiries please telephone: 07950 023813 or 01896 833161. </p>
					</div>  


					<form role="form" class="<?php echo ($sr && $cf['form_ok']) ? 'invisible' : ''; ?>" method="post" action="assets/php/form-process.php">  
						<div class="form-group">
							<label for="name">Name: <span class="required">*</span></label>  
							<input class="form-control" type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="" required="required" autofocus="autofocus" />  
							<div class="clear"></div>
						</div>

						<div class="form-group">
							<label for="email">Email Address: <span class="required">*</span></label>  
							<input class="form-control" type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="" required="required" />
							<div class="clear"></div>
						</div>

						<div class="form-group">
							<label for="telephone">Telephone: </label>  
							<input class="form-control" type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" /> 
							<div class="clear"></div>
						</div>

						<div class="form-group">
							<label for="town">Town/City: <span class="required">*</span></label>  
							<input class="form-control" type="text" id="town" name="town" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['town'] : '' ?>" min="1" required="required" />  

							<div class="clear"></div>
						</div>

						<div class="form-group">

							<label for="postcode">Postcode:</label>  
							<input class="form-control" type="text" id="postcode" name="postcode" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['postcode'] : '' ?>" /> 

							<div class="clear"></div>
						</div>

						<div class="form-group">
							<label for="message">Message:<span class="required">*</span></label>  
							<textarea class="form-control" rows="3" id="message" name="message"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>  

							<span id="loading"></span>  

							<div class="clear"></div>
						</div>

						<div class="form-group">
							<input class="form-control" type="submit" value="Send" id="submit-button" />  

							<div class="clear"></div>
						</div>

					</form>  


					<?php 
					unset($_SESSION['cf_returndata']); 
					?>  


				</div>
				<div class="clearfix"></div>

				<div class="col-lg-12" style="height:350px;">
					<iframe height="100%" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2251.502643848808!2d-3.172259!3d55.645466!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfb3a6807e02276a2!2sGM+Land+Solutions!5e0!3m2!1sen!2suk!4v1407246471931" width="100%"></iframe>
				</div>

			</div>
		</section>

	</article>


</div>


<!-- include the footer template -->
<?php include('footer.inc.php'); ?>