<?php
/**
 * Created by PhpStorm.
 * User: TUPOLEV
 * Date: 07.04.2017
 * Time: 13:57
 */ ?>
<?php get_header(); ?>
<p> страница single.php </p>

<?php the_post(); ?>
<h1><?php the_title(); ?></h1>
<?php the_post_thumbnail('full'); ?>
<p><?php the_content(); ?></p>
<span> Posted on <?php the_time('j F Y'); ?> by <?php the_author_posts_link(); ?> </span>

<?php get_footer(); ?>
