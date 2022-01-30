<?php
$this_page_id = get_the_ID();
get_header();
?>

    <section class="game-dev">

        <div class="container">
            <?php
            $value = get_field('for_game', $this_page_id);
            ?>
            <h5>
                <?php echo $value['title'] ?>
            </h5>

            <div class="game-dev__items">

                <?php
                if( is_array($value['blocks']))
                foreach ( $value['blocks'] as $block ){
                    ?>
                    <div class="game-dev__item revealator-slideleft revealator-once revealator-delay1">
                        <div class="game-dev__item-icon">
                            <img src="<?php echo $block['image']['url'] ?>" alt="<?php echo $block['image']['alt'] ?>"">
                        </div>
                        <div class="game-dev__item-text">
                            <p>
                                <?php echo $block['text'] ?>
                            </p>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>

            <div class="game-dev__btn">
<!--                <a href="--><?php //echo $value['link_button'] ?><!--">-->
                <a class="popup-link" href="#popup-developer">
                    <button><?php echo $value['button_title'] ?></button>
                </a>
            </div>
        </div>
    </section>

    <section class="gamers">
        <?php
        $block = get_field('gamers');
        ?>
        <div class="container">
            <h5><?php echo $block['title'] ?></h5>

            <div class="gamers__items">

                <?php
                if( is_array($block['blocks']))
                foreach ( $block['blocks'] as $item ){
                    ?>
                    <div class="gamers__item revealator-slideright revealator-once revealator-delay1">
                        <div class="gamers__item-icon">
                            <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
                        </div>
                        <div class="gamers__item-text">
                            <p>
                                <?php echo $item['text'] ?>
                            </p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

            <div class="gamers__btn">
                <a href="<?php echo $block['link_button'] ?>">
                    <button><?php echo $block['button_title'] ?></button>
                </a>
            </div>
        </div>
    </section>

    <section class="platform">
        <div class="container">
            <?php
            $block = get_field('platform');
            ?>
            <h5><?php echo $block['title'] ?></h5>

            <div class="platform__items">

                <?php
                if( is_array($block['blocks']) ){
                    $index = 1;
                    foreach ( $block['blocks'] as $item ){
                        ?>
                        <div class="platform__item revealator-slideleft revealator-once revealator-delay<?php echo $index ?>">
                            <div class="platform__item-icon">
                                <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
                            </div>
                            <div class="platform__item-text">
                                <p>
                                    <?php echo $item['text'] ?>
                                </p>
                            </div>
                        </div>
                        <?php
                        $index++;
                    }
                }
                ?>
            </div>

            <div class="platform__slider">

                <?php
                if( is_array($block['blocks']) ){
                    foreach ( $block['blocks'] as $item ){
                        ?>
                        <div class="platform__slider-item">
                            <div class="platform__slider-icon">
                                <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
                            </div>
                            <div class="platform__slider-text">
                                <p>
                                    <?php echo $item['text'] ?>
                                </p>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <section class="reward" id="reward">
        <?php
        $block = get_field('reward_for_joy');
        remove_filter( 'the_content', 'wpautop' );
        remove_filter( 'the_excerpt', 'wpautop' );

        add_filter( 'the_content', 'do_blocks', 9 );
        ?>
        <div class="container">
            <h5>
                <?php echo $block['title'] ?>
            </h5>
            <p>
            <?php echo $block['description_block'] ?>
            </p>

            <div class="reward__inner">
                <div class="reward__tabs">
                    <?php
                    $items = $block['items'];
                    ?>

                    <div class="reward__tab">
                        <?php $white_paper = $items['white_paper'] ?>
                        <a class="popup-link" href="#popup">
                            <div class="reward__tab-info">
                                <p><?php echo $white_paper['title'] ?></p>
                                <span>+</span>
                            </div>
                        </a>

                        <div id="popup" class="popup">
                            <div class="popup__body">
                                <div class="popup__content">
                                    <a class="popup__close close-popup" href="#reward"></a>
                                    <h5>
                                        <?php echo $white_paper['pc']['title'] ?>
                                    </h5>
                                    <div class="popup__inner">
                                        <a href="<?php echo $white_paper['pc']['link_1'] ?>">
                                            <div class="popup__item">
                                                <img src="<?php echo $white_paper['pc']['image_1']['url'] ?>"
                                                     alt="<?php echo $white_paper['pc']['image_1']['alt'] ?>">
                                            </div>
                                        </a>

                                        <a href="<?php echo $white_paper['pc']['link_2'] ?>">
                                            <div class="popup__item">
                                                <img src="<?php echo $white_paper['pc']['image_2']['url'] ?>"
                                                     alt="<?php echo $white_paper['pc']['image_2']['alt'] ?>">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reward__tab">
                        <?php
                        $allocation = $items['allocation']
                        ?>
                        <a class="popup-link" href="#popup-all">
                            <div class="reward__tab-info">
                                <p><?php echo $allocation['title'] ?></p>
                                <span>+</span>
                            </div>
                        </a>

                        <div id="popup-all" class="popup-all">
                            <div class="popup__body">
                                <div class="popup__content-all">
                                    <a class="popup__close close-popup" href="#reward"></a>
                                    <?php echo $allocation['pc']['text'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reward__tab">
                        <?php
                        $airdrop = $items['airdrop']
                        ?>
                        <a class="popup-link" href="#popup-air">
                            <div class="reward__tab-info">
                                <p><?php echo $airdrop['title'] ?></p>
                                <span>+</span>
                            </div>
                        </a>

                        <div id="popup-air" class="popup-air">
                            <div class="popup__body">
                                <div class="popup__content-air">
                                    <a class="popup__close close-popup" href="#reward"></a>
                                    <?php echo $airdrop['pc']['text'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reward__tab">
                        <?php
                        $private_sales = $items['private_sales'];
                        ?>
                        <a class="popup-link" href="#popup-sale">
                            <div class="reward__tab-info">
                                <p><?php echo $private_sales['title'] ?></p>
                                <span>+</span>
                            </div>
                        </a>

                        <div id="popup-sale" class="popup-sale">
                            <div class="popup__body">
                                <div class="popup__content-sale">
                                    <a class="popup__close close-popup" href="#reward"></a>
                                    <?php echo $private_sales['pc']['text'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reward__tab">
                        <?php
                        $ecosystem_fund = $items['ecosystem_fund'];
                        ?>
                        <a class="popup-link" href="#popup-eco">
                            <div class="reward__tab-info">
                                <p><?php echo $ecosystem_fund['title'] ?></p>
                                <span>+</span>
                            </div>
                        </a>

                        <div id="popup-eco" class="popup-eco">
                            <div class="popup__body">
                                <div class="popup__content-eco">
                                    <a class="popup__close close-popup" href="#reward"></a>
                                    <?php echo $ecosystem_fund['pc']['text'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reward__tab">
                        <?php $rfj_use_cases = $items['rfj_use_cases'] ?>
                        <a class="popup-link" href="#popup-rfj">
                            <div class="reward__tab-info">
                                <p><?php echo $rfj_use_cases['title'] ?></p>
                                <span>+</span>
                            </div>
                        </a>

                        <div id="popup-rfj" class="popup-rfj">
                            <div class="popup__body">
                                <div class="popup__content-rfj">
                                    <a class="popup__close close-popup" href="#reward"></a>
                                    <h5>
                                        <?php echo $rfj_use_cases['pc']['title'] ?>
                                    </h5>

                                    <div class="popup__content-rfj--items">

                                        <?php
                                        foreach ($rfj_use_cases['pc']['blocks'] as $item){
                                            ?>
                                            <div class="popup__content-rfj--item">
                                                <div class="content-rfj__item-img">
                                                    <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
                                                </div>
                                                <div class="content-rfj__item-info">
                                                    <h6><?php echo $item['title'] ?></h6>

                                                    <p>
                                                        <?php echo $item['text'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <?PHP
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reward__tab">

                        <?php
                        $public_sale = $items['public_sale'];
                        ?>

                        <a class="popup-link" href="#popup-smart">
                            <div class="reward__tab-info">
                                <p><?php echo $public_sale['title'] ?></p>
                                <span>+</span>
                            </div>
                        </a>

                        <div id="popup-smart" class="popup-smart">
                            <div class="popup__body">
                                <div class="popup__content-smart">
                                    <a class="popup__close close-popup" href="#reward"></a>
                                    <div class="popup__content-smart--all">
                                        <div class="popup__content-smart-info">

                                            <?php echo $public_sale['pc']['text'] ?>
                                        </div>

                                        <div class="popup__content-smart-note">
                                            <blockquote>

                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="reward__img">
                    <a class="popup-link" href="#popup-graf">
                        <img src="<?php echo $block['image']['url'] ?>"
                             alt="<?php echo $block['image']['alt'] ?>">
                    </a>

                    <div id="popup-graf" class="popup-graf">
                        <div class="popup__body">
                            <div class="popup__content-graf">
                                <a class="popup__close close-popup" href="#reward"></a>

                                <h5>RFJ turnover scheme</h5>

                                <img src="<?php echo $block['image']['url'] ?>"
                                     alt="<?php echo $block['image']['alt'] ?>">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reward__inner-mob">
                <div class="reward-mob__tabs">

                    <div class="reward-mob__tab01">
                        <?php
                        $white_paper = $items['white_paper']
                        ?>
                        <input class="reward-mob__tab-input" id="hd-1" type="checkbox">
                        <label for="hd-1"><?php echo $white_paper['title'] ?></label>

                        <div>
                            <div class="reward-mob__tab01-content">
                                <a href="<?php echo $white_paper['mob']['link_1'] ?>">
                                    <div class="reward-mob__tab01-content--img">
                                        <img src="<?php echo $white_paper['mob']['image_1']['url'] ?>"
                                             alt="<?php echo $white_paper['mob']['image_1']['alt'] ?>">
                                    </div>
                                </a>

                                <a href="<?php echo $white_paper['mob']['link_2'] ?>">
                                    <div class="reward-mob__tab01-content--img">
                                        <img src="<?php echo $white_paper['mob']['image_2']['url'] ?>"
                                             alt="<?php echo $white_paper['mob']['image_2']['alt'] ?>">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="reward-mob__tab02">
                        <?php
                        $allocation = $items['allocation'];
                        ?>
                        <input class="reward-mob__tab-input" id="hd-2" type="checkbox">
                        <label for="hd-2"><?php echo $allocation['title'] ?></label>
                        <div>
                            <div class="reward-mob__tab02-content">
                                <?php echo $allocation['mob']['text'] ?>
                            </div>
                        </div>
                    </div>

                    <div class="reward-mob__tab03">
                        <?php
                        $airdrop = $items['airdrop'];
                        ?>
                        <input class="reward-mob__tab-input" id="hd-3" type="checkbox">
                        <label for="hd-3"><?php echo $airdrop['title'] ?></label>
                        <div>
                            <div class="reward-mob__tab03-content">
                                <?php echo $airdrop['mob']['text'] ?>
                            </div>
                        </div>
                    </div>

                    <div class="reward-mob__tab04">
                        <?php
                        $private_sales = $items['private_sales'];
                        ?>
                        <input class="reward-mob__tab-input" id="hd-4" type="checkbox">
                        <label for="hd-4"><?php echo $private_sales['title'] ?></label>
                        <div>
                            <div class="reward-mob__tab04-content">
                                <?php echo $private_sales['mob']['text'] ?>
                            </div>
                        </div>
                    </div>

                    <div class="reward-mob__tab05">
                        <?php
                        $ecosystem_fund = $items['ecosystem_fund'];
                        ?>
                        <input class="reward-mob__tab-input" id="hd-5" type="checkbox">
                        <label for="hd-5"><?php echo $ecosystem_fund['title'] ?></label>
                        <div>
                            <div class="reward-mob__tab05-content">
                                <?php echo $ecosystem_fund['mob']['text'] ?>
                            </div>
                        </div>
                    </div>

                    <div class="reward-mob__tab06">
                        <?php
                        $rfj_use_cases = $items['rfj_use_cases'];
                        ?>
                        <input class="reward-mob__tab-input" id="hd-6" type="checkbox">
                        <label for="hd-6"><?php echo $rfj_use_cases['title'] ?></label>
                        <div>
                            <div class="reward-mob__tab06-content">
                                <div class="reward-mob__tab06-slider">

                                    <?php
                                    foreach ($rfj_use_cases['mob']['blocks'] as $item){
                                        ?>
                                        <div class="reward-mob__tab06-item">
                                            <div class="reward-mob__tab06-item--all">
                                                <div class="reward-mob__tab06-item--img">
                                                    <img src="<?php echo $item['image']['url'] ?>"
                                                         alt="<?php echo $item['image']['alt'] ?>">
                                                </div>
                                                <div class="reward-mob__tab06-item--title">
                                                    <h5><?php echo $item['title'] ?></h5>
                                                </div>
                                                <div class="reward-mob__tab06-item--text">
                                                    <p>
                                                        <?php echo $item['text'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reward-mob__tab07">
                        <input class="reward-mob__tab-input" id="hd-7" type="checkbox">
                        <label for="hd-7">Public sale and Main Contract</label>
                        <div>
                            <div class="reward-mob__tab07-content">

                                <p>After the private sale, RFJ tokens will be available for public sale on Pancakeswap and other DEX's. The initial liquidity of the RFJ / WBNB pair will be locked in for 3 years.</p>

                                <p>Within the next 12 months after listing on Pancakeswap, the RFJ tokens will be available for public purchase on major centralized crypto exchanges, after meeting a requirement related to the number of RFJ holders.</p>

                                <h5>You can check out the main contract now and keep an eye out for future updates</h5>
                                <p>0x42BFE4A3E023f2C90aEBFfbd9B667599Fa38514F</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reward-mob__img">
                <img src="<?php echo $block['image_mob']['url'] ?>"
                     alt="<?php echo $block['image_mob']['alt'] ?>">
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <?php
            $block = get_field('blog');
            ?>
            <div class="blog__info">
                <div class="blog__info-title">
                    <h5>Our Blog</h5>
                </div>
                <div class="blog__info-link">
                    <a href="<?php echo $block['link'] ?>">
                        <p><?php echo $block['title'] ?></p>
                    </a>
                </div>
            </div>

            <div class="blog__items">

                <?php
                $args = array(
                    'post_type'         => 'post',
                    'posts_per_page'    => 3,
                    'fields'            => 'ids',
                );
                $query = new WP_Query( $args );
                wp_reset_postdata();
                if( isset($query)){

                    while ($query->have_posts()) : $query->the_post();

                    ?>
                        <div class="blog__item revealator-slideright revealator-once revealator-delay1">
                            <div class="blog__item-img">
                                <a href="<?php the_permalink() ?>">
                                    <div class="blog__item-img--img">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>"
                                             alt="<?php echo get_post_meta( get_post_thumbnail_id(get_the_ID() ), '_wp_attachment_image_alt', true) ?>">
                                    </div>

                                    <div class="blog__item-descr">
                                        <div class="blog__item-all--date">
                                            <span><?php echo get_the_date('M j, Y'); ?></span>
                                        </div>
                                        <div class="blog__item-all-category">
                                            <p><?php the_title() ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php

                    endwhile;
                }
                ?>

            </div>

            <div class="blog__info-title--mob">
                <h5>Our Blog</h5>
            </div>

            <div class="blog__slider">

                <?php
                $args = array(
                    'post_type'         => 'post',
                    'posts_per_page'    => 3,
                    'fields'            => 'ids',
                );
                $query = new WP_Query( $args );
                wp_reset_postdata();
                if( isset($query)){

                    while ($query->have_posts()) : $query->the_post();

                        ?>
                    <div class="blog__slider-item">
                        <div class="blog__slider-img">
                            <a href="<?php the_permalink() ?>">
                                <div class="blog__slider-img--img">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>"
                                         alt="<?php echo get_post_meta( get_post_thumbnail_id(get_the_ID() ), '_wp_attachment_image_alt', true) ?>">
                                </div>

                                <div class="blog__slider-descr">
                                    <div class="blog__slider-all--date">
                                        <span><?php echo get_the_date('M j, Y'); ?></span>
                                    </div>
                                    <div class="blog__slider-all-category">
                                        <p><?php the_title() ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php

                    endwhile;
                }
                ?>
            </div>

            <div class="blog__info-link--mob">
                <a href="<?php echo $block['link'] ?>">
                    <p><?php echo $block['title'] ?></p>
                </a>
            </div>
        </div>
    </section>

<?php
get_template_part('community')
?>

<!--    <div class="cookies-wrapper">-->
<!--        <div class="cookies-description">-->
<!--            We use cookies on our website to give you the most relevant experience-->
<!--            by remembering your preferences and repeat visits. By clicking “Accept”,-->
<!--            you consent to the use of ALL the cookies.-->
<!--        </div>-->
<!--        <div class="cookies-button-wrapper">-->
<!--            <button class="cookies-button-settings">Settings</button>-->
<!--            <button class="cookies-button-accept">Accept</button>-->
<!--        </div>-->
<!--    </div>-->

<?php
get_footer();
?>