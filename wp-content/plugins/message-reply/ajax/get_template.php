<?php


add_action('wp_ajax_get_template', 'get_template_text');
add_action('wp_ajax_nopriv_get_template', 'get_template_text');

function get_template_text(){

    $template = get_post($_POST['post_id']);

    $result = array(
        'status'    => 'ok',
        'template'  => wpautop( $template->post_content, true),
    );
    echo json_encode($result);
    die();
}
