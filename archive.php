<?php
get_header();
is_tag();
if (have_posts()) {
    ?>
<div class="hero-unit">
    <div class="container">
        <header>
            <h1 class="article_title">
<?php
    if (is_category()) {
        printf(__('%s', 'multiloquent'), single_cat_title('', false));
    } elseif (is_tag()) {
        _e('Posts Tagged', 'multiloquent');
        echo '&#8216;';
        single_tag_title();
        echo '&#8217;';
    } elseif (is_day()) {
        printf(__('Archive for %s', 'multiloquent'), get_the_time(__('F jS, Y', 'multiloquent')));
    } elseif (is_month()) {
        printf(__('Archive for %s', 'multiloquent'), get_the_time(__('F Y', 'multiloquent')));
    } elseif (is_year()) {
        printf(__('Archive for %s', 'multiloquent'), get_the_time('Y'));
    } elseif (is_search()) {
        __('Search Results', 'multiloquent');
    } elseif (is_author()) {
        _e('All entries by this author', 'multiloquent');
    } elseif (isset($_GET['paged']) && ! empty($_GET['paged'])) {
        _e('Blog Archives', 'multiloquent');
    }
    ?>
                </h1>
        </header>
    </div>
</div>
<div class="container post">
    <div class="featurette">
        <section class="row">
            <?php render_the_archive($posts);?>
        </section>
        <section>
            <?php get_template_part('advert');?>
        </section>
        <nav class="navitems article white2">
            <div class="pagination pagination-centered">
            <?php render_pagingation(); ?>
            </div>
        </nav>
    </div>
</div>
<?php
} else {
    ?>
<div class="container post">
    <div class="featurette">
        <?php  get_template_part('error_snippet');?>
    </div>
</div>
<?php
}
wp_reset_query();
get_footer();
