

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
<body style="overflow:hidden">
    <div class="Main-Container">
    <header class="Header">
        <div class="Header-Container">
            <div class="Logo" id="Logo">
                <a id="White-Logo" href="<?php echo esc_url(home_url('/')); ?>">
                    <img style="padding: 5px;" src="<?php echo get_template_directory_uri() . '/images/logo_blanco.svg' ?>" alt="Respirar Salud Logo" >
                </a>
                <a class="hidden" id="Color-Logo" href="<?php echo esc_url(home_url('/')); ?>" >
                    <img src="<?php echo get_template_directory_uri() . '/images/logo.svg' ?>" alt="Respirar Salud Logo" >
                </a>
            </div>
            <nav class="Menu" id="Main-Menu">
                <span class="Menu-Dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="100%" height="100%" viewBox="0 0 433.5 433.5" xml:space="preserve">
                        <path d="M0,293.25h433.5v-51H0V293.25z M0,395.25h433.5v-51H0V395.25z M0,191.25h433.5v-51H0V191.25z M0,38.25v51h433.5v-51H0z" />
                    </svg>
                </span>
                <ul>
                <?php if(has_nav_menu( 'main_menu' )) : ?>
                        <?php wp_nav_menu(array(
                            'location' => 'main_menu',
                            'container' => 'nav',
                            'container_class' => 'menu'
                        )); ?>
                    <?php else:  ?>
                        <?php wp_list_pages('title_li') ?>
                    <?php endif;  ?>
                    <!--<li><a class="underline center" href="javascript:void(0)" >Nosotros</a></li>
                    <li><a class="underline center" href="javascript:void(0)" data-scroll-to="Services" >Servicios</a></li>
                    <li><a class="underline center" href="javascript:void(0)" data-scroll-to="News" >Noticias</a></li>-->
                    <li><a class="underline center" href="javascript:void(0)" id="Contacto-open" >Contacto</a></li>
                </ul>
            </nav>
            <div id="Call">
                <a href="#" class="Call-Text">
                    <span class="line-icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/llamanos_ya.svg' ?>" alt="llamanos ya">
                    </span>
                    <span class="Call-Title">Llamanos ya!</span> 
                    <span class="Call-Complement">: (+57) (1) 640 1283</span>
                </a>
            </div>
        </div>
    </header>
    <main class="Main">