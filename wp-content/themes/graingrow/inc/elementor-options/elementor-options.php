<?php 
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Plugin;
use Elementor\Repeater;
use Elementor\Icons_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Box_Shadow as Group_Control_Box_Shadow;
use Elementor\Modules\DynamicTags\Module as TagsModule;


class themesflat_options_elementor {
	public function __construct(){	
        add_action('elementor/documents/register_controls', [$this, 'themesflat_elementor_register_options'], 10);
        add_action('elementor/editor/before_enqueue_scripts', function() { wp_enqueue_script( 'elementor-preview-load', THEMESFLAT_LINK . 'js/elementor/elementor-preview-load.js', array( 'jquery' ), null, true );
        }, 10, 3);
    }

    public function themesflat_elementor_register_options($element){
        $post_id = $element->get_id();
        $post_type = get_post_type($post_id);

        if ( ($post_type !== 'post') && ($post_type !== 'portfolios') && ($post_type !== 'services') && ($post_type !== 'team') ) {
        	$this->themesflat_options_page_header($element);
            $this->themesflat_options_page_footer($element);                      
        }

        $this->themesflat_options_page($element);
        $this->themesflat_options_page_pagetitle($element);

        if ( $post_type == 'team' ) {
            $this->themesflat_options_team($element);
        }

        if ( $post_type == 'portfolios' ) {
            $this->themesflat_options_portfolio($element);
        }

        if ( $post_type == 'services' ) {
            $this->themesflat_options_services($element);
        }

    }

