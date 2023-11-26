<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Machupicchu_Lama
 */
get_header();
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/categoria.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/faqs.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/blog.css">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="whatsapp">
        <div id="whatsapp-content" class="whatsapp-content">
            <div class="whatsapp-content-header">
                <h4>Contacta con un asesor</h4>
                <p>
                    Hola! Haz clic en uno de nuestros usuarios de abajo para chatear por whatsapp
                </p>
            </div>
            <div class="whatsapp-content-body">
                <a href="https://wa.me/51982934132" target="_blank" class="asesor">
                    <div class="asesor-img">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/asesor-mujer.png"
                            alt="" />
                    </div>
                    <div class="asesor-datos">
                        <div class="asesor-datos-nombre">
                            jenipher
                        </div>
                        <div class="asesor-datos-telefono">
                            +51 982934132
                        </div>
                    </div>
                    <div class="whatsapp-img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 54 54" fill="none">
                            <g clip-path="url(#clip0_515_2)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M46.1319 7.84126C41.0563 2.78726 34.3059 0.00256418 27.1134 0C12.2926 0 0.230769 11.994 0.225612 26.7367C0.223034 31.4496 1.46197 36.0498 3.81479 40.1038L0 53.9606L14.2535 50.2425C18.1805 52.3734 22.6025 53.4952 27.1019 53.4965H27.1134C41.9316 53.4965 53.9949 41.5012 54 26.7585C54.0026 19.6135 51.2088 12.8966 46.1319 7.84254V7.84126ZM27.1134 48.981H27.1044C23.0949 48.9798 19.1616 47.9078 15.7298 45.8834L14.9136 45.4015L6.4551 47.6079L8.71251 39.4063L8.18135 38.5652C5.94456 35.0268 4.76235 30.9368 4.76493 26.7381C4.77009 14.4851 14.795 4.51552 27.1226 4.51552C33.0915 4.51808 38.7023 6.83227 42.9218 11.0337C47.1414 15.2338 49.4633 20.8186 49.4607 26.756C49.4555 39.0102 39.4307 48.9798 27.1134 48.9798V48.981ZM39.3713 32.3369C38.6996 32.0023 35.3967 30.3868 34.7804 30.1638C34.1642 29.9406 33.7169 29.8292 33.2694 30.4984C32.8221 31.1677 31.5342 32.6728 31.1423 33.1177C30.7503 33.5638 30.3584 33.619 29.6867 33.2843C29.0151 32.9497 26.8505 32.2446 24.2837 29.9688C22.2867 28.1969 20.9381 26.0098 20.5463 25.3405C20.1543 24.6713 20.505 24.3097 20.8401 23.9776C21.1418 23.6777 21.5118 23.1969 21.8483 22.8071C22.1849 22.4173 22.2957 22.1379 22.52 21.6929C22.7444 21.2468 22.6322 20.8571 22.4646 20.5224C22.2969 20.1878 20.9537 16.8992 20.3928 15.562C19.8474 14.2594 19.2932 14.4363 18.8819 14.4146C18.4899 14.3953 18.0426 14.3915 17.594 14.3915C17.1453 14.3915 16.4181 14.5581 15.8019 15.2274C15.1857 15.8966 13.4504 17.5133 13.4504 20.8006C13.4504 24.0879 15.8574 27.2663 16.1939 27.7124C16.5303 28.1586 20.9316 34.9062 27.6704 37.8012C29.273 38.4896 30.5247 38.9012 31.5006 39.2089C33.1097 39.7179 34.5741 39.6461 35.7318 39.4743C37.0224 39.282 39.7065 37.8576 40.266 36.2972C40.8255 34.7369 40.8255 33.3984 40.658 33.1202C40.4904 32.842 40.0418 32.674 39.3701 32.3394L39.3713 32.3369Z"
                                    fill="#25D366" />
                            </g>
                            <defs>
                                <clipPath id="clip0_515_2">
                                    <rect width="54" height="54" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </a>

                <a href="https://wa.me/51973943848" target="_blank" class="asesor">
                    <div class="asesor-img">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/asesor-mujer.png"
                            alt="" />
                    </div>
                    <div class="asesor-datos">
                        <div class="asesor-datos-nombre">
                            Lado
                        </div>
                        <div class="asesor-datos-telefono">
                            +51 973943848
                        </div>
                    </div>
                    <div class="whatsapp-img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 54 54" fill="none">
                            <g clip-path="url(#clip0_515_2)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M46.1319 7.84126C41.0563 2.78726 34.3059 0.00256418 27.1134 0C12.2926 0 0.230769 11.994 0.225612 26.7367C0.223034 31.4496 1.46197 36.0498 3.81479 40.1038L0 53.9606L14.2535 50.2425C18.1805 52.3734 22.6025 53.4952 27.1019 53.4965H27.1134C41.9316 53.4965 53.9949 41.5012 54 26.7585C54.0026 19.6135 51.2088 12.8966 46.1319 7.84254V7.84126ZM27.1134 48.981H27.1044C23.0949 48.9798 19.1616 47.9078 15.7298 45.8834L14.9136 45.4015L6.4551 47.6079L8.71251 39.4063L8.18135 38.5652C5.94456 35.0268 4.76235 30.9368 4.76493 26.7381C4.77009 14.4851 14.795 4.51552 27.1226 4.51552C33.0915 4.51808 38.7023 6.83227 42.9218 11.0337C47.1414 15.2338 49.4633 20.8186 49.4607 26.756C49.4555 39.0102 39.4307 48.9798 27.1134 48.9798V48.981ZM39.3713 32.3369C38.6996 32.0023 35.3967 30.3868 34.7804 30.1638C34.1642 29.9406 33.7169 29.8292 33.2694 30.4984C32.8221 31.1677 31.5342 32.6728 31.1423 33.1177C30.7503 33.5638 30.3584 33.619 29.6867 33.2843C29.0151 32.9497 26.8505 32.2446 24.2837 29.9688C22.2867 28.1969 20.9381 26.0098 20.5463 25.3405C20.1543 24.6713 20.505 24.3097 20.8401 23.9776C21.1418 23.6777 21.5118 23.1969 21.8483 22.8071C22.1849 22.4173 22.2957 22.1379 22.52 21.6929C22.7444 21.2468 22.6322 20.8571 22.4646 20.5224C22.2969 20.1878 20.9537 16.8992 20.3928 15.562C19.8474 14.2594 19.2932 14.4363 18.8819 14.4146C18.4899 14.3953 18.0426 14.3915 17.594 14.3915C17.1453 14.3915 16.4181 14.5581 15.8019 15.2274C15.1857 15.8966 13.4504 17.5133 13.4504 20.8006C13.4504 24.0879 15.8574 27.2663 16.1939 27.7124C16.5303 28.1586 20.9316 34.9062 27.6704 37.8012C29.273 38.4896 30.5247 38.9012 31.5006 39.2089C33.1097 39.7179 34.5741 39.6461 35.7318 39.4743C37.0224 39.282 39.7065 37.8576 40.266 36.2972C40.8255 34.7369 40.8255 33.3984 40.658 33.1202C40.4904 32.842 40.0418 32.674 39.3701 32.3394L39.3713 32.3369Z"
                                    fill="#25D366" />
                            </g>
                            <defs>
                                <clipPath id="clip0_515_2">
                                    <rect width="54" height="54" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        <div id="whatsapp-button" class="whatsapp-button">
            <div id="whatsapp-open" class="whatsapp-open">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 54 54" fill="none">
                    <g clip-path="url(#clip0_515_2)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M46.1319 7.84126C41.0563 2.78726 34.3059 0.00256418 27.1134 0C12.2926 0 0.230769 11.994 0.225612 26.7367C0.223034 31.4496 1.46197 36.0498 3.81479 40.1038L0 53.9606L14.2535 50.2425C18.1805 52.3734 22.6025 53.4952 27.1019 53.4965H27.1134C41.9316 53.4965 53.9949 41.5012 54 26.7585C54.0026 19.6135 51.2088 12.8966 46.1319 7.84254V7.84126ZM27.1134 48.981H27.1044C23.0949 48.9798 19.1616 47.9078 15.7298 45.8834L14.9136 45.4015L6.4551 47.6079L8.71251 39.4063L8.18135 38.5652C5.94456 35.0268 4.76235 30.9368 4.76493 26.7381C4.77009 14.4851 14.795 4.51552 27.1226 4.51552C33.0915 4.51808 38.7023 6.83227 42.9218 11.0337C47.1414 15.2338 49.4633 20.8186 49.4607 26.756C49.4555 39.0102 39.4307 48.9798 27.1134 48.9798V48.981ZM39.3713 32.3369C38.6996 32.0023 35.3967 30.3868 34.7804 30.1638C34.1642 29.9406 33.7169 29.8292 33.2694 30.4984C32.8221 31.1677 31.5342 32.6728 31.1423 33.1177C30.7503 33.5638 30.3584 33.619 29.6867 33.2843C29.0151 32.9497 26.8505 32.2446 24.2837 29.9688C22.2867 28.1969 20.9381 26.0098 20.5463 25.3405C20.1543 24.6713 20.505 24.3097 20.8401 23.9776C21.1418 23.6777 21.5118 23.1969 21.8483 22.8071C22.1849 22.4173 22.2957 22.1379 22.52 21.6929C22.7444 21.2468 22.6322 20.8571 22.4646 20.5224C22.2969 20.1878 20.9537 16.8992 20.3928 15.562C19.8474 14.2594 19.2932 14.4363 18.8819 14.4146C18.4899 14.3953 18.0426 14.3915 17.594 14.3915C17.1453 14.3915 16.4181 14.5581 15.8019 15.2274C15.1857 15.8966 13.4504 17.5133 13.4504 20.8006C13.4504 24.0879 15.8574 27.2663 16.1939 27.7124C16.5303 28.1586 20.9316 34.9062 27.6704 37.8012C29.273 38.4896 30.5247 38.9012 31.5006 39.2089C33.1097 39.7179 34.5741 39.6461 35.7318 39.4743C37.0224 39.282 39.7065 37.8576 40.266 36.2972C40.8255 34.7369 40.8255 33.3984 40.658 33.1202C40.4904 32.842 40.0418 32.674 39.3701 32.3394L39.3713 32.3369Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_515_2">
                            <rect width="54" height="54" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div id="whatsapp-close" class="whatsapp-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 43 43" fill="none">
                    <path d="M38.5 4L4 38.5" stroke="white" stroke-width="8" stroke-linecap="round" />
                    <path d="M38.5 4L4 38.5" stroke="white" stroke-width="8" stroke-linecap="round" />
                    <path d="M38.5 4L4 38.5" stroke="white" stroke-width="8" stroke-linecap="round" />
                    <path d="M38.5 4L4 38.5" stroke="white" stroke-width="8" stroke-linecap="round" />
                    <path d="M38.5 38.5L4 4" stroke="white" stroke-width="8" stroke-linecap="round" />
                    <path d="M38.5 38.5L4 4" stroke="white" stroke-width="8" stroke-linecap="round" />
                    <path d="M38.5 38.5L4 4" stroke="white" stroke-width="8" stroke-linecap="round" />
                    <path d="M38.5 38.5L4 4" stroke="white" stroke-width="8" stroke-linecap="round" />
                </svg>
            </div>
        </div>
    </div>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'machupicchu-lama' ); ?></a>

        <header id="masthead" class="header">
            <div class="container-header machupicchulama-menu">
                <div class="site-branding">
                    <?php
				        the_custom_logo();
					?>
                </div><!-- .site-branding -->
                <div class="machupicchulama-menu-top">
                    <div class="machupicchulama-menu-top-superior">
                        <?php
    // Obtener el ID del menú
    $menu_location = 'head';
    $menu = get_term_by('name', $menu_location, 'nav_menu');
    if ($menu) {
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        if ($menu_items) {
            echo '<ul class="machupicchulama-menu-top-superior-list">';

            $count = 0; // Contador para seguir el orden de los elementos
            foreach ($menu_items as $item) {
                $count++;
                echo '<li>';
                echo '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
                echo '</li>';
                // Agrega el elemento <li> vacío con la clase "separator" después de dos elementos
                if ($count % 2 != 0) {
                    echo '<li class="separador"></li>';
                }
                $count++;
            } ?>
                        <li class="button-idioma"><img loading="lazy"
                                src="https://machupicchulama.com/wp-content/uploads/2023/09/espanol-icon.png" alt=""><a
                                href="#">Español</a></li>

                        <?php
            echo '</ul>';
        }
    }
    ?>


                    </div>
                    <div class="machupicchulama-menu-top-inferior">

                        <ul class="machupicchulama-menu-top-inferior-list">
                            <li>
                                <?php get_template_part('images/iconos/horario-icon'); ?>
                                <span
                                    class="horario"><?php echo get_theme_mod('horario_texto', 'Lunes a Viernes: 9am - 5pm'); ?></span>
                            </li>
                            <li>
                                <?php get_template_part('images/iconos/phone-icon'); ?>

                                <a class="telefono"
                                    href="tel:<?php echo get_theme_mod('enlace_telefono', '+51982934132'); ?>"><?php echo get_theme_mod('enlace_telefono', '+51 982934132'); ?></a>
                            </li>
                            <li>
                                <a class="button" href="https://machupicchulama.com/reserva-tu-viaje/">Consulte
                                    ahora</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="links-mobile">
                    <div class="lenguaje">
                        ES
                    </div>
                    <div class="telefono">
                        <a href="tel:+51 958 191 179"
                            class=""><?php get_template_part('images/iconos/phone-icon'); ?></a>
                    </div>
                    <div class="email">
                        <a href="mailto: info@machupicchulama.com"
                            class=""><?php get_template_part('images/iconos/email-icon'); ?></a>
                    </div>
                    <div id="site-navigation-mobile" class="main-navigation-mobile">
                        <div class="menu-activador">
                            <input type="checkbox" id="lanzador" />
                            <label for="lanzador">
                                <span class="menu-activador-linea"></span>
                                <span class="menu-activador-linea"></span>
                                <span class="menu-activador-linea"></span>
                            </label>
                        </div>
                        <div class="menu-mobile">

                        </div>
                    </div><!-- #site-navigation -->
                </div>
            </div>

            <nav id="site-navigation" class="main-navigation">
                <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'        => 'nav container-menu ',
                    'walker' => new Custom_WalkerNav(),
				)
			);
			?>
                <ul class="menu-mobile-contact">
                    <li>
                        <a href="https://wa.me/51982934132" target="_blank" class="button">Consulte
                            ahora</a>
                    </li>
                    <li>
                        <p>Habla con nosotros</p>
                        <a href="tel:<?php echo get_theme_mod('enlace_telefono', '+51982934132'); ?>"
                            class="button-whatsapp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 54 54"
                                fill="none">
                                <g clip-path="url(#clip0_515_2)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M46.1319 7.84126C41.0563 2.78726 34.3059 0.00256418 27.1134 0C12.2926 0 0.230769 11.994 0.225612 26.7367C0.223034 31.4496 1.46197 36.0498 3.81479 40.1038L0 53.9606L14.2535 50.2425C18.1805 52.3734 22.6025 53.4952 27.1019 53.4965H27.1134C41.9316 53.4965 53.9949 41.5012 54 26.7585C54.0026 19.6135 51.2088 12.8966 46.1319 7.84254V7.84126ZM27.1134 48.981H27.1044C23.0949 48.9798 19.1616 47.9078 15.7298 45.8834L14.9136 45.4015L6.4551 47.6079L8.71251 39.4063L8.18135 38.5652C5.94456 35.0268 4.76235 30.9368 4.76493 26.7381C4.77009 14.4851 14.795 4.51552 27.1226 4.51552C33.0915 4.51808 38.7023 6.83227 42.9218 11.0337C47.1414 15.2338 49.4633 20.8186 49.4607 26.756C49.4555 39.0102 39.4307 48.9798 27.1134 48.9798V48.981ZM39.3713 32.3369C38.6996 32.0023 35.3967 30.3868 34.7804 30.1638C34.1642 29.9406 33.7169 29.8292 33.2694 30.4984C32.8221 31.1677 31.5342 32.6728 31.1423 33.1177C30.7503 33.5638 30.3584 33.619 29.6867 33.2843C29.0151 32.9497 26.8505 32.2446 24.2837 29.9688C22.2867 28.1969 20.9381 26.0098 20.5463 25.3405C20.1543 24.6713 20.505 24.3097 20.8401 23.9776C21.1418 23.6777 21.5118 23.1969 21.8483 22.8071C22.1849 22.4173 22.2957 22.1379 22.52 21.6929C22.7444 21.2468 22.6322 20.8571 22.4646 20.5224C22.2969 20.1878 20.9537 16.8992 20.3928 15.562C19.8474 14.2594 19.2932 14.4363 18.8819 14.4146C18.4899 14.3953 18.0426 14.3915 17.594 14.3915C17.1453 14.3915 16.4181 14.5581 15.8019 15.2274C15.1857 15.8966 13.4504 17.5133 13.4504 20.8006C13.4504 24.0879 15.8574 27.2663 16.1939 27.7124C16.5303 28.1586 20.9316 34.9062 27.6704 37.8012C29.273 38.4896 30.5247 38.9012 31.5006 39.2089C33.1097 39.7179 34.5741 39.6461 35.7318 39.4743C37.0224 39.282 39.7065 37.8576 40.266 36.2972C40.8255 34.7369 40.8255 33.3984 40.658 33.1202C40.4904 32.842 40.0418 32.674 39.3701 32.3394L39.3713 32.3369Z"
                                        fill="#25D366" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_515_2">
                                        <rect width="54" height="54" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span><?php echo get_theme_mod('enlace_telefono', '+51 982934132'); ?></span></a>
                        <p><?php echo get_theme_mod('horario_texto', 'Lunes a Viernes: 9am - 5pm'); ?></p>

                    </li>

                </ul>
            </nav><!-- #site-navigation -->

        </header><!-- #masthead -->