<?php
function loadStylesheets(){

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), false, 'all');
    wp_enqueue_style('normalize');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts','loadStylesheets');


function includeJquery(){
    wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js','',1,false);
    wp_enqueue_script('jquery');
    add_action('wp_enqueue_scripts','jquery');
}
add_action('wp_enqueue_scripts','includeJquery');

function includeBootstrapJs(){
    wp_register_script('bootstrapJS', get_template_directory_uri() . '/js/bootstrap.js','',1,false);
    wp_enqueue_script('bootstrapJS');
    add_action('wp_enqueue_scripts','bootstrapJS');
}
add_action('wp_enqueue_scripts','includeBootstrapJs');

function loadJS(){
    wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '',1,false);
    wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts','loadJS');

?>