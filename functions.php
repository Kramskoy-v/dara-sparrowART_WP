<?php

add_action( 'wp_enqueue_scripts', function (){
    function my_update_jquery () {
        if ( !is_admin() ) { 
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', false, false, false);
        wp_enqueue_script('jquery');
        }
    }

    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css' );
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css' );
    
   
    wp_enqueue_script( 'fancyboxJs', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
);

add_theme_support( 'post-thumbnails' );
add_theme_support('title-tag');
add_theme_support('custom-logo');

/* Отключить админ-панель для всех пользователей */
show_admin_bar(false);
?>


 