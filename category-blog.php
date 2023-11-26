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
if (is_category('blog')) {
    // Estás en una página con el nombre "nombre-de-la-pagina"
    // Muestra el encabezado personalizado para esta página
    get_header('blog-header'); // Asegúrate de tener un archivo header-pagina-especifica.php en tu tema
} else {
    // Estás en otra página
    // Muestra el encabezado predeterminado
    get_header();
}
?>

<div class="site-blog">
    <div class="wrapper">
        <div class="row post-hero">
            <?php 
                $args = array(
                    'category_name' => 'blog', // Reemplaza 'nombre_de_la_categoria' por el nombre de la categoría deseada
                    'posts_per_page' => 1, // Obtener solo una entrada
                    'post_status' => 'publish', // Obtener solo entradas publicadas
                    'order' => 'DESC', // Ordenar en orden descendente (la última entrada primero)
                    'orderby' => 'date' // Ordenar por fecha de publicación
                );
                
                $entrada_query = new WP_Query($args);
                
                if ($entrada_query->have_posts()) {
                    $entrada_query->the_post();
                
                    // Obtener el título de la entrada como enlace hacia la entrada
                    $titulo = '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
                
                    // Obtener la imagen destacada (miniatura) de la entrada
                    $imagen_destacada = get_the_post_thumbnail();
                
                    // Obtener el contenido resumido de la entrada
                    $contenido_resumido = get_the_excerpt();
                
                    // Muestra los elementos como desees
                    ?>
            <div class="post-hero-info">
                <h2> <?php echo $titulo  ?></h2>
                <p><?php echo $contenido_resumido  ?></p>
                <time class="post-date">
                    <?php get_template_part('images/iconos/date-icon'); ?>
                    <?php echo get_the_time('j F, Y'); ?></time>
            </div>
            <?php
                    if ($imagen_destacada) {
                        ?>
            <div class="post-hero-img">
                <?php echo $imagen_destacada; ?>
            </div>
            <?php
                    }
                }
                
                wp_reset_postdata(); // Restablecer datos de la consulta
                ?>

        </div>
        <div>

        </div>
    </div>

    <div class="wrapper">
        <?php
$category = get_category_by_slug('blog'); // Reemplaza 'nombre_de_la_categoria' con el slug de tu categoría
if ($category) {
    $args = array(
        'category__in' => array($category->term_id),
        'posts_per_page' => 10, // Cambia el número según tus preferencias
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        ?>
        <div class="posts-main">
            <div class="posts">
                <?php
                $count = 0;
        while ($query->have_posts()) : $query->the_post();
            // Aquí muestra la información de cada entrada
            $titulo = '<a class="post-info-title" href="' . get_permalink() . '">' . get_the_title() . '</a>';
            $contenido_resumido = get_the_excerpt();
            $imagen_destacada = '<a href="' . get_permalink() . '">' . get_the_post_thumbnail() . '</a>';
            if ($count >= 1) {
                ?>
                <article class="card-intern-post row">
                    <div class="post-info">
                        <h2> <?php echo $titulo  ?></h2>
                        <p class="post-excerpt"><?php echo $contenido_resumido  ?></p>
                        <time class="post-date">
                            <?php get_template_part('images/iconos/date-icon'); ?>
                            <?php echo get_the_time('j F, Y'); ?></time>
                    </div>
                    <?php
                if ($imagen_destacada) {
                ?>
                    <div class="post-img">
                        <?php echo $imagen_destacada; ?>
                    </div>
                </article>
                <?php
            } 
        }
        ++$count;
        endwhile;
                // Agrega un enlace para cargar más entradas
                echo '<div class="button-cargar-mas">';
                previous_posts_link(' Publicaciones más nuevas');
                next_posts_link('Cargar más', $query->max_num_pages);
                echo '</div>';
        ?>
            </div>
            <div class="posts-sidebar">
                <?php get_template_part('template-parts/secciones/blog-sidebar');  ?>


            </div>
        </div>
        <?php



        wp_reset_postdata();
    else :
        echo 'No se encontraron entradas.';
    endif;
}
?>
    </div>
</div>

<?php
/**get_sidebar();*/
get_footer();