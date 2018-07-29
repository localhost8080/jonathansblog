<?php
/**
 * single post template part
 *
 * @package multiloquent\template_parts
 */
/**
 * template for blog posts
 */
get_header();
echo '<!-- google_ad_section_start-->';
if ( have_posts() ) {
	while ( have_posts() ) {
		$format = get_post_format() ? : 'standard';
		the_post();
		echo $multiloquent->multiloquent_paralax_featured_sliders();
		echo '<article id="post-' . get_the_ID() . '" ';
		echo post_class( 'post' );
		echo '>';
		require locate_template( 'featuredimage.php' );
		require locate_template( 'breadcrumb.php' );
		?>
<div class="container clearfix mt-5">
			<?php
			echo '<div class="col-sm-12 col-md-12 col-lg-12">';
			// remove_filter( 'the_content', 'sharing_display', 19 );
			// remove_filter( 'the_excerpt', 'sharing_display', 19 );
			the_content();
			wp_link_pages( '<p><strong>Pages:</strong>', '</p>', 'number' );
			get_template_part( 'advert' );
		?>
	<section class="row">
		<div class="tag-cloud mb">
			<?php echo $multiloquent->multiloquent_render_tags( $post, 1 ); ?>
		 </div>
	</section>
			<?php
			echo '</div>';
			if ( comments_open() ) {
				get_template_part( 'advert' );
				comments_template();
				echo '</div>';
			}
			get_template_part( 'advert-secondary' );
		?>
		</div>
<?php
// get_template_part('social');
if ( function_exists( 'related_posts' ) ) {
	related_posts();
}
		next_post_link( '%link', '<span style="text-indent:-9000px; position:absolute;">%title</span><span class="next_link btn btn-primary"><span class="fa fa-chevron-left"></span></span>', true );
		previous_post_link( '%link', '<span style="text-indent:-9000px; position:absolute;">%title</span><span class="prev_link btn btn-primary"><span class="fa fa-chevron-right"></span></span>', true );
		echo '</article>';
	}
} else {
	?>
<div class="container post clearfix">
		<?php
		get_template_part( 'error-snippet' );
	?>
	</div>
<?php
}
echo '<!-- google_ad_section_end-->';
get_template_part( 'social' );
get_footer();
