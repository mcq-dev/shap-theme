<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
	<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
<?php if ( has_custom_logo() ) : ?>
	<div class="site-logo"><?php the_custom_logo(); ?></div>
<?php endif; ?>
<?php $blog_info = get_bloginfo( 'name' ); ?>
<?php if ( ! empty( $blog_info ) ) : ?>
	<?php if ( is_front_page() && is_home() ) : ?>
		<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/SHA_logo.png"><h1><?php bloginfo( 'name' ); ?></h1></a>
	<?php else : ?>
		<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/SHA_logo.png"><p><?php bloginfo( 'name' ); ?></p></a>

	<?php endif; ?>
<?php endif; ?>

	<?php
	$description = get_bloginfo( 'description', 'display' );
	if ( $description || is_customize_preview() ) :
		?>
			<p class="site-description">
				<?php echo $description; ?>
			</p>
	<?php endif; ?>			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'     => 'nav-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
			?> 
		<a id="menu-toggler" data-class="menu-active" class="hamburger">
		  <span class="hamburger-line hamburger-line-top"></span>
		  <span class="hamburger-line hamburger-line-middle"></span>
		  <span class="hamburger-line hamburger-line-bottom"></span>
		</a>			
		</nav><!-- #site-navigation -->
	<?php endif; ?>
	<?php if ( has_nav_menu( 'social' ) ) : ?>
		<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentynineteen' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>' . twentynineteen_get_icon_svg( 'link' ),
					'depth'          => 1,
				)
			);
			?>
		</nav><!-- .social-navigation -->
	<?php endif; ?>
