<?php
// Register action to declare required plugins
add_action('tgmpa_register', 'themesflat_recommend_plugin');
function themesflat_recommend_plugin() {
    
    $plugins = array(
        array(
            'name' => esc_html__('Elementor', 'graingrow'),
            'slug' => 'elementor',
            'required' => true
        ),
        array(
            'name' => esc_html__('ThemesFlat Core', 'graingrow'),
            'slug' => 'themesflat-core',
            'source' => THEMESFLAT_DIR . 'inc/plugins/themesflat-core.zip',
            'required' => true
        ),
        array(
            'name' => esc_html__('Revslider', 'graingrow'),
            'slug' => 'revslider',
            'source' => THEMESFLAT_DIR . 'inc/plugins/revslider.zip',
            'required' => false
        ),
        array(
            'name' => esc_html__('Contact Form 7', 'graingrow'),
            'slug' => 'contact-form-7',
            'required' => false
        ),    
        array(
            'name' => esc_html__('Mailchimp', 'graingrow'),
            'slug' => 'mailchimp-for-wp',
            'required' => false
        ),        
        array(
            'name' => esc_html__('One Click Demo Import', 'graingrow'),
            'slug' => 'one-click-demo-import',
            'required' => false
        )   
    );
    
    tgmpa($plugins);
}

