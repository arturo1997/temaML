<div class="hero-entrada">
    <div class="hero-entrada-img">
        <?php 
        $image = get_field('img-portada');
        $imagen_webp = get_field('img-portada-webp');
        if( !empty( $image ) ){
            $image_url = $image['url'];
            $image_alt = $image['alt'];

            if ($image && $imagen_webp) {
                $imagen_url_webp = $imagen_webp['url'];
                echo '<picture>';
                echo '<source srcset="' . esc_url($imagen_url_webp) . '" type="image/webp">';
                echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '">';
                echo '</picture>';
            }else{

                echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
                
            }
        }

        ?>

    </div>

    <div class="hero-entrada-content">
        <div class="wrapper">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
            <div class="hero-entrada-content-view">
                <div class="">

                    <h1 class="hero-titulo"><?php the_title(); ?></h1>
                    <div class="tour-details">
                        <span>
                            <?php 
                    $dias = get_field('dias');
                    if ($dias >= 2) {
                        $noches = $dias - 1;
                        echo '<span class="numero-price">' . $dias .'</span>  Días & <span class="numero-price">' . $noches . '</span> Noches';
                    } else {
                        echo 'Full Day';
                    }
                    
                    ?></span>
                        <span class="separador2">Desde <span
                                class="tour-precio">US$<?php echo get_field('precio') ?></span>
                            por
                            persona</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="introduccion-tour">
    <div class="wrapper">
        <div class="caracteristicas">
            <div class="caracteristicas-list ">
                <div class="caracteristicas-list-item">
                    <?php get_template_part('images/iconos/alojamiento-icon'); ?>
                    <div class="caracteristicas-list-item-content">
                        <strong><?php echo get_field('alojamiento') ?></strong>
                        <span>Alojamiento</span>
                    </div>
                </div>
                <div class="separador-caracteristicas"></div>
                <div class="caracteristicas-list-item">
                    <?php get_template_part('images/iconos/tamaño-grupo-icon'); ?>
                    <div class="caracteristicas-list-item-content">
                        <strong><?php echo get_field('cantidad-grupo') ?></strong>
                        <span>Tamaño del grupo</span>
                    </div>
                </div>
                <div class="separador-caracteristicas"></div>
                <div class="caracteristicas-list-item">
                    <?php get_template_part('images/iconos/altitud-maxima-icon'); ?>
                    <div class="caracteristicas-list-item-content">
                        <strong><?php echo get_field('altitud-maxima') ?></strong>
                        <span>Altitud máxima</span>
                    </div>
                </div>
                <div class="separador-caracteristicas"></div>
                <div class="caracteristicas-list-item">
                    <?php get_template_part('images/iconos/nivel-dificultad-icon'); ?>
                    <div class="caracteristicas-list-item-content">
                        <strong><?php echo get_field('nivel-dificultad') ?></strong>
                        <span>Nivel de dificultad</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="descripcionArticulo">
            <?php 
            if (have_posts()) { 
                while (have_posts()) { 
                    the_post(); 
                     the_content(); 
                } 
            } 
        ?>
        </div>
    </div>
