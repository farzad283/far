<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    <header>
        <?php the_custom_logo(); ?>
        
        
    <div>
        <img src="http://localhost:8888/31w/wp-content/uploads/2023/02/index.png" alt="">
            <h1>M-Habibzadeh</h1>
        </div>
        <?php wp_nav_menu(array(
            'menu' => 'entete',
            'container' => 'nav'
        )); ?>
        <h1><?php  //bloginfo('name'); ?></h1>
        <h2><?php  //bloginfo('url'); ?></h2>
        <h1><a href="<?php  bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1> 
        <h2><?php  bloginfo('description'); ?></h2>
    </header>





