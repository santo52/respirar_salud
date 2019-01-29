
<main class="Main" id="Home">
<?php get_template_part( 'navbar'); ?>
<input type="hidden" id="uri_json_temp" value="<?php echo get_template_directory_uri() . '/json/descripciones.json'; ?>">
<section class="Main-Section">
    <div class="Slide-Container Slide-Filter" data-time="10000" >
        
        <div class="Section-Container relative">
            <span id="medalla">
                <img src="<?php echo get_template_directory_uri() . '/images/medalla.png' ?>" alt="medalla">
            </span>
            <span id="scroll" class="bounce">
                <img src="<?php echo get_template_directory_uri() . '/images/icons/scroll.svg' ?>" alt="medalla">
            </span>
            <span class="Icon left"><img src="<?php echo get_template_directory_uri() . '/images/icons/arrow-left.png' ?>" ></span>
            <span class="Icon right"><img src="<?php echo get_template_directory_uri() . '/images/icons/arrow-right.png' ?>" ></span>
            <div class="Circles"></div>
        </div>

        <div class="Slide">
            <div class="Slide-Item">
                <img src="<?php echo get_template_directory_uri() . '/images/home_inicial.jpg' ?>"  alt="background" class="Slide-Item-Background gray-scale">
                <span class="Slide-Item-Complement" id="logo-header">
                    <img src="<?php echo get_template_directory_uri() . '/images/logo_blanco.svg' ?>" alt="logo">
                    <div>TRABAJAMOS</div>
                    <img src="<?php echo get_template_directory_uri() . '/images/247.svg' ?>" alt="247">
                </span>
            </div>
            <div class="Slide-Item">
                <img src="<?php echo get_template_directory_uri() . '/images/team11.jpg' ?>"  alt="background2" class="Slide-Item-Background gray-scale">
                <span class="Slide-Item-Complement Leyend">
                    <h2>ATENCIÓN MÉDICA DOMICILIARÍA:</h2>
                    <p>Nuestro servicio de consulta médica prioritaria tiene el objetivo de la evaluación de los síntomas específicos, definir la posibilidad de atención en domicilio o generar direccionamiento de traslado a una IPS hospitalaria, según análisis de síntomas evidenciados.  </p>
                </span>
            </div>
            <div class="Slide-Item">
                <img src="<?php echo get_template_directory_uri() . '/images/portafolio_1.png' ?>"  alt="background" class="Slide-Item-Background gray-scale">
                <span class="Slide-Item-Complement Leyend">
                    <h2>SALUD KIDS</h2>
                    <p>Para las atenciones de todos los niños, niñas y adolescentes hasta los 14 años, Respirar salud, cuenta con atención médica domiciliaria, por medio de profesionales especializados en pediatría, quienes, valoran, diagnostican y realizan seguimientos, desde la comodidad de su hogar.</p>
                </span>
            </div>
            <div class="Slide-Item">
                <img src="<?php echo get_template_directory_uri() . '/images/Portafolio_8.png' ?>"  alt="background" class="Slide-Item-Background gray-scale">
                <span class="Slide-Item-Complement Leyend">
                    <h2>ENFERMERÍA</h2>
                    <p>Nuestro personal de enfermería está capacitado para manejo de actividades básicas como asistencia alimentaria, cuidados y aseo de la piel, procedimientos menores, cambios de sonda, cateterismos intermitentes, curaciones de baja, mediana y alta complejidad, aplicación de medicamentos y amplia experiencia en pacientes en condición aguda y crónica a nivel Domiciliaria.</p>
                </span>
            </div>
        </div>
        
        
    </div>
    
