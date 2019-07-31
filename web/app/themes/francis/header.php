<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:300,400,500,700&display=swap&subset=korean" rel="stylesheet">
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
            'menu_class'      => 'global-navi__list',
        ) );
        ?>
    </div>
</header>
<div class="site-page-top">
    <div class="site-page-top-container">
        <a class="page-top__link" href="#"><span class="arrow-top"></span></a>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        var visualOffset;
        $(window).on('load',function(){
            visualOffset = $('#key-visual, .archive-background').offset().top + $('#key-visual, .archive-background').outerHeight();
        });

        $(window).scroll(function() {
            if ( $(window).scrollTop() > visualOffset){
                $('.site-header-menu').addClass("active-navi");
            } else {
                $('.site-header-menu').removeClass("active-navi");
            }
        });
    });
</script>