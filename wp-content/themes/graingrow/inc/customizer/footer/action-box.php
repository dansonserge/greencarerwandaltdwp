<?php 
$wp_customize->add_setting(
    'show_action_box',
    array(
        'default'   => themesflat_customize_default('show_action_box'),
        'sanitize_callback'  => 'themesflat_sanitize_checkbox',
    )
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
        'show_action_box',
        array(
            'type'      => 'checkbox',
            'label'     => esc_html__('Action Box ( OFF | ON )', 'graingrow'),
            'section'   => 'section_action_box',
            'priority'  => 2
        )
    )
);

$wp_customize->add_setting(
    'heading_action_box',
    array(
        'default'   =>  themesflat_customize_default('heading_action_box'),
        'sanitize_callback'  =>  'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'heading_action_box',
    array(
        'type'      =>  'textarea',
        'label'     =>  esc_html__('Heading Action Box', 'graingrow'),
        'section'   =>  'section_action_box',
        'priority'  =>  3
    )
);

$wp_customize->add_setting(
    'text_action_box',
    array(
        'default'   =>  themesflat_customize_default('text_action_box'),
        'sanitize_callback'  =>  'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'text_action_box',
    array(
        'type'      =>  'textarea',
        'label'     =>  esc_html__('Text Action Box', 'graingrow'),
        'section'   =>  'section_action_box',
        'priority'  =>  3
    )
);

$wp_customize->add_setting(
    'form_action_box',
    array(
        'default'   =>  themesflat_customize_default('form_action_box'),
        'sanitize_callback'  =>  'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'form_action_box',
    array(
        'type'      =>  'textarea',
        'label'     =>  esc_html__('Form Action Box', 'graingrow'),
        'section'   =>  'section_action_box',
        'priority'  =>  4
    )
);

// $wp_customize->add_setting(
//     'text_button_action_box',
//     array(
//         'default'   =>  themesflat_customize_default('text_button_action_box'),
//         'sanitize_callback'  =>  'themesflat_sanitize_text'
//     )
// );
// $wp_customize->add_control(
//     'text_button_action_box',
//     array(
//         'type'      =>  'text',
//         'section'   =>  'section_action_box',
//         'label'     =>  esc_html__('Text Button Action Box', 'graingrow'),
//         'priority'  => 5
//     )
// );

// Button Url
// $wp_customize->add_setting(
//     'action_box_button_url',
//     array(
//         'default' => themesflat_customize_default('action_box_button_url'),
//         'sanitize_callback' => 'themesflat_sanitize_text'
//     )
// );
// $wp_customize->add_control(
//     'action_box_button_url',
//     array(
//         'label' => esc_html__( 'Url', 'graingrow' ),
//         'section' => 'section_action_box',
//         'type' => 'text',
//         'priority' => 6
//     )
// );

//Logo
$wp_customize->add_setting(
    'action_box_features_image',
    array(
        'default' => themesflat_customize_default('action_box_features_image'),
        'sanitize_callback' => 'esc_url_raw',
    )
);    
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'action_box_features_image',
        array(
           'label'          => esc_html__( 'Upload Your Image ', 'graingrow' ),
           'description'    => esc_html__( 'If you don\'t display logo please remove it your website display 
            Site Title default in General', 'graingrow' ),
           'type'           => 'image',
           'section'   =>  'section_action_box',
           'priority'       => 5,
        )
    )
);