<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php 
            bloginfo('name'); 
            if(!is_front_page()) :
                echo ' | ';  
                wp_title( '|', true, 'right' );
            endif;
            ?>
    </title>
    <?php wp_head() ?>
</head>
<body>
    <header class="Header">
        <div class="Logo" id="Logo">
            <img class="hidden" src="<?php echo get_template_directory_uri() . '/images/logo.svg' ?>" alt="Respirar Salud Logo" >
        </div>
        <nav class="Menu">
            <ul>
                <li><a class="underline center" href="#">Nosotros</a></li>
                <li><a class="underline center" href="#">Servicios</a></li>
                <li><a class="underline center" href="#">Noticias</a></li>
                <li><a class="underline center" href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main class="Main">