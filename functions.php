<?php 

if(!function_exists('respirar_salud_styles')):

    function respirar_salud_styles(){

        $version = '1.0.1';

        wp_register_style( 'fonts', 'https://fonts.googleapis.com/css?family=Mukta:700|Open+Sans:300,300i,400' );
        wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.min.css', [], $version, 'all' );
        wp_register_style( 'muicss', '//cdn.muicss.com/mui-0.9.41/css/mui.min.css', ['normalize'],  $version, 'all');
        wp_register_style( 'owl_css', get_template_directory_uri() . '/css/assets/owl.carousel.min.css', ['normalize'],  $version, 'all');
        wp_register_style( 'owl_theme', get_template_directory_uri() . '/css/assets/owl.theme.default.min.css', ['owl_css'],  $version, 'all');
        wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', ['muicss', 'owl_theme'], $version, 'all' );
        wp_register_style( 'style', get_stylesheet_uri(), ['main'], $version, 'all' );
        
        
        wp_enqueue_style( 'muicss' );
        wp_enqueue_style( 'owl_css' );
        wp_enqueue_style( 'owl_theme' );
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
        wp_register_script( 'owl_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jQuery_js' ), $version, true );
        wp_register_script( 'muijs', "//cdn.muicss.com/mui-0.9.41/js/mui.min.js", array(), $version, true );
        wp_register_script( 'functions', get_template_directory_uri() . '/js/functions.min.js', array('tween_max', 'muijs'), $version , true );
        wp_register_script( 'script', get_template_directory_uri() . '/js/script.min.js', array('functions'), $version , true );
        wp_enqueue_script( 'ajax', get_template_directory_uri() .  '/js/ajax-scripts.js', array('jQuery_js'), '1.0', true );

        wp_enqueue_script( 'muijs' );
        wp_enqueue_script( 'owl_js' );
        wp_enqueue_script( 'jQuery_js' );
        wp_enqueue_script( 'tween_max' );
        wp_enqueue_script( 'functions' );
        wp_enqueue_script( 'script' );
        wp_enqueue_script( 'ajax' );
        
        wp_localize_script('ajax','dcms_vars',[
            'ajaxurl'=>admin_url('admin-ajax.php'),
            'security'  => wp_create_nonce( 'acme-security-nonce' )
        ]);
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





if(!function_exists('prefix_add_excerpt_to_page')) : 
    function prefix_add_excerpt_to_page() {
        add_post_type_support( 'page', 'excerpt' );
    }
endif;
add_action( 'init', 'prefix_add_excerpt_to_page' );



//Enviar correo
add_action('wp_ajax_nopriv_send_email_process','send_email_process');
add_action('wp_ajax_send_email_process','send_email_process');

if(!function_exists('send_email_process')) : 
function send_email_process() {
    //if ( ! check_ajax_referer( 'acme-security-nonce', 'security' ) ) {

        $f_name = sanitize_text_field($_POST['f_name']);
        $f_email = sanitize_email($_POST['f_email']);
        $f_phone = sanitize_text_field($_POST['f_phone']);
        $f_area = sanitize_text_field($_POST['f_area']);
        $f_message = sanitize_text_field($_POST['f_message']);

        //Destinatario
        $recipient = $f_area;

        //Asunto del email
        $subject = 'Formulario de contacto ' . get_bloginfo( 'name' );

        //La dirección de envio del email es la de nuestro blog por lo que agregando este header podremos responder al remitente original
        $headers = "Reply-to: " . $f_name . " <" . $f_email . ">\r\n";

        //Montamos el cuerpo de nuestro e-mail
        $message = "Nombre: " . $f_name . "<br>";
        $message .= "E-mail: " . $f_email . "<br>";
        $message .= "Teléfono: " . $f_phone . "<br>";
        $message .= "Mensaje: " . nl2br($f_message) . "<br>";

        //Filtro para indicar que email debe ser enviado en modo HTML
        add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
        
        //Por último enviamos el email
        $envio = wp_mail( $recipient, $subject, $message, $headers, []);
        $response['recipient'] = $recipient;
        $response['subject'] = $subject;
        $response['message'] = $message;
        $response['headers'] = $headers;
        
        if($envio){
            $response['resp'] = 1;
            $response['class'] = "success";
            $response['msg'] = "El mensaje ha sido enviado satisfactoriamente!";
        } else {
            $response['resp'] = 0;
            $response['class'] = "danger";
            $response['msg'] = "El mensaje no ha podido ser enviado!";
        }

        echo json_encode($response);
        wp_die();
    //}
}

endif;



add_action( 'phpmailer_init', 'configuracion_smtp' );
function configuracion_smtp( PHPMailer $mail ){
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'noreply.respirarsalud@gmail.com';                 // SMTP username
    $mail->Password = '7dc242e370db84bcc527ae1a925d1222';                         // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
    $mail->setFrom('noreply@respirarsalud.com', 'Respirar Salud');
}