<?php get_header(); ?>

<div class="row">
    <main class="row col-md-9">
        <!-- first loop-->
        <?php while ( have_posts() ) : the_post(); ?>

            <?php if( in_category('winter') || in_category('spring') ){ ?>
                <?php get_template_part( 'template-parts/post/content', get_post_format() ); ?>
            <?php } ?>

        <?php endwhile;
        wp_reset_postdata(); ?>

        <!--second loop-->
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

<div class="share-vert share">
    <a onClick="window.open('https://vkontakte.ru/share.php?url=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" class="vkontakte"></a>
    <a onClick="window.open('https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" class="facebook"></a>
    <a onClick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" class="google"></a>
    <a onClick="window.open('http://www.livejournal.com/update.bml?event=<?php the_permalink(); ?>&subject=<?php the_title(); ?>','sharer','toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" class="livejournal"></a>
    <a onClick="window.open('https://twitter.com/intent/tweet?text=<?php the_title(); ?> <?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" class="twitter"></a>
    <a onClick="window.open('https://connect.mail.ru/share?url=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" class="mail"></a>
    <a onClick="window.open('http://ok.ru/dk?st.cmd=addShare&st.s=1&st._surl=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" class="odnoklassniki"></a>
    <a onClick="window.open('https://www.evernote.com/clip.action?url=<?php the_permalink(); ?>&target=blog','sharer','toolbar=0,status=0,width=930,height=500');" href="javascript: void(0)" class="evernote"></a>
    <a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>" class="email"></a>
    <a href='javascript:window.print(); void 0;' class="print"></a>
</div>
    