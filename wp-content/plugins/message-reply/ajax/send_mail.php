<?php

add_action('wp_ajax_send_mail', 'send_mail');
add_action('wp_ajax_nopriv_send_mail', 'send_mail');


function send_mail(){
    if(!isset($_POST['email']) ){
        $result = array(
            'status'    => 'error1',
        );
        echo json_encode($result);
        die();
    }
    $mail = $_POST[ 'email' ];

    $mail_massage = stripcslashes($_POST['message']);

    $headers = 'From: Message from  <gamedev/@gamedev.com>' . "\r\n";

    $content_type = function() { return 'text/html'; };
    add_filter( 'wp_mail_content_type', $content_type );
    $success = wp_mail($mail, 'Message from ' . get_home_url(), $mail_massage, $headers);
    remove_filter( 'wp_mail_content_type', $content_type );

    $template = get_post($_POST['post_id']);

    if ($success){
        $result = array(
            'status'    => 'ok',
            'template'  => wpautop( $template->post_content, true),
        );
    } else{
        $result = array(
            'status'    => 'error2',
        );
    }
    echo json_encode($result);
//    var_export($result);
    die();
}