<?php
/**
 * Template Name: Tocenomics
 * Template Post Type: Page
 */

get_header();
$this_page_id = get_the_ID();
?>


<section class="toc-cases">
    <div class="container">
        <?php
        $block = get_field('rfj_use_cases');
        ?>
        <h2><?php echo $block['title'] ?></h2>

        <div class="toc-cases__items">

            <?php
            if( is_array($block['blocks']) ){
                $index = 1;
                foreach ( $block['blocks'] as $item ){
                    ?>
                    <div class="toc-cases__item revealator-slideleft revealator-once revealator-delay<?php echo $index ?>">
                        <div class="toc-cases__item-inner">
                            <div class="toc-cases__item-icon">
                                <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
                            </div>
                            <div class="toc-cases__item-text">
                                <?php echo $item['description'] ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    $index++;
                }
            }
            ?>

        </div>

        <div class="toc-cases__slider">
            <?php
            if( is_array($block['blocks']) ){
                $index = 1;
                foreach ( $block['blocks'] as $item ){
                    ?>

                    <div class="toc-cases__slider-item">
                        <div class="toc-cases__slider-inner">
                            <div class="toc-cases__slider-icon">
                                <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
                            </div>
                            <div class="toc-cases__slider-text">
                                <?php echo $item['description'] ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    $index++;
                }
            }
            ?>
        </div>
    </div>
</section>

<section class="schema">
    <div class="container">
        <?php
        $block = get_field('reward_for_joy');
        ?>
        <p>
            <?php echo $block['title'] ?>
        </p>


        <div class="schema__inner">
            <div class="schema__circle">
                <?php
                $left = $block['left'];
                ?>
                <h4><?php echo $left['title'] ?></h4>

                <div class="schema__circle-image">
                    <img src="<?php echo $left['image']['url'] ?>" alt="<?php echo $left['image']['alt'] ?>">

                    <div class="schema__circle-items">
                        <?php
                        if( is_array($left['blocks']) ){
                            $index = 1;
                            foreach ( $left['blocks'] as $item){
                                ?>
                                <a href="<?php echo $item['link'] ?><">
                                    <div class="schema__circle-item0<?php echo $index ?>">
                                        <div class="schema__item0<?php echo $index ?>-info">
                                            <p><?php echo $item['title'] ?></p>
                                            <span><?php echo $item['value'] ?><</span>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                $index++;
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>

            <div class="schema__cmob">
                <?php
                $left = $block['left_mob'];
                ?>
                <h4><?php echo $left['title'] ?></h4>

                <div class="schema__cmob-image">
                    <img src="<?php echo $left['image']['url'] ?>" alt="<?php echo $left['image']['alt'] ?>">

                    <div class="schema__cmob-items">
                        <ul>
                            <?php
                            if( is_array($left['blocks']) ){
                                $index = 1;
                                foreach ( $left['blocks'] as $item){
                                    ?>

                                    <li>
                                        <a href="<?php echo $item['link'] ?>">
                                            <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
                                            <?php echo $item['title'] ?>
                                        </a>
                                    </li>

                                    <?php
                                    $index++;
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="schema__grafic">
                <?php
                $right = $block['right'];
                ?>
                <h4><?php echo $right['title'] ?></h4>

                <div class="schema__grafic-image">
                    <img class="schema__grafic-image-pk" src="<?php echo $right['image']['url'] ?>" alt="<?php echo $right['image']['alt'] ?>">
                    <img class="schema__grafic-image--mob" src="<?php echo $right['image_mob']['url'] ?>" alt="<?php echo $right['image_mob']['alt'] ?>">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="airdrop">
    <div class="container">
        <div class="airdrop__inner">
            <?php
            $block = get_field('airdrop');
            ?>
            <div class="airdrop__info">
                <h4><?php echo $block['title'] ?></h4>

                <div class="airdrop__image-mob">
                    <img src="<?php echo $block['image']['url'] ?>" alt="<?php echo $block['image']['alt'] ?>">
                </div>

                <p>
                    <?php echo $block['description'] ?>
                </p>

                <a href="<?php echo $block['link'] ?>">
                    <button>Participate</button>
                </a>
            </div>

            <div class="airdrop__image">
                <img src="<?php echo $block['image']['url'] ?>" alt="<?php echo $block['image']['alt'] ?>">
            </div>
        </div>
    </div>
</section>

<section class="community-black">
    <div class="container">
        <div class="community-black__inner">
            <div class="community-black__soc">
                <?php
                $social = get_field('social', 'options');
                ?>
                <h3>
                    <?php echo $social['title'] ?>
                </h3>
                <div class="community-black__soc-icons">
                    <?php
                    if( is_array($social['social'])){
                        foreach ($social['social'] as $item) {
                            ?>
                            <div class="community-black__soc-icon">
                                <a href="<?php echo $item['title'] ?>">
                                    <img src="<?php echo $item['black_footer']['url'] ?>" alt="<?php echo $item['black_footer']['alt'] ?>">
                                </a>
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>
                </div>
            </div>

            <div class="community-black__email">
                <h3>
                    Get the latest updates
                </h3>

                <div class="community-black__form">
                    <form>
                        <div class="community-black__form-all js_find_info">
                            <div class="community-black__form-input">
                                <input type="email" class="js_get_email" placeholder="Enter e-mail">
                            </div>
                            <div class="community-black__form-btn">
                                <button class="js_get_email_follow">Sign up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
