
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
<!--    <title>Blog</title>-->
<!--    <link rel="stylesheet" href="css/reset.css">-->
<!--    <link rel="stylesheet" href="css/slick.css">-->
<!--    <link rel="stylesheet" href="css/fm.revealator.jquery.min.css">-->
<!--    <link rel="stylesheet" href="css/style.css">-->
</head>
<body>

<header class="header-white">
    <div class="header-white__inner">
        <div class="container">
            <div class="header-white__inner-all">
                <div class="header-white__logo">
                    <a href="<?php echo get_home_url() ?>">
                        <img src="<?php echo get_field('logo', 'options')['url'] ?>"
                             alt="<?php echo get_field('logo', 'options')['alt'] ?>">
                    </a>
                </div>

                <nav class="header-white__menu">
                    <ul class="header-white__menu-list">
                        <?php
                            $menu_items = wp_get_nav_menu_items('Меню в шапке');
                            if (is_array($menu_items)) {
                                foreach ($menu_items as $menu_item) {
                                    if ($menu_item->menu_item_parent == '0') {
                                        $create_sub_menu = false;
                                        $open = true;
                                        foreach ($menu_items as $sub_menu) {
                                            if ($sub_menu->menu_item_parent == $menu_item->ID) {
                                                $create_sub_menu = true;
                                                if( $open ){
                                                ?>
                                                <li>
                                                    <a class="header-white__menu-list--link" href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
                                                    <ul class="header-white__menu-sublist">
                                                <?php
                                                    $open = false;
                                                }
                                                ?>
                                                        <li>
                                                            <a href="<?php echo $sub_menu->url ?>">
                                                                <?php echo $sub_menu->title ?>
                                                            </a>
                                                        </li>

                                                <?php
                                            }
                                        }
                                        if( !$open ){
                                            ?>
                                            </ul>
                                            </li>
                                            <?php
                                        }
                                        if ( !$create_sub_menu ){
                                        ?>
                                        <li>
                                            <a href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
                                        </li>
                                        <?php
                                        }
                                    }
                                }
                            }
                        ?>
                    </ul>
                </nav>

                <div class="menu__btn">
                    <div class="menu__btn-descr menu__btn-descr--blog">
                        <p>Blog</p>
                    </div>

                    <div class="menu__btn-arrow menu__btn-arrow--blog">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <nav class="menu-mob" id="menu-mob">
                    <ul class="menu-mob__list">
                        <?php
                        $menu_items = wp_get_nav_menu_items('Меню в шапке');
                        if (is_array($menu_items)) {
                            foreach ($menu_items as $menu_item) {
                                if ($menu_item->menu_item_parent == '0') {
                                    $create_sub_menu = false;
                                    $open = true;
                                    foreach ($menu_items as $sub_menu) {
                                        if ($sub_menu->menu_item_parent == $menu_item->ID) {
                                            $create_sub_menu = true;
                                            if( $open ){
                                                ?>
                                                <li>
                                                <p class="menu-mob__list-link menu__arrow"><?php echo $menu_item->title ?></p>
                                                <span class="menu__arrow menu__arrow-chart"></span>
                                                <ul class="menu-mob__sublist">
                                                <?php
                                                $open = false;
                                            }
                                            ?>
                                            <li>
                                                <a href="<?php echo $sub_menu->url ?>">
                                                    <?php echo $sub_menu->title ?>
                                                </a>
                                            </li>

                                            <?php
                                        }
                                    }
                                    if( !$open ){
                                        ?>
                                        </ul>
                                        </li>
                                        <?php
                                    }
                                    if ( !$create_sub_menu ){
                                        ?>
                                        <li>
                                            <a <?php echo $menu_item->title == 'Blog' ? 'class="menu-mob__active-link"' : '' ?> href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
                                        </li>
                                        <?php
                                    }
                                }
                            }
                        }
                        ?>
                    </ul>
                </nav>

                <span class="header-menu_bgr"></span>
            </div>
        </div>
    </div>
</header>



