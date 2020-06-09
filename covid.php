<?php 
$imagen_logo_blanco = pll_current_language() == "en" ? "logo_blanco-en.png" : "logo_blanco.svg";
?>

<div id="covid">
    <div class="covid-recuadro">
        <div class="covid-image">
            <img src="<?php echo get_template_directory_uri() . "/images/icons/covid-09.svg" ?>" />
        </div>
        <div class="covid-warning"><?php pll_e("¡CUIDADO!") ?></div>
        <p><?php pll_e("Personas inescrupulosas están prestando atención médica domiciliaria, usando de manera fraudulenta el nombre de") ?>:</p>
        <div class="covid-logo-respirar">
            <img src="<?php echo get_template_directory_uri() . "/images/{$imagen_logo_blanco}" ?>" />
        </div>
        <p><?php pll_e("Recuerde, señor usuario que ante cualquier irregularidad, inquietud o solicitud puede comunicarse al teléfono") ?>: <b>6401324</b> <?php pll_e("o al correo") ?> <b>atencionalusuario@respirarsalud.com</b></p>
        <span id="btn-covid-close"><?php pll_e("ENTENDIDO") ?></span>
    </div>
</div>