    public function themesflat_options_page_header($element) {
        // TF Header
        $element->start_controls_section(
            'themesflat_header_options',
            [
                'label' => esc_html__('TF Header', 'graingrow'),
                'tab' => Controls_Manager::TAB_SETTINGS,
            ]
        );
        $element->add_control(
            'style_header',
            [
                'label'     => esc_html__( 'Header Style', 'graingrow'),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                	'' => esc_html__( 'Theme Setting', 'graingrow'),
                    'header-default' => esc_html__( 'Header Default', 'graingrow'),
                ],
            ]
        );
        $element->add_control(
            'h_options_topbar',
            [
                'label' => esc_html__( 'Topbar', 'graingrow' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $element->add_control(
            'topbar_show',
            [
                'label'     => esc_html__( 'Top Bar', 'graingrow'),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    '' => esc_html__( 'Theme Setting', 'graingrow'),
                    0       => esc_html__( 'Hide', 'graingrow'),
                    1       => esc_html__( 'Show', 'graingrow'),                    
                ],
            ]
        ); 


        $element->add_responsive_control(
            'topbar_padding',
            [
                'label' => esc_html__( 'Padding', 'graingrow' ),
                'type' => Controls_Manager::DIMENSIONS,
                'allowed_dimensions' => ['top','bottom'],
                'size_units' => [ 'px' ],
                'selectors' => [
                    '{{WRAPPER}} .themesflat-top .container-inside' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $element->add_control(
            'topbar_background_color',
            [
                'label' => esc_html__( 'Background', 'graingrow' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .themesflat-top' => 'background: {{VALUE}};',                  
                ],
            ]
        );
        $element->add_control(
            'topbar_textcolor',
            [
                'label' => esc_html__( 'Color', 'graingrow' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .themesflat-top .content-left ul li' => 'color: {{VALUE}};',                  
                ],
            ]
        );
        $element->add_control(
            'topbar_link_color',
            [
                'label' => esc_html__( 'Link Color', 'graingrow' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .themesflat-top a' => 'color: {{VALUE}};',                  
                ],
            ]
        );
        $element->add_control(
            'topbar_link_color_hover',
            [
                'label' => esc_html__( 'Link Hover Color', 'graingrow' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .themesflat-top a:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .themesflat-top .wrap-btn-topbar .btn-topbar:before' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $element->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'topbar_typography',
                'label' => esc_html__( 'Typography', 'graingrow' ),
                'selector' => '{{WRAPPER}} .themesflat-top',
            ]
        );

        $element->add_control(
            'h_options_header',
            [
                'label' => esc_html__( 'Header', 'graingrow' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        // Logo
        $element->add_control(
            'site_logo',
            [
                'label'   => esc_html__( 'Custom Logo', 'graingrow' ),
                'type'    => Controls_Manager::MEDIA,
            ]
        );
        $element->add_responsive_control(
            'logo_width',
            [
                'label'      => esc_html__( 'Logo Width', 'graingrow' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range'      => [
                    'px' => [
                        'min' => 30,
                        'max' => 500,
                    ],
                    '%' => [
                        'min' => 50,
                        'max' => 150,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} #header #logo a img, {{WRAPPER}} .modal-menu__panel-footer .logo-panel a img' => 'max-width: {{SIZE}}{{UNIT}} !important;',
                ],
            ]
        );

        $element->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'logo_bg_color',
                'label' => esc_html__( 'Logo Background Color', 'graingrow' ),
                'types' => ['gradient' ],
                'selector' => '{{WRAPPER}}  #header .logo,{{WRAPPER}}  #header .logo::after',
            ]
        );


        $element->add_control(
            'header_absolute',
            [
                'label'     => esc_html__( 'Header Absolute', 'graingrow'),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    '' => esc_html__( 'Theme Setting', 'graingrow'),
                    0       => esc_html__( 'No', 'graingrow'),
                    1       => esc_html__( 'Yes', 'graingrow'),                    
                ],
                'condition' => [ 'style_header!' => '' ],
            ]
        );
        $element->add_control(
            'header_sticky',
            [
                'label'     => esc_html__( 'Header Sticky', 'graingrow'),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    '' => esc_html__( 'Theme Setting', 'graingrow'),
                    0       => esc_html__( 'No', 'graingrow'),
                    1       => esc_html__( 'Yes', 'graingrow'),                    
                ],
                'condition' => [ 'style_header!' => '' ],
            ]
        );
        $element->add_control(
            'header_search_box',
            [
                'label'     => esc_html__( 'Search Box', 'graingrow'),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    '' => esc_html__( 'Theme Setting', 'graingrow'),
                    0       => esc_html__( 'Hide', 'graingrow'),
                    1       => esc_html__( 'Show', 'graingrow'),                    
                ],
                'condition' => [ 'style_header!' => '' ],
            ]
        );        
        // $element->add_control(
        //     'header_cart_icon',
        //     [
        //         'label'     => esc_html__( 'Header Cart', 'graingrow'),
        //         'type'      => Controls_Manager::SELECT,
        //         'default'   => '',
        //         'options'   => [
        //             '' => esc_html__( 'Theme Setting', 'graingrow'),
        //             0       => esc_html__( 'Hide', 'graingrow'),
        //             1       => esc_html__( 'Show', 'graingrow'),                    
        //         ],
        //         'condition' => [ 'style_header!' => '' ],
        //     ]
        // );

        $element->add_control(
            'header_sidebar_toggler',
            [
                'label'     => esc_html__( 'Sidebar Toggler', 'graingrow'),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    '' => esc_html__( 'Theme Setting', 'graingrow'),
                    0       => esc_html__( 'Hide', 'graingrow'),
                    1       => esc_html__( 'Show', 'graingrow'),                    
                ],
                'condition' => [ 'style_header!' => '' ],
            ]
        );
        $element->add_control(
            'header_backgroundcolor',
            [
                'label' => esc_html__( 'Header Background', 'graingrow' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} #header.header-default' => 'background: {{VALUE}};',
                    '{{WRAPPER}} #header.header-style1' => 'background: {{VALUE}};',
                    '{{WRAPPER}} #header.header.header-02' => 'background: {{VALUE}};',
                    '{{WRAPPER}} #header.header-style3 .header-ct-center, {{WRAPPER}} #header.header-style3 .header-ct-right' => 'background: {{VALUE}};',
                    '{{WRAPPER}} #header.header-style4' => 'background: {{VALUE}};',                    
                ],
                'condition' => [ 'style_header!' => '' ],
            ]
        );
        $element->add_control(
            'header_height',
            [
                'label' => esc_html__( 'Header Height', 'graingrow' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 50,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} #mainnav > ul > li > a, {{WRAPPER}} #header .show-search, {{WRAPPER}} header .block a, {{WRAPPER}} #header .mini-cart-header .cart-count, {{WRAPPER}} #header .mini-cart .cart-count, {{WRAPPER}} .button-menu' => 'line-height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} #header .header-wrap' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $element->add_control(
            'header_button_show',
            [
                'label'     => esc_html__( 'Button Show', 'graingrow'),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    '' => esc_html__( 'Theme Setting', 'graingrow'),
                    0       => esc_html__( 'Hide', 'graingrow'),
                    1       => esc_html__( 'Show', 'graingrow'),                    
                ],
                'condition' => [ 'style_header' => ['header-02'] ],
            ]
        );

        $element->add_control(
            'header_button_text',
            [
                'label' => esc_html__( 'Button Text', 'graingrow' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'GET A QUOTE', 'graingrow' ),
                'placeholder' => esc_html__( 'GET A QUOTE', 'graingrow' ),
                'label_block' => true,
                'condition' => [ 'style_header' => ['header-01'] ],
            ]
        );


        $element->add_control(
            'header_button_radius',
            [
                'label' => esc_html__( 'Button Border Radius', 'graingrow' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
		                'size_units' => [ 'px', '%', 'em' ],
		                'selectors' => [
		                    '{{WRAPPER}} .wrap-btn-header .btn-header' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		                ],
            ]
        );

        $element->add_control(
            'h_color_button_icon',
            [
                'label' => esc_html__( 'Backround Button & Icon', 'graingrow' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $element->add_control(
            'header_btnbackgroundcolor',
            [
                'label' => esc_html__( 'Header Button Background', 'graingrow' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} #header.header-02 .btn-header' => 'background: {{VALUE}};',                    
                    '{{WRAPPER}} #header .btn-header' => 'background: {{VALUE}};',                    
                ],
                'condition' => [ 'style_header!' => '' ],
            ]
        );

        $element->add_control(
            'header_btncolor',
            [
                'label' => esc_html__( 'Header Button Color', 'graingrow' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} #header.header-02 .btn-header' => 'color: {{VALUE}};',                    
                    '{{WRAPPER}} #header .btn-header' => 'color: {{VALUE}};',                    
                ],
                'condition' => [ 'style_header!' => '' ],
            ]
        );

        $element->add_group_control( 
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'header_btncolor_shadow',
                'label' => esc_html__( 'Header Button Box Shadow Hover', 'graingrow' ),
                'selector' => '{{WRAPPER}} #header.header-02 .btn-header, {{WRAPPER}} #header .btn-header',
                'condition' => [ 'style_header!' => '' ],
            ]
        );
        
        $element->add_control(
            'header_btnbackgroundcolor_hover',
            [
                'label' => esc_html__( 'Header Button Background Hover', 'graingrow' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} #header.header-02 .btn-header:hover' => 'background: {{VALUE}};',                    
                    '{{WRAPPER}} #header.header-02 .btn-header:after' => 'background: {{VALUE}};',                    
                    '{{WRAPPER}} #header .btn-header:hover' => 'background: {{VALUE}};',                    
                    '{{WRAPPER}} #header .btn-header:after' => 'background: {{VALUE}};',                    
                ],
                'condition' => [ 'style_header!' => '' ],
            ]
        );

        $element->add_control(
            'header_btncolor_hover',
            [
                'label' => esc_html__( 'Header Button Color Hover', 'graingrow' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} #header.header-02 .btn-header:hover' => 'color: {{VALUE}};',                    
                    '{{WRAPPER}} #header .btn-header:hover' => 'color: {{VALUE}};',                    
                ],
                'condition' => [ 'style_header!' => '' ],
            ]
        );

        $element->add_group_control( 
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'header_btncolor_shadow_hover',
                'label' => esc_html__( 'Header Button Box Shadow Hover', 'graingrow' ),
                'selector' => '{{WRAPPER}} #header.header-02 .btn-header:hover, {{WRAPPER}} #header .btn-header:hover',
                'condition' => [ 'style_header!' => '' ],
            ]
        );

