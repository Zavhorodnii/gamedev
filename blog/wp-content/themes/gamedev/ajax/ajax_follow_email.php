<?php

add_action('wp_ajax_ajax_follow_email', 'ajax_follow_email');
add_action('wp_ajax_nopriv_ajax_follow_email', 'ajax_follow_email');


function ajax_follow_email(){
    if(!isset($_POST['email']) ){
        $result = array(
            'status'    => 'error1',
        );
        echo json_encode($result);
        die();
    }
    $email = $_POST[ 'email' ];

    $mail = get_field('email_follow', 'options');

    $add_info = '';

    $mail_massage = 'Site: ' . get_site_url() . "\r\n" . 'Follow' ."\r\n\r\n" .'Email: ' . $email . "\r\n" . $add_info;

    $headers = 'From: Message from  <gamedev/@gamedev.com>' . "\r\n";
    $success = wp_mail($mail, 'Message from form', $mail_massage, $headers);

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