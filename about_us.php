
<?php 

/*
Template Name: About Us
*/

get_header(); ?>
<input type="hidden" id="uri_json_temp" value="<?php echo get_template_directory_uri() . '/json/who_are_we.json'; ?>">
<main class="Main" id="Nosotros">
    <?php get_template_part( 'navbar'); ?>
        <section  class="Nosotros-Background" style="background-image: url( <?php echo get_template_directory_uri() . '/images/quienes_somos.jpg' ?> )">
            <div class="Container">
                <div class="Title">
                    <h1>Who are we?</h1>
                    <p>We are a company dedicated to the offering of domiciliary health services, we have acquired the
                    experience that defines us today and which identifies us as a company that brings quality services,
                    opportunities, confidence, commitment and ownership, that is why we get referenced by the
                    institutions which we have a partnership with, which have national recognition, allowing us to grow
                    and strengthen our entity day after day.</p>
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
            <div class="Content Content-Center">
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
                            <h2 >Our mission</h2>
                        </div>
                        <div class="Somos-Item__descripcion">
                            <p>
                            To offer specialized services for medical and therapeutic assistance, assuming an ethical and social
                            compromise, with an assistance service highly qualified, within the 
                            <span class="text-green"> HIGHEST STANDARDS OF
                            PATIENT SAFETY AND HUMAN WARMTH</span>, 
                            with our integral health model for our patients and insurers.
                            </p>
                        </div>
                        
                    </article>
                    <article class="Somos-Item" data-id="2" >
                        <div class="Somos-Item__image">
                            <img class="Color-Icon" src="<?php echo get_template_directory_uri() . '/images/icons/valores.svg' ?>" alt="">
                        </div>
                        <div class="Somos-Item__title" >
                            <h2 >Values</h2>
                        </div>
                        <div class="Somos-Item__descripcion">
                            <p>Honesty</p>
                            <p>Responsability</p>
                            <p>Efficiency</p>
                            <p>Commitment</p>
                            <p>Teamwork</p>
                            <p>Respect</p>
                            <p>Integrity</p>
                        </div>
                        <section class="Somos-Download" data-url="<?php echo get_template_directory_uri() . '/resourses/rights_and_duties.pdf'; ?>">
                        <div class="Somos-download-icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/download-07.svg'; ?>" />
                        </div>
                        <a href="<?php echo get_template_directory_uri() . '/resourses/rights_and_duties.pdf'; ?>" target="_blank" class="Somos-download-button">USERS' RIGHTS AND DUTIES</a>
                    </section>
                    </article>
                    <article class="Somos-Item" data-id="3">
                        <div class="Somos-Item__image">
                            <img class="Color-Icon" src="<?php echo get_template_directory_uri() . '/images/icons/vision.svg' ?>" alt="">
                        </div>
                        <div class="Somos-Item__title"  >
                            <h2 >Our Vision</h2>
                        </div>
                        <div class="Somos-Item__descripcion">
                            <p>
                                To be a company which is a referent in the health market, of absolute reliability within the 
                                <span class="text-green"> DOMICILIARY MEDICAL CARE SERVICES</span> 
                                within Bogotá and Cundinamarca; recognized by the quality
                                and excellence of service, satisfying the demand and necessities of our customers, 
                                with the highest qualified staff and the latest generation equipment.
                            </p>
                        </div>
                    </article>
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
                <h2>OUR FLEET</h2>
                <ul>
                    <li>Transportation of people with a handicapped condition</li>
                    <li>Transportation of people with reduced mobility</li>
                    <li>Transportation of patients to medical appointments, medical exams and medical procedures</li>
                    <li>Nursing escort</li>
                    <li>Transportation of medical supplies</li>
                </ul>
                </div>
            </div>
        </section>
    
</main>
<?php get_footer(); ?>