        //Extra Classes Header
        $element->add_control(
            'extra_classes_header',
            [
                'label'   => esc_html__( 'Extra Classes', 'graingrow' ),
                'type'    => Controls_Manager::TEXT,
                'label_block' => true,
            ]
        );

        $element->end_controls_section();
    }

    public function themesflat_options_page_pagetitle($element) {
        // TF Page Title
        $element->start_controls_section(
            'themesflat_pagetitle_options',
            [
                'label' => esc_html__('TF Page Title', 'graingrow'),
                'tab' => Controls_Manager::TAB_SETTINGS,
            ]
        );       

        $element->add_control(
            'hide_pagetitle',
            [
                'label'     => esc_html__( 'Hide Page Title', 'graingrow'),
                'type'      => Controls_Manager::SELECT,
                'default'   => 'block',
                'options'   => [
                    'none'       => esc_html__( 'Yes', 'graingrow'),
                    'block'      => esc_html__( 'No', 'graingrow'),
                ],
                'selectors'  => [
                    '{{WRAPPER}} .page-title' => 'display: {{VALUE}};',
                ],
            ]
        ); 

        $element->add_responsive_control(
            'pagetitle_padding',
            [
                'label' => esc_html__( 'Padding', 'graingrow' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'allowed_dimensions' => [ 'top', 'bottom' ],
                'selectors' => [
                    '{{WRAPPER}} .page-title' => 'padding-top: {{TOP}}{{UNIT}}; padding-bottom: {{BOTTOM}}{{UNIT}};',
                ],
                'condition' => [ 'hide_pagetitle' => 'block' ]
            ]
        ); 

        $element->add_responsive_control(
            'pagetitle_margin',
            [
                'label' => esc_html__( 'Margin', 'graingrow' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'allowed_dimensions' => [ 'top', 'bottom' ],
                'selectors' => [
                    '{{WRAPPER}} .page-title' => 'margin-top: {{TOP}}{{UNIT}}; margin-bottom: {{BOTTOM}}{{UNIT}};',
                ],
                'condition' => [ 'hide_pagetitle' => 'block' ]
            ]
        );              

        $element->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pagetitle_bg',
                'label' => esc_html__( 'Background', 'graingrow' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .page-title',
                'condition' => [ 'hide_pagetitle' => 'block' ]
            ]
        );

        $element->add_control(
            'pagetitle_overlay_color',
            [
                'label' => esc_html__( 'Overlay Color', 'graingrow' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .page-title .overlay' => 'background: {{VALUE}}; opacity: 100%;filter: alpha(opacity=100);',
                ],
                'condition' => [ 'hide_pagetitle' => 'block' ]
            ]
        );

        //Extra Classes Page Title
        $element->add_control(
            'extra_classes_pagetitle',
            [
                'label'   => esc_html__( 'Extra Classes', 'graingrow' ),
                'type'    => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before'
            ]
        );

        $element->end_controls_section();
    }

    public function themesflat_options_page_footer($element) {
        // TF Footer
        $element->start_controls_section(
            'themesflat_footer_options',
            [
                'label' => esc_html__('TF Footer', 'graingrow'),
                'tab' => Controls_Manager::TAB_SETTINGS,
            ]
        );

        $element->add_control(
            'footer_heading',
            [
                'label'     => esc_html__( 'Footer', 'graingrow'),
                'type'      => Controls_Manager::HEADING,
            ]
        );       

        $element->add_control(
            'hide_footer',
            [
                'label'     => esc_html__( 'Hide Footer', 'graingrow'),
                'type'      => Controls_Manager::SELECT,
                'default'   => 'block',
                'options'   => [
                    'none'       => esc_html__( 'Yes', 'graingrow'),
                    'block'      => esc_html__( 'No', 'graingrow'),
                ],
                'selectors'  => [
                    '{{WRAPPER}} #footer' => 'display: {{VALUE}};',
                    '{{WRAPPER}} .info-footer' => 'display: {{VALUE}};' 
                ],
            ]
        );

        $element->add_responsive_control(
            'footer_padding',
            [
                'label' => esc_html__( 'Padding', 'graingrow' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'allowed_dimensions' => [ 'top', 'bottom' ],
                'selectors' => [
                    '{{WRAPPER}} #footer' => 'padding-top: {{TOP}}{{UNIT}}; padding-bottom: {{BOTTOM}}{{UNIT}};',
                ],
                'condition' => [ 'hide_footer' => 'block' ]
            ]
        );

        $element->add_control(
            'show_action_box',
            [
                'label'     => esc_html__( 'Action Box', 'graingrow'),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    '' => esc_html__( 'Theme Setting', 'graingrow'),
                    1 => esc_html__( 'Show', 'graingrow' ),
                    0 => esc_html__( 'Hide', 'graingrow' ),
                ],
                'condition' => [ 'hide_footer' => 'block' ]
            ]
        ); 

        $element->add_control(
            'footer_color',
            [
                'label' => esc_html__( 'Color', 'graingrow' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} #footer' => 'color: {{VALUE}}',
                    '{{WRAPPER}} #footer h1, {{WRAPPER}} #footer h2, {{WRAPPER}} #footer h3, {{WRAPPER}} #footer h4, {{WRAPPER}} #footer h5, {{WRAPPER}} #footer h6' => 'color: {{VALUE}}',
                    '{{WRAPPER}} #footer, #footer input, #footer select, {{WRAPPER}} #footer textarea, {{WRAPPER}} #footer a, {{WRAPPER}} footer .widget.widget-recent-news li .text .post-date, {{WRAPPER}} footer .widget.widget_latest_news li .text .post-date, {{WRAPPER}} #footer .footer-widgets .widget.widget_themesflat_socials ul li a' => 'color: {{VALUE}}',
                ],
                'condition' => [ 'hide_footer' => 'block' ]
            ]
        );       

        $element->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'footer_bg',
                'label' => esc_html__( 'Background', 'graingrow' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .footer_background .overlay-footer',
                'condition' => [ 'hide_footer' => 'block' ]
            ]
        );

        $element->add_control(
            'footer_bg_overlay',
            [
                'label' => esc_html__( 'Background Overlay', 'graingrow' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer_background' => 'background-color: {{VALUE}}',
                ],
                'condition' => [ 'hide_footer' => 'block' ]
            ]
        );

        // Bottom
        $element->add_control(
            'bottom_heading',
            [
                'label'     => esc_html__( 'Bottom', 'graingrow'),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before'
            ]
        );

        $element->add_control(
            'hide_bottom',
            [
                'label'     => esc_html__( 'Hide?', 'graingrow'),
                'type'      => Controls_Manager::SELECT,
                'default'   => 'block',
                'options'   => [
                    'none'       => esc_html__( 'Yes', 'graingrow'),
                    'block'      => esc_html__( 'No', 'graingrow'),
                ],
                'selectors'  => [
                    '{{WRAPPER}} #bottom' => 'display: {{VALUE}};' 
                ],
            ]
        );

        $element->add_control(
            'bottom_color',
            [
                'label' => esc_html__( 'Color', 'graingrow' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bottom *' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .bottom, {{WRAPPER}} .bottom a' => 'color: {{VALUE}}',
                ],
                'condition' => [ 'hide_bottom' => 'block' ]
            ]
        );

        $element->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'bottom_bg',
                'label' => esc_html__( 'Background', 'graingrow' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} #bottom',
                'condition' => [ 'hide_bottom' => 'block']
            ]
        );

        $element->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'bottom_border',
                'label' => esc_html__( 'Border', 'graingrow' ),
                'selector' => '{{WRAPPER}} #bottom .container-inside',
                'condition' => [ 'hide_bottom' => 'block']
            ]
        );

        $element->add_responsive_control(
            'bottom_padding',
            [
                'label' => esc_html__( 'Padding', 'graingrow' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'allowed_dimensions' => [ 'top', 'bottom' ],
                'selectors' => [
                    '{{WRAPPER}} #bottom .container-inside' => 'padding-top: {{TOP}}{{UNIT}}; padding-bottom: {{BOTTOM}}{{UNIT}};',
                ],
                'condition' => [ 'hide_bottom' => 'block']
            ]
        );

        //Extra Classes Footer
        $element->add_control(
            'extra_classes_footer',
            [
                'label'   => esc_html__( 'Extra Classes', 'graingrow' ),
                'type'    => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before'
            ]
        );

        $element->end_controls_section();
    }

    public function themesflat_options_page($element) {
        // TF Page
        $element->start_controls_section(
            'themesflat_page_options',
            [
                'label' => esc_html__('TF Page', 'graingrow'),
                'tab' => Controls_Manager::TAB_SETTINGS,
            ]
        );

        $element->add_control(
            'page_sidebar_layout',
            [
                'label'     => esc_html__( 'Sidebar Position', 'graingrow'),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    '' => esc_html__( 'No Sidebar', 'graingrow'),
                    'sidebar-right'     => esc_html__( 'Sidebar Right','graingrow' ),
                    'sidebar-left'      =>  esc_html__( 'Sidebar Left','graingrow' ),
                    'fullwidth'         =>   esc_html__( 'Full Width','graingrow' ),
                    'fullwidth-small'   =>   esc_html__( 'Full Width Small','graingrow' ),
                    'fullwidth-center'  =>   esc_html__( 'Full Width Center','graingrow' ),
                ],
            ]
        );

        $element->add_control(
            'main_content_heading',
            [
                'label'     => esc_html__( 'Main Content', 'graingrow'),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before'
            ]
        );

        $element->add_responsive_control(
            'main_content_padding',
            [
                'label' => esc_html__( 'Padding', 'graingrow' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'allowed_dimensions' => [ 'top', 'bottom' ],
                'selectors' => [
                    '{{WRAPPER}} #themesflat-content' => 'padding-top: {{TOP}}{{UNIT}}; padding-bottom: {{BOTTOM}}{{UNIT}};',
                ],
            ]
        ); 

        $element->add_responsive_control(
            'main_content_margin',
            [
                'label' => esc_html__( 'Margin', 'graingrow' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'allowed_dimensions' => [ 'top', 'bottom' ],
                'selectors' => [
                    '{{WRAPPER}} #themesflat-content' => 'margin-top: {{TOP}}{{UNIT}}; margin-bottom: {{BOTTOM}}{{UNIT}};',
                ],
            ]
        );

        $element->end_controls_section();
    }

    public function themesflat_options_services($element) {
        // TF Services
        $element->start_controls_section(
            'themesflat_services_options',
            [
                'label' => esc_html__('TF Services', 'graingrow'),
                'tab' => Controls_Manager::TAB_SETTINGS,
            ]
        );

        $element->add_control(
            'services_post_heading',
            [
                'label'     => esc_html__( 'Services Post', 'graingrow'),
                'type'      => Controls_Manager::HEADING,
            ]
        );

        $element->add_control(
            'services_post_icon',
            [
                'label' => esc_html__( 'Post Icon Style 1', 'graingrow' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );


        $element->add_control(
            'services_post_icon_2',
            [
                'label' => esc_html__( 'Post Icon Image Style 2', 'graingrow' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );


        $element->end_controls_section();
    }

    public function themesflat_options_team($element) {
        // TF team
        $element->start_controls_section(
            'themesflat_team_options',
            [
                'label' => esc_html__('TF Team', 'graingrow'),
                'tab' => Controls_Manager::TAB_SETTINGS,
            ]
        );

        $element->add_control(
            'team_post_heading',
            [
                'label'     => esc_html__( 'Team Post Meta', 'graingrow'),
                'type'      => Controls_Manager::HEADING,
            ]
        );

        $element->add_control(
            'team_post_description',
            [
                'label' => esc_html__( 'Description', 'graingrow' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( 'Based On USA.I’ve 8 Years Of Experience In Design. Have Any Project On Minds! Say Hi or Contact Me', 'graingrow' ),
                'placeholder' => esc_html__( 'Based On USA.I’ve 8 Years Of Experience In Design. Have Any Project On Minds! Say Hi or Contact Me', 'graingrow' ),
                'label_block' => true,
            ]
        );

        $element->add_control(
            'team_post_icon_phone',
            [
                'label' => esc_html__( 'Post Icon Phone', 'graingrow' ),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'icon-graingrow-seo26',
                    'library' => 'theme_icon',
                ],
            ]
        );
        $element->add_control(
            'team_post_phone',
            [
                'label' => esc_html__( 'Phone', 'graingrow' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( '+000 (123) 456 88', 'graingrow' ),
                'placeholder' => esc_html__( '+000 (123) 456 88', 'graingrow' ),
                'label_block' => true,
            ]
        );

        $element->add_control(
            'team_post_icon_mail',
            [
                'label' => esc_html__( 'Post Icon Mail', 'graingrow' ),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'icon-graingrow-seo25',
                    'library' => 'theme_icon',
                ],
            ]
        );
        $element->add_control(
            'team_post_mail',
            [
                'label' => esc_html__( 'Mail', 'graingrow' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( 'support@gmail.com', 'graingrow' ),
                'placeholder' => esc_html__( 'support@gmail.com', 'graingrow' ),
                'label_block' => true,
            ]
        );

        $element->add_control(
            'team_post_icon_address',
            [
                'label' => esc_html__( 'Post Icon Address', 'graingrow' ),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'icon-graingrow-seo27',
                    'library' => 'theme_icon',
                ],
            ]
        );
        $element->add_control(
            'team_post_address',
            [
                'label' => esc_html__( 'Address', 'graingrow' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( '55 Main Street, New York', 'graingrow' ),
                'placeholder' => esc_html__( '55 Main Street, New York', 'graingrow' ),
                'label_block' => true,
            ]
        );


        $element->add_control(
            'team_post_social_heading',
            [
                'label'     => esc_html__( 'Team Post Social', 'graingrow'),
                'type'      => Controls_Manager::HEADING,
            ]
        );

        $element->add_control(
            'team_post_social_icon_1',
            [
                'label' => esc_html__( 'Icon 1', 'graingrow' ),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'icon-graingrow-facebook',
                    'library' => 'theme_icon',
                ],
            ]
        );
        $element->add_control(
            'team_post_social_link_1',
            [
                'label' => esc_html__( 'Link 1', 'graingrow' ),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'placeholder' => esc_html__( 'https://your-link.com', 'graingrow' ),
                'conditions' => [
                    'relation' => 'or',
                    'terms' => [
                        [
                            'name' => 'team_post_social_icon_1[value]',
                            'operator' => '!=',
                            'value' => '',
                        ],
                    ],
                ],
            ]
        );

        $element->add_control(
            'team_post_social_icon_2',
            [
                'label' => esc_html__( 'Icon 2', 'graingrow' ),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'icon-graingrow-twitter',
                    'library' => 'theme_icon',
                ],
            ]
        );
        $element->add_control(
            'team_post_social_link_2',
            [
                'label' => esc_html__( 'Link 2', 'graingrow' ),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'placeholder' => esc_html__( 'https://your-link.com', 'graingrow' ),
                'conditions' => [
                    'relation' => 'or',
                    'terms' => [
                        [
                            'name' => 'team_post_social_icon_2[value]',
                            'operator' => '!=',
                            'value' => '',
                        ],
                    ],
                ],
            ]
        );

        $element->add_control(
            'team_post_social_icon_3',
            [
                'label' => esc_html__( 'Icon 3', 'graingrow' ),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'icon-graingrow-linkedin2',
                    'library' => 'theme_icon',
                ],
            ]
        );
        $element->add_control(
            'team_post_social_link_3',
            [
                'label' => esc_html__( 'Link 3', 'graingrow' ),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'placeholder' => esc_html__( 'https://your-link.com', 'graingrow' ),
                'conditions' => [
                    'relation' => 'or',
                    'terms' => [
                        [
                            'name' => 'team_post_social_icon_3[value]',
                            'operator' => '!=',
                            'value' => '',
                        ],
                    ],
                ],
            ]
        );

        $element->add_control(
            'team_post_social_icon_4',
            [
                'label' => esc_html__( 'Icon 4', 'graingrow' ),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'icon-graingrow-instagram',
                    'library' => 'theme_icon',
                ],
            ]
        );
        $element->add_control(
            'team_post_social_link_4',
            [
                'label' => esc_html__( 'Link 4', 'graingrow' ),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'placeholder' => esc_html__( 'https://your-link.com', 'graingrow' ),
                'conditions' => [
                    'relation' => 'or',
                    'terms' => [
                        [
                            'name' => 'team_post_social_icon_4[value]',
                            'operator' => '!=',
                            'value' => '',
                        ],
                    ],
                ],
            ]
        );

        $element->end_controls_section();
    }

    public function themesflat_options_portfolio($element) {
        // TF Portfolio
        $element->start_controls_section(
            'themesflat_portfolio_options',
            [
                'label' => esc_html__('TF Portfolio', 'graingrow'),
                'tab' => Controls_Manager::TAB_SETTINGS,
            ]
        );
        $element->end_controls_section();
    }
}

new themesflat_options_elementor();