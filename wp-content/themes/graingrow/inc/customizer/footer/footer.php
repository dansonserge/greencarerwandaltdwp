<?php 
// Columns Footer
$wp_customize->add_setting(
    'footer_widget_areas',
    array(
        'default'           => themesflat_customize_default('footer_widget_areas'),
        'sanitize_callback' => 'themesflat_sanitize_grid_post_related',
    )
);
$wp_customize->add_control(
    'footer_widget_areas',
    array(
        'type'      => 'select',           
        'section'   => 'section_footer',
        'priority'  => 1,
        'label'     => esc_html__('Columns Footer', 'graingrow'),
        'choices'   => array(                
            1     => esc_html__( '1 Columns', 'graingrow' ),
            2     => esc_html__( '2 Columns', 'graingrow' ),
            3     => esc_html__( '3 Columns', 'graingrow' ),
            4     => esc_html__( '4 Columns ( 3 | 2 | 4 | 3 )', 'graingrow' ),
            5     => esc_html__( '4 Columns ( 3 | 3 | 3 | 3 )', 'graingrow' ),                  
        )
    )
); 

// Footer Box control
$wp_customize->add_setting(
    'footer_controls',
    array(
        'default' => themesflat_customize_default('footer_controls'),
        'sanitize_callback' => 'themesflat_sanitize_text',
    )
);
$wp_customize->add_control( new themesflat_BoxControls($wp_customize,
    'footer_controls',
    array(
        'label' => esc_html__( 'Footer Box Controls (px)', 'graingrow' ),
        'section' => 'section_footer',
        'type' => 'box-controls',
        'priority' => 2
    ))
);