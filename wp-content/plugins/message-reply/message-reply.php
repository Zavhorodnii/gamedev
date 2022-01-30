<?php

/**
 * @link              http://example.com
 * @since             1.0.0
 * @package           Message reply
 *
 * @wordpress-plugin
 * Plugin Name:       Message reply
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       Message reply
 * Version:           1.0.0
 * Author:            Vitalii
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

require_once ('v_ei_wc_product.php');
require_once ('ajax/register-ajax.php');


add_action('admin_init', 'v_add_plugin_style');
function v_add_plugin_style() {
    wp_register_style( 'v_style_plugin', plugins_url('/assets/css/style.css',__FILE__ ));
    wp_enqueue_style( 'v_style_plugin' );
}




add_action( 'admin_menu', 'true_top_menu_page', 25 );

function true_top_menu_page(){

    add_menu_page(
        'Message reply', // тайтл страницы
        'Message reply', // текст ссылки в меню
        'manage_options', // права пользователя, необходимые для доступа к странице
        'message-reply', // ярлык страницы
        'myplugin_options_page', // функция, которая выводит содержимое страницы
        'dashicons-email-alt2', // иконка, в данном случае из Dashicons
        20 // позиция в меню
    );
}

function myplugin_options_page(){

    v_eip_options_page();
}

add_action('admin_init', 'v_add_plugin_scripts');
function v_add_plugin_scripts() {
    wp_register_script( 'v_main_script_jquery', plugins_url('/assets/js/jquery/jquery.min.js',__FILE__ ));
    wp_enqueue_script( 'v_main_script_jquery' );
    wp_register_script( 'v_main_script_plugin', plugins_url('/assets/js/v_main_scripts.js',__FILE__ ));
    wp_enqueue_script( 'v_main_script_plugin' );
}
