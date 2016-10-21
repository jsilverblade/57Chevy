<?php

function fiftysevenchevy_customize_register($wp_customize) {
    // Showcase Section
    $wp_customize->add_section('showcase', array(
        'title'                       => __('Showcase', 'fiftysevenchevy'),
        'description'            => sprintf(__('Options for showcase', 'fiftysevenchevy')),
        'priority'                  => 130,    
    ));
    
    // Heading Setting
    $wp_customize->add_setting('showcase_heading',array(
        'default'                   => _x('Showcase Heading', 'fiftysevenchevy'),
        'type'                       => 'theme_mod'
    ) );
    
    // Heading Control
    $wp_customize->add_control('showcase_heading',array(
        'label'                   => __('Heading', 'fiftysevenchevy'),
        'section'               => 'showcase',
        'priority'              =>  20
    ) );
    
    // Text Setting
    $wp_customize->add_setting('showcase_text',array(
        'default'                   => _x('The fiftysevenchevy theme is a simple busy theme with retro style.  It uses the BootStrap 3  framework and can be customized to your liking.', 'fiftysevenchevy'),
        'type'                       => 'theme_mod'
    ) );
    
    // Text Control
    $wp_customize->add_control('showcase_text',array(
        'label'                   => __('Text', 'fiftysevenchevy'),
        'section'               => 'showcase',
        'priority'              =>  20
    ) );
    
    // Text Color Setting
    $wp_customize->add_setting('showcase_text_color',array(
        'default'                   => _x('color: #fff', 'fiftysevenchevy'),
        'type'                       => 'theme_mod'

    ));
    
    // Text Color Control
    $wp_customize->add_control('showcase_text_color',array(
        'label'                   => __('Text Color', 'fiftysevenchevy'),
        'section'               => 'showcase',
        'priority'              =>  20
    ) );

    
    // Text Shadow Setting
    $wp_customize->add_setting('showcase_text_shadow',array(
        'default'                   => _x('text-shadow: 3px 3px #109cab;', 'fiftysevenchevy'),
        'type'                       => 'theme_mod'

    ));
    
    // Text Shadow Control
    $wp_customize->add_control('showcase_text_shadow',array(
        'label'                   => __('Text Shadow', 'fiftysevenchevy'),
        'section'               => 'showcase',
        'priority'              =>  20
    ) );

    
    // Button Text Setting
    $wp_customize->add_setting('showcase_btn_text',array(
        'default'                   => _x('Sign Up', 'fiftysevenchevy'),
        'type'                       => 'theme_mod'
    ) );
    
    // Button Text Control
    $wp_customize->add_control('showcase_btn_text',array(
        'label'                   => __('Button Text', 'fiftysevenchevy'),
        'section'               => 'showcase',
        'priority'              =>  20
    ) );
 
    // Button URL Setting
    $wp_customize->add_setting('showcase_btn_url',array(
        'default'                   => _x('http://test.com', 'fiftysevenchevy'),
        'type'                       => 'theme_mod'
    ) );
    
    // Button URL Control
    $wp_customize->add_control('showcase_btn_url',array(
        'label'                   => __('Button URL ', 'fiftysevenchevy'),
        'section'               => 'showcase',
        'priority'              =>  20
    ) );
    
    // Background Image Setting
    $wp_customize->add_setting('showcase_image',array(
        'default'                   => get_bloginfo('template_directory').'/img/showcase.jpg',
        'type'                       => 'theme_mod'
    ) );
    
    // Background Image Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image',array(
        'label'                     => __('Background Image', 'fiftysevenchevy'),
        'section'                 => 'showcase',
        'settings'                => 'showcase_image',
        
    )));
    
    // Boxes Section
    $wp_customize->add_section('boxes', array(
        'title'                       => __('Boxes', 'fiftysevenchevy'),
        'description'            => sprintf(__('Options for homepage boxes', 'fiftysevenchevy')),
        'priority'                  => 130,    
    ));
    
    // BOX 1 ------------------------------------------------------------------------------------------------------------------------------------------------
    
    // Box 1 Heading Setting
    $wp_customize->add_setting('box1_heading', array(
        'default'                   => __('Box 1 Heading','fiftysevenchevy'),
        'type'                       => 'theme_mod'
    ));
    
    // Box 1 Heading Control
    $wp_customize->add_control('box1_heading', array(
        'label'                     => __('Box 1 Heading','fiftysevenchevy'),
        'section'                 => 'boxes',
        'priority'                 => 20,
    ));
    
    // Box 1 Text Setting
    $wp_customize->add_setting('box1_text',array(
        'default'                =>_x('Bring to the table win-win survival strategies to ensure proactive domination.','fiftysevenchevy'),
        'type'                     => 'theme_mod',
    ));
    
    // Box 1 Text Control
    $wp_customize->add_control('box1_text', array(
        'label'                     => __('Box 1 Text','fiftysevenchevy'),
        'section'                 => 'boxes',
        'priority'                 => 20,
    ));
    
    // Box 1 Icon Setting
    $wp_customize->add_setting('box1_icon',array(
        'default'                =>_x('bar-chart','fiftysevenchevy'),
        'type'                     => 'theme_mod',
    ));
    
    // Box 1 Icon Control
    $wp_customize->add_control('box1_icon', array(
        'label'                     => __('Box 1 Icon','fiftysevenchevy'),
        'section'                 => 'boxes',
        'priority'                 => 20,
    ));
    
    // BOX 2 ------------------------------------------------------------------------------------------------------------------------------------------------

    // Box 2 Heading Setting
    $wp_customize->add_setting('box2_heading', array(
        'default'                   => __('Box 2 Heading','fiftysevenchevy'),
        'type'                       => 'theme_mod'
    ));
    
    // Box 2 Heading Control
    $wp_customize->add_control('box2_heading', array(
        'label'                     => __('Box 2 Heading','fiftysevenchevy'),
        'section'                 => 'boxes',
        'priority'                 => 20,
    ));
        
    // Box 2 Text Setting
    $wp_customize->add_setting('box2_text',array(
        'default'                =>_x('Their house is a museum where people come to see ‘em. They really are a scream the Addams Family.','fiftysevenchevy'),
        'type'                     => 'theme_mod',
    ));    
        
    // Box 2 Text Control
    $wp_customize->add_control('box2_text', array(
        'label'                     => __('Box 2 Text','fiftysevenchevy'),
        'section'                 => 'boxes',
        'priority'                 => 20,
    ));

    
    // Box 2 Icon Setting
    $wp_customize->add_setting('box2_icon',array(
        'default'                =>_x('code','fiftysevenchevy'),
        'type'                     => 'theme_mod',
    ));
    
    // Box 2 Icon Control
    $wp_customize->add_control('box2_icon', array(
        'label'                     => __('Box 2 Icon','fiftysevenchevy'),
        'section'                 => 'boxes',
        'priority'                 => 20,
    ));

    // BOX 3 ------------------------------------------------------------------------------------------------------------------------------------------------

    // Box 3 Heading Setting
    $wp_customize->add_setting('box3_heading', array(
        'default'                   => __('Box 3 Heading','fiftysevenchevy'),
        'type'                       => 'theme_mod'
    ));
    
    // Box 3 Heading Control
    $wp_customize->add_control('box3_heading', array(
        'label'                     => __('Box 3 Heading','fiftysevenchevy'),
        'section'                 => 'boxes',
        'priority'                 => 20,
    ));

    
    // Box 3 Text Setting
    $wp_customize->add_setting('box3_text',array(
        'default'                =>_x('So join us here each week my friends you\'re sure to get a smile from seven stranded castaways here on Gilligans Isle.','fiftysevenchevy'),
        'type'                     => 'theme_mod',
    ));
    
    // Box 3 Text Control
    $wp_customize->add_control('box3_text', array(
        'label'                     => __('Box 3 Text','fiftysevenchevy'),
        'section'                 => 'boxes',
        'priority'                 => 20,
    ));

    // Box 3 Icon Setting
    $wp_customize->add_setting('box3_icon',array(
        'default'                =>_x('desktop','fiftysevenchevy'),
        'type'                     => 'theme_mod',
    ));
    
    // Box 3 Icon Control
    $wp_customize->add_control('box3_icon', array(
        'label'                     => __('Box 3 Icon','fiftysevenchevy'),
        'section'                 => 'boxes',
        'priority'                 => 20,
    ));
    
    
}

add_action('customize_register', 'fiftysevenchevy_customize_register');