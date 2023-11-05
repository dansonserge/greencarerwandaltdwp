<?php 
//Sidebar Position
$wp_customize->add_setting(
    'shop_layout',
    array(
        'default'           => themesflat_customize_default('shop_layout'),
        'sanitize_callback' => 'esc_attr',
    )
);
$wp_customize->add_control( 
    'shop_layout',
    array (
        'type'      => 'select',           
        'section'   => 'section_shop_archive',
        'priority'  => 1,
        'label'         => esc_html__('Sidebar Position', 'graingrow'),
        'choices'   => array (
            'sidebar-right'     => esc_html__( 'Sidebar Right','graingrow' ),
            'sidebar-left'      =>  esc_html__( 'Sidebar Left','graingrow' ),
            'fullwidth'         =>   esc_html__( 'Full Width','graingrow' ),
            'fullwidth-small'   =>   esc_html__( 'Full Width Small','graingrow' ),
            'fullwidth-center'  =>   esc_html__( 'Full Width Center','graingrow' ),
        ),
    )
);

// Gird columns
$wp_customize->add_setting(
    'shop_columns',
    array(
        'default'           => themesflat_customize_default('shop_columns'),
        'sanitize_callback' => 'themesflat_sanitize_grid_post_related',
    )
);
$wp_customize->add_control(
    'shop_columns',
    array(
        'type'      => 'select',           
        'section'   => 'section_shop_archive',
        'priority'  => 2,
        'label'     => esc_html__('Columns', 'graingrow'),
        'choices'   => array(
            2     => esc_html__( '2 Columns', 'graingrow' ),
            3     => esc_html__( '3 Columns', 'graingrow' ),
            4     => esc_html__( '4 Columns', 'graingrow' ),
            5     => esc_html__( '5 Columns', 'graingrow' ),                
        )
    )
);

// Number Posts Portfolios
$wp_customize->add_setting (
    'shop_products_per_page',
    array(
        'default' => themesflat_customize_default('shop_products_per_page'),
        'sanitize_callback' => 'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'shop_products_per_page',
    array(
        'type'      => 'text',
        'label'     => esc_html__('Show Number Products', 'graingrow'),
        'section'   => 'section_shop_archive',
        'priority'  => 3
    )
);
