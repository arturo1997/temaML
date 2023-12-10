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
                <a href="https://wa.me/51<?php echo get_theme_mod('enlace_telefono', '982934132'); ?>" target="_blank"
                    class="button-whatsapp-footer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 54 54" fill="none">
                        <g clip-path="url(#clip0_515_2)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M46.1319 7.84126C41.0563 2.78726 34.3059 0.00256418 27.1134 0C12.2926 0 0.230769 11.994 0.225612 26.7367C0.223034 31.4496 1.46197 36.0498 3.81479 40.1038L0 53.9606L14.2535 50.2425C18.1805 52.3734 22.6025 53.4952 27.1019 53.4965H27.1134C41.9316 53.4965 53.9949 41.5012 54 26.7585C54.0026 19.6135 51.2088 12.8966 46.1319 7.84254V7.84126ZM27.1134 48.981H27.1044C23.0949 48.9798 19.1616 47.9078 15.7298 45.8834L14.9136 45.4015L6.4551 47.6079L8.71251 39.4063L8.18135 38.5652C5.94456 35.0268 4.76235 30.9368 4.76493 26.7381C4.77009 14.4851 14.795 4.51552 27.1226 4.51552C33.0915 4.51808 38.7023 6.83227 42.9218 11.0337C47.1414 15.2338 49.4633 20.8186 49.4607 26.756C49.4555 39.0102 39.4307 48.9798 27.1134 48.9798V48.981ZM39.3713 32.3369C38.6996 32.0023 35.3967 30.3868 34.7804 30.1638C34.1642 29.9406 33.7169 29.8292 33.2694 30.4984C32.8221 31.1677 31.5342 32.6728 31.1423 33.1177C30.7503 33.5638 30.3584 33.619 29.6867 33.2843C29.0151 32.9497 26.8505 32.2446 24.2837 29.9688C22.2867 28.1969 20.9381 26.0098 20.5463 25.3405C20.1543 24.6713 20.505 24.3097 20.8401 23.9776C21.1418 23.6777 21.5118 23.1969 21.8483 22.8071C22.1849 22.4173 22.2957 22.1379 22.52 21.6929C22.7444 21.2468 22.6322 20.8571 22.4646 20.5224C22.2969 20.1878 20.9537 16.8992 20.3928 15.562C19.8474 14.2594 19.2932 14.4363 18.8819 14.4146C18.4899 14.3953 18.0426 14.3915 17.594 14.3915C17.1453 14.3915 16.4181 14.5581 15.8019 15.2274C15.1857 15.8966 13.4504 17.5133 13.4504 20.8006C13.4504 24.0879 15.8574 27.2663 16.1939 27.7124C16.5303 28.1586 20.9316 34.9062 27.6704 37.8012C29.273 38.4896 30.5247 38.9012 31.5006 39.2089C33.1097 39.7179 34.5741 39.6461 35.7318 39.4743C37.0224 39.282 39.7065 37.8576 40.266 36.2972C40.8255 34.7369 40.8255 33.3984 40.658 33.1202C40.4904 32.842 40.0418 32.674 39.3701 32.3394L39.3713 32.3369Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_515_2">
                                <rect width="54" height="54" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    +51
                    <?php echo get_theme_mod('enlace_telefono', '982934132'); ?></a>
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