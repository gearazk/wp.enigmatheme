<!-- enigma Callout Section -->
<?php $wl_theme_options = weblizar_get_options(); ?>
<!-- Footer Widget Secton -->
<div class="enigma_footer_widget_area">	
	<div class="container">
		<div class="row row-eq-heigh">
			<div class="col-md-3 side-widget-col ">
			<?php
			if ( is_active_sidebar( 'footer-widget-area' ) ){
				dynamic_sidebar( 'footer-widget-area' );
			} else
			{
			$args = array(
			'before_widget' => '<div class="col-md-12 col-sm-12 enigma_footer_widget_column">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="enigma_footer_widget_title">',
			'after_title'   => '<div class="enigma-footer-separator"></div></div>' );
			the_widget('WP_Widget_Pages', null, $args);
			} ?>
			</div>
			<div class="col-md-9 ">
				<div class="row footer-top__row">
					<!-- ngRepeat: country in ['latvia', 'usa'] --><div data-ng-repeat="country in ['latvia', 'usa']" class="footer-top__column col-sm-6 ng-scope">
						<img src="https://resonance-capital.eu/img/branch-latvia.jpg" alt="" class="footer-top__img">
						<h3 data-translate="frontend.footer.latvia" class="footer-top__country red ng-scope">OPERATIONAL OFFICE IN LATVIA</h3>
						<p class="footer-top__text">
							<i class="footer-top__icon glph-point red"></i>
							<b data-translate="frontend.footer.address" class="footer-top__prop ng-scope">Address</b>
							<span data-translate="frontend.footer.latvia.address" class="ng-scope">4th floor, 57a Dzirnavu street, Riga, LV-1010</span>
						</p>
						<p class="footer-top__text">
							<i class="footer-top__icon glph-watches red"></i>
							<b data-translate="frontend.footer.time" class="footer-top__prop footer-top__prop_type_time ng-scope">Working hours</b>
							<span data-translate="frontend.footer.latvia.time" class="ng-scope">monday-friday from 8:30 to 17:30; <br> saturday-sunday are days off (UTC +03:00)</span>
						</p>
						<p class="footer-top__text">
							<i class="footer-top__icon glph-phone-call red"></i>
							<b data-translate="frontend.footer.phone" class="footer-top__prop ng-scope">Phone</b>
							<span data-translate="frontend.footer.latvia.phone" class="ng-scope">+371 6700 6471</span>
						</p>
						<p class="footer-top__text">
							<i class="footer-top__icon footer-top__icon_type_letter glph-letter red"></i>
							<b data-translate="frontend.footer.mail" class="footer-top__prop ng-scope">E-mail</b>
							<a href="mailto:support@resonance-capital.eu" data-translate="frontend.footer.latvia.mail" class="footer-top__link ng-scope">support@resonance-capital.eu</a>
						</p>
					</div><!-- end ngRepeat: country in ['latvia', 'usa'] --><div data-ng-repeat="country in ['latvia', 'usa']" class="footer-top__column col-sm-6 ng-scope">
						<img src="https://resonance-capital.eu/img/branch-usa.jpg" alt="" class="footer-top__img">
						<h3 data-translate="frontend.footer.usa" class="footer-top__country red ng-scope">OPERATIONAL OFFICE IN THE USA</h3>
						<p class="footer-top__text">
							<i class="footer-top__icon glph-point red"></i>
							<b data-translate="frontend.footer.address" class="footer-top__prop ng-scope">Address</b>
							<span data-translate="frontend.footer.usa.address" class="ng-scope">140 Broadway, Manhattan, New York, 10005</span>
						</p>
						<p class="footer-top__text">
							<i class="footer-top__icon glph-watches red"></i>
							<b data-translate="frontend.footer.time" class="footer-top__prop footer-top__prop_type_time ng-scope">Working hours</b>
							<span data-translate="frontend.footer.usa.time" class="ng-scope">monday-friday from 8:30 to 17:00;  <br>saturday-sunday are days off (UTC -04:00)</span>
						</p>
						<p class="footer-top__text">
							<i class="footer-top__icon glph-phone-call red"></i>
							<b data-translate="frontend.footer.phone" class="footer-top__prop ng-scope">Phone</b>
							<span data-translate="frontend.footer.usa.phone" class="ng-scope">+1 929 214 1192</span>
						</p>
						<p class="footer-top__text">
							<i class="footer-top__icon footer-top__icon_type_letter glph-letter red"></i>
							<b data-translate="frontend.footer.mail" class="footer-top__prop ng-scope">E-mail</b>
							<a href="mailto:support@resonance-capital.eu" data-translate="frontend.footer.usa.mail" class="footer-top__link ng-scope">support@resonance-capital.eu</a>
						</p>
					</div><!-- end ngRepeat: country in ['latvia', 'usa'] -->
				</div>
			</div>
		</div>
	</div>
