<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Machupicchu_Lama
 */

?>

<footer id="colophon" class="footer">
    <div class="footer-top"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/footer-img.png');">
        <div class="footer-top-content">
            <p class="footer-top-upper">Descubre la magia de Machu Picchu con nosotros</p>
            <p class="footer-top-low">¡Reserva tu aventura en Cusco hoy mismo y crea recuerdos inolvidables!</p>
        </div>
    </div>
    <div class="footer-main">
        <div class="footer-main-sections wrapper">
            <div class="footer-section-item">
                <img src="https://machupicchulama.com/wp-content/uploads/2023/09/logo-white.png" alt="">
                <?php dynamic_sidebar('empresa'); ?>
            </div>
            <div class="footer-section-item">
                <?php dynamic_sidebar('destinos'); ?>
            </div>
            <div class="footer-section-item">
                <?php dynamic_sidebar('informacion_util'); ?>
            </div>
            <div class="footer-section-item">
                <?php dynamic_sidebar('horario'); ?>
            </div>
        </div>
        <div class="footer-main-contact container-footer">
            <?php dynamic_sidebar('contactenos'); ?>
            <div class="footer-buttons">
                <a href="tel:+51 <?php echo get_theme_mod('enlace_telefono', '982934132'); ?>" class="button-phone">+51
                    <?php echo get_theme_mod('enlace_telefono', '982934132'); ?></a>
                <a href="https://machupicchulama.com/reserva-tu-viaje/" class="button">Consulte ahora</a>
            </div>
            <ul class="socialmedia">
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
        <div class="footer-bottom wrapper">
            <ul class="list-copyright">
                <li>Copyright © <?php echo current_time('Y') ?> MACHUPICCHU LAMA todos los derechos reservados,
                    Desarrollado por <a href="https://www.linkedin.com/in/arturo-corrales-huarca/" target="_blank"
                        style="color:white;text-decoration: underline;">Arturo CH</a></li>
            </ul>

        </div>

    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>

</html>