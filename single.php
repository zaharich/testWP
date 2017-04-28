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

<div class="share">
    <span> Поделись с друзьями!</span><br>
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

<?php get_footer(); ?>
