<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Machupicchu_Lama
 */

get_header();
?>

<main class="main">
    <div class="hero-category">
        <div class="gategory-hero-img">
            <?php
                $img_page = get_field('page-img');
                $img_page_webp = get_field('page-img-webp');

                if(!empty($img_page)){
                    $img_page_url = $img_page['url'];
                    $img_page_alt = $img_page['alt'];
        
                    if ($img_page && $img_page_webp) {
                        $img_page_webp_url = $img_page_webp['url'];
                        echo '<picture>';
                        echo '<source srcset="' . esc_url($img_page_webp_url) . '" type="image/webp">';
                        echo '<img src="' . esc_url($img_page_url) . '" alt="' . esc_attr($img_page_alt) . '">';
                        echo '</picture>';
                    }else{
        
                        echo '<img src="' . esc_url($img_page_url) . '" alt="' . esc_attr($img_page_alt) . '" />';
                        
                    }
                }
                //echo wp_get_attachment_image($imagen_de_categoria, 'full', false, ['class' => 'img-category'])
                ?>
        </div>

        <div class="hero-entrada-content">
            <div class="wrapper">
                <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                <div class="category-content-view">
                    <div class="">
                        <h1 class="category-hero-titulo"><?php echo get_the_title(); ?></h1>
                        <div class="category-hero-subtitulo">
                            <span>
                                Descubre la riqueza cultural y natural de este fascinante país
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">

        <section class="container content-tour clear">

            <article class="content ">
                <?php include(TEMPLATEPATH."/template-parts/secciones/galeriaImagenes.php");?>
                <div class="descripcionArticulo">
                    <?php
			if (have_posts()) :
				while (have_posts()) : the_post();
					// Muestra el título de la página

					// Muestra el contenido de la página
					the_content();

				endwhile;
			else :
				// Si no se encuentra contenido
				echo 'No se encontró contenido en esta página.';
			endif;
			?>
                </div>
            </article>
            <?php if (in_category(array(63,365))) { ?>
            <div class="BoxRightBlog">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('BlogRight') ) : endif; ?>
            </div>
            <?php } else {
include(TEMPLATEPATH."/template-parts/secciones/sidebar-right.php");
} ?>
            <div class="tour-sidebar ">

                <div class="atencion-al-cliente">
                    <div class="atencion-al-cliente-title">
                        Atención al cliente
                    </div>
                    <div class="">
                        <ul class="atencion-al-cliente-list">
                            <li>
                                <a class="atencion-al-cliente-email-icon"
                                    href="mailto:info@machupicchulama.com"><?php get_template_part('images/iconos/email-icon'); ?></a>
                                <strong>Email</strong>
                                <a class="atencion-al-cliente-email"
                                    href="mailto:info@salkantaytrekking.com">info@machupicchulama.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tripadvisor">
                    <a target="_blank"
                        href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d12653635-Reviews-Machupicchu_Luna_Tours-Cusco_Cusco_Region-m11900.html">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tripadvisor.png" width="" height=""
                            alt="" />
                    </a>
                </div>
            </div>
        </section>
    </div>





</main>


<?php
/**get_sidebar();*/
get_footer();