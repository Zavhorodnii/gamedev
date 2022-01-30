<?php

add_action('wp_ajax_ajax_form_dev', 'ajax_form_dev');
add_action('wp_ajax_nopriv_ajax_form_dev', 'ajax_form_dev');


function ajax_form_dev(){
    if(!isset($_POST['email']) ){
        $result = array(
            'status'    => 'error1',
        );
        echo json_encode($result);
        die();
    }
    $name = $_POST[ 'name' ];
    $email = $_POST[ 'email' ];
    $message = $_POST[ 'message' ];

    $mail = get_field('email_follow', 'options');

    $add_info = "\r\n" . 'Message: ' . $message;

    $mail_massage = 'Site: ' . get_site_url() . "\r\n" . 'Message' ."\r\n\r\n" .'Name: ' . $name . "\r\n" . 'Email: ' . $email . "\r\n" . $add_info;

    $headers = 'From: Message from  <gamedev/@gamedev.com>' . "\r\n";

    $success = wp_mail($mail, 'Message from form', $mail_massage, $headers);


    $post_id = wp_insert_post(  wp_slash( array(
        'post_status'   => 'publish',
        'post_type'     => 'message',
        'post_title'    => sanitize_text_field( $name ),
        'post_content'  => $message,
        'meta_input'    => [
            'email'     => $email
        ],
    ) ) );



    if ($success){
        $result = array(
            'status'    => 'ok',
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