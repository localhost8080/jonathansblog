<?php
/**
 * static page template part
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 * @package multiloquent\template_parts
 */

/**
 * static page template
 */

get_header();
echo '<!-- google_ad_section_start-->';
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		echo $multiloquent->multiloquent_paralax_featured_sliders();
		require locate_template( 'featuredimage.php' );
		echo '<div id="post-' . get_the_ID() . '" ';
		echo post_class( 'post' );
		echo '>';
		require locate_template( 'breadcrumb.php' );
		?>
		<div class="container-fluid clearfix">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<?php
				$values = get_post_custom_values( 'leadvideo' );
				if ( ! empty($values) ) {
					echo '<div align="center" class="embed-responsive embed-responsive-16by9">';
					echo '<iframe width="100%" height="400" src="//www.youtube.com/embed/';
					echo $values[0];
					echo '" frameborder="0" allowfullscreen></iframe>';
					echo '</div>';
				}
				remove_filter( 'the_content', 'sharing_display', 19 );
				remove_filter( 'the_excerpt', 'sharing_display', 19 );
				the_content( 'Read the rest of this page &raquo;' );
				wp_link_pages( '<p><strong>Pages:</strong>', '</p>', 'number' );
		?>
			</div>
			<?php
			get_template_part( 'advert' );
		?>
		</div>
		<?php
		get_template_part( 'social' );
		if ( comments_open() ) {
			?>
			<section class="container-fluid clearfix">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<h3 class="hidden-lg">
						<?php
						printf(
							esc_html_e( 'Comments for %s', 'multiloquent' ),
							$multiloquent->multiloquent_post_title()
						);
			?>
					</h3>
					<?php
					comments_template();
					get_template_part( 'advert' );
			?>
				</div>
			</section>
		<?php
		}

		if ( function_exists( 'related_posts' ) ) {
			related_posts();
		}
		?>
		<section class="container-fluid clearfix">
			<?php
			get_template_part( 'advert' );
		?>
		</section>
		<?php
		echo '</div>';
	}
} else {
?>
	<div class="container-fluid post clearfix">
		<?php
		get_template_part( 'error-snippet' );
	?>
	</div>
<?php
}
echo '<!-- google_ad_section_end-->';
get_footer();
