<?php
$this_page_id = get_the_ID();
get_header();
?>

<?php
get_template_part('navbar');

$category = get_queried_object();
$category_id = $category->term_id;

?>

<section class="announ-content"
        style="background-image: linear-gradient(to right, rgba(0,0,0,.6), rgba(0,0,0,.6)), url(<?php echo get_field('category_image', $category)['url'] ?>) !important;">
    <div class="container">
        <h1><?php echo $category->name ?></h1>

        <p><?php echo $category->description ?></p>
    </div>
</section>

<section class="announ-card">
    <div class="container">
        <div class="announ-card__items js_paste_post">

            <?php
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => 4,
                'fields'            => 'ids',
                'tax_query'         => array(
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => $category->slug,
                    )
                )
            );
            $query = new WP_Query( $args );
            wp_reset_postdata();
            if( isset($query)){
                $index = 3;
                while ($query->have_posts()) : $query->the_post();
                    if( $index == 0 )
                        break;
                    ?>
                    <div class="announ-card__item revealator-slideleft revealator-once revealator-delay1">
                        <div class="announ-card__item-img">
                            <a href="<?php the_permalink() ?>">
                                <div class="announ-card__item-image">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>"
                                         alt="<?php echo get_post_meta( get_post_thumbnail_id(get_the_ID() ), '_wp_attachment_image_alt', true) ?>">
                                </div>

                                <div class="announ-card__item-descr">
                                    <div class="announ-card__item-date">
                                        <span><?php echo get_the_date('M-j'); ?></span>
                                    </div>
                                    <div class="announ-card__item-category">
                                        <p><?php the_title() ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="announ-card__item-info">
                            <div class="announ-card__item-info-titles">
                                <span><?php echo get_the_date('M j, Y'); ?></span>

                                <p><?php echo $category->name ?></p>
                            </div>

                            <div class="announ-card__item-info-descr">
                                <a href="<?php the_permalink() ?>">
                                    <h6><?php the_title() ?></h6>

                                    <p><?php echo get_field('short_description', get_the_ID()) ?></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                    $index--;
                endwhile;
            }
            ?>

        </div>

        <?php

        if( $query->post_count > 3){
            ?>

            <div class="announ-card__btn js_delete_more_posts">
                <button class="js_click_load_more_posts" data-post-type="<?php echo $category->slug ?>" data-post-offset="<?php echo $query->post_count -1 ?>">Load More</button>
            </div>

            <?php
        }
        ?>

    </div>
</section>

<?php
get_template_part('community')
?>

<?php
get_footer();
?>
