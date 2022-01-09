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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php wp_footer(); ?>
<!--<script src="js/slick.min.js"></script>-->
<!--<script src="js/jquery-1.11.3.min.js"></script>-->
<!--<script src="js/fm.revealator.jquery.min.js"></script>-->
<!--<script src="js/all-sliders.js"></script>-->
<!--<script src="js/main.js"></script>-->
</body>
</html>

    <script>
        window.ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
    </script>
