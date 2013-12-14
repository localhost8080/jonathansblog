<?php
/*
 * Template Name Posts: Full width
 */
?>
<?php get_header(); ?>
<!-- google_ad_section_start-->
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
<figure class="thumbnail" style="margin: 0 0 20px;">
					<?php get_template_part('featuredimage');?>
					<figcaption>
        <span class="icon-comment"></span> <?php the_title(); ?></figcaption>
</figure>
<div id="post-<?php the_ID(); ?>" <?php post_class("container post");?>>
    <h1 class="featurette-heading">
					<?php the_title();?>
				</h1>
				<?php get_template_part('breadcrumb'); ?>
				<?php
        if ($values = get_post_custom_values("leadvideo")) {
            echo $values[0];
        }
        ?>
				<div class="container">
        <div class="content_full"><?php
        remove_filter('the_content', 'sharing_display', 19);
        remove_filter('the_excerpt', 'sharing_display', 19);
        the_content("<p class=\"serif\">" . __('Read the rest of this page', 'multiloquent') . " &raquo;</p>");
        wp_link_pages("<p><strong>" . __('Pages', 'multiloquent') . ":</strong>", '</p>', __('number', 'multiloquent'));
        ?></div>
					
					<?php get_template_part('advert');?>
					
			<section class="navbar navbar-fixed-bottom">
            <div class="navbar-inner">
                <div class="container">
                    <h5 class="span1 hidden-phone">Sharing</h5>
                    <div class="span">
						<?php
        // in here goes the jetpack plugin thing
        if (function_exists('sharing_display')) {
            echo sharing_display();
        }
        ?>
						</div>
                </div>
            </div>
        </section>
        <section class="comments_full">
            <h3 class="hidden-desktop">Comments for <?php the_title(); ?></h3>
						<?php comments_template(); ?>
						
					</section>
    </div>
				<?php get_template_part('advert');?>

				<section class="container post">
        <div class="tagcloud">
            <div class="tag-cloud">
                <h3>Tags for <?php the_title(); ?></h3>
							<?php
        $posttags = get_the_tags();
        if ($posttags) {
            foreach ($posttags as $tag) {
                // if($tag->count > 5){
                echo '<a class="label ';
                echo get_random_solid_class($tag->slug);
                echo '" rel="nofollow" href="/tag/' . $tag->slug . '"><span class="icon-tag icon-white"></span> ' .
                     $tag->name . '</a>';
                // }
            }
        }
        ?>
						</div>
        </div>
    </section>
				
				<?php if(function_exists('related_posts')){?>
					<section class="container post">
						<?php related_posts();?>
					</section>
				<?php
        } /*
           * ?> <div class="container post"> <?php //get_template_part('social');?> </div>
           */
        ?>
				<?php get_template_part('advert');?>
			</div>
<?php
    }
} else {
    ?>
<p>
			<?php __('Sorry, no posts matched your criteria.','multiloquent');?>
		</p>
<?php } ?>
<!-- google_ad_section_end-->
<?php get_footer(); ?>

