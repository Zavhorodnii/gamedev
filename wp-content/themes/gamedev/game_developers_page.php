<?php
/**
 * Template Name: Game Developers
 * Template Post Type: Page
 */

get_header();
?>

<section class="jollity-help">
    <?php
    $block = get_field('jollity_help');
    ?>
    <div class="container">
        <h2><?php echo $block['title'] ?></h2>

        <div class="jollity-help__items">

            <?php
            if( is_array( $block['blocks'] ) ){
                $index = 1;
                foreach ( $block['blocks'] as $item ){
                    ?>
                    <div class="jollity-help__item revealator-slideleft revealator-once revealator-delay<?php echo $index ?>">
                        <div class="jollity-help__item-icon">
                            <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
                        </div>
                        <div class="jollity-help__item-text">
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

        <div class="jollity-help__slider">

            <?php
            if( is_array( $block['blocks'] ) ){
                foreach ( $block['blocks'] as $item ){
                    ?>
                    <div class="jollity-help__slider-item">
                        <div class="jollity-help__slider-icon">
                            <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
                        </div>
                        <div class="jollity-help__slider-text">
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

<section class="add-game">
    <div class="container">
        <?php
        $block = get_field('add_');
        ?>
        <h3><?php echo $block['title'] ?></h3>

        <div class="add-game__items">

            <?php
            if( is_array( $block['blocks']) ){
                $index = 1;
                foreach ( $block['blocks'] as $item ){
                    ?>
                    <div class="add-game__item revealator-slideright revealator-once revealator-delay<?php echo $index ?>">
                        <div class="add-game__item-icon">
                            <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
                        </div>
                        <div class="add-game__item-text">
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
    </div>
</section>

<section class="community community__game-devv">
    <div class="container">
        <div class="community__inner">
            <div class="community__soc">
                    <?php
                    $social = get_field('social', 'options');
                    ?>
                    <h3>
                        <?php echo $social['title'] ?>
                    </h3>
                    <div class="community__soc-icons">
                        <?php
                        if( is_array($social['social'])){
                            foreach ($social['social'] as $item) {
                                ?>
                                <div class="community__soc-icon">
                                    <a href="<?php echo $item['title'] ?>">
                                        <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
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

            <div class="community__email">
                <h3>
                    Get the latest updates
                </h3>

                <div class="community__form">
                    <form>
                        <div class="community__form-all js_find_info">
                            <div class="community__form-input">
                                <input type="email" class="js_get_email" placeholder="Enter e-mail">
                            </div>
                            <div class="community__form-btn">
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
