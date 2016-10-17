		</div><?php //END MAIN ?>

		<!--FOOTER-->

		<footer class="footer">
			<div class="footer__top">
				<div class="container">
					<div class="row valing">
						<div class="col-md-6 col-md-push-3">
							<div class="footer__col-1">
								<?php if (has_nav_menu('footer')) : ?>
									<div class="footer__menu">
										<?php
											$nav_args = array(
												'theme_location'	=> 'footer',
												'container'			=> '',
												'depth'				=> 1
											);
											wp_nav_menu( $nav_args );
										?>
									</div>
							<?php endif; ?>
							</div>
						</div>
						<div class="col-sm-6 col-sm-push-6 col-md-3 col-md-push-3">
							<div class="footer__col-2">
								<div class="footer__phone"><img src="<?php bloginfo('template_url'); ?>/img/phone-footer.png" alt=""></div>
								<div class="footer__payments"><img src="<?php bloginfo('template_url'); ?>/img/cards.png" alt=""></div>
							</div>
						</div>
						<div class="col-sm-6 col-sm-pull-6 col-md-3 col-md-pull-9">
							<div class="footer__col-3">
								<div class="footer__logo">
									<a href="<?php echo home_url(); ?>">
										<img src="<?php bloginfo('template_url'); ?>/img/logo-footer.png" alt="<?php bloginfo('name'); ?>"/>
									</a>
								</div>
								<?php get_template_part('inc', 'social-buttons'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer__bottom">
				<div class="container">
					<div class="copyright">Copyright &copy; 2015 - <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All rights reserved.</div>
					<div class="footer__terms">
						<a href="#" data-crm-widget="termsPopup" data-tab="tos">Terms And Conditions</a>
						<a href="#" data-crm-widget="termsPopup" data-tab="privacy">Policy</a>
					</div>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>

		<script>
			$(function () {
				ZopimClear(".<?php
					$site_url = get_site_url();
					$find = array( 'http://', 'https://', '/', 'track.' );
					$replace = '';
					$output = str_replace( $find, $replace, $site_url );
					echo $output;
				?>");
			});
		</script>

	</body>
</html>
