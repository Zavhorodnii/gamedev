<?php

function show_posts($query, $index){

    while ($query->have_posts()) : $query->the_post();
    if( $index == 0 )
    break;
    $cur_terms = get_the_terms( get_the_ID(), 'category' );
    ?>
    <div class="blog-content__item revealator-slideleft revealator-once revealator-delay1">
        <div class="blog-content__item-image">
            <a href="<?php the_permalink() ?>">
                <div class="blog-content__item-image-img">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>"
                         alt="<?php echo get_post_meta( get_post_thumbnail_id(get_the_ID() ), '_wp_attachment_image_alt', true) ?>">
                </div>

                <div class="blog-content__item-image-descr">
                    <div class="blog-content__item-image-date">
                        <span><?php echo get_the_date('M-j'); ?></span>
                    </div>

                    <div class="blog-content__item-image-title">
                        <h2><?php the_title() ?></h2>
                    </div>
                </div>
            </a>
        </div>

        <div class="blog-content__item-info">
            <div class="blog-content__item-info-titles">
                <span><?php echo get_the_date('M j, Y'); ?></span>

                <p><?php echo $cur_terms[0]->name ?></p>
            </div>

            <div class="blog-content__item-info-descr">
                <a href="<?php the_permalink() ?>">
                    <h1><?php the_title() ?></h1>

                    <p><?php echo get_field('short_description', get_the_ID()) ?></p>
                </a>
            </div>
        </div>
    </div>
    <?php
    $index--;
    endwhile;
}