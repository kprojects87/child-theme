<header id="site-header" class="custom-header">
    <div class="header-inner">
        <?php if (has_custom_logo()) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
        <?php endif; ?>
        
        <nav id="site-navigation" class="custom-primary-navigation">
            <?php wp_nav_menu(array(
                'theme_location' => 'custom-primary',
                'menu_class' => 'primary-menu',
                'container' => false
            )); ?>
        </nav>
    </div>
</header>