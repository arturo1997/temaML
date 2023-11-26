<div class="wrapper">
    <div class="category-section">
        <h3 class="category-section-title">Explora <?php echo get_queried_object()->name ?> con Nuestros Tours</h3>
        <p class="category-section-parrafo">
            Descubre la magia de <?php echo get_queried_object()->name ?> a través de nuestros emocionantes tours. Desde
            las antiguas ruinas hasta las
            vibrantes ciudades coloniales,
            te llevamos a una aventura inolvidable por este hermoso país sudamericano. Sumérgete en la cultura, la
            historia y la belleza natural
            de <?php echo get_queried_object()->name ?> con nosotros. ¡Únete a nuestra experiencia única y comienza a
            explorar hoy mismo!
        </p>
        <div class="container-section-grid">
            <?php
            $current_category = get_queried_object();
            
            $args = array(
                'category_name' => $current_category->name,
                'post_type' => 'post', // Tipo de contenido: entradas (posts)
                'posts_per_page' => -1, // Mostrar todas las entradas de la categoría actual
            );
            
            $query = new WP_Query($args);
            
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    // Aquí puedes mostrar el contenido de cada entrada
                    get_template_part( 'template-parts/content', get_post_type() );
                endwhile;
            else :
                echo 'No se encontraron entradas en esta categoría.';
            endif;
            ?>
        </div>
    </div>
</div>