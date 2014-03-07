<?php
get_header();
if (have_posts()) {
    ?>
<div class="jumbotron">
    <div class="container">
        <header>
            <h1 class="article_title">
			<?php
    _e('Posts Tagged', 'multiloquent');
    echo ' &#8216;';
    single_tag_title();
    echo '&#8217;';
    ?>
            </h1>
            <p><?php echo 'There are '. $wp_query->found_posts.' posts tagged '. single_tag_title('', false);?></p>
        </header>
    </div>
</div>
<?php  	$post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<div class="container post">
    <div class="featurette">
        <section class="row">
				<?php multiloquent_render_the_archive();?>
		</section>
        <section>
			<?php get_template_part('advert');?>
		</section>
        <nav class="navitems article white2">
            <div class="pagination pagination-centered">
				<?php posts_nav_link(); ?>
			</div>
        </nav>
    </div>
</div>
<?php } else { ?>
<div class="container post">
    <div class="featurette">
		<?php  get_template_part('error_snippet');?>
	</div>
</div>
<?php
}
wp_reset_query();
get_footer();
