<main class="Main" id="Home">
    <?php

    $uri_json_temp = pll_current_language() == "en" ? "descriptions.json" : "descripciones.json";
    $imagen_medalla = pll_current_language() == "en" ? "medal.png" : "medalla.png";
    $imagen_247 = pll_current_language() == "en" ? "247-en.png" : "247.svg";
    $imagen_logo_blanco = pll_current_language() == "en" ? "logo_blanco-en.png" : "logo_blanco.svg";
    get_template_part('navbar');
    ?>

    


    <input type="hidden" id="uri_json_temp" value="<?php echo get_template_directory_uri() . '/json/' . $uri_json_temp; ?>">
    <section>
        <div class="umkka-slider">
            <span id="medalla">
                <img src="<?php echo get_template_directory_uri() . "/images/{$imagen_medalla}" ?>" alt="medalla">
            </span>
            <span id="scroll" class="bounce">
                <img src="<?php echo get_template_directory_uri() . '/images/icons/scroll.svg' ?>" alt="scroll">
            </span>
            <div class="slSlider" id="divine-slider" data-arrowleft="<?php echo get_template_directory_uri() . '/images/icons/arrow-left.png' ?>" data-arrowright="<?php echo get_template_directory_uri() . '/images/icons/arrow-right.png' ?>">
                <div class="slItems">
                    <div class="slItem" style="background-image: url('<?php echo get_template_directory_uri() . '/images/home_inicial.jpg' ?>');">
                        <div class="slText">
                            <span id="logo-header" style="margin:auto">
                                <div><img src="<?php echo get_template_directory_uri() . "/images/{$imagen_logo_blanco}" ?>" alt="logo"></div>
                                <div><?php pll_e('TRABAJAMOS'); ?></div>
                                <div><img src="<?php echo get_template_directory_uri() . "/images/{$imagen_247}" ?>" alt="247"></div>
                            </span>
                        </div>
                    </div>
                    <div class="slItem bg-center" style="background-image: url('<?php echo get_template_directory_uri() . '/images/foto-banner.jpg' ?>');">
                        <div>
                            <span class="Slide-Item-Complement Leyend top-leyend">
                                <h2><?php pll_e('ORIENTACIÓN MÉDICA VIRTUAL Y CITAS PRIORITARIAS'); ?></h2>
                                <p><?php pll_e('Te llevamos salud a tu hogar'); ?></p>
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=+573223768806" class="wsp">
                                    <?php pll_e('Comunícate con un médico ahora mismo'); ?>
                                    <img class="scale-animation" src="<?php echo get_template_directory_uri() . '/images/icons/pointer-08.svg' ?>" />
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="slItem" style="background-image: url('<?php echo get_template_directory_uri() . '/images/portafolio_1.jpg' ?>');">
                        <div>
                            <span class="Slide-Item-Complement Leyend">
                                <h2><?php pll_e('SALUD KIDS'); ?></h2>
                                <p><?php pll_e('Para las atenciones de todos los niños, niñas y adolescentes hasta los 14 años, Respirar salud, cuenta con atención médica domiciliaria, por medio de profesionales especializados en pediatría, quienes, valoran, diagnostican y realizan seguimientos, desde la comodidad de su hogar'); ?>.</p>
                            </span>
                        </div>
                    </div>
                    <div class="slItem" style="background-image: url('<?php echo get_template_directory_uri() . '/images/team11.jpg' ?>');">
                        <div>
                            <span class="Slide-Item-Complement Leyend">
                                <h2><?php pll_e('ATENCIÓN MÉDICA DOMICILIARIA'); ?></h2>
                                <p><?php pll_e('Nuestro servicio de consulta médica prioritaria tiene el objetivo de la evaluación de los síntomas específicos, definir la posibilidad de atención en domicilio o generar direccionamiento de traslado a una IPS hospitalaria, según análisis de síntomas evidenciados'); ?>. </p>
                            </span>
                        </div>
                    </div>
                    <div class="slItem" style="background-image: url('<?php echo get_template_directory_uri() . '/images/Portafolio_8.jpg' ?>');">
                        <div>
                            <span class="Slide-Item-Complement Leyend">
                                <h2><?php pll_e('ENFERMERÍA'); ?></h2>
                                <p><?php pll_e('Nuestro personal de enfermería está capacitado para manejo de actividades básicas como asistencia alimentaria, cuidados y aseo de la piel, procedimientos menores, cambios de sonda, cateterismos intermitentes, curaciones de baja, mediana y alta complejidad, aplicación de medicamentos y amplia experiencia en pacientes en condición aguda y crónica a nivel Domiciliaria'); ?>.</p>
                            </span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!--<section class="Main-Section">
    <h1 style="position:absolute;"><?php bloginfo('name'); ?></h1>
    
     <div class="Slide-Container Slide-Filter" data-time="100000" >
        
        <div class="Section-Container relative">
            <span id="medalla">
                <img src="<?php echo get_template_directory_uri() . "/images/{$imagen_medalla}" ?>" alt="medalla">
            </span>
            <span id="scroll" class="bounce">
                <img src="<?php echo get_template_directory_uri() . '/images/icons/scroll.svg' ?>" alt="scroll">
            </span>
            <span class="Icon left"><img src="<?php echo get_template_directory_uri() . '/images/icons/arrow-left.png' ?>" ></span>
            <span class="Icon right"><img src="<?php echo get_template_directory_uri() . '/images/icons/arrow-right.png' ?>" ></span>
            <div class="Circles"></div>
        </div>

        <div class="Slide">
            <div class="Slide-Item">
                <img src="<?php echo get_template_directory_uri() . '/images/home_inicial.jpg' ?>"  alt="background" class="Slide-Item-Background">
                <span class="Slide-Item-Complement" id="logo-header">
                    <div><img src="<?php echo get_template_directory_uri() . "/images/{$imagen_logo_blanco}" ?>" alt="logo"></div>
                    <div><?php pll_e('TRABAJAMOS'); ?></div>
                    <div><img src="<?php echo get_template_directory_uri() . "/images/{$imagen_247}" ?>" alt="247"></div>
                </span>
            </div>
            <div class="Slide-Item">
                <img src="<?php echo get_template_directory_uri() . '/images/portafolio_1.jpg' ?>"  alt="background" class="Slide-Item-Background">
                <span class="Slide-Item-Complement Leyend">
                    <h2><?php pll_e('SALUD KIDS'); ?></h2>
                    <p><?php pll_e('Para las atenciones de todos los niños, niñas y adolescentes hasta los 14 años, Respirar salud, cuenta con atención médica domiciliaria, por medio de profesionales especializados en pediatría, quienes, valoran, diagnostican y realizan seguimientos, desde la comodidad de su hogar'); ?>.</p>
                </span>
            </div>
            <div class="Slide-Item">
                <img src="<?php echo get_template_directory_uri() . '/images/team11.jpg' ?>"  alt="background2" class="Slide-Item-Background">
                <span class="Slide-Item-Complement Leyend">
                    <h2><?php pll_e('ATENCIÓN MÉDICA DOMICILIARIA'); ?></h2>
                    <p><?php pll_e('Nuestro servicio de consulta médica prioritaria tiene el objetivo de la evaluación de los síntomas específicos, definir la posibilidad de atención en domicilio o generar direccionamiento de traslado a una IPS hospitalaria, según análisis de síntomas evidenciados'); ?>.  </p>
                </span>
            </div>
            <div class="Slide-Item">
                <img src="<?php echo get_template_directory_uri() . '/images/Portafolio_8.jpg' ?>"  alt="background" class="Slide-Item-Background">
                <span class="Slide-Item-Complement Leyend">
                    <h2><?php pll_e('ENFERMERÍA'); ?></h2>
                    <p><?php pll_e('Nuestro personal de enfermería está capacitado para manejo de actividades básicas como asistencia alimentaria, cuidados y aseo de la piel, procedimientos menores, cambios de sonda, cateterismos intermitentes, curaciones de baja, mediana y alta complejidad, aplicación de medicamentos y amplia experiencia en pacientes en condición aguda y crónica a nivel Domiciliaria'); ?>.</p>
                </span>
            </div>
            <div class="Slide-Item">
                <img src="<?php echo get_template_directory_uri() . '/images/foto-banner.jpg' ?>"  alt="background" class="Slide-Item-Background">
                <span class="Slide-Item-Complement Leyend top-leyend">
                    <h2><?php pll_e('ORIENTACIÓN MÉDICA VIRTUAL Y CITAS PRIORITARIAS'); ?></h2>
                    <p><?php pll_e('Te llevamos salud a tu hogar'); ?></p>
                </span>
            </div>
        </div>
        
        
    </div> 
    
