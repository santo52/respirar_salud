<?php 
$imagen_logo_blanco = pll_current_language() == "en" ? "logo_blanco-en.png" : "logo_blanco.svg";
?>

<div id="covid">
    <div class="covid-recuadro">
        <div class="covid-image">
            <img src="<?php echo get_template_directory_uri() . "/images/icons/covid-09.svg" ?>" />
        </div>
        <div class="covid-warning">¡CUIDADO!</div>
        <p>Personas inescrupulosas están prestando atención médica domiciliaria, usando de manera fraudulenta el nombre de:</p>
        <div class="covid-logo-respirar">
            <img src="<?php echo get_template_directory_uri() . "/images/{$imagen_logo_blanco}" ?>" />
        </div>
        <p>Recuerde, señor usuario que ante cualquier irregularidad, inquietud o solicitud puede comunicarse al teléfono: <b>6401324</b> o al correo <b>atencionalusuario@respirarsalud.com</b></p>
        <span id="btn-covid-close">ENTENDIDO</span>
    </div>
</div>