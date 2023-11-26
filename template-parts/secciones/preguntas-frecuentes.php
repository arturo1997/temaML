<section class="comentarios color-bg p-top-bottom">
    <div class="container-section">
        <div class="container-section-icon">
            <?php get_template_part('images/iconos/preguntas-frecuentes-icon'); ?>
        </div>
        <h2 class="container-section-title">
            Las preguntas <span class="title-color">mas frecuentes</span>
        </h2>
        <p class="container-section-parrafo">
            Estamos encantados de responder todas tus preguntas y brindarte la información que necesitas para que tu
            experiencia de reserva de tours
            en Cusco sea lo más sencilla y placentera posible. Aquí encontrarás respuestas a algunas de las preguntas
            más comunes que nuestros clientes
            suelen hacer. Si no encuentras la información que buscas, no dudes en ponerte en contacto con nuestro equipo
            de atención al cliente, que estará
            encantado de ayudarte en todo lo que necesites. ¡Descubre todo lo que necesitas saber para vivir una
            aventura inolvidable en Cusco!
        </p>
        <div class="accordion">
            <?php
    $args = array(
        'post_type' => 'pregunta_frecuente',
        'posts_per_page' => -1, // Mostrar todas las preguntas frecuentes
    );

    $preguntas_frecuentes = new WP_Query($args);

    if ($preguntas_frecuentes->have_posts()) :
        $total_preguntas = $preguntas_frecuentes->post_count;
        $preguntas_por_div = ceil($total_preguntas / 2);
        $contador = 0;

        while ($preguntas_frecuentes->have_posts()) :
            $preguntas_frecuentes->the_post();
    ?>
            <?php if ($contador == 0) : ?>
            <div class="faq-column">
                <?php endif; ?>

                <div class="accordion-item">
                    <button class="accordion-button"><?php the_title(); ?><span class="accordion-icon">+</span></button>
                    <div class="accordion-content">
                        <div class="accordion-content-wrapper">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

                <?php
                $contador++;
                if ($contador >= $preguntas_por_div) :
                    $contador = 0;
            ?>
            </div>
            <?php endif; ?>
            <?php
        endwhile;
        if ($contador != 0) :
    ?>
        </div>
        <?php
        endif;
    endif;
    wp_reset_postdata(); // Restaurar datos originales del bucle
    ?>
    </div>

    </div>

</section>