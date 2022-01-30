<?php
if(strpos(get_permalink(), '/team/') || strpos( get_permalink() , '/tocenomics/')){
    ?>
    <footer class="footer-black">
        <div class="container">
            <div class="footer-black__inner">
                <div class="footer-black__menu">
                    <div class="footer__dropdown-menu">
                        <nav class="footer-language__menu">
                            <ul class="footer-language__bllist">
                                <li>
                                    <a class="footer-language__bllist-link footer-language__bllink-arrow" href="#">English</a>
                                    <ul class="footer-language__blsublist">
                                        <li>
                                            <a href="#">
                                                English
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>

                        <nav class="footermob-black-language__menu">
                            <ul class="footermob-black-language__list">
                                <li>
                                    <p class="footermob-black-language__list-link menu-black__arrow-lang">English</p>
                                    <span class="menu-black__arrow-lang footermob-black-language__arrow-chart"></span>
                                    <ul class="footermob-black-language__submenu-list">
                                        <li>
                                            <a href="#">
                                                English
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <nav>
                        <ul class="footer-black__menu-list">
                            <?php
                            $menu_items = wp_get_nav_menu_items('Меню в подвале');
                            if (is_array($menu_items)) {
                                foreach ($menu_items as $menu_item) {
                                    if ($menu_item->menu_item_parent == '0') {
                                        ?>
                                        <li>
                                            <a href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
                                        </li>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                </div>

                <div class="footer-black__soc">
                    <div class="footer-black__soc-icons">
                        <?php
                        $footer_social = get_field('footer_link', 'options');
                        if(is_array($footer_social)){
                            foreach ($footer_social as $item) {
                                ?>
                                <div class="footer-black__soc-icon">
                                    <a href="<?php echo $item['link'] ?>">
                                        <img src="<?php echo $item['black_footer']['url'] ?>" alt="<?php echo $item['black_footer']['alt'] ?>">
                                    </a>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>

                    <div class="footer-black__soc-copy">
                        <p><?php echo get_field('copyright', 'options') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php
} else{
    ?>
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__menu">
                    <div class="footer__dropdown-menu">
                        <nav class="footer-language__menu">
                            <ul class="footer-language__list">
                                <li>
                                    <a class="footer-language__list-link footer-language__link-arrow" href="#">English</a>
                                    <ul class="footer-language__sublist">
                                        <li>
                                            <a href="#">
                                                English
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>

                        <nav class="footermob-language__menu">
                            <ul class="footermob-language__list">
                                <li>
                                    <p class="footermob-language__list-link menu__arrow-lang">English</p>
                                    <span class="menu__arrow-lang footermob-language__arrow-chart"></span>
                                    <ul class="footermob-language__submenu-list">
                                        <li>
                                            <a href="#">
                                                English
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <nav>
                        <ul class="footer__menu-list">
                            <?php
                            $menu_items = wp_get_nav_menu_items('Меню в подвале');
                            if (is_array($menu_items)) {
                                foreach ($menu_items as $menu_item) {
                                    if ($menu_item->menu_item_parent == '0') {
                                        ?>
                                        <li>
                                            <a href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
                                        </li>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                </div>

                <div class="footer__soc">
                    <div class="footer__soc-icons">
                        <?php
                        $footer_social = get_field('footer_link', 'options');
                        if(is_array($footer_social)){
                            foreach ($footer_social as $item) {
                                ?>
                                <div class="footer__soc-icon">
                                    <a href="<?php echo $item['link'] ?>">
                                        <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
                                    </a>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>

                    <div class="footer__soc-copy">
                        <p><?php echo get_field('copyright', 'options') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php
}
?>

<div class="cookies-wrapper">
    <div class="cookies-description">
        We use cookies on our website to give you the most relevant experience
        by remembering your preferences and repeat visits. By clicking “Accept”,
        you consent to the use of ALL the cookies.
    </div>
    <div class="cookies-button-wrapper">
        <a href="#" class="cookies-button-settings">Learn more</a>
        <button class="cookies-button-accept">Accept</button>
    </div>
</div>

<!-- popup develop-->
<div id="popup-developer" class="popup-developer">
    <div class="popup__body">
        <div class="popup__content-developer">
            <a class="popup__close close-popup" id="popup-dev-close" href="#reward"></a>
            <div class="popup-developer-content active">
                <?php
                $block = get_field('popup', 'options');
                ?>
                <div class="popup-developer-description">
                    <h5><?php echo $block['title'] ?></h5>
                    <div><?php echo $block['text'] ?></div>
                    <img src="<?php echo $block['image']['url'] ?>" alt="<?php echo $block['image']['alt'] ?>">
                </div>
                <form class="popup-developer-form">
                    <div class="popup-developer-form-title">Company name</div>
                    <input class="input-name" placeholder="Company name">
                    <div class="popup-developer-form-title">Email</div>
                    <input class="input-email" placeholder="Enter e-mail">
                    <div class="popup-developer-form-title">Tell us about your game</div>
                    <div class="popup-developer-textarea-wrapper">
                        <div class="popup-developer-textarea-count-symbols">
                            <span class="count-symbols">750</span>
                            <span class="max-symbols">/750</span>
                        </div>
                        <textarea placeholder="Drop us a line..." maxlength="750"></textarea>
                    </div>
                    <button class="popup-developer-button v_button" type="button">Send</button>
                </form>
            </div>
            <div class="popup-developer-successful">
                <?php
                $block = get_field('successful', 'options')
                ?>
                <div class="popup-developer-successful-title"><?php echo $block['title'] ?></div>
                <img src="<?php echo $block['image']['url'] ?>" alt="<?php echo $block['image']['alt'] ?>">
                <button class="popup-developer-successful-button v_button">Cool</button>
            </div>
        </div>
    </div>
</div>
<!-- end popup develop-->

<script>
    window.serv_url = '<?php echo get_template_directory_uri() ?>/';
    window.ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php wp_footer(); ?>

<?php
if( is_front_page() ){
    ?>
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/fm.revealator.jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/popups.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/all-sliders.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>

    <?php
}
elseif(strpos(get_permalink(), '/team/') ){
    ?>
    <script src="<?php echo get_template_directory_uri() ?>/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/popups.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/all-sliders.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
    <?php
} elseif( strpos( get_permalink() , '/tocenomics/')){
    ?>
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/fm.revealator.jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/popups.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/all-sliders.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
    <?php
} else{
    ?>
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/fm.revealator.jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/popups.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/all-sliders.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
    <?php
}
?>

<script src="<?php echo get_template_directory_uri() ?>/js/cookie.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/v_ajax.js"></script>

<!--<script src="js/slick.min.js"></script>-->
<!--<script src="js/jquery-1.11.3.min.js"></script>-->
<!--<script src="js/fm.revealator.jquery.min.js"></script>-->
<!--<script src="js/all-sliders.js"></script>-->
<!--<script src="js/main.js"></script>-->
</body>
</html>


