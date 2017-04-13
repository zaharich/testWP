<?php get_header(); ?>

<span> This is index.php page</span>
<div class="row">
    <!-- main and sidebar -->
    <main class="col-md-9">
        <!-- first loop-->
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if( in_category('winter') ){ ?>
                <article <?php post_class('post winter-post'); ?> id="post-<?php the_ID(); ?>">
            <?php } else if( in_category('spring') ){ ?>
                <article <?php post_class('post spring-post'); ?> id="post-<?php the_ID(); ?>">
            <?php }else{ ?>
<!--                <article --><?php //post_class('post'); ?><!-- id="post---><?php //the_ID(); ?><!--">-->
                <?php continue; ?>
            <?php } ?>
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
        //global $post;
        $args = array('category' => get_cat_ID('summer') . "," . get_cat_ID('autumn'));
        $myposts = get_posts( $args );
        foreach( $myposts as $post ){
            setup_postdata($post); ?>
            <article <?php post_class('post summer-post'); ?> id="post-<?php the_ID(); ?>">
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
<!--            <ul class="pagination">-->
<!--                <li>-->
<!--                    <a href="#" aria-label="Previous">-->
<!--                        <span aria-hidden="true">&laquo;</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li><a href="#">1</a></li>-->
<!--                <li><a href="#">2</a></li>-->
<!--                <li><a href="#">3</a></li>-->
<!--                <li><a href="#">4</a></li>-->
<!--                <li><a href="#">5</a></li>-->
<!--                <li>-->
<!--                    <a href="#" aria-label="Next">-->
<!--                        <span aria-hidden="true">&raquo;</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
        </nav>
        
    </main>


<!--    <aside class="sidebar col-md-3">-->
<!--        <h3>This is sidebar</h3>-->
<!--        --><?php //dynamic_sidebar( 'sidebar-1' ); ?>
<!--    </aside>-->
<!--</div>-->
<?php get_sidebar(); ?>    
<?php get_footer(); ?>
    