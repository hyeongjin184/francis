<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="site-header-menu">
        <?php
        wp_nav_menu( array(
            'theme_location'  => 'global',
            'container'       => 'nav',
            'container_class' => 'global-navi',
            'menu_id'         => 'global-menu-list',
            'menu_class'      => '',
        ) );
        ?>
    </div>
</header>
