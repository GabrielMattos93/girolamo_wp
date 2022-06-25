<?php

function girolamo_style(){
    wp_enqueue_style('style_css', get_stylesheet_uri() );
    wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/assets/css/main.css'  );
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap'  );
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css'  );

    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true); 
}


add_action('wp_enqueue_scripts', 'girolamo_style'); 

add_theme_support('title-tag'); 