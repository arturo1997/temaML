<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Machupicchu_Lama
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title-not-found"><?php esc_html_e( 'Oops! Página no encontrada.', 'machupicchu-lama' ); ?>
            </h1>
        </header><!-- .page-header -->

        <div class="page-content-not-found">
            <p><?php esc_html_e( 'Parece que no se encontró nada en este lugar.', 'machupicchu-lama' ); ?>
            </p>



        </div><!-- .page-content -->
    </section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();