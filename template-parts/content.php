<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Machupicchu_Lama
 */

?>

<article id="post-<?php the_ID(); ?>" class="card-tour container-grid-item">


    <?php
    $imagen_webp = get_field('img-thumbnail-webp'); // Obtén el campo personalizado de la imagen WebP
    $entrada_url = get_permalink(); // Obtiene el enlace de la entrada
    $imagen_destacada_id = get_post_thumbnail_id();
    $imagen_destacada_alt = get_post_meta($imagen_destacada_id, '_wp_attachment_image_alt', true); // Obtiene el atributo "alt"
    $imagen_fallback = get_the_post_thumbnail_url(); // Obtén el campo personalizado de la imagen de respaldo (JPEG o PNG)

    if ($entrada_url && $imagen_webp) {
        $imagen_url_webp = $imagen_webp['url'];

        echo '<a class="post-thumbnail" href="' . esc_url($entrada_url) . '">';
        echo '<picture>';
        echo '<source srcset="' . esc_url($imagen_url_webp) . '" type="image/webp">';
        echo '<img src="' . esc_url($imagen_fallback) . '" alt="' . esc_attr($imagen_destacada_alt) . '">';
        echo '</picture>';
        echo '</a>';
    }else{
        echo '<a class="post-thumbnail" href="' . esc_url($entrada_url) . '">';
        echo '<img src="' . esc_url($imagen_fallback) . '" alt="' . esc_attr($imagen_destacada_alt) . '">';
        echo '</a>';
    }
    ?>
    <?php 
        $tipo_de_tour = get_field('tipo-de-tour');
        if (!empty($tipo_de_tour)) {
            echo '<div class="card-tour-type">';
            echo $tipo_de_tour;
            echo '</div>';
        }
    ?>

    <div class="card-tour-header">
        <?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
        <div class="entry-meta">
        </div><!-- .entry-meta -->
        <?php endif; ?>
    </div><!-- .entry-header -->
    <span class="card-duracion">
        <img class="icon-duracion" src="https://machupicchulama.com/wp-content/uploads/2023/09/icono-duracion.png"
            alt="">
        <?php 
                    $dias = get_field('dias');
                    if ($dias >= 2) {
                        $noches = $dias - 1;
                        echo '<span >' . $dias .'</span>  Días & <span >' . $noches . '</span> Noches';
                    } else {
                        echo $dias, ' Dia';
                    }
                    
                    ?>
    </span>
    <div class="card-tour-footer">
        <p class="card-tour-footer-precio">Desde
            <span>US$<?php  echo get_post_meta(get_the_ID(), 'precio', true)  ?></span> por Persona
        </p>
        <a href="<?php the_permalink()?> " class="button button-hover">Reservar</a>
    </div>




</article><!-- #post-<?php the_ID(); ?> -->