<?php 



if(!function_exists('respirar_salud_scripts')):

    function respirar_salud_scripts(){

        $version = '1.0.0';
        $jQueryVersion = '3.1.1';
        $fontMain = 'https://fonts.googleapis.com/css?family=Open+Sans:300';
        $fontTitle='https://fonts.googleapis.com/css?family=Mukta:700';


        wp_register_style( 'title_font', $fontTitle );
        wp_register_style( 'main_font', $fontMain );
        wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', [], $version, 'all' );
        wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', ['normalize'], $version, 'all' );
        wp_register_style( 'style', get_stylesheet_uri(), ['main'], $version, 'all' );
        wp_register_script( 'jQuery_js', "https://ajax.googleapis.com/ajax/libs/jquery/{$jQueryVersion}/jquery.min.js", array( 'jquery' ), $jQueryVersion, true );
        wp_register_script( 'tween_max', "https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js", array( 'jQuery_js' ), $version, true );
        wp_register_script( 'functions', get_template_directory_uri() . '/js/functions.js', array('tween_max'), $version , true );
        wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', array('functions'), $version , true );


        
        wp_enqueue_style( 'main' );
        wp_enqueue_style( 'style' );
        wp_enqueue_style( 'title_font' );
        wp_enqueue_style( 'main_font' );
        wp_enqueue_script( 'tween_max' );
        wp_enqueue_script( 'jQuery_js' );
        wp_enqueue_script( 'functions' );
        wp_enqueue_script( 'script' );
    }

endif;

add_action( 'wp_enqueue_scripts', 'respirar_salud_scripts' );