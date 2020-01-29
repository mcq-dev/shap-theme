<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>

	<div class="entry-content">
		<?php 
		$tags = get_the_tags();
		if ($tags) {
			?>
			<div class="tags">
			<?php
			foreach ($tags as $tag) {
				?> 
				<span class="tag"><?php echo $tag->name; if (count($tags) > 1) {
					?>
					|
					<?php
					}?>  
				</span>
				<?php
			}
			?>
			</div>
			<?php
		}
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);
		?>

				<div class="social-icons">
					<h3 class="social-icons-headline"><?php _e('Share this story','shap-theme-text'); ?></h3>
					<ul>
						<li>
							<a class="icon icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url ?>" target="_blank" >
								<svg id="Icon_awesome-facebook-square" data-name="Icon awesome-facebook-square" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20">
									<path id="Icon_awesome-facebook-square-2" data-name="Icon awesome-facebook-square" d="M17.857,2.25H2.143A2.143,2.143,0,0,0,0,4.393V20.107A2.143,2.143,0,0,0,2.143,22.25H8.27v-6.8H5.458v-3.2H8.27V9.811C8.27,7.036,9.922,5.5,12.452,5.5a17.039,17.039,0,0,1,2.479.216V8.443h-1.4a1.6,1.6,0,0,0-1.8,1.729V12.25H14.8l-.491,3.2H11.73v6.8h6.127A2.143,2.143,0,0,0,20,20.107V4.393A2.143,2.143,0,0,0,17.857,2.25Z" transform="translate(0 -2.25)" fill="#2e343c"/>
								</svg>
							</a>
						</li>
						<li>
							<a class="icon icon-twitter" href="https://twitter.com/share?url=<?php echo $url ?>" target="_blank">
								<svg id="Icon_awesome-twitter-square" data-name="Icon awesome-twitter-square" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20">
									<path id="Icon_awesome-twitter-square-2" data-name="Icon awesome-twitter-square" d="M17.857,2.25H2.143A2.143,2.143,0,0,0,0,4.393V20.107A2.143,2.143,0,0,0,2.143,22.25H17.857A2.143,2.143,0,0,0,20,20.107V4.393A2.143,2.143,0,0,0,17.857,2.25ZM15.674,9.339c.009.125.009.254.009.379a8.274,8.274,0,0,1-8.33,8.33,8.292,8.292,0,0,1-4.5-1.312,6.168,6.168,0,0,0,.705.036A5.87,5.87,0,0,0,7.2,15.522,2.932,2.932,0,0,1,4.46,13.491a3.156,3.156,0,0,0,1.321-.054,2.928,2.928,0,0,1-2.344-2.875v-.036a2.926,2.926,0,0,0,1.321.371,2.922,2.922,0,0,1-1.3-2.438,2.891,2.891,0,0,1,.4-1.478,8.314,8.314,0,0,0,6.036,3.062,2.934,2.934,0,0,1,5-2.674,5.737,5.737,0,0,0,1.857-.705,2.92,2.92,0,0,1-1.286,1.612,5.827,5.827,0,0,0,1.688-.455A6.163,6.163,0,0,1,15.674,9.339Z" transform="translate(0 -2.25)" fill="#2e343c"/>
								</svg>
							</a>
						</li>
						<li>
							<a class="icon icon-mail" href="mailto:?subject=<?php the_title() ?>&amp;body=<?php echo $url ?>">
								<svg id="Icon_ionic-md-mail" data-name="Icon ionic-md-mail" xmlns="http://www.w3.org/2000/svg" width="35.455" height="30" viewBox="0 0 25.455 20">
									<path id="Icon_ionic-md-mail-2" data-name="Icon ionic-md-mail" d="M25.28,5.625H4.674A2.431,2.431,0,0,0,2.25,8.049V23.2a2.431,2.431,0,0,0,2.424,2.424H25.28A2.431,2.431,0,0,0,27.7,23.2V8.049A2.431,2.431,0,0,0,25.28,5.625Zm-.3,5.152-10,6.667-10-6.667V8.352l10,6.667,10-6.667Z" transform="translate(-2.25 -5.625)" fill="#2e343c"/>
								</svg>
							</a>
						</li>
						<li>
							<a class="icon whatsapp-icon" href="whatsapp://send?text=<?php echo $url ?>">
								<svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="30" height="30" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1536 1600"><path d="M985 878q13 0 97.5 44t89.5 53q2 5 2 15q0 33-17 76q-16 39-71 65.5T984 1158q-57 0-190-62q-98-45-170-118T476 793q-72-107-71-194v-8q3-91 74-158q24-22 52-22q6 0 18 1.5t19 1.5q19 0 26.5 6.5T610 448q8 20 33 88t25 75q0 21-34.5 57.5T599 715q0 7 5 15q34 73 102 137q56 53 151 101q12 7 22 7q15 0 54-48.5t52-48.5zm-203 530q127 0 243.5-50t200.5-134t134-200.5t50-243.5t-50-243.5T1226 336t-200.5-134T782 152t-243.5 50T338 336T204 536.5T154 780q0 203 120 368l-79 233l242-77q158 104 345 104zm0-1382q153 0 292.5 60T1315 247t161 240.5t60 292.5t-60 292.5t-161 240.5t-240.5 161t-292.5 60q-195 0-365-94L0 1574l136-405Q28 991 28 780q0-153 60-292.5T249 247T489.5 86T782 26z" fill="#2e343c"/></svg>
							</a>
						</li>
						<li>
							<a class="icon telegram-icon" href="tg://msg_url?url=<?php echo $url ?>">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="30" height="30" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1792 1792"><path d="M1189 1307l147-693q9-44-10.5-63t-51.5-7L410 877q-29 11-39.5 25t-2.5 26.5t32 19.5l221 69l513-323q21-14 32-6q7 5-4 15l-415 375l-16 228q23 0 45-22l108-104l224 165q64 36 81-38zm603-411q0 182-71 348t-191 286t-286 191t-348 71t-348-71t-286-191t-191-286T0 896t71-348t191-286T548 71T896 0t348 71t286 191t191 286t71 348z" fill="#2e343c"/></svg>
							</a>
						</li>											
					</ul>
				</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentynineteen_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>

</article><!-- #post-${ID} -->
