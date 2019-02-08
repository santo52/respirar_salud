

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
    <!-- Marcado JSON-LD generado por el Asistente para el marcado de datos estructurados de Google. -->
    <script type="application/ld+json">
        [ {
            "@context" : "http://schema.org",
            "@type" : "LocalBusiness",
            "name" : "Respirar Salud",
            "image" : "https://respirarsalud.com/wp-content/themes/respirar-salud-wordpress-theme/images/logo_blanco.svg",
            "telephone" : [ 
                "(+57) (1) 6401324", 
                "(+57) 318 782 5748" 
            ],
            "email" : "center@respirarsalud.com",
            "address" : {
                "@type" : "PostalAddress",
                "streetAddress" : "Carrera 70, No. 108-31",
                "addressLocality" : "BOGOTÁ",
                "addressRegion" : "CUNDINAMARCA",
                "addressCountry" : "Colombia"
            }
        }, {
            "@context" : "http://schema.org",
            "@type" : "LocalBusiness",
            "name" : "Respirar Salud",
            "image" : "https://respirarsalud.com/wp-content/themes/respirar-salud-wordpress-theme/images/logo_blanco.svg",
            "email" : "center@respirarsalud.com",
            "telephone" : [ 
                "(+57) (1) 6401324", 
                "(+57) 318 782 5748" 
            ],
            "address" : {
                "@type" : "PostalAddress",
                "streetAddress" : "calle 9 N. 7 - 44",
                "addressLocality" : "CHÍA",
                "addressRegion" : "CUNDINAMARCA",
                "addressCountry" : "Colombia"
            }
        }, {
            "@context" : "http://schema.org",
            "@type" : "LocalBusiness",
            "name" : "Respirar Salud",
            "image" : "https://respirarsalud.com/wp-content/themes/respirar-salud-wordpress-theme/images/logo_blanco.svg",
            "email" : "center@respirarsalud.com",
            "telephone" : [ 
                "(+57) (1) 6401324",
                "(+57) 318 782 5748" 
            ],
            "address" : {
                "@type" : "PostalAddress",
                "addressLocality" : "SOACHA",
                "addressRegion" : "CUNDINAMARCA",
                "addressCountry" : "Colombia"
            }
        }, {
            "@context" : "http://schema.org",
            "@type" : "LocalBusiness",
            "name" : "Respirar Salud",
            "image" : "https://respirarsalud.com/wp-content/themes/respirar-salud-wordpress-theme/images/logo_blanco.svg",
            "email" : "center@respirarsalud.com",
            "telephone" : [ 
                "(+57) (1) 6401324", 
                "(+57) 318 782 5748" 
            ],
            "address" : {
                "@type" : "PostalAddress",
                "addressLocality" : "FUSAGASUGÁ",
                "addressRegion" : "CUNDINAMARCA",
                "addressCountry" : "Colombia"
            }
        } ] 
    </script>
    <?php wp_head() ?>
</head>
<body style="overflow:hidden">
    <div class="Main-Container">
    