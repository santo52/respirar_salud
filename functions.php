<?php 

if(!function_exists('respirar_salud_styles')):

    function respirar_salud_styles(){

        $version = '1.0.1';

        wp_register_style( 'fonts', 'https://fonts.googleapis.com/css?family=Mukta:700|Open+Sans:300,300i,400' );
        wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.min.css', [], $version, 'all' );
        wp_register_style( 'muicss', '//cdn.muicss.com/mui-0.9.41/css/mui.min.css', ['normalize'],  $version, 'all');
        wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', ['muicss'], $version, 'all' );
        wp_register_style( 'style', get_stylesheet_uri(), ['main'], $version, 'all' );
        
        wp_enqueue_style( 'muicss' );
        wp_enqueue_style( 'main' );
        wp_enqueue_style( 'style' );
        wp_enqueue_style( 'fonts' );
        
    }

endif;

add_action( 'wp_enqueue_scripts', 'respirar_salud_styles' );


if(!function_exists('respirar_salud_scripts')):

    function respirar_salud_scripts(){

        $version = '1.0.1';
        $jQueryVersion = '3.3.1';

        wp_register_script( 'jQuery_js', "https://ajax.googleapis.com/ajax/libs/jquery/{$jQueryVersion}/jquery.min.js", array( 'jquery' ), $jQueryVersion, true );
        wp_register_script( 'tween_max', "https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js", array( 'jQuery_js' ), $version, true );
        wp_register_script( 'muijs', "//cdn.muicss.com/mui-0.9.41/js/mui.min.js", array(), $version, true );
        wp_register_script( 'functions', get_template_directory_uri() . '/js/functions.min.js', array('tween_max', 'muijs'), $version , true );
        wp_register_script( 'script', get_template_directory_uri() . '/js/script.min.js', array('functions'), $version , true );


        wp_enqueue_script( 'muijs' );
        wp_enqueue_script( 'jQuery_js' );
        wp_enqueue_script( 'tween_max' );
        wp_enqueue_script( 'functions' );
        wp_enqueue_script( 'script' );
        
    }

endif;

add_action( 'wp_footer', 'respirar_salud_scripts' );


//agregar funcionalidades adicionales
if(!function_exists('respirar_salud_setup')) :

    function respirar_salud_setup(){
        //https://developer.wordpress.org/reference/functions/add_theme_support
        add_theme_support('post-thumbnails');
    }
endif;

add_action('after_setup_theme', 'respirar_salud_setup');


if(!function_exists('respirar_salud_menus')) : 
    
    function respirar_salud_menus(){
        register_nav_menus( array(
            'main_menu' => __('Menú Principal', 'respirar_salud'),
            'services_menu' => __('Menu Servicios', 'respirar_salud')
        ));
    }
endif;

add_action('init', 'respirar_salud_menus');