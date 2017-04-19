<?php get_header(); ?>

<div class="row">
    <main class="row col-md-9">
        <!-- first loop-->
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h2>
                        <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> <?php the_post_thumbnail(); ?> </a>
                    </h2>
                    <?php the_content(); ?>
                    <span> Posted on <?php the_time('j F Y'); ?> by <?php the_author_posts_link(); ?> </span>
                </header>
            </article>
        <?php endwhile;
        wp_reset_postdata(); ?>

        <!--second loop-->
        <hr>
        <?php
        global $post;
        $args = array('category' => get_cat_ID('summer') . "," . get_cat_ID('autumn'));
        $myposts = get_posts( $args );
        foreach( $myposts as $post ){
            setup_postdata($post); ?>
            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h2>
                        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                    </h2>
                    <?php the_content(); ?>
                    <span> Posted on <?php the_time(); ?> by <?php the_author(); ?> </span>
                </header>
            </article>
        <?php }
        wp_reset_postdata(); ?>

        <nav>
            <?php the_posts_pagination(); ?>
        </nav>
        
    </main>
    

<?php get_sidebar(); ?>    
<?php get_footer(); ?>
    