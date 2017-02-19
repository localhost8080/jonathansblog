<?php
/**
 * tag archive template part
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 * @package multiloquent\template_parts
 */

/**
 * template for tag archives
 */

get_header();
if (have_posts()) {
    ?>
    <div class="jumbotron">
        <div class="container">
            <header>
                <h1 class="article_title">
                    <?php
                    printf(
                        __('Posts Tagged %s', 'multiloquent'),
                        single_cat_title('', false)
                    );
                    ?>
                </h1>

                <p>
                    <?php
                    printf(
                        __('There are %1$s posts tagged %2$s', 'multiloquent'),
                        $wp_query->found_posts,
                        single_cat_title('', false)
                    );
                    ?>
                </p>
            </header>
        </div>
    </div>
    <section class="container post">
        <?php
        $colour = $multiloquent->multiloquent_get_random_blue_class();
        while (have_posts()) {
            the_post();
            $multiloquent->multiloquent_render_the_archive($colour);
        }
        ?>
    </section>
    <section class="container post">
        <?php 
        get_template_part('advert');
        ?>
    </section>
    <div class="container post">
        <nav class="navitems text-center">
            <ul class="pagination">
                <li><?php previous_posts_link(__('Previous Entries', 'multiloquent')) ?></li>
                <li><?php next_posts_link(__('Next Entries', 'multiloquent')) ?></li>
            </ul>
        </nav>
    </div>
<?php } else { ?>
    <div class="container post">
        <?php require(locate_template('error-snippet.php')); ?>
    </div>
<?php
}
get_footer();
