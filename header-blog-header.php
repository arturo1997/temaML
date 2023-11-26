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
                                    href="tel:<?php echo get_theme_mod('enlace_telefono', '+1234567890'); ?>"><?php echo get_theme_mod('enlace_telefono', '+1234567890'); ?></a>
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
					'theme_location' => 'menu-blog',
					'menu_class'        => 'nav container-menu ',
                    'walker' => new Custom_WalkerNav(),
				)
			);
			?>
                <ul class="menu-mobile-contact">
                    <li>
                        <a href="https://machupicchulama.com/reserva-tu-viaje/" class="button">Consulte
                            ahora</a>
                    </li>
                    <li>
                        <p>Habla con nosotros</p>
                        <a href="<?php echo get_theme_mod('enlace_telefono', '+1234567890'); ?>"
                            class="button-whatsapp"><?php get_template_part('images/iconos/phone-icon'); ?><span><?php echo get_theme_mod('enlace_telefono', '+1234567890'); ?></span></a>
                        <p><?php echo get_theme_mod('horario_texto', 'Lunes a Viernes: 9am - 5pm'); ?></p>

                    </li>

                </ul>
            </nav><!-- #site-navigation -->






        </header><!-- #masthead -->