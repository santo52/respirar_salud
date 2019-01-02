<?php 

$version = '1.0.0';
$jQueryVersion = '3.1.1';

$font = 'https://fonts.googleapis.com/css?family=Crimson+Text|Lobster|Oleo+Script:700|Roboto:400,700';


if(!function_exists('respirar_salud_scripts')):

    function respirar_salud_scripts(){


        wp_register_style( 'font', $font );
        wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', array(), $version, 'all' );
        wp_register_style( 'style', get_stylesheet_uri(), ['main'], $version, 'all' );
        wp_register_script( 'jQuery_js', "https://ajax.googleapis.com/ajax/libs/jquery/{$jQueryVersion}/jquery.min.js", array( 'jquery' ), $jQueryVersion, true );
        wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', array(), $version , true );

        wp_enqueue_style( 'main' );
        wp_enqueue_style( 'style' );
        wp_enqueue_style( 'font' );
        wp_enqueue_script( 'jQuery_js' );
        wp_enqueue_script( 'script' );
    }

endif;

add_action( 'wp_enqueue_scripts', 'respirar_salud_scripts' );

function some_name(){
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', some_name );