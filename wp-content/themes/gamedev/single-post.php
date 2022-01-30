<?php
$this_page_id = get_the_ID();
get_header();

$cur_terms = get_the_terms( get_the_ID(), 'category' );
?>

<?php
get_template_part('navbar')
?>

<section class="single-announ">
    <div class="single-announ__image">
        <img src="<?php echo get_field('banner')['url'] ?>"
             alt="<?php echo get_field('banner')['alt'] ?>">
    </div>

    <div class="container">
        <div class="single-announ__info">
            <div class="single-announ__info-titles">
                <span><?php echo get_the_date('M j, Y'); ?></span>

                <p><?php echo $cur_terms[0]->name ?></p>
            </div>

            <div class="single-announ__info-descr">
                <div class="single-announ__descr-logo">
                    <img src="<?php echo get_field('author_image')['url'] ?>"
                         alt="<?php echo get_field('author_image')['alt'] ?>">
                    <span><?php echo get_field('author') ?></span>
                </div>

                <div class="single-announ__descr-soc">
                    <p>Share</p>

                    <div class="single-announ__descr-soc--links">
                        <a href="https://telegram.me/share/url?url=<?php echo urlencode(get_the_permalink()) ?>&text=<?php the_title() ?>">
                            <img src="<?php echo get_template_directory_uri() ?>/images/single-announ-telegram.svg" alt="telegram">
                        </a>

                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_the_permalink()) ?>&text=<?php the_title() ?>">
                            <img src="<?php echo get_template_directory_uri() ?>/images/single-announ-twitter.svg" alt="twitter">
                        </a>

                        <a href="https://www.facebook.com/sharer.php?u=<?php echo urlencode(get_the_permalink()) ?>">
                            <img src="<?php echo get_template_directory_uri() ?>/images/single-announ-facebook.svg" alt="facebook">
                        </a>

                    </div>
                </div>
            </div>

            <div class="single-announ__info-text">
                <h1><?php the_title() ?></h1>

                <?php the_content(); ?>

            </div>
        </div>
    </div>
</section>

<section class="like-articles">
    <div class="container">
        <div class="like-articles__info">
            <h2>You will also like</h2>

            <a href="<?php echo get_home_url() ?>">
                More articals
            </a>
        </div>

        <div class="like-articles__items">
            <?php
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => 3,
                'fields'            => 'ids',
                'post__not_in'      => [get_the_ID(),],
            );
            $query = new WP_Query($args);
            wp_reset_postdata();
            if (isset($query)) {

                while ($query->have_posts()) : $query->the_post();
                    $cur_terms = get_the_terms( get_the_ID(), 'category' );
                    ?>
                    <div class="like-articles__item revealator-slideleft revealator-once revealator-delay1">
                        <div class="like-articles__item-img">
                            <a href="<?php the_permalink() ?>">
                                <div class="like-articles__item-image">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>"
                                         alt="<?php echo get_post_meta( get_post_thumbnail_id(get_the_ID() ), '_wp_attachment_image_alt', true) ?>">
                                </div>

                                <div class="like-articles__item-descr">
                                    <div class="like-articles__item-date">
                                        <span><?php echo get_the_date('M-j'); ?></span>
                                    </div>
                                    <div class="like-articles__item-category">
                                        <p><?php the_title() ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="like-articles__item-info">
                            <div class="like-articles__item-info-titles">
                                <span><?php echo get_the_date('M j, Y'); ?></span>

                                <p><?php echo $cur_terms[0]->name ?></p>
                            </div>

                            <div class="like-articles__item-info-descr">
                                <a href="<?php the_permalink() ?>">
                                    <h6><?php the_title() ?></h6>

                                    <?php echo get_field('short_description', get_the_ID()) ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php
                endwhile;
            }

            ?>

        </div>
    </div>
</section>

<?php
get_template_part('community')
?>

<?php
get_footer();
?>
