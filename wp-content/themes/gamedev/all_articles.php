<?php
/**
 * Template Name: All articles
 * Template Post Type: Page
 */

get_header();
$this_page_id = get_the_ID();
?>

<?php
    get_template_part('navbar')
?>

<section class="blog-content">
    <div class="container">
        <div class="blog-content__items js_paste_post">

            <?php
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => 8,
                'fields'            => 'ids',
            );
            $query = new WP_Query( $args );
            wp_reset_postdata();
            if( isset($query)){
                $index = 7;
                show_posts($query, $index);
            }
            ?>


        </div>
        <?php

        if( $query->post_count > 7){
        ?>

        <div class="blog-content__btn js_delete_more_posts">
            <a id="load" class="js_click_load_more_posts" data-post-type="<?php echo is_tax() ? 'taxonomy' : 'page'; ?>" data-post-offset="<?php echo $query->post_count -1 ?>" href="#">
                <button >Load More</button>
            </a>
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
