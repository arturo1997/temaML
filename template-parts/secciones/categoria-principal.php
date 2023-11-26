<div class="wrapper">
    <div class="category-section">
        <h3 class="category-section-title">Explora Perú con Nuestros Tours</h3>
        <p class="category-section-parrafo">Descubre la magia de Perú a través de nuestros emocionantes tours. Desde las
            antiguas ruinas de Machu Picchu
            hasta las vibrantes ciudades
            coloniales, te llevamos a una aventura inolvidable por este hermoso país sudamericano. Sumérgete en la
            cultura,
            la historia y la belleza
            natural de Perú con nosotros. ¡Únete a nuestra experiencia única y comienza a explorar hoy mismo!
        </p>
        <?php
        // Obtener la categoría actual
        $categoria_actual = get_queried_object();

        // Comprobar si la categoría actual tiene subcategorías
        $subcategorias = get_terms(array(
            'taxonomy' => 'category', // Cambia 'category' por el nombre de tu taxonomía de categoría si es diferente
            'parent' => $categoria_actual->term_id,
        ));

        if (!empty($subcategorias)) :
            echo '<ul class="list-cards-gategorys container-grid">';
            foreach ($subcategorias as $subcategoria) {
                $enlace_subcategoria = get_term_link($subcategoria); // Obtener el enlace de la subcategoría
                echo '<li class="card-category grid-item"><a class="card-category-link"  href="' . esc_url($enlace_subcategoria) . '">';
                // Obtener la URL de la imagen personalizada
                $img_post = get_field('post-img', $subcategoria);
                $img_post_webp = get_field('post-img-webp', $subcategoria);

                if(!empty($img_post)){
                    $img_post_url = $img_post['url'];
                    $img_post_alt = $img_post['alt'];
        
                    if ($img_post && $img_post_webp) {
                        $img_post_webp_url = $img_post_webp['url'];
                        echo '<picture>';
                        echo '<source srcset="' . esc_url($img_post_webp_url) . '" type="image/webp">';
                        echo '<img src="' . esc_url($img_post_url) . '" alt="' . esc_attr($img_post_alt) . '">';
                        echo '</picture>';
                    }else{
        
                        echo '<img src="' . esc_url($img_post_url) . '" alt="' . esc_attr($img_post_alt) . '" />';
                        
                    }
                }
                echo '<div class="card-category-content">';
                ?>

        <h3 class="card-category-title"><?php echo esc_html($subcategoria->name) ?></h3>
        <div class="score">
            <span class="score-number">4.5</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 22 21" fill="none">
                <path
                    d="M7.24301 6.33992L0.86301 7.26492L0.75001 7.28792C0.578949 7.33333 0.423005 7.42333 0.298102 7.54872C0.1732 7.67412 0.0838135 7.83041 0.0390722 8.00165C-0.00566913 8.17289 -0.00416268 8.35293 0.0434376 8.5234C0.091038 8.69386 0.183027 8.84864 0.31001 8.97192L4.93201 13.4709L3.84201 19.8259L3.82901 19.9359C3.81854 20.1128 3.85528 20.2894 3.93546 20.4474C4.01564 20.6055 4.13639 20.7394 4.28535 20.8354C4.4343 20.9315 4.6061 20.9862 4.78316 20.994C4.96022 21.0018 5.13617 20.9625 5.29301 20.8799L10.999 17.8799L16.692 20.8799L16.792 20.9259C16.9571 20.9909 17.1365 21.0109 17.3118 20.9837C17.4871 20.9565 17.652 20.8832 17.7896 20.7712C17.9272 20.6592 18.0326 20.5127 18.0948 20.3466C18.1571 20.1804 18.1741 20.0008 18.144 19.8259L17.053 13.4709L21.677 8.97092L21.755 8.88592C21.8664 8.74869 21.9395 8.58438 21.9667 8.40972C21.994 8.23506 21.9744 8.0563 21.9101 7.89165C21.8458 7.72701 21.7389 7.58235 21.6005 7.47244C21.4621 7.36252 21.297 7.29126 21.122 7.26592L14.742 6.33992L11.89 0.559923C11.8075 0.392457 11.6797 0.251438 11.5212 0.152827C11.3627 0.0542165 11.1797 0.00195313 10.993 0.00195312C10.8063 0.00195313 10.6233 0.0542165 10.4648 0.152827C10.3063 0.251438 10.1785 0.392457 10.096 0.559923L7.24301 6.33992Z"
                    fill="#FBB617" />
            </svg>
        </div>
        <?php
                echo '</div></a></li>';

            }
            echo '</ul>';
        else :
            echo 'No hay subcategorías para mostrar en esta categoría.';
        endif;
        ?>


        <div class="toursRelacionados">
            <div class="container">
                <?php include(TEMPLATEPATH."/template-parts/secciones/toursRelacionados.php");?>
            </div>
        </div>
    </div>
</div>