<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Machupicchu_Lama
 */

get_header();
?>
<div class="hero-principal">
    <div class="hero-desktop">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/hero-machupicchu.webp" type="image/webp">
            <img class="hero-destop-img"
                src="<?php echo get_template_directory_uri(); ?>/images/hero-machupicchu.png" />
        </picture>

        <div class="hero-desktop-content">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/TripAdvisor-white-2023.webp"
                    type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/images/TripAdvisor-white-2023.png" />
            </picture>
        </div>
    </div>
    <div class="hero-img">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/hero-mobile.webp" type="image/webp">
            <img class="hero-destop-img" src="<?php echo get_template_directory_uri(); ?>/images/hero-mobile.png" />
        </picture>
        <div class="hero-img-content">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/TripAdvisor-white-2023.webp"
                    type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/images/TripAdvisor-white-2023.png" />
            </picture>
            <h1>Mejor Operador Turístico de Perú</h1>
            <p>
                Nos especializamos en llevar pequeños grupos de aventuras a Machu Picchu y a las tierras andinas de Perú
                para experiencias únicas en la vida.
            </p>
            <a class="button" href="#">Tu mejor opción de viaje en Perú</a>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/secciones/machupicchulama-presentation'); ?>
<?php get_template_part('template-parts/secciones/mejores-tours'); ?>
<?php get_template_part('template-parts/secciones/mejores-lugares'); ?>
<?php get_template_part('template-parts/secciones/comentarios-clientes'); ?>
<?php get_template_part('template-parts/secciones/preguntas-frecuentes'); ?>
<?php get_template_part('template-parts/secciones/premios-organizaciones'); ?>

<?php
//*get_sidebar();
get_footer();