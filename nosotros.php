
<?php 

/*
Template Name: Nosotros
*/

get_header(); ?>

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
                <p>Respirar Salud, somos una empresa constituida desde el año 2010, dedicada a la prestación de servicios de salud domiciliario, durante estos
                ocho años hemos adquirido la experiencia que hoy nos diferencia y nos identifica como una empresa que brinda servicios con calidad,
                oportunidad, seguridad, compromiso y pertenencia, por lo que nos referencian las instituciones con las que tenemos relación contractual y que
                son de reconocimiento nacional, permitiéndonos crecer y fortalecernos día tras día, dando lo mejor de nosotros en cada reto</p>
            </div>
            <div class="Content" style="margin-top: 1rem;">
                <section class="Somos-Container">
                    <article class="Somos-Item">
                        <div class="Somos-Item__image">
                            <img src="" alt="">
                        </div>
                        <div class="Somos-Item__title">
                            <h2 class="text-green">Misión</h2>
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
                    <article class="Somos-Item">
                        <div class="Somos-Item__image">
                            <img src="" alt="">
                        </div>
                        <div class="Somos-Item__title">
                            <h2 class="text-green">Valores</h2>
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
                    <article class="Somos-Item">
                        <div class="Somos-Item__image">
                            <img src="" alt="">
                        </div>
                        <div class="Somos-Item__title">
                            <h2 class="text-green">Visión</h2>
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
            </div>
        </section>

        <section class="Flota">
            <div class="Flota__title">
                <h2 class="text-blue">NUESTRA FLOTA</h2>
            </div>
            <div class="Flota__paragraph">
                <ul>
                    <li>Transporte de personas en condición de discapacidad</li>
                    <li>Transporte de personas con movilidad reducida</li>
                    <li>Traslado de pacientes a citas de control, exámenes médicos y
procedimientos.</li>
                    <li>Acompañamiento de Enfermería.</li>
                    <li>Transporte de insumos médicos.</li>
                </ul>
            </div>
            <div class="Flota__imagen">
                <img src="" alt="">
            </div>
        </section>
    
</main>
<?php get_footer(); ?>