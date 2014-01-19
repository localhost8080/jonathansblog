<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
            </button>
            <?php echo '<a class="navbar-brand" title="'. get_bloginfo('name').'" href="'. home_url().'/"><span class="fa fa-desktop fa-fw"></span>'. get_bloginfo('name').'</a>';?>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><?php get_search_form();?></li>
            </ul>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'Header Navigation',
                'container' => 'false',
                'menu_class' => 'dropdown-menu',
                'menu_id' => '',
                'before' => '',
                'after' => '</li>',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
            ));
            if (is_active_sidebar(1)) {
                dynamic_sidebar(1);
            }
            ?>
            
        </div>
    </div>
</nav>
