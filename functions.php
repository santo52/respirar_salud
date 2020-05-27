<?php 

if(!function_exists('respirar_salud_styles')):

    function respirar_salud_styles(){

        $version = '1.0.91';

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

        $version = '1.0.5';
        $jQueryVersion = '3.3.1';

        wp_register_script( 'jQuery_js', "https://ajax.googleapis.com/ajax/libs/jquery/{$jQueryVersion}/jquery.min.js", array( 'jquery' ), $jQueryVersion, true );
        wp_register_script( 'tween_max', "https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js", array( 'jQuery_js' ), $version, true );
        wp_register_script( 'owl_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jQuery_js' ), $version, true );
        wp_register_script( 'muijs', "//cdn.muicss.com/mui-0.9.41/js/mui.min.js", array(), $version, true );
        wp_register_script( 'functions', get_template_directory_uri() . '/js/functions.min.js', array('tween_max', 'muijs'), $version , true );
        // wp_register_script( 'script', get_template_directory_uri() . '/js/script.min.js', array('functions'), $version , true );
        wp_enqueue_script( 'ajax', get_template_directory_uri() .  '/js/ajax-scripts.min.js', array('jQuery_js'), '1.0', true );

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


if(!function_exists('polylang_strings_add') && function_exists('pll_register_string')) : 
    function polylang_strings_add() {
        pll_register_string('respirar-salud', 'Noticias', 'Home');
        pll_register_string('respirar-salud', 'Contacto', 'Home');
        pll_register_string('respirar-salud', 'Selecciona el idioma', 'Home');
        pll_register_string('respirar-salud', 'Todo', 'Home');
        pll_register_string('respirar-salud', 'Leer más', 'Home');
        pll_register_string('respirar-salud', 'Línea de atención', 'Home');
        pll_register_string('respirar-salud', 'Líneas directas consulta médica', 'Home');
        pll_register_string('respirar-salud', 'Líneas directas terapias', 'Home');
        pll_register_string('respirar-salud', 'Servicios integrales en salud', 'Home');
        pll_register_string('respirar-salud', 'TRABAJAMOS', 'Home');
        pll_register_string('respirar-salud', 'Trabajamos con', 'Home');
        pll_register_string('respirar-salud', 'Nuestros servicios', 'Home');

        pll_register_string('respirar-salud', 'ATENCIÓN MÉDICA DOMICILIARIA', 'Home');
        pll_register_string('respirar-salud', 'Atención médica domiciliaria', 'Home');
        pll_register_string('respirar-salud', 'Terapias Físicas', 'Home');
        pll_register_string('respirar-salud', 'Terapias respiratorias', 'Home');
        pll_register_string('respirar-salud', 'Paciente crónico niños y jóvenes', 'Home');
        
        pll_register_string('respirar-salud', 'SALUD KIDS', 'Home');
        pll_register_string('respirar-salud', 'Salud kids', 'Home');
        pll_register_string('respirar-salud', 'ENFERMERÍA', 'Home');
        pll_register_string('respirar-salud', 'Enfermería', 'Home');
        pll_register_string('respirar-salud', 'Clínica de heridas', 'Home');
        pll_register_string('respirar-salud', 'Paciente crónico', 'Home');
        pll_register_string('respirar-salud', 'Ciudador', 'Home');
        pll_register_string('respirar-salud', 'Ciudado integral del paciente (PHD)', 'Home');

        pll_register_string('respirar-salud', 'notas de interés', 'Home');

        pll_register_string('respirar-salud', 'Entérate de nuestras últimas noticias e innovaciones', 'Respirar Salud', true);
        pll_register_string('respirar-salud', 'selecciona la categoría que quieres ver', 'Respirar Salud', true);
        pll_register_string('respirar-salud', 'Nuestro servicio de consulta médica prioritaria tiene el objetivo de la evaluación de los síntomas específicos, definir la posibilidad de atención en domicilio o generar direccionamiento de traslado a una IPS hospitalaria, según análisis de síntomas evidenciados', 'Respirar Salud', true);
        pll_register_string('respirar-salud', 'Para las atenciones de todos los niños, niñas y adolescentes hasta los 14 años, Respirar salud, cuenta con atención médica domiciliaria, por medio de profesionales especializados en pediatría, quienes, valoran, diagnostican y realizan seguimientos, desde la comodidad de su hogar', 'Respirar Salud', true);
        pll_register_string('respirar-salud', 'Nuestro personal de enfermería está capacitado para manejo de actividades básicas como asistencia alimentaria, cuidados y aseo de la piel, procedimientos menores, cambios de sonda, cateterismos intermitentes, curaciones de baja, mediana y alta complejidad, aplicación de medicamentos y amplia experiencia en pacientes en condición aguda y crónica a nivel Domiciliaria.', 'Respirar Salud', true);



        pll_register_string('respirar-salud', 'Estamos para servirte, cuentanos tu inquietud', 'Contact');
        pll_register_string('respirar-salud', 'Campo obligatorio', 'Contact');
        pll_register_string('respirar-salud', 'Nombre', 'Contact');
        pll_register_string('respirar-salud', 'Correo electrónico', 'Contact');
        pll_register_string('respirar-salud', 'Celular', 'Contact');
        pll_register_string('respirar-salud', 'Recurso Humano', 'Contact');
        pll_register_string('respirar-salud', 'Consulta médica Domiciliaria', 'Contact');
        pll_register_string('respirar-salud', 'Terapias', 'Contact');
        pll_register_string('respirar-salud', 'Proveedores', 'Contact');
        pll_register_string('respirar-salud', 'Seleccionar area', 'Contact');
        pll_register_string('respirar-salud', 'Asunto', 'Contact');
        pll_register_string('respirar-salud', 'Enviar', 'Contact');

        pll_register_string('respirar-salud', 'Síguenos en', 'Footer');
        pll_register_string('respirar-salud', 'TRABAJA CON NOSOTROS', 'Footer');
        pll_register_string('respirar-salud', 'Sedes', 'Footer');
        pll_register_string('respirar-salud', 'Dale clic para ver la ubicación en el mapa', 'Footer');
        pll_register_string('respirar-salud', 'Atención al cliente', 'Footer');
        pll_register_string('respirar-salud', 'Cobertura', 'Footer');
        pll_register_string('respirar-salud', 'Norte-Sur: Desde peaje Autopista norte a la Calle 108 sur', 'Footer');
        pll_register_string('respirar-salud', 'Oriente-Occidente: Cra. 25 este a la Cra. 134', 'Footer');
        pll_register_string('respirar-salud', 'Cobertura a todo el municipio de Chía, Soacha, Fusagasugá, municipios aledaños y toda la sabana', 'Footer');
        pll_register_string('respirar-salud', 'Realiza tu pago a domicilio a través de', 'Footer');
        
        pll_register_string('respirar-salud', 'Autor', 'Single');
        pll_register_string('respirar-salud', 'Publicado', 'Single');

        pll_register_string('respirar-salud', 'Llamanos ya', 'navbar');

        
        
        
        

    }
endif;
add_action( 'init', 'polylang_strings_add' );



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
        $envio = wp_mail($recipient, $subject, $message, $headers, []);
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

if (!empty($_SERVER['HTTPS'])) {
    function add_hsts_header($headers) {
      $headers['strict-transport-security'] = 'max-age=31536000; includeSubDomains';
      return $headers;
    }
  
  add_filter('wp_headers', 'add_hsts_header');
}



/*add_action( 'phpmailer_init', 'configuracion_smtp' );
if(!function_exists('configuracion_smtp')) : 
function configuracion_smtp( PHPMailer $mail ){
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'noreply.respirarsalud@gmail.com';                 // SMTP username
    $mail->Password = '7dc242e370db84bcc527ae1a925d1222';                         // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
    $mail->setFrom('noreply@respirarsalud.com', 'Home');
}
endif;*/