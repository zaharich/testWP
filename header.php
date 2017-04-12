<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" >

    <title>
        <?php
            wp_title('|', true, 'right');   // wp_get_document_title()
        ?>
    </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src='<?php echo get_template_directory_uri(); ?>/js1.js'></script>

    <?php wp_head(); ?>   
</head>

<body <?php body_class(); ?>>       <!-- html output <body class="class1 class2 class3"> -->

<div class="container">
    <header class="row">
        <div class="col-md-12 clearfix background-header-footer">
            <img class="alignleft logo img-circle" src='<?php echo get_template_directory_uri(); ?> /img/shampagne.jpg'>
            <h1 class="site-title">Праздники России</h1>
        </div>

        <?php wp_nav_menu( array(
            'theme_location'=>'top',
            'container'=>'nav',
            'container_class'=>'navbar-collapse',
            'menu_class'=>'menu nav navbar-nav'
        )); ?>
    </header>