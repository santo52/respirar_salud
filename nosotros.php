
<?php 

/*
Template Name: Nosotros
*/

get_header(); ?>
<input type="hidden" id="uri_json_temp" value="<?php echo get_template_directory_uri() . '/json/quienes_somos.json'; ?>">
<main class="Main" id="Nosotros">
    <?php get_template_part( 'navbar'); ?>
        <section  class="Nosotros-Background" style="background-image: url( <?php echo get_template_directory_uri() . '/images/quienes_somos.jpg' ?> )">
            <div class="Container">
                <div class="Title">
                    <h1>¿Quienes sómos?</h1>
                    <p>Somos una empresa dedicada a la
                        prestación de servicios de salud
                        domiciliario, hemos adquirido la
                        experiencia que hoy nos diferencia y nos
                        identifica como una empresa que brinda
                        servicios con calidad, oportunidad,
                        seguridad, compromiso y pertenencia,
                        por lo que nos referencian las
                        instituciones con las que tenemos
                        relación y que son de reconocimiento
                        nacional, permitiéndonos crecer y
                        fortalecernos día tras día.</p>
                </div>
            </div>
        </section>

        <section class="Nosotros-Medio">
            <div class="Content">
            <!--    <p>Respirar Salud, somos una empresa constituida desde el año 2010, dedicada a la prestación de servicios de salud domiciliario, durante estos
                ocho años hemos adquirido la experiencia que hoy nos diferencia y nos identifica como una empresa que brinda servicios con calidad,
                oportunidad, seguridad, compromiso y pertenencia, por lo que nos referencian las instituciones con las que tenemos relación contractual y que
                son de reconocimiento nacional, permitiéndonos crecer y fortalecernos día tras día, dando lo mejor de nosotros en cada reto</p>-->
            </div>
            <div class="Content" style="margin-top: 1rem;">
                <section class="Somos-Container">
                    <div class="Somos-Container__descripcion">
                        <div class="Somos-Container__descripcion__text">
                            <div class="Somos-Container__descripcion__text-close">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/equis_green.svg' ?>" alt="">
                            </div>
                            <div class="Somos-Container__descripcion__text-title">
                                <h2 class="text-green"></h2>
                            </div>
                            <div class="Somos-Container__descripcion__text-paragraph"></div>
                        </div>
                    </div>
                    <article class="Somos-Item" data-id="1" >
                        <div class="Somos-Item__image">
                            <img class="Color-Icon" src="<?php echo get_template_directory_uri() . '/images/icons/mision.svg' ?>" alt="">
                        </div>
                        <div class="Somos-Item__title" >
                            <h2 >Misión</h2>
                        </div>
                        <div class="Somos-Item__descripcion">
                            <p>
                                Brindar servicios especializados en
                                atención médica y terapéutica,
                                asumiendo un compromiso ético, y
                                social, con un l asistencial altamente
                                calificado, dentro de los más <span class="text-green"> ALTOS
                                ESTÁNDARES DE SEGURIDAD DEL
                                PACIENTE Y CALIDEZ HUMANO</span>, con
                                nuestro modelo integral de salud para
                                nuestros pacientes y aseguradores.
                            </p>
                        </div>
                        
                    </article>
                    <article class="Somos-Item" data-id="2" >
                        <div class="Somos-Item__image">
                            <img class="Color-Icon" src="<?php echo get_template_directory_uri() . '/images/icons/valores.svg' ?>" alt="">
                        </div>
                        <div class="Somos-Item__title" >
                            <h2 >Valores</h2>
                        </div>
                        <div class="Somos-Item__descripcion">
                            <p>Confianza</p>
                            <p>Responsabilidad</p>
                            <p>Calidad</p>
                            <p>Cuidado Integral</p>
                            <p>Humanización</p>
                            <p>Compromiso</p>
                        </div>
                        
                    </article>
                    <article class="Somos-Item" data-id="3">
                        <div class="Somos-Item__image">
                            <img class="Color-Icon" src="<?php echo get_template_directory_uri() . '/images/icons/vision.svg' ?>" alt="">
                        </div>
                        <div class="Somos-Item__title"  >
                            <h2 >Visión</h2>
                        </div>
                        <div class="Somos-Item__descripcion">
                            <p>
                                Ser una empresa referente en el
                                mercado de absoluta confiabilidad en
                                los <span class="text-green"> SERVICIOS DE ATENCIÓN MÉDICA
                                DOMICILIARIA Y TRASLADO DE
                                PACIENTES</span> en Bogotá y Cundinamarca;
                                reconocida por la calidad y excelencia
                                en el servicio, satisfaciendo la demanda
                                y necesidades de nuestros clientes,
                                respaldado por personal altamente
                                calificado y equipos de última
                                generación.
                            </p>
                        </div>
                    </article>
                </section>
                <section class="Somos-Download">
                    <div class="Somos-download-icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/download-07.svg'; ?>" />
                    </div>
                    <a href="<?php echo get_template_directory_uri() . '/resourses/derechos_y_deberes.pdf'; ?>" target="_blank" class="Somos-download-button">DERECHOS Y DEBERES DE LOS USUARIOS</a>
                </section>
            </div>
        </section>

        <section class="Flota">
            <div class="Flota__title">
                <div class="Flota__imagen">
                    <img src="<?php echo get_template_directory_uri() . '/images/flota.png' ?>" alt="flota">
                </div>
            </div>
            <div class="Flota__paragraph">
                <div class="Flota__paragraph-container">
                <h2>NUESTRA FLOTA</h2>
                <ul>
                    <li>Transporte de personas en condición de discapacidad</li>
                    <li>Transporte de personas con movilidad reducida</li>
                    <li>Traslado de pacientes a citas de control, exámenes médicos y procedimientos.</li>
                    <li>Acompañamiento de Enfermería.</li>
                    <li>Transporte de insumos médicos.</li>
                </ul>
                </div>
            </div>
        </section>
    
</main>
<?php get_footer(); ?>