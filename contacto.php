<section class="Contacto">
    <div class="Contacto-Container">
        <div class="Contacto-Header">
            <a href="javascript:void(0)" id="Contacto-close">
                <img src="<?php echo get_template_directory_uri() . '/images/icons/equis.svg' ?>" alt="equis">
            </a>
            <p><?php pll_e('Estamos para servirte, cuentanos tu inquietud') ?>.</p>
            <span>(* <?php pll_e('Campo obligatorio') ?>)</span>
            <div id="Contacto-Mensaje"></div>
        </div>
        <div class="Contacto-Body">
            <form class="mui-form" id="form-correo" name="contact-form" method="post" enctype="multipart/form-data">
                
                <div class="mui-textfield mui-textfield--float-label">
                    <input type="text" name="f_name" id="f_name" required>
                    <label for="f_name"><?php pll_e('Nombre') ?> *</label>
                </div>
                <div class="mui-textfield mui-textfield--float-label">
                    <input type="email" name="f_email" id="f_email" required>
                    <label for="f_email"><?php pll_e('Correo electrónico') ?> *</label>
                </div>
                <div class="mui-textfield mui-textfield--float-label">
                    <input type="text" name="f_phone" id="f_phone">
                    <label for="f_phone"><?php pll_e('Celular') ?></label>
                </div>
                <div class="mui-select">
                    <select name="f_area" id="f_area" required>
                        <option value="">...</option>
                        <option value="talentohumano@respirarsalud.com"> <?php pll_e('Recurso Humano') ?></option>
                        <option value="clinicadeheridas@respirarsalud.com">  <?php pll_e('Clínica de heridas') ?></option>
                        <option value="servicios.consulta@respirarsalud.com"> <?php pll_e('Consulta médica Domiciliaria') ?></option>
                        <option value="terapias@respirarsalud.com">  <?php pll_e('Terapias') ?></option>
                        <option value="jefeenfermeria@respirarsalud.com"> <?php pll_e('Enfermería') ?></option>
                        <option value="center@respirarsalud.com">  <?php pll_e('Proveedores') ?></option>
                    </select>
                    <label for="f_area"><?php pll_e('Seleccionar area') ?> *</label>
                </div>
                <div class="mui-textfield mui-textfield--float-label">
                    <textarea name="f_message" required></textarea>
                    <label><?php pll_e('Asunto') ?> *</label>
                </div>
                <button type="submit" class="mui-btn mui-btn--raised"><?php pll_e('Enviar') ?> </button>
            </form>
        </div>
    </div>
</section>