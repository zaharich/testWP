<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" >

    <title> <?php wp_title('|', true, 'right'); ?> </title>  <!--wp_get_document_title() -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>   
</head>

<body class="row">       <!-- html output <body class="class1 class2 class3"> -->

<div class="clearfix top-header">
    <!--<img class="float-left logo img-circle" src='<?php echo get_template_directory_uri(); ?> /img/shampagne.jpg'>-->
    <h1 class="site-title">Праздники России</h1>
</div>

<div class="container">
    <header class="row">

        <?php wp_nav_menu( array(
            'theme_location' =>'top',
            'container'      =>'nav',
            'container_class'=>'navbar-collapse',
            'menu_class'     =>'menu nav navbar-nav',
            'menu_id'        =>'top-menu'
        )); ?>
    </header>