<?php
/**
 * Created by PhpStorm.
 * User: AZakharchuk
 * Date: 14.04.2017
 * Time: 8:56
 */
get_header(); ?>

<section class="row">
    <main class="col-md-9" role="main">

        <?php if ( have_posts() ) : ?>

            <header class="page-header" >
                <?php
                //Выводит на страницу заголовок архивной страницы в зависимости от типа страницы(метка, рубрика, дата)
                the_archive_title( '<h1>', '</h1>' );
                ?>
            </header><!-- .page-header -->

            <?php while ( have_posts() ) : the_post(); ?>
                <h2>
                    <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> <?php the_post_thumbnail(); ?> </a>
                </h2>
                <?php the_content(); ?>
                <span> Posted on <?php the_time('j F Y'); ?> by <?php the_author_posts_link(); ?> </span>
            <?php endwhile;

            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page'),
                'next_text'          => __( 'Next page'),
                'before_page_number' => '<span>' . __( 'Page' ) . ' </span>',
            ) );

        else : ?>
            <span> Здесь пока еще нет записей </span>
        <?php endif;
        ?>

    </main>
    <?php wp_nav_menu( array(
        'theme_location'=>'float',
        'container'=>'aside',
        'container_class'=>'sidebar col-md-3',
        'menu_class'=>'menu'
    )); ?>
</section><!-- .row -->



<?php get_footer(); ?>
