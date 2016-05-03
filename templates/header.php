<header class="banner">
    <div class="header-content">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php get_template_part( 'templates/svgs/skar', 'logo' ); ?></a>
        <div class="nav-trigger-container">
            <span class="email-text">Sign up for email alerts</span><span class="menu-text">Menu</span>
            <a class="nav-primary-trigger" href="#0">
                <span class="menu-icon"></span>
            </a> <!-- primary-nav-trigger -->
        </div>
    </div>
    <nav id="skar-nav" class="nav-overlay">
        <a href="#" class="nav-closebtn">×</a>
        <div class="nav-overlay-content">
            <a href="#">one</a>
            <a href="#">two</a>
            <a href="#">three</a>
            <a href="#">four</a>
            <a href="#">five</a>
        </div>
    </nav>
</header>