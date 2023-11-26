<div class="socialmedia-sidebar">
    <h3>Síguenos</h3>
    <ul>
        <li>
            <a href="https://www.youtube.com/channel/UCb4fFThWHxjhtco3gK9YKrg" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/youtube-icon.svg" />
            </a>
        </li>
        <li>
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2FMapilunatours" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/x-icon.svg" />
            </a>
        </li>
        <li>
            <a href="https://web.facebook.com/montana7coloresperu/?_rdc=1&_rdr" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.svg" />
            </a>
        </li>
        <li>
            <a target="_blank"
                href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d12653635-Reviews-Machupicchu_Luna_Tours-Cusco_Cusco_Region.html">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tripadvisor-icon.svg" />
            </a>
        </li>
        <li>
            <a href="https://www.instagram.com/machupicchu_luna_tours/" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.svg" />
            </a>
        </li>
    </ul>
</div>
<div class="entradas-populares">
    <h3>Publicaciones destacadas</h3>
    <div class="entradas-populares-content">
        <?php
                        $entradas_mas_vistas = obtener_entradas_mas_vistas();
                        foreach ($entradas_mas_vistas as $entrada) {
                            $imagen_destacada = '<a class="entradas-populares-content-img" href="' . get_permalink($entrada->ID) . '">' . get_the_post_thumbnail($entrada->ID) . '</a>';
                            echo '<article>'.$imagen_destacada.'<a class="entradas-populares-content-info" href="' . get_permalink($entrada->ID) . '">' . get_the_title($entrada->ID) . '</a></article>';
                        }
                        ?>
    </div>
</div>
<div class="ultimas-entradas">
    <h3>Últimas publicaciones</h3>
    <?php
                    // Crear una instancia de WP_Query para obtener las 5 últimas entradas
                    $ultimas_entradas = new WP_Query(array(
                        'category_name' => 'blog',
                        'post_type' => 'post', // Ajusta según el tipo de contenido (por defecto, 'post' para entradas)
                        'posts_per_page' => 5,  // Número de entradas a mostrar
                        'order' => 'DESC',     // Orden descendente (las más recientes primero)
                    ));

                    // Comprobar si hay entradas
                    if ($ultimas_entradas->have_posts()) {
                        while ($ultimas_entradas->have_posts()) {
                            $ultimas_entradas->the_post();
                            $imagen_destacada = '<a class="entradas-populares-content-img" href="' . get_permalink() . '">' . get_the_post_thumbnail() . '</a>';
                            // Puedes mostrar el título, contenido u otros detalles de la entrada
                            echo '<article>'.$imagen_destacada.'<a class="entradas-populares-content-info" href="' . get_permalink() . '">' . get_the_title() . '</a></article>';
                            // Para mostrar el contenido resumido, puedes usar get_the_excerpt()
                        }
                        wp_reset_postdata(); // Restablecer la consulta
                    } else {
                        echo 'No se encontraron entradas.';
                    }
                    ?>
</div>