<?php

add_action('wp_ajax_ajax_get_more_post', 'ajax_get_more_post');
add_action('wp_ajax_nopriv_ajax_get_more_post', 'ajax_get_more_post');


function ajax_get_more_post(){
    if( !isset($_POST['offset']) || !isset($_POST['post_type']) ){
        $result = array(
            'status'    => 'error1',
        );
        echo json_encode($result);
        die();
    }
    $offset = $_POST[ 'offset' ];
    $post_type = $_POST[ 'post_type' ];
    
    
    if( $post_type == 'page'){
        $args = array(
            'post_type'         => 'post',
            'offset'            => $offset,
            'posts_per_page'    => 7,
            'fields'            => 'ids',
        );
    }
    else {
        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => 7,
            'offset'            => $offset,
            'fields'            => 'ids',
            'tax_query'         => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => $post_type,
                )
            )
        );
    }

    $query = new WP_Query( $args );
    wp_reset_postdata();
    $html = [];
    if( isset($query)){
        $index = 6;
        while ($query->have_posts()) : $query->the_post();
            if( $index == 0 )
                break;
            $cur_terms = get_the_terms( get_the_ID(), 'category' );
            $html[] = '<div class="blog-content__item revealator-slideleft revealator-once revealator-delay1">';
                $html[] = '<div class="blog-content__item-image">';
                    $html[] = '<a href="' . get_the_permalink() . '">';
                        $html[] = '<div class="blog-content__item-image-img">';
                            $html[] = '<img src="' . get_the_post_thumbnail_url(get_the_ID(), 'full') . '"
                                 alt="' . get_post_meta( get_post_thumbnail_id(get_the_ID() ), '_wp_attachment_image_alt', true) . '">';
                            $html[] = '</div>';

                        $html[] = '<div class="blog-content__item-image-descr">';
                            $html[] = '<div class="blog-content__item-image-date">';
                                $html[] = '<span>' . get_the_date('M-j') . ' </span>';
                                $html[] = '</div>';

                            $html[] = '<div class="blog-content__item-image-title">';
                                $html[] = '<h2>' . get_the_title() . '</h2>';
                                $html[] = '</div>';
                            $html[] = '</div>';
                        $html[] = '</a>';
                    $html[] = '</div>';

                $html[] = '<div class="blog-content__item-info">';
                    $html[] = '<div class="blog-content__item-info-titles">';
                        $html[] = '<span>' . get_the_date('M j, Y') . '</span>';

                        $html[] = '<p>' . $cur_terms[0]->name . '</p>';
                        $html[] = '</div>';

                    $html[] = '<div class="blog-content__item-info-descr">';
                        $html[] = '<a href="' . get_the_permalink() . '">';
                            $html[] = '<h1>' . get_the_title() . '</h1>';

                            $html[] = '<p>' . get_field('short_description', get_the_ID()) . '</p>';
                            $html[] = '</a>';
                        $html[] = '</div>';
                    $html[] = '</div>';
                $html[] = '</div>';

            $index--;
        endwhile;
    }



    $result = array(
        'html'  => implode($html),
        'status'    => 'ok',
        'offset'    => intval($offset) + 6,
        'more_post' => $query->post_count > 6 ? 'ok' : 'none',
    );

    echo json_encode($result);
//    var_export($result);
    die();
}