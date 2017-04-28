<?php
/**
 * Created by PhpStorm.
 * User: AZakharchuk
 * Date: 19.04.2017
 * Time: 10:51
 */ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    
    <header>
        <h2>
            <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> <?php the_post_thumbnail(); ?> </a>
        </h2>
        <?php the_content(); ?>

<!--        <i><span class="post-span"> Posted on --><?php //the_time('j F Y'); ?><!-- by --><?php //the_author_posts_link(); ?><!-- </span></i>-->
<!--        <br>-->
    </header>
    <a href="<?php the_permalink(); ?>" class="btn btn-info"> Подробнее</a>
    <button id="button-expand" class="btn btn-info"> Развернуть </button>
    
</article><!-- #post-## -->
<br>