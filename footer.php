<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	
		<div class="site-info">
			<div class="footer-sidebars">
				<div id="footer-sidebar1">
					<h4><?php _e('A PROJECT OF','shap-theme-text'); ?>:</h4>
					<a target="_blank" href="https://www.smb.museum/museen-und-einrichtungen/museum-fuer-islamische-kunst/home.html">
						<div class="img-wrapper">
							<img src="<?php bloginfo('template_url'); ?>/images/project1.png">
						</div>
					</a>
					<a target="_blank" href="https://www.dainst.org/projekt/-/project-display/199951">
						<div class="img-wrapper">
							<img src="<?php bloginfo('template_url'); ?>/images/project2.png">
						</div>
					</a>
				</div>
				<div id="footer-sidebar2">
					<h4><?php _e('FUNDED BY','shap-theme-text'); ?>:</h4>
					<div class="footer-sidebar2-group">
						<div class="img-wrapper">
							<a target="_blank" href="https://www.auswaertiges-amt.de/en">
								<img src="<?php bloginfo('template_url'); ?>/images/founded1.png">
							</a>
						</div>
						<div class="img-wrapper">
							<a target="_blank" href="https://mellon.org/">
								<img src="<?php bloginfo('template_url'); ?>/images/founded2.png">
							</a>
						</div>
					</div>
					<div class="img-wrapper">
						<a target="_blank" href="https://www.gerda-henkel-stiftung.de/">
							<img src="<?php bloginfo('template_url'); ?>/images/founded3.png">
						</a>
					</div>
				</div>
				<div id="footer-sidebar3">
					<h4><?php _e('MANAGED BY','shap-theme-text'); ?>:</h4>
					<a target="_blank" href="http://www.freunde-islamische-kunst-pergamonmuseum.de/index.php?de">
						<div class="img-wrapper">
							<img src="<?php bloginfo('template_url'); ?>/images/FMIK Logo_2019_fin.png">
						</div>
					</a>
				</div>
			</div>
		</div><!-- .site-info -->
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