</div>
<!-_______________TABS___________->
    <?php 
        $grupo = get_field('tabs');

        if ($grupo) {
            $campos = array(
                'resumen',
                'itinerario',
                'inclusiones',
                'antes de viajar',
                'lista de equipaje',
                'alojamiento',
                'precios',
                'consulta ahora'
                // Agrega aquí todos los nombres de campo que desees recorrer
            );
            ?>
    <div class="wrapper">
        <div class="tab-container">
            <?php 
            $count = 1;

            foreach ($campos as $campo) {
                $valor = $grupo[$campo];

                if(!($valor == '')){
                // Hacer algo con $valor
                if ($count == 1) {
                    echo '<div class="tab-desktop tab'.$count.' active" data-tab="tab'.$count.'"> <span class="fa-'.$campo.' icon-desktop"></span><span class="tab-title">'.$campo.'</span></div>';
                    $count++;
                }else{
                    echo '<div class="tab-desktop tab'.$count.'" data-tab="tab'.$count.'"> <span class="fa-'.$campo.' icon-desktop"></span><span class="tab-title">'.$campo.'</span></div>';
                    $count++;
                }
                }
            }
            ?>
        </div>
        <div class="main-content">
            <div class="tabs-content">
                <?php 
            $count2 = 1;

            foreach ($campos as $campo) {
                $valor = $grupo[$campo];
                if(!($valor == '')){
                // Hacer algo con $valor
                if ($count2 == 1) {
                    echo '<div class="tab-acordeon tab'.$count2.' active" data-tab="tab'.$count2.'"> <span class="fa-'.$campo.' icon-mobile"></span>'.$campo.'<span class="acordeon-icon acordeon-open"></span></div>';
                    echo '<div class="tab-content '.$campo.' active-content" id="tab'.$count2.'">'.$valor.'</div>';
                    $count2++;
                }else{
                    echo '<div class="tab-acordeon tab'.$count2.'" data-tab="tab'.$count2.'"> <span class="fa-'.$campo.' icon-mobile"></span>'.$campo.'<span class="acordeon-icon"></span></div>';
                    echo '<div class="tab-content '.$campo.'" id="tab'.$count2.'">'.$valor.'</div>';
                    $count2++;
                }
                }
            }
            ?>
            </div>
            <div class="main-sidebar">
                <div class="metodos-de-pagos">
                    <div class="atencion-al-cliente-title">
                        Métodos de pago
                    </div>
                    <ul class="metodos-de-pagos-list">

                        <li class="metodos-de-pagos-icons">

                            <svg viewBox="0 0 55 35" class="" height="55" width="55" fill="black"
                                xmlns="http://www.w3.org/2000/svg">

                                <path opacity="0.07"
                                    d="M50.6579 0.131577H4.34211C1.88158 0.131577 0 2.01316 0 4.47368V30.5263C0 32.9868 2.02632 34.8684 4.34211 34.8684H50.6579C53.1184 34.8684 55 32.9868 55 30.5263V4.47368C55 2.01316 52.9737 0.131577 50.6579 0.131577Z"
                                    fill="black"></path>

                                <path
                                    d="M50.6579 1.57895C52.25 1.57895 53.5526 2.88158 53.5526 4.47369V30.5263C53.5526 32.1184 52.25 33.4211 50.6579 33.4211H4.34209C2.74999 33.4211 1.44736 32.1184 1.44736 30.5263V4.47369C1.44736 2.88158 2.74999 1.57895 4.34209 1.57895H50.6579Z"
                                    fill="white"></path>

                                <path
                                    d="M40.9605 14.75H40.5263C39.9474 16.1974 39.5132 16.9211 39.0789 19.0921H41.8289C41.3947 16.9211 41.3947 15.9079 40.9605 14.75V14.75ZM45.1579 23.2895H42.6974C42.5526 23.2895 42.5526 23.2895 42.4079 23.1447L42.1184 21.8421L41.9737 21.5526H38.5C38.3553 21.5526 38.2105 21.5526 38.2105 21.8421L37.7763 23.1447C37.7763 23.2895 37.6316 23.2895 37.6316 23.2895H34.5921L34.8816 22.5658L39.0789 12.7237C39.0789 12 39.5132 11.7105 40.2368 11.7105H42.4079C42.5526 11.7105 42.6974 11.7105 42.6974 12L44.7237 21.4079C44.8684 21.9868 45.0132 22.4211 45.0132 23C45.1579 23.1447 45.1579 23.1447 45.1579 23.2895V23.2895ZM25.7632 22.8553L26.3421 20.25C26.4868 20.25 26.6316 20.3947 26.6316 20.3947C27.6447 20.8289 28.6579 21.1184 29.6711 20.9737C29.9605 20.9737 30.3947 20.8289 30.6842 20.6842C31.4079 20.3947 31.4079 19.6711 30.8289 19.0921C30.5395 18.8026 30.1053 18.6579 29.6711 18.3684C29.0921 18.0789 28.5132 17.7895 28.0789 17.3553C26.3421 15.9079 26.9211 13.8816 27.9342 12.8684C28.8026 12.2895 29.2368 11.7105 30.3947 11.7105C32.1316 11.7105 34.0132 11.7105 34.8816 12H35.0263C34.8816 12.8684 34.7368 13.5921 34.4474 14.4605C33.7237 14.1711 33 13.8816 32.2763 13.8816C31.8421 13.8816 31.4079 13.8816 30.9737 14.0263C30.6842 14.0263 30.5395 14.1711 30.3947 14.3158C30.1053 14.6053 30.1053 15.0395 30.3947 15.3289L31.1184 15.9079C31.6974 16.1974 32.2763 16.4868 32.7105 16.7763C33.4342 17.2105 34.1579 17.9342 34.3026 18.8026C34.5921 20.1053 34.1579 21.2632 33 22.1316C32.2763 22.7105 31.9868 23 30.9737 23C28.9474 23 27.3553 23.1447 26.0526 22.7105C25.9079 23 25.9079 23 25.7632 22.8553V22.8553ZM20.6974 23.2895C20.8421 22.2763 20.8421 22.2763 20.9868 21.8421C21.7105 18.6579 22.4342 15.3289 23.0132 12.1447C23.1579 11.8553 23.1579 11.7105 23.4474 11.7105H26.0526C25.7632 13.4474 25.4737 14.75 25.0395 16.3421C24.6053 18.5132 24.1711 20.6842 23.5921 22.8553C23.5921 23.1447 23.4474 23.1447 23.1579 23.1447L20.6974 23.2895ZM7.23685 12C7.23685 11.8553 7.52632 11.7105 7.67106 11.7105H12.5921C13.3158 11.7105 13.8947 12.1447 14.0395 12.8684L15.3421 19.2368C15.3421 19.3816 15.3421 19.3816 15.4868 19.5263C15.4868 19.3816 15.6316 19.3816 15.6316 19.3816L18.6711 12C18.5263 11.8553 18.6711 11.7105 18.8158 11.7105H21.8553C21.8553 11.8553 21.8553 11.8553 21.7105 12L17.2237 22.5658C17.079 22.8553 17.079 23 16.9342 23.1447C16.7895 23.2895 16.5 23.1447 16.2105 23.1447H14.0395C13.8947 23.1447 13.75 23.1447 13.75 22.8553L11.4342 13.8816C11.1447 13.5921 10.7105 13.1579 10.1316 13.0132C9.26316 12.5789 7.67106 12.2895 7.38158 12.2895L7.23685 12Z"
                                    fill="#142688"></path>

                            </svg>

                            <svg viewBox="0 0 55 35" class="" height="55" width="55" fill="black"
                                xmlns="http://www.w3.org/2000/svg">

                                <path opacity="0.07"
                                    d="M50.6579 0.131577H4.34211C1.88158 0.131577 0 2.01316 0 4.47368V30.5263C0 32.9868 2.02632 34.8684 4.34211 34.8684H50.6579C53.1184 34.8684 55 32.9868 55 30.5263V4.47368C55 2.01316 52.9737 0.131577 50.6579 0.131577Z"
                                    fill="black"></path>

                                <path
                                    d="M50.6579 1.57895C52.25 1.57895 53.5526 2.88158 53.5526 4.47369V30.5263C53.5526 32.1184 52.25 33.4211 50.6579 33.4211H4.34211C2.75 33.4211 1.44737 32.1184 1.44737 30.5263V4.47369C1.44737 2.88158 2.75 1.57895 4.34211 1.57895H50.6579Z"
                                    fill="white"></path>

                                <path
                                    d="M21.7105 27.6316C27.306 27.6316 31.8421 23.0955 31.8421 17.5C31.8421 11.9045 27.306 7.36842 21.7105 7.36842C16.115 7.36842 11.5789 11.9045 11.5789 17.5C11.5789 23.0955 16.115 27.6316 21.7105 27.6316Z"
                                    fill="#EB001B"></path>

                                <path
                                    d="M33.2895 27.6316C38.885 27.6316 43.4211 23.0955 43.4211 17.5C43.4211 11.9045 38.885 7.36842 33.2895 7.36842C27.694 7.36842 23.1579 11.9045 23.1579 17.5C23.1579 23.0955 27.694 27.6316 33.2895 27.6316Z"
                                    fill="#F79E1B"></path>

                                <path
                                    d="M31.8421 17.5C31.8421 14.0263 30.1053 10.9868 27.5 9.25C24.8947 11.1316 23.1579 14.1711 23.1579 17.5C23.1579 20.8289 24.8947 24.0132 27.5 25.75C30.1053 24.0132 31.8421 20.9737 31.8421 17.5Z"
                                    fill="#FF5F00"></path>

                            </svg>

                            <svg viewBox="0 0 38 24" class="" height="55" width="55" fill="black"
                                xmlns="http://www.w3.org/2000/svg">

                                <path
                                    d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                                    fill="#000" opacity=".07"></path>

                                <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"
                                    fill="#FFFFFF"></path>

                                <path
                                    d="M8.971 10.268l.774 1.876H8.203l.768-1.876zm16.075.078h-2.977v.827h2.929v1.239h-2.923v.922h2.977v.739l2.077-2.245-2.077-2.34-.006.858zm-14.063-2.34h3.995l.887 1.935L16.687 8h10.37l1.078 1.19L29.25 8h4.763l-3.519 3.852 3.483 3.828h-4.834l-1.078-1.19-1.125 1.19H10.03l-.494-1.19H8.406l-.495 1.19H4L7.286 8h3.43l.267.006zm8.663 1.078h-2.239l-1.5 3.536-1.625-3.536H12.06v4.81l-2.06-4.81H8.007l-2.382 5.512H7.18l.494-1.19h2.596l.494 1.19h2.72v-3.935l1.751 3.941h1.19l1.74-3.929v3.93h1.458l.024-5.52zm9.34 2.768l2.531-2.768h-1.822l-1.601 1.726-1.548-1.726h-5.894v5.518h5.81l1.614-1.738 1.548 1.738h1.875l-2.512-2.75z"
                                    fill="#002663"></path>

                            </svg>

                            <svg viewBox="0 0 38 24" class="" height="55" width="55" fill="black"
                                xmlns="http://www.w3.org/2000/svg">

                                <path opacity=".07"
                                    d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                </path>

                                <path fill="#FFFFFF"
                                    d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                </path>

                                <path
                                    d="M12 12v3.7c0 .3-.2.3-.5.2-1.9-.8-3-3.3-2.3-5.4.4-1.1 1.2-2 2.3-2.4.4-.2.5-.1.5.2V12zm2 0V8.3c0-.3 0-.3.3-.2 2.1.8 3.2 3.3 2.4 5.4-.4 1.1-1.2 2-2.3 2.4-.4.2-.4.1-.4-.2V12zm7.2-7H13c3.8 0 6.8 3.1 6.8 7s-3 7-6.8 7h8.2c3.8 0 6.8-3.1 6.8-7s-3-7-6.8-7z"
                                    fill="#3086C8"></path>

                            </svg>

                        </li>

                        <!-- class="dflex items-center justify-center mb-4 gap-x-3" -->

                        <li class="metodo-de-pago-paypal">

                            <svg xmlns="http://www.w3.org/2000/svg" width="124" height="33"
                                xmlns:v="https://vecta.io/nano">

                                <path
                                    d="M46.211 6.749h-6.839a.95.95 0 0 0-.939.802l-2.766 17.537a.57.57 0 0 0 .564.658h3.265a.95.95 0 0 0 .939-.803l.746-4.73a.95.95 0 0 1 .938-.803h2.165c4.505 0 7.105-2.18 7.784-6.5.306-1.89.013-3.375-.872-4.415-.972-1.142-2.696-1.746-4.985-1.746zM47 13.154c-.374 2.454-2.249 2.454-4.062 2.454h-1.032l.724-4.583a.57.57 0 0 1 .563-.481h.473c1.235 0 2.4 0 3.002.704.359.42.469 1.044.332 1.906zm19.654-.079h-3.275a.57.57 0 0 0-.563.481l-.145.916-.229-.332c-.709-1.029-2.29-1.373-3.868-1.373-3.619 0-6.71 2.741-7.312 6.586-.313 1.918.132 3.752 1.22 5.031.998 1.176 2.426 1.666 4.125 1.666 2.916 0 4.533-1.875 4.533-1.875l-.146.91a.57.57 0 0 0 .562.66h2.95a.95.95 0 0 0 .939-.803l1.77-11.209a.57.57 0 0 0-.561-.658zm-4.565 6.374c-.316 1.871-1.801 3.127-3.695 3.127-.951 0-1.711-.305-2.199-.883s-.668-1.391-.514-2.301c.295-1.855 1.805-3.152 3.67-3.152.93 0 1.686.309 2.184.892.499.589.697 1.411.554 2.317zm22.007-6.374h-3.291c-.314 0-.609.156-.787.417l-4.539 6.686-1.924-6.425c-.121-.402-.492-.678-.912-.678h-3.234a.57.57 0 0 0-.541.754l3.625 10.638-3.408 4.811a.57.57 0 0 0 .465.9h3.287a.95.95 0 0 0 .781-.408l10.946-15.8a.57.57 0 0 0-.468-.895z"
                                    fill="#253b80"></path>

                                <path
                                    d="M94.992 6.749h-6.84a.95.95 0 0 0-.938.802l-2.766 17.537a.57.57 0 0 0 .562.658h3.51c.326 0 .605-.238.656-.562l.785-4.971a.95.95 0 0 1 .938-.803h2.164c4.506 0 7.105-2.18 7.785-6.5.307-1.89.012-3.375-.873-4.415-.971-1.142-2.694-1.746-4.983-1.746zm.789 6.405c-.373 2.454-2.248 2.454-4.062 2.454h-1.031l.725-4.583a.57.57 0 0 1 .562-.481h.473c1.234 0 2.4 0 3.002.704.359.42.468 1.044.331 1.906zm19.653-.079h-3.273c-.281 0-.52.204-.562.481l-.145.916-.23-.332c-.709-1.029-2.289-1.373-3.867-1.373-3.619 0-6.709 2.741-7.311 6.586-.312 1.918.131 3.752 1.219 5.031 1 1.176 2.426 1.666 4.125 1.666 2.916 0 4.533-1.875 4.533-1.875l-.146.91a.57.57 0 0 0 .564.66h2.949a.95.95 0 0 0 .938-.803l1.771-11.209a.57.57 0 0 0-.565-.658zm-4.565 6.374c-.314 1.871-1.801 3.127-3.695 3.127-.949 0-1.711-.305-2.199-.883s-.666-1.391-.514-2.301c.297-1.855 1.805-3.152 3.67-3.152.93 0 1.686.309 2.184.892.501.589.699 1.411.554 2.317zm8.426-12.219l-2.807 17.858a.57.57 0 0 0 .562.658h2.822a.95.95 0 0 0 .939-.803l2.768-17.536a.57.57 0 0 0-.562-.659h-3.16a.57.57 0 0 0-.562.482z"
                                    fill="#179bd7"></path>

                                <path fill="#253b80"
                                    d="M7.266 29.154l.523-3.322-1.165-.027H1.061L4.927 1.292c.012-.074.051-.143.108-.192s.13-.076.206-.076h9.38c3.114 0 5.263.648 6.385 1.927.526.6.861 1.227 1.023 1.917.17.724.173 1.589.007 2.644l-.012.077v.676l.526.298c.443.235.795.504 1.065.812.45.513.741 1.165.864 1.938.127.795.085 1.741-.123 2.812-.24 1.232-.628 2.305-1.152 3.183-.482.809-1.096 1.48-1.825 2-.696.494-1.523.869-2.458 1.109-.906.236-1.939.355-3.072.355h-.73c-.522 0-1.029.188-1.427.525a2.21 2.21 0 0 0-.744 1.328l-.055.299-.924 5.855-.042.215c-.011.068-.03.102-.058.125s-.061.035-.096.035H7.266z">
                                </path>

                                <path fill="#179bd7"
                                    d="M23.048 7.667h0 0l-.096.55c-1.237 6.351-5.469 8.545-10.874 8.545H9.326c-.661 0-1.218.48-1.321 1.132h0 0L6.596 26.83l-.399 2.533c-.067.428.263.814.695.814h4.881c.578 0 1.069-.42 1.16-.99l.048-.248.919-5.832.059-.32c.09-.572.582-.992 1.16-.992h.73c4.729 0 8.431-1.92 9.513-7.476.452-2.321.218-4.259-.978-5.622-.362-.411-.811-.752-1.336-1.03z">
                                </path>

                                <path fill="#222d65"
                                    d="M21.754 7.151l-.584-.15-.619-.117c-.742-.12-1.555-.177-2.426-.177h-7.352c-.181 0-.353.041-.507.115a1.17 1.17 0 0 0-.652.877L8.05 17.605l-.045.289c.103-.652.66-1.132 1.321-1.132h2.752c5.405 0 9.637-2.195 10.874-8.545.037-.188.068-.371.096-.55-.313-.166-.652-.308-1.017-.429-.09-.03-.183-.059-.277-.087z">
                                </path>

                                <path fill="#253b80"
                                    d="M9.614 7.699a1.17 1.17 0 0 1 1.159-.991h7.352c.871 0 1.684.057 2.426.177l.619.117.584.15.278.086c.365.121.704.264 1.017.429.368-2.347-.003-3.945-1.272-5.392C20.378.682 17.853 0 14.622 0h-9.38a1.34 1.34 0 0 0-1.325 1.133L.01 25.898c-.077.49.301.932.795.932h5.791l1.454-9.225 1.564-9.906z">
                                </path>

                            </svg>

                        </li>

                    </ul>

                </div>
                <div class="atencion-al-cliente">
                    <div class="atencion-al-cliente-title">
                        Atención al cliente
                    </div>
                    <div class="">
                        <ul class="atencion-al-cliente-list">
                            <li>
                                <a class="atencion-al-cliente-email-icon"
                                    href="mailto:info@machupicchulama.com"><?php get_template_part('images/iconos/email-icon'); ?></a>
                                <strong>Email</strong>
                                <a class="atencion-al-cliente-email"
                                    href="mailto:info@machupicchulama.com">info@machupicchulama.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tripadvisor">
                    <a target="_blank"
                        href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d12653635-Reviews-Machupicchu_Luna_Tours-Cusco_Cusco_Region-m11900.html">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tripadvisor.png" width="" height=""
                            alt="" />
                    </a>
                </div>
            </div>
        </div>

        <?php 
        }
            
            ?>
    </div>
    <!-_______________TABS___________->

        <section class="container content-tour clear">


            <?php if (in_category(array(63,365))) { ?>
            <div class="BoxRightBlog">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('BlogRight') ) : endif; ?>
            </div>
            <?php } else {
            include(TEMPLATEPATH."/template-parts/secciones/sidebar-right.php");
            } ?>

        </section>

        <div class="toursRelacionados">
            <div class="container">
                <?php include(TEMPLATEPATH."/template-parts/secciones/toursRelacionados.php");?>
            </div>
        </div>
