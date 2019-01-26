

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">
    <meta name="language" content="spanish"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/favicon.ico?2' ?>" />
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
    