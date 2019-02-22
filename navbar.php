<header class="Header white">
        <div class="Header-Container">
            <div class="Logo" id="Logo">
                <a id="White-Logo" href="<?php echo esc_url(home_url('/')); ?>">
                    <img style="padding: 5px;" src="<?php echo get_template_directory_uri() . '/images/logo_blanco.svg' ?>" alt="Respirar Salud Logo" >
                </a>
                <a id="Color-Logo" href="<?php echo esc_url(home_url('/')); ?>" >
                    <img src="<?php echo get_template_directory_uri() . '/images/logo.svg' ?>" alt="Respirar Salud Logo" >
                </a>
            </div>
            <nav class="Menu Show-Menu" id="Main-Menu">
                <span class="Menu-Dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="100%" height="100%" viewBox="0 0 433.5 433.5" xml:space="preserve">
                        <path d="M0,293.25h433.5v-51H0V293.25z M0,395.25h433.5v-51H0V395.25z M0,191.25h433.5v-51H0V191.25z M0,38.25v51h433.5v-51H0z" />
                    </svg>
                </span>
                <div class="Menu-Container">
                <?php if(has_nav_menu( 'main_menu' )) : ?>
                        <?php wp_nav_menu(array(
                            'location' => 'main_menu',
                            'container' => '',
                            'items_wrap' => '<ul>%3$s 
                            <li><a href="javascript:void(0)" id="Contacto-open" >Contacto</a></li>
                            <li class="Menu-Close">
                                <img src="' . get_template_directory_uri() . '/images/icons/equis.svg" alt="">
                            </li></ul>'
                        )); ?>
                    <?php else:  ?>
                        <ul>
                            <?php wp_list_pages('title_li') ?>
                            <li><a href="javascript:void(0)" id="Contacto-open" >Contacto</a></li>
                        </ul>
                    <?php endif;  ?>
                </div>
            </nav>
            <div id="Call">
                <a href="#" class="Call-Text">
                    <span class="line-icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/llamanos_ya.svg' ?>" alt="llamanos ya">
                    </span>
                    <span class="Call-Title">Llamanos ya!</span> 
                    <span class="Call-Complement">Linea de atención: (+57) (1) 6401324
                        <br>Líneas directas de Consulta médica: (+57) (1) 384 03 54 / (+57) (1) 316 526 0195
                        <br>Líneas directas de Terapias: (+57) (1) 384 03 54 / (+57) (1) 316 526 0195
                    </span>
                </a>
            </div>

            <div id="Lang">
                <div class="Lang-Text">
                    Selecciona el idioma
                </div>  
                <div class="Lang-Group">
                    <a href="javascript:void(0)" >
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/colombia.svg' ?>" alt="colombia">
                    </a>
                    <a href="javascript:void(0)" >
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/usa.svg' ?>" alt="usa">
                    </a>
                    <a href="javascript:void(0)" >
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/brasil.svg' ?>" alt="brasil">
                    </a>
                </div>
            </div>
        </div>
    </header>