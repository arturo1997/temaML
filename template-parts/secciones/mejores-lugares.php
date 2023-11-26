<section class="color-bg p-top-bottom">
    <div class="container-section">
        <div class="container-section-icon">
            <?php get_template_part('images/iconos/mejores-lugares-icon'); ?>
        </div>
        <h2 class="container-section-title">
            Actividades culturales <span class="title-color">impresionantes por todo el Perú</span>
        </h2>
        <p class="container-section-parrafo">
            Descubre una riqueza cultural sin igual en cada rincón de Perú. Desde las coloridas festividades en los
            Andes hasta las tradiciones culinarias en la costa, nuestro país te brinda experiencias culturales
            asombrosas. Sumérgete en la diversidad de Perú y déjate cautivar por su patrimonio único.
        </p>
        <div class="cards-departamentos owl-carousel owl-carousel-2">
            <?php
                $parent_category_name = 'tours peru'; // Reemplaza 'Nombre de la categoría principal' con el nombre de tu categoría principal.
                $parent_category = get_term_by('name', $parent_category_name, 'category'); // Cambia 'category' si estás usando una taxonomía personalizada.

                if ($parent_category) {
                    $subcategories = get_terms(array(
                        'taxonomy' => 'category',
                        'parent' => $parent_category->term_id
                    ));
                    if (!empty($subcategories)) {
                        foreach ($subcategories as $subcategoria) {
                            $img_post = get_field('post-img', $subcategoria);
                            $img_post_webp = get_field('post-img-webp', $subcategoria);
                            echo '<div class="cards-departamentos-item">';
                            echo '<a href="' . get_term_link($subcategoria) . '">';
                            echo '<figure class="card-departamento">';
                            if(!empty($img_post)){
                                $img_post_url = $img_post['url'];
                                $img_post_alt = $img_post['alt'];
                    
                                if ($img_post && $img_post_webp) {
                                    $img_post_webp_url = $img_post_webp['url'];
                                    echo '<picture>';
                                    echo '<source srcset="' . esc_url($img_post_webp_url) . '" type="image/webp">';
                                    echo '<img class="card-departamento-img" src="' . esc_url($img_post_url) . '" alt="' . esc_attr($img_post_alt) . '">';
                                    echo '</picture>';
                                }else{
                    
                                    echo '<img class="card-departamento-img" src="' . esc_url($img_post_url) . '" alt="' . esc_attr($img_post_alt) . '" />';
                                    
                                }
                            }
                            echo '<figcaption><div>' . $subcategoria->name . '</div></figcaption>';
                            echo '</figure>';
                            echo '</a>';
                            echo '</div>';

                        }
                    } else {
                        echo 'No se encontraron subcategorías para esta categoría.';
                    }
                } else {
                    echo 'Categoría principal no encontrada.';
                }
            ?>
        </div>

    </div>
</section>