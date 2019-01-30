<?php 

/*
Template Name: Trabaja con nosotros
*/

get_header(); ?>
<main class="Main" id="Trabaja">
    <?php get_template_part( 'navbar'); ?>


    <div  class="Nosotros-Background" style="background-size:100% auto; height:250px; background-image: url( <?php echo !empty($imgDestacada) ? $imgDestacada[0]: get_template_directory_uri() . '/images/quienes_somos.jpg' ?> )"></div>


    <section class="Content">
        
        <article class="the_content">
            <h1><?php the_title() ?> </h1>
            <section class="Contacto static">
                <div class="Contacto-Container">
                    <div class="Contacto-Header">
                        <p>Envianos tu hoja de vida y nos contactaremos contigo.</p>
                        <span>(* Campo obligatorio)</span>
                    </div>
                    <div class="Contacto-Body">
                        <form enctype="multipart/form-data" class="mui-form" id="trabaja-form" name="trabaja-form" action="<?php echo get_permalink(); ?>#trabaja-form" method="post">
                            <?php //Comprobamos si el formulario ha sido enviado
                            if (!empty( $_POST )) {
   
                                //Creamos una variable para almacenar los errores
                                global $reg_errors;
                                $reg_errors = new WP_Error;

                                $email = "sanruiz1003@gmail.com";
                                $allowed = ['application/octet-stream', 'application/pdf'];

                                //Recogemos en variables los datos enviados en el formulario y los sanitizamos.
                                //Si detectamos algún error, podremos más abajo rellenar los campos del formulario con los datos enviados para no tener que empezar el formulario de cero
                                $f_name = sanitize_text_field($_POST['f_name']);
                                $f_email = sanitize_email($_POST['f_email']);
                                $f_phone = sanitize_text_field($_POST['f_phone']);
                                $f_file = sanitize_text_field($_FILES['hoja']);

                                

                                //El campo Nombre es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
                                if ( empty( $f_name ) ) {
                                    $reg_errors->add("empty-name", "El campo nombre es obligatorio");
                                }
                                //El campo Email es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
                                if ( empty( $f_email ) ) {
                                    $reg_errors->add("empty-email", "El campo e-mail es obligatorio");
                                }
                                
                                //El campo Mensaje es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
                                if ( empty( $f_file ) ) {
                                    $reg_errors->add("empty-file", "El campo archivo es obligatorio");
                                }

                                if(!in_array($_FILES['hoja']['type'], $allowed)){
                                    $reg_errors->add("not-allowed-hoja", "El tipo de archivo no es permitido");
                                }

                                //Si no hay errores enviamos el formulario
                                if (count($reg_errors->get_error_messages()) == 0) {

                                    //Destinatario
                                    $recipient = $email;

                                    //Asunto del email
                                    $subject = 'Hoja de vida ' . get_bloginfo( 'name' );

                                    //La dirección de envio del email es la de nuestro blog por lo que agregando este header podremos responder al remitente original
                                    $headers = "Reply-to: " . $f_name . " <" . $f_email . ">\r\n";

                                    //Montamos el cuerpo de nuestro e-mail
                                    $message = "Nombre: " . $f_name . "<br>";
                                    $message .= "E-mail: " . $f_email . "<br>";
                                    $message .= "Teléfono: " . $f_phone . "<br>";
                                    $message .= "Mensaje: " . nl2br($f_message) . "<br>";

                                    //Filtro para indicar que email debe ser enviado en modo HTML
                                    add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
                                    
                                    

                                    if ( ! function_exists( 'wp_handle_upload' ) ) {
                                        require_once( ABSPATH . 'wp-admin/includes/file.php' );
                                    }

                                    $uploadedfile       = $_FILES['hoja'];
                                    $upload_overrides   = array( 'test_form' => false );
                                    $movefile           = wp_handle_upload( $uploadedfile, $upload_overrides );

                                    
                                    if( $movefile ) {
                                        //echo "File is valid, and was successfully uploaded.\n";
                                        //var_dump( $movefile);
                                        $attachments = $movefile['file'];
                                        $envio = wp_mail( $recipient, $subject, $message, $headers, $attachments);
                                        if($envio){
                                            echo "<div class='alert-message success'>Mensaje enviado satisfactoriamente!</div>";
                                        } else {
                                            echo "<div class='alert-message danger'>El mensaje no pudo ser enviado!</div>";
                                        }
                                    } 
                                    //Por último enviamos el email
                                    
                                    
                                } else {
                                    echo "<div class='alert-message danger'>" . end($reg_errors->get_error_messages()) . "</div>";
                                } 


                            }
                            ?>
                            <div class="mui-textfield mui-textfield--float-label">
                                <input type="text" name="f_name" id="f_name" required>
                                <label for="f_name">Nombre *</label>
                            </div>
                            <div class="mui-textfield mui-textfield--float-label">
                                <input type="email" name="f_email" id="f_email" required>
                                <label for="f_email">Email *</label>
                            </div>
                            <div class="mui-textfield mui-textfield--float-label">
                                <input type="text" name="f_phone" id="f_phone">
                                <label for="f_phone">Celular</label>
                            </div>
                            <div class="muicss-input-file">
                                <input type="file" name="hoja" required>
                                <label>Hoja de vida *</label>
                            </div>
                            <button type="submit" class="mui-btn mui-btn--raised">Enviar</button>
                        </form>
                    </div>
                </div>
            </section>
                        


        </article>
    </section>

<hr>

</main>

<?php get_footer(); ?>