<section class="p-top-bottom">
    <div class="container-section">
        <div class="container-section-icon">
            <?php get_template_part('images/iconos/mejores-tours-icon'); ?>
        </div>
        <h2 class="container-section-title">
            Descubre Nuestros <span class="title-color">Tours Destacados en Cusco</span>
        </h2>
        <p class="container-section-parrafo">
            En MachuPicchu Lama, nos enorgullece presentarte una selección de los tours más destacados en Cusco,
            diseñados para que vivas
            experiencias inolvidables en esta región mágica. Nuestros expertos guías te acompañarán en cada paso del
            camino, brindándote conocimientos
            profundos y compartiendo historias fascinantes mientras exploras los tesoros de Cusco y Machu Picchu.
        </p>
        <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
        <header>
            <h3 class="page-title screen-reader-text"><?php single_post_title(); ?></h3>
        </header>
        <?php
			endif;
            ?>




        <div class="container-section-grid">
            <?php
            /* Start the Loop */
            $args = array(
                'category_name' => 'tour popular', // Reemplaza con el nombre de tu categoría
                'posts_per_page' => 8, // Número de entradas a mostrar
            );
            
            // Realiza la consulta
            $query = new WP_Query($args);
            while ( $query->have_posts() ) :
				$query->the_post();
                    get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
            ?>
        </div>
        <?php



		endif;
		?>

    </div>
</section>