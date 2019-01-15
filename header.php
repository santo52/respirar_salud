<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">
    <meta name="language" content="spanish"/>
    <!--<link rel="shortcut icon" href="https://beta.eltiempo.com/favicon.ico?1547236251" />-->
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
            <span id="White-Logo">
                <img style="padding: 5px;" src="<?php echo get_template_directory_uri() . '/images/logo_blanco.svg' ?>" alt="Respirar Salud Logo" >
            </span>
            <span id="Color-Logo" class="hidden">
                <img src="<?php echo get_template_directory_uri() . '/images/logo.svg' ?>" alt="Respirar Salud Logo" >
            </span>
            
        </div>
        <nav class="Menu" id="Main-Menu">
            <ul>
                <li><a class="underline center" href="javascript:void(0)" >Nosotros</a></li>
                <li><a class="underline center" href="javascript:void(0)" data-scroll-to="Services" >Servicios</a></li>
                <li><a class="underline center" href="javascript:void(0)" data-scroll-to="News" >Noticias</a></li>
                <li><a class="underline center" href="javascript:void(0)">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main class="Main">