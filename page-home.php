<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<div class="home-row image-filters-enabled">
	<?php

	/* Get all sticky posts */
	$sticky = get_option( 'sticky_posts' );

	/* Sort the stickies with the newest ones at the top */
	rsort( $sticky );

	/* Get the 5 newest stickies (change 5 for a different number) */
	$sticky = array_slice( $sticky, 0, 1 );

	$latest_blog_posts = new WP_Query( array( 'posts_per_page' => 1, 'post__in' => $sticky ) );

	if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<a href="<?php echo get_permalink(apply_filters('wpml_object_id', 485, 'page', true)); ?>" rel="bookmark">
	<div class="home-column left animated fadeInDown" style="background:url('<?php bloginfo('template_url'); ?>/images/left-2004.01-Sheikh Hilal -M.png'); background-position: center;
	background-repeat: no-repeat;
	background-size: cover;">
		<h2 class="entry-title-home"><?php _e('Read our stories','shap-theme-text'); ?></h2>
	</div>
</a>
 <?php endwhile; endif; ?>
 	<a href="<?php echo get_permalink(apply_filters('wpml_object_id', 821, 'page', true)); ?>" rel="bookmark">
		 <div class="home-column middle animated fadeInUp" style="background:url('<?php bloginfo('template_url'); ?>/images/middle-27-Andreas Beckermann Collection-bearb.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
			 <h2 class="entry-title-home"><?php _e('View our gallery','shap-theme-text'); ?></h2>		 
		</div>
	</a>
	<a href="<?php echo get_permalink(apply_filters('wpml_object_id', 489, 'page', true)); ?>" rel="bookmark">
		<div class="home-column right animated fadeInDown" style="background:url('<?php bloginfo('template_url'); ?>/images/map-home.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
		 	<h2 class="entry-title-home"><?php _e('Discover our map','shap-theme-text'); ?></h2>
		</div>
	</a>
</div>





<?php
get_footer();