</div>
<div class="enigma_footer_area">
		<div class="container">
			<div class="col-md-12">
			<p class="enigma_footer_copyright_info wl_rtl" >
			<?php if($wl_theme_options['footer_customizations']) { echo esc_attr($wl_theme_options['footer_customizations']); }
			if($wl_theme_options['developed_by_text']) { echo "|" .esc_attr($wl_theme_options['developed_by_text']); } ?>
			<a target="_blank" rel="nofollow" href="<?php if($wl_theme_options['developed_by_link']) { echo esc_url($wl_theme_options['developed_by_link']); } ?>"><?php if($wl_theme_options['developed_by_weblizar_text']) { echo esc_attr($wl_theme_options['developed_by_weblizar_text']); } ?></a></p>
			<?php if($wl_theme_options['footer_section_social_media_enbled'] == '1') { ?>
			<div class="enigma_footer_social_div">
				<ul class="social">
					<?php if($wl_theme_options['fb_link']!='') { ?>
					   <li class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><a  href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"><i class="fa fa-facebook"></i></a></li>
					<?php } if($wl_theme_options['twitter_link']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="<?php echo esc_url($wl_theme_options['twitter_link']) ; ?>"><i class="fa fa-twitter"></i></a></li>				
					<?php } if($wl_theme_options['linkedin_link']!='') { ?>
					<li class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><a href="<?php echo esc_url($wl_theme_options['linkedin_link']) ; ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php } if($wl_theme_options['youtube_link']!='') { ?>
					<li class="youtube" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"><i class="fa fa-youtube"></i></a></li>
	                <?php } if($wl_theme_options['gplus']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="top" title="gplus"><a href="<?php echo esc_url($wl_theme_options['gplus']) ; ?>"><i class="fa fa-google-plus"></i></a></li>
	                <?php } if($wl_theme_options['instagram']!='') { ?>
					<li class="facebook" data-toggle="tooltip" data-placement="top" title="instagram"><a href="<?php echo esc_url($wl_theme_options['instagram']) ; ?>"><i class="fa fa-instagram"></i></a></li>
	                <?php } if($wl_theme_options['vk_link']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="top" title="vk"><a href="<?php echo esc_url($wl_theme_options['vk_link']) ; ?>"><i class="fa fa-vk"></i></a></li>
	                <?php } if($wl_theme_options['qq_link']!='') { ?>
					<li class="youtube" data-toggle="tooltip" data-placement="top" title="qq"><a href="<?php echo esc_url($wl_theme_options['qq_link']) ; ?>"><i class="fa fa-qq"></i></a></li>
	                <?php } if($wl_theme_options['whatsapp_link']!='') { ?>
					<li class="linkedin" data-toggle="tooltip" data-placement="top" title="whatsapp"><a href="tel:<?php echo esc_attr($wl_theme_options['whatsapp_link']) ; ?>""><i class="fa fa-whatsapp"></i></a></li>
	                <?php } ?>
				</ul>
			</div>
			<?php } ?>			
			</div>		
		</div>		
</div>	
<!-- /Footer Widget Secton -->
</div>
<a href="#" title="Go Top" class="enigma_scrollup" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php get_template_part('google', 'font'); ?>
<?php wp_footer(); ?>
</body>
</html>