
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

<?php
if(strpos(get_permalink(), '/team/') || strpos( get_permalink() , '/tocenomics/')){
    ?>
    <header class="header-black header-black-team">
        <div class="header-black__inner">
            <div class="container">
                <div class="header-black__inner-all">
                    <div class="header-black__logo">
                        <a href="<?php echo get_home_url() ?>">
                            <img src="<?php echo get_field('logo', 'options')['url'] ?>"
                                 alt="<?php echo get_field('logo', 'options')['alt'] ?>">
                        </a>
                    </div>

                    <nav class="menu-black">
                        <ul class="menu-black__list">
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
                                                    <a class="menu-black__list-link" href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
                                                    <ul class="menu-black__sublist">
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
                                            if ( $menu_item->url == get_home_url() . '/'){
                                                continue;
                                            }
                                            ?>
                                            <li>
                                                <a class="<?php echo $menu_item->url == get_permalink() ? 'menu__list--active-link' : '' ?>" href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
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
                        <div class="menu__btn-descr">
                            <p><?php echo get_the_title() ?></p>
                        </div>

                        <div class="menu__btn-arrow">
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
                                                <a class="<?php echo $menu_item->url == get_permalink() ? 'menu-mob__active-link' : '' ?>" href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
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

        <div class="header-black__bg header-black__team-bg">
            <div class="container">
                <?php $block = get_field('main');?>
                <div class="header-black__info">
                    <h1>
                        <?php echo $block['title'] ?>
                    </h1>
                    <a href="<?php echo $block['link'] ?>">
                        <button><?php echo $block['button'] ?></button>
                    </a>
                </div>
            </div>
        </div>
    </header>
<?php
}
elseif (strpos(get_permalink(), 'game-developers')){
    ?>
    <header class="header header__game-devv">
        <div class="header__inner">
            <div class="container">
                <div class="header__inner-all">
                    <div class="header__logo header__logo-devv">
                        <a href="<?php echo get_home_url() ?>">
                            <img src="<?php echo get_field('logo', 'options')['url'] ?>"
                                 alt="<?php echo get_field('logo', 'options')['alt'] ?>">
                        </a>
                    </div>

                    <nav class="menu">
                        <ul class="menu__list">
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
                                                    <a class="menu__list-link" href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
                                                    <ul class="menu__sublist">
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
                                            if ( $menu_item->url == get_home_url() . '/'){
                                                continue;
                                            }
                                            ?>
                                            <li>
                                                <a class="<?php echo $menu_item->url == get_permalink() ? 'menu__list--active-link' : '' ?>" href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
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
                        <div class="menu__btn-descr">
                            <p><?php echo get_the_title() ?></p>
                        </div>

                        <div class="menu__btn-arrow">
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
                                                <a class="<?php echo $menu_item->url == get_permalink() ? 'menu-mob__active-link' : '' ?>" href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
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

        <div class="container">
            <div class="header__info header__info-devv">
                <?php $block = get_field('main');?>
                <h1>
                    <?php echo $block['title'] ?>
                </h1>
                <p>
                    It’s easy to get started!
                </p>
                <a class="popup-link" href="#popup-developer">
                    <button><?php echo $block['button'] ?></button>
                </a>

            </div>
        </div>
    </header>
    <?php
}
elseif (is_front_page()){
    ?>
    <header class="header">
        <div class="header__inner">
            <div class="container">
                <div class="header__inner-all">
                    <div class="header__logo">
                        <a href="<?php echo get_home_url() ?>">
                            <img src="<?php echo get_field('logo', 'options')['url'] ?>"
                                 alt="<?php echo get_field('logo', 'options')['alt'] ?>">
                        </a>
                    </div>

                    <nav class="menu" id="menu">
                        <ul class="menu__list">
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
                                                    <a class="menu__list-link" href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
                                                    <ul class="menu__sublist">
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
                                            if ( $menu_item->url == get_home_url() . '/'){
                                                continue;
                                            }
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
                        <div class="menu__btn-descr">
                            <p></p>
                        </div>

                        <div class="menu__btn-arrow menu__btn-arrow--home">
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
                                                <a class="<?php echo ( $menu_item->url == get_permalink() ? 'menu-mob__active-link' : '' ) ?>" href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
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

        <div class="container">
            <div class="header__info">
                <?php
                $block = get_field('home');
                ?>
                <h1>
                    <?php echo $block['title'] ?>
                </h1>
                <p>
                    <?php echo $block['subtitle'] ?>
                </p>
                <a href="<?php echo $block['button_link'] ?>">
                    <button><?php echo $block['button_title'] ?></button>
                </a>
            </div>
        </div>
    </header>
    <?php
}
else{
?>
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
                                            if ( $menu_item->url == get_home_url() . '/'){
                                                continue;
                                            }
                                            ?>
                                            <li>
                                                <a class="<?php echo $menu_item->url == get_permalink() ? 'menu__list--active-link' : '' ?>" href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
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
                            <p><?php echo get_the_title() ?></p>
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
                                                <a class="<?php echo ( $menu_item->url == get_permalink() ? 'menu-mob__active-link' : '' ) ?>" href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
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
<?php
}
?>
