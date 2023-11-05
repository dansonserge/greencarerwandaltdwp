<?php 

       // Button ReadMore
       $wp_customize->add_setting (
        'text_loadmore',
        array(
            'default' =>  themesflat_customize_default('text_loadmore'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'text_loadmore',
        array(
            'type'      => 'text',
            'label'     => esc_html('Button ReadMore', 'graingrow'),
            'section'   => 'section_content_button',
            'priority'  => 1
        )
    );
    // font
    $wp_customize->add_setting(
        'typography_buttons_loadmore',
        array(
            'default' => themesflat_customize_default('typography_buttons_loadmore'),
            'sanitize_callback' => 'esc_html',
        )
    );
    $wp_customize->add_control( new themesflat_Typography($wp_customize,
        'typography_buttons_loadmore',
        array(
            'label' => esc_html__( 'Font name/style/sets', 'graingrow' ),
            'section' => 'section_content_button',
            'type' => 'typography',
            'fields' => array('family','style','size','line_height','letter_spacing'),
            'priority' => 2
        ))
    );
    // color
    $wp_customize->add_setting(
        'bottom_background_color_loadmore',
        array(
            'default'           => themesflat_customize_default('bottom_background_color_loadmore'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control( 
        new themesflat_ColorOverlay(
            $wp_customize,
            'bottom_background_color_loadmore',
            array(
                'label'         => esc_html__('Backgound Color', 'graingrow'),
                'section'       => 'section_content_button',
                'settings'      => 'bottom_background_color_loadmore',
                'priority'      => 3
            )
        )
    );
    $wp_customize->add_setting(
        'bottom_background_color_loadmore_bg',
        array(
            'default'           => themesflat_customize_default('bottom_background_color_loadmore_bg'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control( 
        new themesflat_ColorOverlay(
            $wp_customize,
            'bottom_background_color_loadmore_bg',
            array(
                'label'         => esc_html__('Backgound Color', 'graingrow'),
                'section'       => 'section_content_button',
                'settings'      => 'bottom_background_color_loadmore_bg',
                'priority'      =>  4
            )
        )
    );

    $wp_customize->add_setting(
        'bottom_background_color_loadmore_hover',
        array(
            'default'           => themesflat_customize_default('bottom_background_color_loadmore_hover'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control( 
        new themesflat_ColorOverlay(
            $wp_customize,
            'bottom_background_color_loadmore_hover',
            array(
                'label'         => esc_html__('Backgound Color', 'graingrow'),
                'section'       => 'section_content_button',
                'settings'      => 'bottom_background_color_loadmore_hover',
                'priority'      => 5
            )
        )
    );
    $wp_customize->add_setting(
        'bottom_background_color_loadmore_bg_hover',
        array(
            'default'           => themesflat_customize_default('bottom_background_color_loadmore_bg_hover'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control( 
        new themesflat_ColorOverlay(
            $wp_customize,
            'bottom_background_color_loadmore_bg_hover',
            array(
                'label'         => esc_html__('Backgound Color', 'graingrow'),
                'section'       => 'section_content_button',
                'settings'      => 'bottom_background_color_loadmore_bg_hover',
                'priority'      => 6
            )
        )
    );