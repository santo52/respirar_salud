<section class="Contacto">
    <div class="Contacto-Container">
        <div class="Contacto-Header">
            <a href="javascript:void(0)" id="Contacto-close">
                <img src="<?php echo get_template_directory_uri() . '/images/icons/equis.svg' ?>" alt="equis">
            </a>
            <p>Estamos para servirte, cuentanos tu inquietud.</p>
            <span>(* Campo obligatorio)</span>
            <div id="Contacto-Mensaje"></div>
        </div>
        <div class="Contacto-Body">
            <form class="mui-form" id="form-correo" name="contact-form" method="post" enctype="multipart/form-data">
                
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