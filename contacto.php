<section class="Contacto">
    <div class="Contacto-Container">
        <div class="Contacto-Header">
            <a href="javascript:void(0)" id="Contacto-close">
                <img src="<?php echo get_template_directory_uri() . '/images/icons/equis.svg' ?>" alt="equis">
            </a>
            <p>Estamos para servirte, cuentanos tu inquietud.</p>
            <span>(* Campo obligatorio)</span>
        </div>
        <div class="Contacto-Body">
            <form class="mui-form" id="form-correo" name="contact-form" method="post" enctype="multipart/form-data">
                <?php //Comprobamos si el formulario ha sido enviado
                if (!empty( $_POST )) {
                    //Creamos una variable para almacenar los errores
                    global $reg_errors;
                    $reg_errors = new WP_Error;

                    //Recogemos en variables los datos enviados en el formulario y los sanitizamos.
                    //Si detectamos algún error, podremos más abajo rellenar los campos del formulario con los datos enviados para no tener que empezar el formulario de cero
                    $f_name = sanitize_text_field($_POST['f_name']);
                    $f_email = sanitize_email($_POST['f_email']);
                    $f_phone = sanitize_text_field($_POST['f_phone']);
                    $f_area = sanitize_text_field($_POST['f_area']);
                    $f_message = sanitize_text_field($_POST['f_message']);

                    //El campo Nombre es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
                    if ( empty( $f_name ) ) {
                        $reg_errors->add("empty-name", "El campo nombre es obligatorio");
                    }
                    //El campo Email es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
                    if ( empty( $f_email ) ) {
                        $reg_errors->add("empty-email", "El campo e-mail es obligatorio");
                    }
                    //Comprobamos que el dato tenga formato de e-mail con la función de WordPress "is_email" y en caso contrario creamos un registro de error
                    if ( !is_email( $f_email ) ) {
                        $reg_errors->add( "invalid-email", "El e-mail no tiene un formato válido" );
                    }
                    //El campo Area es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
                    if ( empty( $f_area ) ) {
                        $reg_errors->add("empty-area", "El campo area es obligatorio");
                    }
                    //El campo Mensaje es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
                    if ( empty( $f_message ) ) {
                        $reg_errors->add("empty-message", "El campo consulta es obligatorio");
                    }

                    //Si no hay errores enviamos el formulario
                    if (count($reg_errors->get_error_messages()) == 0) {

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
                        $envio = wp_mail( $recipient, $subject, $message, $headers, $attachments);
                        
                    }
                }
                ?>
                <input type="file" name="archivo">
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
                <div class="mui-select">
                    <select name="f_area" id="f_area" required>
                        <option value="">...</option>
                        <option value="sanruiz1003@yopmail.com"> Santiago correo</option>
                        <option value="haiderandrey@gmail.com"> Haider correo</option>
                        <option value="talentohumano@respirarsalud.com"> Recurso Humano</option>
                        <option value="clinicadeheridas@respirarsalud.com"> Clínica de heridas</option>
                        <option value="servicios.consulta@respirarsalud.com"> Consulta médica Domiciliaria</option>
                        <option value="terapias@respirarsalud.com"> Terapias</option>
                        <option value="jefeenfermeria@respirarsalud.com"> Enfermería</option>
                        <option value="center@respirarsalud.com"> Proveedores</option>
                    </select>
                    <label for="f_area">Seleccionar area *</label>
                </div>
                <div class="mui-textfield mui-textfield--float-label">
                    <textarea name="f_message" required></textarea>
                    <label>Asunto *</label>
                </div>
                <button type="submit" class="mui-btn mui-btn--raised">Enviar</button>
            </form>
        </div>
    </div>
</section>