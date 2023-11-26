<div class="main-blog">
    <div class="wrapper">
        <div class="posts-main">
            <div class="posts">
                <article class="blog-interno">
                    <?php 
            if (have_posts()) { 
                while (have_posts()) {
                    $imagen_destacada = get_the_post_thumbnail();
                    the_post(); 
                    ?>
                    <div class="blog-interno-img">
                        <?php echo $imagen_destacada; ?>
                    </div>
                    <div class="blog-interno-content">
                        <h1 class="blog-interno-content-title"><?php echo get_the_title(); ?></h1>
                        <time class="post-date">
                            <?php get_template_part('images/iconos/date-icon'); ?>
                            <?php echo get_the_time('j F, Y'); ?>
                        </time>
                        <div class="blog-interno-content-title-body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php
                         
                } 
            } 
        ?>
                </article>
                <div class="compartir-entrada">
                    <h3>Compartir:</h3>

                    <div class="share-links">
                        <a class="facebook"
                            href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_the_permalink()); ?>"
                            onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;"
                            title="Share on Facebook"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z">
                                </path>
                            </svg></a>
                        <a class="twitter"
                            href="https://twitter.com/share?url=<?php echo esc_url(get_the_permalink()); ?>"
                            onclick="window.open(this.href, 'twitter-share', 'width=580,height=296');return false;"
                            title="Share on Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path
                                    d="M10.7119 7.62171L17.4124 0H15.8243L10.0078 6.61757L5.3599 0H0L7.02742 10.008L0 18H1.58812L7.73149 11.0109L12.6401 18H18L10.7119 7.62171ZM8.53746 10.0954L7.82545 9.099L2.15984 1.17H4.59893L9.17006 7.569L9.88207 8.56543L15.8256 16.884H13.3865L8.53746 10.0954Z"
                                    fill="white" />
                            </svg>
                        </a>

                        <a class="linkedin"
                            href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo esc_url(get_the_permalink()); ?>"
                            onclick="window.open(this.href, 'linkedin-share', 'width=580,height=296');return false;"
                            title="Share on Linkedin"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z">
                                </path>
                            </svg></a>
                        <a class="mail" href="mailto:?body=<?php echo esc_url(get_the_permalink()); ?>"
                            title="Send via email" rel="noopener"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm9.06 8.683L5.648 6.238 4.353 7.762l7.72 6.555 7.581-6.56-1.308-1.513-6.285 5.439z">
                                </path>
                            </svg></a>

                    </div>
                </div>
            </div>
            <div class="posts-sidebar">

                <?php get_template_part('template-parts/secciones/blog-sidebar');  ?>
            </div>
        </div>

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
    </div>
</div>