<header class="banner">
    <div class="header-content">
        <div class="row">
            <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php get_template_part( 'templates/svgs/skar', 'logo' ); ?></a>
            <div class="nav-trigger-container">
                <span role="button" class="email-text" data-toggle="modal" data-target="#email-alerts">Sign up for email alerts</span><span class="menu-text">Menu</span>
                <a class="nav-primary-trigger" href="#0">
                    <span class="menu-icon"></span>
                </a> <!-- primary-nav-trigger -->
            </div>
        </div>
    </div>
    <nav id="skar-nav" class="nav-overlay">
        <div class="nav-overlay-content">
        <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
            endif;
        ?>
        </div>
    </nav>
    <div class="invisible-overlay"></div>
</header>