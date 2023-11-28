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

        </section>
    </div>





</main>


<?php
/**get_sidebar();*/
get_footer();