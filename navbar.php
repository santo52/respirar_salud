<?php 
$imagen_logo_blanco = pll_current_language() == "en" ? "logo_blanco-en.png" : "logo_blanco.svg";
$imagen_logo_color = pll_current_language() == "en" ? "logo-en.png" : "logo.svg";

?>
<input type="hidden" id="callustext" value="<?php pll_e('Llamanos ya') ?>">
<header class="Header white">
        <div class="Header-Container">
            <div class="Logo" id="Logo">
                <a id="White-Logo" href="<?php echo esc_url(home_url('/')); ?>">
                    <img style="padding: 5px;" src="<?php echo get_template_directory_uri() . "/images/{$imagen_logo_blanco}" ?>" alt="Respirar Salud Logo" >
                </a>
                <a id="Color-Logo" href="<?php echo esc_url(home_url('/')); ?>" >
                    <img src="<?php echo get_template_directory_uri() . "/images/{$imagen_logo_color}" ?>" alt="Respirar Salud Logo" >
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
                            'items_wrap' => '<ul class="menu">%3$s 
                            <li><a href="javascript:void(0)" id="Contacto-open" >'. pll__('Contacto') .'</a></li>
                            <li class="Menu-Close">
                                <img src="' . get_template_directory_uri() . '/images/icons/equis.svg" alt="">
                            </li>
                            <li id="desktoplang"><a href="javascript:void(0)">'
                                . pll__('Selecciona el idioma') .
                                '<ul class="submenu">
                                    <li onclick="window.location=\'https://respirarsalud.com/\'">Español</li>
                                    <li onclick="window.location=\'https://respirarsalud.com/en/\'">English</li>
                                </ul>
                            </a></li>
                            </ul>'
                        )); ?>
                    
                    <?php endif;  ?>
                </div>
            </nav>
            <div id="Whatsapp">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=+573223768806" class="Whatsapp-Text" style="height:100%">
                    <span class="line-icon" style="height:100%" >
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/wapp-03.svg' ?>" alt="llamanos ya">
                    </span>
                    <span class="Whatsapp-Title" style="height:100%"><?php pll_e('Habla con el Dr. Felipe') ?>!</span> 
                    <span class="Whatsapp-Complement"></span>
                </a>
            </div>
            <div id="Call">
                <a href="#" class="Call-Text" style="height:100%">
                    <span class="line-icon" style="height:100%" >
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/llamanos_ya.svg' ?>" alt="llamanos ya">
                    </span>
                    <span class="Call-Title" style="height:100%"><?php pll_e('Llamanos ya') ?>!</span> 
                    <span class="Call-Complement"><span class="bold"><?php pll_e('Línea de atención') ?> </span> <span>(+57) (1) 640 1324</span>
                        <br><span class="bold"><?php pll_e('Líneas directas consulta médica') ?></span> <span>(+57) (1) 384 03 54 / (+57) (1) 316 526 0195</span>
                        <br><span class="bold"><?php pll_e('Líneas directas terapias') ?></span> <span>(+57) (1) 640 3990 / (+57) (1) 312 513 5146</span>
                    </span>
                    <div id="Call-Close">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/equis.svg' ?>" alt="equis">
                    </div>
                </a>

                <div id="Call-Head">
                    </span><?php pll_e('Llamanos ya') ?>!</span>
                    <div id="Call-Head-Tab">
                        <div class="line-icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/down-arrow.svg' ?>" alt="flecha">
                        </div>
                    </div>
                </div>
            </div>
            <div id="Lang">
                <div class="Lang-Text">
                    <?php pll_e('Selecciona el idioma'); ?>
                </div>  
                <div class="Lang-Group">
                    <a href="/" >
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/colombia.svg' ?>" alt="colombia">
                    </a>
                    <a href="/en/" >
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/usa.svg' ?>" alt="usa">
                    </a>
                </div>
            </div>
        </div>
    </header>