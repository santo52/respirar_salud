<?php get_template_part( 'contacto'); ?>

<div class="modal-background closed">
    <div class="modal closed">
        <span id="close">X</span>
        <div class="modal-content">
            <h4 class="modal-content-header"></h4>        
            <p class="modal-content-text">
                <iframe width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </p>
        </div>
    </div>
</div>

  <div class="preload yellow" style="background-image: url( <?php echo get_template_directory_uri() . '/images/home_inicial_anterior.jpg' ?> )">
    <div class="loader">
        <div class="circle-outer"></div>
        <div class="circle-inner"></div>
    </div>
</div>

<footer class="Footer">
    <div class="Section-Container flex-container">
        <div class="Footer-Section">
            <div class="Footer-Item">
                <div class="item-title">Síguenos en </div>
                <div class="redes-centrado">


                    <div class="line">
                        
                    <a href="https://www.linkedin.com/company/respirar-salud/" target="_blank" class="line-title">
                            <span class="line-icon redes">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/linkedin.svg' ?>" alt="map flag">
                            </span>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="Footer-Item trabaja-con-nosotros ">
                <a target="_blank" href="<?php echo get_site_url() . '/trabaja-con-nosotros'  ?>" class="item-title text-white">TRABAJA CON NOSOTROS</a>
            </div>
        </div>
        <div class="Footer-Section">
            <div class="Footer-Item">
                <div class="item-title">Sedes 
                    <span class="item-message">(Dale clic para ver la ubicación en el mapa)</span>
                </div>
                <div class="line">
                    <a href="javascript:void(0)" data-url="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.41969398222!2d-74.07399488523771!3d4.6969162965884035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ad751764acf%3A0xa678e33330442012!2sCra.+70+%23108-31%2C+Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1547576874012" class="line-title underline center openModal">
                        <span class="line-icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/maps.svg' ?>" alt="map flag">
                        </span>
                        Bogotá:
                    </a>
                    <span class="line-text">
                        Carrera 70 # 108-31
                    </span>
                </div>
                <br>
                <div class="line">
                    <a href="javascript:void(0)" data-url="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.7421895946006!2d-74.05947094198041!3d4.858184299118096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f878dcfabd971%3A0x92d69accfcc5e4a5!2sCl.+9+%237-44%2C+Ch%C3%ADa%2C+Cundinamarca!5e0!3m2!1ses-419!2sco!4v1547577990278" class="line-title underline center openModal">
                        <span class="line-icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/maps.svg' ?>" alt="map flag">
                        </span>
                        Chia:
                    </a>
                    <span class="line-text">
                        calle 9 # 7 - 44
                    </span>
                </div>
            </div>
            <div class="Footer-Item">
                <div class="item-title">Atención al cliente</div>
                <div class="line">
                    <a href="javascript:void(0)" class="line-title">
                        <span class="line-icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/telephone.svg' ?>" alt="map flag">
                        </span>
                    </a>
                    <span class="line-text">
                        <span class="text-green">(+57) (1)</span> 6401324
                    </span>
                </div>
                <br>
                <div class="line">
                    <a href="javascript:void(0)" class="line-title">
                        <span class="line-icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/cellphone.svg' ?>" alt="map flag">
                        </span>
                    </a>
                    <span class="line-text">
                        <span class="text-green">(+57)</span> 318 782 5748
                    </span>
                </div>
                <br>
                <div class="line">
                    <a href="javascript:void(0)" class="line-title">
                        <span class="line-icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/email.svg' ?>" alt="map flag">
                        </span>
                    </a>
                    <span class="line-text">
                        center<span class="text-green">@</span>respirarsalud.com
                    </span>
                </div>
            </div>
        </div>
        <div class="Footer-Section">
            <div class="Footer-Item">
                <div class="item-title">Cobertura</div>
                <div class="line">
                    <span href="javascript:void(0)" class="line-title center">
                    BOGOTÁ:
                    </span>
                    <span class="line-text">
                        <ul>
                            <li>Norte-Sur: Desde peaje Autopista norte a la Calle 108 sur.</li>
                            <li>Oriente-Occidente: Cra. 25 este a la Cra. 134 </li>
                        </ul>
                    </span>
                </div>
                <br>
                <div class="line">
                    <span href="javascript:void(0)" class="line-title">
                        CHÍA, SOACHA, FUSAGASUGÁ Y CUNDINAMARCA
                    </span>
                    <br>
                    <span class="line-text">
                        Cobertura a todo el municipio de Chía, Soacha, Fusagasugá, municipios aledaños y toda la sabana.
                    </span>
                </div>
                <br>
                <div class="line">
                    <span href="javascript:void(0)" class="line-title">
                        Realiza tu pago a domicilio a travez de ...
                    </span>
                    <br>
                    <span class="line-text" id="tarjetas">
                        <img src="<?php echo get_template_directory_uri() . '/images/tarjetas/visa.svg' ?>"  alt="visa">
                        <img src="<?php echo get_template_directory_uri() . '/images/tarjetas/mastercard.svg' ?>"  alt="mastercard">
                        <img src="<?php echo get_template_directory_uri() . '/images/tarjetas/dinners.svg' ?>"  alt="dinners">
                        <img src="<?php echo get_template_directory_uri() . '/images/tarjetas/american.svg' ?>"  alt="american express">
                    </span>
                </div>
            </div>
        </div>
        <div class="Footer-Section">
        <div class="Footer-Item">
            <div class="item-title">Síguenos en </div>
            <div class="line">
                <a href="https://www.linkedin.com/company/respirar-salud/" target="_blank" class="line-title">
                    <span class="line-icon redes">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/linkedin.svg' ?>" alt="map flag">
                    </span>
                </a>
            </div>
        </div>
        <div class="Footer-Item">
            <a target="_blank" href="<?php echo get_site_url() . '/trabaja-con-nosotros' ?>" class="item-title text-white underline normalize-font-size">TRABAJA CON NOSOTROS</a>
        </div>
    </div>
    </div>
</footer>
<?php wp_footer() ?>
</div>
</body>
</html>