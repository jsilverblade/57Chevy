<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset');  ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">

    <?php wp_head(); ?>
    <style>
        .jumbotron {
            background: url('<?php echo get_theme_mod('showcase_image',get_bloginfo('template_url').'/img/showcase.png');  ?>') 0 -80px;
            <?php  echo get_theme_mod('showcase_text_color','#109cab;'); ?>
            <?php  echo get_theme_mod('showcase_text_shadow','text-shadow: 3px 3px #000;'); ?>
        }  
    </style>
      
</head>

  <body <?php body_class(); ?>>


      <div class="header clearfix">
            <div class="container">
                <?php
                    wp_nav_menu(array(
                            'theme_location'        => 'primary',
                            'depth'                        => 2,
                            'container'                 => false,
                            'menu_class'             => 'nav nav-pills pull-right',
                            'fallback'                  => 'wp_bootstrap_navwalker::fallback',
                            'walker'                    => new wp_bootstrap_navwalker()
                        )
                    );
                ?>
            <?php if(has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <h1><?php bloginfo('name'); ?></h1>
            <?php endif; ?>
                
                
                
        </div>
      </div>
