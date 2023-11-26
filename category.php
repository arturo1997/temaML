<?php
/**
 * The template for displaying all Gategorys
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Machupicchu_Lama
 */

get_header();

?>

<main class="main">
    <div class="hero-category">
        <div class="gategory-hero-img">
            <?php
                // Obtener la categoría actual
                $categoria_actual = get_queried_object();
                // Obtener la URL de la imagen personalizada
                $img_categoria = get_field('hero-img', $categoria_actual);
                $img_categoria_webp = get_field('hero-img-webp', $categoria_actual);

                if(!empty($img_categoria)){
                    $img_categoria_url = $img_categoria['url'];
                    $img_categoria_alt = $img_categoria['alt'];
        
                    if ($img_categoria && $img_categoria_webp) {
                        $img_categoria_webp_url = $img_categoria_webp['url'];
                        echo '<picture>';
                        echo '<source srcset="' . esc_url($img_categoria_webp_url) . '" type="image/webp">';
                        echo '<img src="' . esc_url($img_categoria_url) . '" alt="' . esc_attr($img_categoria_alt) . '">';
                        echo '</picture>';
                    }else{
        
                        echo '<img src="' . esc_url($img_categoria_url) . '" alt="' . esc_attr($img_categoria_alt) . '" />';
                        
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
                        <?php
                        $current_term = get_queried_object();

                        if ($current_term instanceof WP_Term && $current_term->parent) {
                            // Es una subcategoría, ya que tiene un valor en la propiedad "parent"
                            echo '<h1 class="category-hero-titulo">Tours en '.$current_term->name.'</h1>';
                        } else {
                            // Es una categoría principal
                            echo '<h1 class="category-hero-titulo">Explora las Maravillas de Perú</h1>';
                        }
                        ?>


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



    <?php
    $current_term = get_queried_object();

    if ($current_term instanceof WP_Term && $current_term->parent) {
        // Es una subcategoría, ya que tiene un valor en la propiedad "parent"
        include(TEMPLATEPATH."/template-parts/secciones/subcategoria.php");
    } else {
    // Es una categoría principal
    include(TEMPLATEPATH."/template-parts/secciones/categoria-principal.php");
    }

    ?>

</main>


<?php
/**get_sidebar();*/
get_footer();