</section>
<section class="Clients Over">
    <div class="Section-Container">
        <h2 class="text-white">Trabajamos con ...</h2>
        <div class="Client-List" >
            <div class="Slide-Container" data-time="1800" data-visible="4" data-continous='true' >
                <div class="Slide">
                    <div class="Slide-Item">
                        <img src="<?php echo get_template_directory_uri() . '/images/clientes/sura.png' ?>" >
                    </div>
                    <div class="Slide-Item">
                        <img src="<?php echo get_template_directory_uri() . '/images/clientes/sanitas.png' ?>" >
                    </div>
                    <div class="Slide-Item">
                        <img src="<?php echo get_template_directory_uri() . '/images/clientes/seguros-bolivar.png' ?>" >
                    </div>
                    <div class="Slide-Item">
                        <img src="<?php echo get_template_directory_uri() . '/images/clientes/memi.png' ?>" >
                    </div>
                    <div class="Slide-Item">
                        <img src="<?php echo get_template_directory_uri() . '/images/clientes/colsubsidio.png' ?>" >
                    </div>
                    <div class="Slide-Item">
                        <img src="<?php echo get_template_directory_uri() . '/images/clientes/axa.png' ?>" >
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
        <div class="Client-List-Mobile" data-items="6">
            <div class="Client-List-Mobile-Item">
                <img src="<?php echo get_template_directory_uri() . '/images/clientes/sura.png' ?>" >    
            </div>
            <div class="Client-List-Mobile-Item">
                <img src="<?php echo get_template_directory_uri() . '/images/clientes/sanitas.png' ?>" >
            </div>
            <div class="Client-List-Mobile-Item">
                <img src="<?php echo get_template_directory_uri() . '/images/clientes/seguros-bolivar.png' ?>" >
            </div>
            <div class="Client-List-Mobile-Item">
                <img src="<?php echo get_template_directory_uri() . '/images/clientes/memi.png' ?>" >
            </div>
            <div class="Client-List-Mobile-Item">
                <img src="<?php echo get_template_directory_uri() . '/images/clientes/colsubsidio.png' ?>" >
            </div>
            <div class="Client-List-Mobile-Item">
                <img src="<?php echo get_template_directory_uri() . '/images/clientes/axa.png' ?>" >
            </div>
        </div>
    </div>
