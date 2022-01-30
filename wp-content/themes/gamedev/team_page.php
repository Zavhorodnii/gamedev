<?php
/**
 * Template Name: Team
 * Template Post Type: Page
 */

get_header();
$this_page_id = get_the_ID();
?>


<section class="our-team">
    <?php
    $block = get_field('team');
    ?>
    <div class="container">
        <h3><?php echo $block['title'] ?></h3>

        <div class="slider-arrows"></div>

        <div class="our-team__slider">

            <?php
            if( is_array( $block['slider'] ) ){
                foreach ( $block['slider'] as $item ){
                    ?>
                    <div class="our-team__slider-item">
                        <div class="our-team__slider-item--all">
                            <div class="our-team__slider-item--img">
                                <img src="<?php echo $item['image']['url'] ?>"
                                     alt="<?php echo $item['image']['alt'] ?>">
                            </div>

                            <div class="our-team__slider-item--title">
                                <p><?php echo $item['description'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>

        </div>

        <div class="our-team-join">
            <?php
            $block = get_field('join');
            ?>
            <h4><?php echo $block['title'] ?></h4>

            <p><?php echo $block['description'] ?></a></p>
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

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<!--<script src="--><?php //echo get_template_directory_uri() ?><!--/js/slick.min.js"></script>-->
<!--<script src="--><?php //echo get_template_directory_uri() ?><!--/js/popups.js"></script>-->
<!--<script src="--><?php //echo get_template_directory_uri() ?><!--/js/all-sliders.js"></script>-->
<!--<script src="--><?php //echo get_template_directory_uri() ?><!--/js/main.js"></script>-->
<!--</body>-->
<!--</html>-->