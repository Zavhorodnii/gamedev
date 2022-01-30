<?php


function v_eip_options_page()
{
    ?>
    <div>
        <?php screen_icon(); ?>
        <h2 class="title_style">Message reply</h2>
        <ul class="v_divScroll js_paste_link">
        </ul>
    </div>

    <?php
    $url_components = parse_url($_SERVER['REQUEST_URI']);
    parse_str($url_components['query'], $params);

    if( !array_key_exists('post_id', $params))
        return;
    $post_id = $params['post_id'];
    $content_post = get_post($post_id);
    $content = $content_post->post_content;
    ?>

    <div>
        <?php screen_icon(); ?>
        <div class="name_title">
            <h2 class="title_style">Name</h2>

            <h4><?php echo get_the_title($post_id) ?></h4>
        </div>

        <h2 class="title_style">Question</h2>

        <h4 class="question"><?php echo wpautop( $content, true)  ?></h4>


        <h2 class="title_style">Template</h2>

        <select name="select" class="js_get_selected_template_id select-style select-primary">
            <?php
            $args = array(
                'post_type'         => 'template',
                'posts_per_page'    => -1,
                'fields'            => 'ids',
            );
            $query = new WP_Query( $args );
            wp_reset_postdata();
            $first = true;
            if( isset($query)){

                while ($query->have_posts()) : $query->the_post();
                if ($first){
                    $content = get_the_content();
                    $first = false;
                }
                ?>
                    <option value="<?php echo get_the_ID() ?>"><?php the_title() ?></option>
                <?php
                endwhile;
            }
            ?>
        </select>

        <h2 class="title_style" >Answer</h2>
        <div class="ttt" style="width: 900px">
            <?php

            $editor_id = 'postdivrich';

            wp_editor( $content, $editor_id, array(
                'wpautop'       => 1,
                'media_buttons' => 1,
                'textarea_name' => 'postarea', //нужно указывать!
                'textarea_rows' => 20,
                'tabindex'      => null,
                'editor_css'    => '',
                'editor_class'  => '',
                'teeny'         => 0,
                'dfw'           => 0,
                'tinymce'       => 1,
                'quicktags'     => 1,
                'drag_drop_upload' => false,
            ) );
            ?>
        </div>


        <form method="post" class="">
            <div class="js_error_selected_category message-style"></div>
            <button class="js_send_email button-primary " data-email="<?php echo get_field('email', $post_id) ?>">Send</button>
        </form>
    </div>



    <script>
        window.ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
    </script>
    <?php
}