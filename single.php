<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Machupicchu_Lama
 */

 if (is_single() && in_category('blog')) {
    // Estás en una entrada individual que pertenece a la categoría "categoria-especifica"
    // Muestra el encabezado personalizado para esta categoría
    get_header('blog-header'); // Asegúrate de tener un archivo header-categoria-especifica.php en tu tema
} else {
    // Estás en una entrada individual de otra categoría o en otra página
    // Muestra el encabezado predeterminado
    get_header();
}


?>

<main class="main">
    <?php
    if (has_term('blog', 'category')) {
        // Mostrar contenido personalizado para la Categoría A
        // Puedes agregar tu código HTML y contenido aquí
        get_template_part('template-parts/secciones/blog-design');
    } else {
        // Mostrar un diseño predeterminado para otras categorías o sin categoría
        // Puedes agregar tu código HTML y contenido aquí
        get_template_part('template-parts/secciones/tour-design');
    }
    ?>

</main>


<?php
/**get_sidebar();*/
get_footer();