</section>
<section id="Services" class="Services Over" style="background-image: url( <?php echo get_template_directory_uri() . '/images/nuestros_servicios.png' ?> )">
    <div class="Section-Container" >
        <section class="Description hide">
            <div class="Descripcion-Control">
                <span class="Description-Close"><img src="<?php echo get_template_directory_uri() . '/images/icons/equis.svg' ?> " alt=""></span>
                <article class="Description-Content"></article>
            </div>
        </section>
        <section class="List">
            <h2 class="text-blue">Nuestros servicios</h2>
            <!--<span class="List-Description">(Haz clic en los iconos para ver la descripción)</span>-->
            <nav id="Services-Nav">
                <ul>
                    <li>
                        <a href="javascript:void(0)" data-id="1">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/atencion_medica_domiciliaria.svg' ?>" alt="" class="Service-Item-Image-Color">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/atencion_medica_domiciliaria.blanco.svg' ?>" alt="" class="Service-Item-Image-White">
                            <span class="Service-Item-Title">Atención médica domiciliaria</span>
                            <span class="Service-Item-Close">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/equis.svg' ?>" alt="">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-id="8">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/terapias.svg' ?>" alt="Terapias físicas" class="Service-Item-Image-Color">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/terapias.blanco.svg' ?>" alt="Terapias físicas" class="Service-Item-Image-White">
                            <span class="Service-Item-Title">Terapias Físicas</span>
                            <span class="Service-Item-Close">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/equis.svg' ?>" alt="">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-id="5">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/enfermeria.svg' ?>" alt="" class="Service-Item-Image-Color">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/enfermeria.blanco.svg' ?>" alt="" class="Service-Item-Image-White">
                            <span class="Service-Item-Title">Enfermería</span>
                            <span class="Service-Item-Close">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/equis.svg' ?>" alt="">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-id="2">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/clinica_de_heridas.svg' ?>" alt="" class="Service-Item-Image-Color">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/clinica_de_heridas.blanco.svg' ?>" alt="" class="Service-Item-Image-White">
                            <span class="Service-Item-Title">Clínica de heridas</span>
                            <span class="Service-Item-Close">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/equis.svg' ?>" alt="">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-id="3">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/cuidado_integral_del_paciente_phd.svg' ?>" alt="" class="Service-Item-Image-Color">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/cuidado_integral_del_paciente_phd.blanco.svg' ?>" alt="" class="Service-Item-Image-White">
                            <span class="Service-Item-Title">Ciudado integral del paciente (PHD)</span>
                            <span class="Service-Item-Close">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/equis.svg' ?>" alt="">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-id="7">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/salud_kids.svg' ?>" alt="" class="Service-Item-Image-Color">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/salud_kids.blanco.svg' ?>" alt="" class="Service-Item-Image-White">
                            <span class="Service-Item-Title">Salud kids</span>
                            <span class="Service-Item-Close">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/equis.svg' ?>" alt="">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-id="6">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/paciente_cronico.svg' ?>" alt="" class="Service-Item-Image-Color">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/paciente_cronico.blanco.svg' ?>" alt="" class="Service-Item-Image-White">
                            <span class="Service-Item-Title">Paciente crónico</span>
                            <span class="Service-Item-Close">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/equis.svg' ?>" alt="">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-id="4">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/cuidador.svg' ?>" alt="" class="Service-Item-Image-Color">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/cuidador.blanco.svg' ?>" alt="" class="Service-Item-Image-White">
                            <span class="Service-Item-Title">Ciudador</span>
                            <span class="Service-Item-Close">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/equis.svg' ?>" alt="">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-id="9">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/terapias_respiratorias.svg' ?>" alt="Terapias respiratorias" class="Service-Item-Image-Color">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/terapias_respiratorias.blanco.svg' ?>" alt="Terapias respiratorias" class="Service-Item-Image-White">
                            <span class="Service-Item-Title">Terapias respiratorias</span>
                            <span class="Service-Item-Close">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/equis.svg' ?>" alt="">
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
<section id="News" class="News Over" style="background-image: url( <?php echo get_template_directory_uri() . '/images/notas_de_interes.jpg' ?> )" >
    <div class="Section-Container">
        <h2 class="text-white">notas de interés</h2>
        <p  class="text-white">Entérate de nuestras últimas noticias e innovaciones</p>
        
        
            
            <div class="News-Container">
                <div class="Flip-Card-Container">
                <?php
                    foreach ( $last_posts as $post ) :
                    setup_postdata( $post );
                    $thumbID = get_post_thumbnail_id( $post->ID );
                    $imgDestacada = wp_get_attachment_image_src( $thumbID, 'medium' ); // Sustituir por thumbnail, medium, large o full
                    
                    
                    
                    ?>
                    <article class="New Flip-Card">
                        <a class="Card" href="<?php the_permalink() ?>">
                            <div class="Card-Face Front"><img src="<?php echo empty($imgDestacada) ? get_template_directory_uri() . '/images/noti2.png' : $imgDestacada[0]; ?>" alt=""></div>
                            <div class="Card-Face Back">
                                <div class="Card-Text">
                                    <span class="date"><?php the_time( 'd/m/Y' ) ?></span>
                                    <h4 class="text-green"><?php the_title(); ?></h4>
                                    <span class="excerpt">
                                        <?php the_excerpt();?>
                                    </span>
                                    <span class="link">
                                        <?php  the_title();  ?>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </article>
                    <?php endforeach;
                        wp_reset_postdata();
                    ?>
                    <!--                    <article class="New Flip-Card">
                        <a class="Card">
                            <div class="Card-Face Front"><img src="<?php echo get_template_directory_uri() . '/images/noti2.png' ?>" alt=""></div>
                            <div class="Card-Face Back">
                                <div class="Card-Text">
                                    <span class="date">01/01/2019</span>
                                    <h4 class="text-green">Servicios de terapias</h4>
                                    <p>Las bajas temperaturas, cambios climaticos bruscos y la contaminación ambiental son factores que contribuyen a la aparición de la gripe. </p>
                                    <span class="link">Terapias físicas y respiratorias</span>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="New Flip-Card">
                        <a class="Card">
                            <div class="Card-Face Front"><img src="<?php echo get_template_directory_uri() . '/images/noti3.png' ?>" alt=""></div>
                            <div class="Card-Face Back">
                                <div class="Card-Text">
                                    <span class="date">01/01/2019</span>
                                    <h4 class="text-green">Servicios de terapias</h4>
                                    <p>Las bajas temperaturas, cambios climaticos bruscos y la contaminación ambiental son factores que contribuyen a la aparición de la gripe. </p>
                                    <span class="link">Terapias físicas y respiratorias</span>
                                </div>
                            </div>
                        </a>
                    </article>
                    -->
                </div>
            </div>
            <div class="Circles Circle-Borderer">
                <span class="Circle-Item active"></span>
                <span class="Circle-Item"></span>
                <span class="Circle-Item"></span>
            </div>
            <div class="Ver-Mas">
                <a href="/respirarsalud/wordpress/noticias" class="text-green">Ver más</a>
            </div>
    
        </div>
</section>
<section class="Related Over">
    <div>
    <img src="<?php echo get_template_directory_uri() . '/images/entidades/servicio_de_salud.svg' ?>" alt="Servicio de Salud">
    <img src="<?php echo get_template_directory_uri() . '/images/entidades/supersalud.svg' ?>" alt="Supersalud">
    <img src="<?php echo get_template_directory_uri() . '/images/entidades/secretaria_de_salud.svg' ?>" alt="Secretaría de Salud">
    <img src="<?php echo get_template_directory_uri() . '/images/medalla.png' ?>" alt="Medalla">
    </div>
</section>

</main>
