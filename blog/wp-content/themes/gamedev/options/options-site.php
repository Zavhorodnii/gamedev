<?php

if(function_exists('acf_add_options_page'))
{
    acf_add_options_page(array(
        'page_title' 	=> 'Site settings',
        'menu_title'	=> 'Site settings',
        'menu_slug' 	=> 'site_main_settings_page',
        'redirect'		=> false
    ));
}