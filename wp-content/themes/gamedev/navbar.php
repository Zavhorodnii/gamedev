
<?php
$page_category = is_category();
if(!is_category()){
    $cur_terms = get_the_terms( get_the_ID(), 'category' );
}
?>

<section class="navbar">
    <div class="container">
        <nav class="navbar__categories">
            <ul class="navbar__categories-list">
                <?php
                $menu_items = wp_get_nav_menu_items('Меню рубрик');
                if (is_array($menu_items)) {
                    global $wp;
                    foreach ($menu_items as $menu_item) {
                        if ($menu_item->menu_item_parent == '0') {
                            $active = false;
                            if( !is_category() ){
                                $active = $cur_terms[0]->name == $menu_item->title;
                            }
                            ?>
                            <li <?php echo ($menu_item->url == home_url( $wp->request ) . '/' || $active ? 'class="navbar__categories-active--link"' : '') ?>>
                                <a  href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
                            </li>
                            <?php
                        }
                    }
                }
                ?>
            </ul>
        </nav>

        <nav class="navbar-mob__categories">
            <ul class="navbar-mob__categories-list">
                <li>
                    <p class="navbar-mob__list-link navbar-mob__arrow">All articles</p>
                    <span class="navbar-mob__arrow navbar-mob__arrow-chart"></span>
                    <ul class="navbar-mob__sublist">
                        <?php
                        $menu_items = wp_get_nav_menu_items('Меню рубрик');
                        if (is_array($menu_items)) {
                            foreach ($menu_items as $menu_item) {
                                if( $menu_item->title == 'All articles')
                                    continue;
                                if ($menu_item->menu_item_parent == '0') {
                                    ?>
                                    <li >
                                        <a  href="<?php echo $menu_item->url ?>"><?php echo $menu_item->title ?></a>
                                    </li>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</section>