</section>-->
    <section class="Clients Over">
        <div class="Section-Container">
            <h2 class="text-white"><?php pll_e('Trabajamos con'); ?> ...</h2>
            <div class="Client-List">
                <div class="Slide-Container" data-time="1800" data-visible="4" data-continous='true'>
                    <div class="Slide">
                        <div class="Slide-Item">
                            <img src="<?php echo get_template_directory_uri() . '/images/clientes/sura.svg' ?>">
                        </div>
                        <div class="Slide-Item">
                            <img src="<?php echo get_template_directory_uri() . '/images/clientes/sanitas.svg' ?>">
                        </div>
                        <div class="Slide-Item">
                            <img src="<?php echo get_template_directory_uri() . '/images/clientes/seguros-bolivar.svg' ?>">
                        </div>
                        <div class="Slide-Item">
                            <img src="<?php echo get_template_directory_uri() . '/images/clientes/memi.svg' ?>">
                        </div>
                        <div class="Slide-Item">
                            <img src="<?php echo get_template_directory_uri() . '/images/clientes/colsubsidio.svg' ?>">
                        </div>
                        <div class="Slide-Item">
                            <img src="<?php echo get_template_directory_uri() . '/images/clientes/axa.png' ?>">
                        </div>



                    </div>
                </div>
            </div>
            <div class="Client-List-Mobile" data-items="6">
                <div class="Client-List-Mobile-Item">
                    <img src="<?php echo get_template_directory_uri() . '/images/clientes/sura.svg' ?>">
                </div>
                <div class="Client-List-Mobile-Item">
                    <img src="<?php echo get_template_directory_uri() . '/images/clientes/sanitas.svg' ?>">
                </div>
                <div class="Client-List-Mobile-Item">
                    <img src="<?php echo get_template_directory_uri() . '/images/clientes/seguros-bolivar.svg' ?>">
                </div>
                <div class="Client-List-Mobile-Item">
                    <img src="<?php echo get_template_directory_uri() . '/images/clientes/memi.svg' ?>">
                </div>
                <div class="Client-List-Mobile-Item">
                    <img src="<?php echo get_template_directory_uri() . '/images/clientes/colsubsidio.svg' ?>">
                </div>
                <div class="Client-List-Mobile-Item">
                    <img src="<?php echo get_template_directory_uri() . '/images/clientes/axa.png' ?>">
                </div>
            </div>
        </div>
    </section>
    <section id="Services" class="Services Over" style="background-image: url( <?php echo get_template_directory_uri() . '/images/servicios.jpg' ?> )">
        <div class="Section-Container">
            <section class="Description hide">
                <div class="Descripcion-Control">
                    <span class="Description-Close"><img src="<?php echo get_template_directory_uri() . '/images/icons/tick.svg' ?> " alt="tick"></span>
                    <article class="Description-Content"></article>
                </div>
            </section>
            <section class="List">
                <h2 class="text-blue"><?php pll_e('Nuestros servicios'); ?></h2>
                <!--<span class="List-Description">(Haz clic en los iconos para ver la descripción)</span>-->
                <nav id="Services-Nav">
                    <span id="dedo_click" class="heartbeat"><img src="<?php echo get_template_directory_uri() . '/images/icons/dedo_click.svg' ?>" alt=""></span>
                    <ul>
                        <li>
                            <a href="javascript:void(0)" data-id="1">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/atencion_medica_domiciliaria.svg' ?>" alt="" class="Service-Item-Image-Color">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/atencion_medica_domiciliaria.blanco.svg' ?>" alt="" class="Service-Item-Image-White">
                                <span class="Service-Item-Title"><?php pll_e('Atención médica domiciliaria'); ?></span>
                                <span class="Service-Item-Close">
                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/tick.svg' ?>" alt="tick">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="11">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/orientacion-10.svg' ?>" alt="Orientación virtual" class="Service-Item-Image-Color">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/orientacion-10.blanco.svg' ?>" alt="Orientación virtual" class="Service-Item-Image-White">
                                <span class="Service-Item-Title"><?php pll_e('Orientación médica virtual'); ?></span>
                                <span class="Service-Item-Close">
                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/tick.svg' ?>" alt="tick">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="5">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/enfermeria.svg' ?>" alt="" class="Service-Item-Image-Color">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/enfermeria.blanco.svg' ?>" alt="" class="Service-Item-Image-White">
                                <span class="Service-Item-Title"><?php pll_e('Enfermería'); ?></span>
                                <span class="Service-Item-Close">
                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/tick.svg' ?>" alt="tick">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="2">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/clinica_de_heridas.svg' ?>" alt="" class="Service-Item-Image-Color">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/clinica_de_heridas.blanco.svg' ?>" alt="" class="Service-Item-Image-White">
                                <span class="Service-Item-Title"><?php pll_e('Clínica de heridas'); ?></span>
                                <span class="Service-Item-Close">
                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/tick.svg' ?>" alt="tick">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="7">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/gollo.png' ?>" alt="" class="Service-Item-Image-Color">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/gollo.png' ?>" style="width:auto" class="Service-Item-Image-White">
                                <span class="Service-Item-Title">
                                    <span style="display:none"><?php pll_e('Salud kids'); ?></span>
                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/salud_kids_logo.blanco.svg' ?>" style="height:100%">
                                </span>
                                <span class="Service-Item-Close">
                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/tick.svg' ?>" alt="tick">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="3">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/cuidado_integral_del_paciente_phd.svg' ?>" alt="" class="Service-Item-Image-Color">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/cuidado_integral_del_paciente_phd.blanco.svg' ?>" alt="" class="Service-Item-Image-White">
                                <span class="Service-Item-Title"><?php pll_e('Ciudado integral del paciente (PHD)'); ?></span>
                                <span class="Service-Item-Close">
                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/tick.svg' ?>" alt="tick">
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)" data-id="6">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/paciente_cronico.svg' ?>" alt="" class="Service-Item-Image-Color">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/paciente_cronico.blanco.svg' ?>" alt="" class="Service-Item-Image-White">
                                <span class="Service-Item-Title"><?php pll_e('Paciente crónico'); ?></span>
                                <span class="Service-Item-Close">
                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/tick.svg' ?>" alt="tick">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="4">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/cuidador.svg' ?>" alt="" class="Service-Item-Image-Color">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/cuidador.blanco.svg' ?>" alt="" class="Service-Item-Image-White">
                                <span class="Service-Item-Title"><?php pll_e('Ciudador'); ?></span>
                                <span class="Service-Item-Close">
                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/tick.svg' ?>" alt="tick">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="9">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/terapias_respiratorias.svg' ?>" alt="Terapias respiratorias" class="Service-Item-Image-Color">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/terapias_respiratorias.blanco.svg' ?>" alt="Terapias respiratorias" class="Service-Item-Image-White">
                                <span class="Service-Item-Title"><?php pll_e('Terapias respiratorias'); ?></span>
                                <span class="Service-Item-Close">
                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/tick.svg' ?>" alt="tick">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="10">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/pediatria_paciente_cronico.svg' ?>" alt="Paciente cronico ninos y jovenes" class="Service-Item-Image-Color">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/pediatria_paciente_cronico.blanco.svg' ?>" alt="Paciente cronico ninos y jovenes" class="Service-Item-Image-White">
                                <span class="Service-Item-Title"><?php pll_e('Paciente crónico niños y jóvenes'); ?></span>
                                <span class="Service-Item-Close">
                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/tick.svg' ?>" alt="tick">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="8">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/terapias.svg' ?>" alt="Terapias físicas" class="Service-Item-Image-Color">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/terapias.blanco.svg' ?>" alt="Terapias físicas" class="Service-Item-Image-White">
                                <span class="Service-Item-Title"><?php pll_e('Terapias Físicas'); ?></span>
                                <span class="Service-Item-Close">
                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/tick.svg' ?>" alt="tick">
                                </span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
            </section>
        </div>
    </section>

    <?php
    global $post;

    $last_posts = get_posts(array('posts_per_page' => 3, 'cat=2,3,4'));

    ?>
    <section id="News" class="News Over" style="background-image: url( <?php echo get_template_directory_uri() . '/images/notas_de_interes.jpg' ?> )">
        <div class="Section-Container">
            <h2 class="text-white"><?php pll_e('notas de interés'); ?></h2>
            <p class="text-white"><?php pll_e('Entérate de nuestras últimas noticias e innovaciones'); ?></p>



            <div class="News-Container">
                <span id="dedo_desliza"><img src="<?php echo get_template_directory_uri() . '/images/icons/dedo_desliza.svg' ?>" alt=""></span>


                <div class="owl-carousel to-tablet-wide">
                    <?php
                    foreach ($last_posts as $post) :
                        setup_postdata($post);
                        $thumbID = get_post_thumbnail_id($post->ID);
                        $imgDestacada = wp_get_attachment_image_src($thumbID, 'medium'); // Sustituir por thumbnail, medium, large o full

                        if (!empty($imgDestacada)) {
                            $rutaImagen = $imgDestacada[0];
                        } else {
                            $rutaImagen = get_template_directory_uri() . '/images/nofoto.jpg';
                        }

                    ?>

                        <div class="item">
                            <a href="<?php the_permalink() ?>">
                                <span class="owl-item-image"><img src="<?php echo $rutaImagen ?>" alt="" /></span>

                                <div class="inner">
                                    <span class="date"><?php the_time('d/m/Y') ?> </span>
                                    <h2><?php the_title() ?></h2>
                                    <span class="excerpt">
                                        <?php the_excerpt(); ?>
                                    </span>
                                </div>
                            </a>
                        </div>

                    <?php
                    endforeach;
                    ?>

                </div>




                <div class="Flip-Card-Container">
                    <?php
                    foreach ($last_posts as $post) :
                        setup_postdata($post);
                        $thumbID = get_post_thumbnail_id($post->ID);
                        $imgDestacada = wp_get_attachment_image_src($thumbID, 'medium'); // Sustituir por thumbnail, medium, large o full

                        if (!empty($imgDestacada)) {
                            $rutaImagen = $imgDestacada[0];
                        } else {
                            $rutaImagen = get_template_directory_uri() . '/images/nofoto.jpg';
                        }

                    ?>
                        <article class="New Flip-Card">
                            <a class="Card" href="<?php the_permalink() ?>">
                                <div class="Card-Face Front"><img src="<?php echo $rutaImagen ?>" alt=""></div>
                                <div class="Card-Face Back">
                                    <div class="Card-Text">
                                        <span class="date"><?php the_time('d/m/Y') ?></span>
                                        <h4 class="text-green"><?php the_title(); ?></h4>
                                        <span class="excerpt">
                                            <?php the_excerpt(); ?>
                                        </span>
                                        <span class="link">
                                            <?php the_title();  ?>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php endforeach;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="Ver-Mas">
                <a href="<?php echo pll_current_language() == "en" ? '/en/news/' : '/noticias/' ?>" class="text-green"><?php echo pll_current_language() == "en" ? 'Show more' : 'Ver más' ?></a>
            </div>
        </div>
    </section>
    <section class="Related Over">
        <div>
            <img src="<?php echo get_template_directory_uri() . '/images/entidades/servicio_de_salud.svg' ?>" alt="Servicio de Salud">
            <img src="<?php echo get_template_directory_uri() . '/images/entidades/supersalud.svg' ?>" alt="Supersalud">
            <img src="<?php echo get_template_directory_uri() . '/images/entidades/secretaria_de_salud.svg' ?>" alt="Secretaría de Salud">
            <img src="<?php echo get_template_directory_uri() . "/images/{$imagen_medalla}" ?>" alt="Medalla">

        </div>
    </section>

</main>