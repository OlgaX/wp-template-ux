		</div><?php //END MAIN ?>

		<!--FOOTER-->
		<footer class="site_footer">
			<?php if (!is_page('order') && !is_page('preview') && has_nav_menu('footer')) : ?>
				<div class="site_footer-top">
					<div class="container">
						<div class="site_f-menu">
							<?php
								$nav_args = array(
									'theme_location'	=> 'footer',
									'container'			=> '',
									'depth'				=> 1
								);
								wp_nav_menu( $nav_args );
							?>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="site_footer-center">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="site_copyright">Copyright &copy; 2015 - <?php echo date("Y"); ?>, <?php bloginfo('name'); ?><br/> All rights reserved.</div>
						</div>
						<div class="col-md-4 text-center">
							<div class="site_payments"><img src="<?php bloginfo('template_url'); ?>/img/cards.png" alt=""></div>
						</div>
						<div class="col-md-4 text-right">
							<div class="site_f-phone"><img src="<?php bloginfo('template_url'); ?>/img/phone-footer.png" alt=""></div>
						</div>
					</div>
				</div>
			</div>
			<?php if (has_nav_menu('footer2')) : ?>
				<div class="site_footer-bottom">
					<div class="container">
						<div class="site_terms">
							<?php
								$nav_args = array(
									'theme_location'	=> 'footer2',
									'container'			=> '',
									'depth'				=> 1
								);
								wp_nav_menu( $nav_args );
							?>
						</div>
					</div>
				</div>
			<?php endif; ?>
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

		<?php if(function_exists('draw_exit_popup')) draw_exit_popup(); ?>

	</body>
</html>
