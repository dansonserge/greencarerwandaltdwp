<?php 
$header_search_box = themesflat_get_opt('header_search_box');
if (themesflat_get_opt_elementor('header_search_box') != '') {
    $header_search_box = themesflat_get_opt_elementor('header_search_box');
}

$header_cart_icon = themesflat_get_opt('header_cart_icon');
if (themesflat_get_opt_elementor('header_cart_icon') != '') {
    $header_cart_icon = themesflat_get_opt_elementor('header_cart_icon');
}

$header_sidebar_toggler = themesflat_get_opt('header_sidebar_toggler');
if (themesflat_get_opt_elementor('header_sidebar_toggler') != '') {
    $header_sidebar_toggler = themesflat_get_opt_elementor('header_sidebar_toggler');
}

$header_button_show = themesflat_get_opt('header_button_show');
if (themesflat_get_opt_elementor('header_button_show') != '') {
    $header_button_show = themesflat_get_opt_elementor('header_button_show');
}
?>
<?php get_template_part( 'tpl/topbar'); ?>
<header id="header" class="header header-01 <?php echo themesflat_get_opt_elementor('extra_classes_header'); ?>">
    <div class="inner-header">  
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-wrap clearfix">
                        <div class="header-ct-left">
                            <?php get_template_part( 'tpl/header/brand'); ?>
                        </div>
                        <div class="header-ct-center">
                            <div class="inner-center">
                                <?php get_template_part( 'tpl/header/navigator'); ?>
                                    <?php if ( $header_search_box == 1 ) :?>
                                        <div class="show-search">
                                            <a href="#"><i class="icon-graingrow-seo10"></i></a> 
                                            <div class="submenu top-search widget_search">
                                                <?php get_search_form(); ?>
                                            </div>        
                                        </div> 
                                    <?php endif;?>
                            </div>
                        </div>
                        <div class="header-ct-right">
                            <?php if ( $header_cart_icon == 1 ) :?>
                                <?php get_template_part( 'tpl/header/header-cart'); ?>
                            <?php endif;?>

                            <?php if ( $header_sidebar_toggler == 1 ) :?>
                                <div class="header-modal-menu-left-btn">
                                    <div class="modal-menu-left-btn">
                                        <i class="icon-graingrow-seo9"></i>
                                    </div>
                                </div><!-- /.header-modal-menu-left-btn --> 
                            <?php endif;?>

                            <?php if ( $header_button_show == 1 ) :?>

                            <?php if ( themesflat_get_opt('header_button_text') != '' && themesflat_get_opt('header_button_url') != '' ) :?>
                            <div class="wrap-btn-header">
                                <a class="btn-header bd-box b5" href="<?php echo esc_url(themesflat_get_opt('header_button_url')) ?>"><?php echo themesflat_get_opt('header_button_text'); ?></a> 
                            </div>
                            <?php endif;?>
                            <?php endif;?>

                            <div class="btn-menu">
                                <span class="line-1"></span>
                            </div><!-- //mobile menu button -->
                        </div>
                    </div>                
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

    <div class="canvas-nav-wrap">
        <div class="overlay-canvas-nav"><div class="canvas-menu-close"><span></span></div></div>
        <div class="inner-canvas-nav">
            <?php get_template_part( 'tpl/header/brand-mobile'); ?>
            <nav id="mainnav_canvas" class="mainnav_canvas" role="navigation">
                <?php
                    wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'themesflat_menu_fallback', 'container' => false ) );
                ?>
            </nav><!-- #mainnav_canvas -->  
        </div>
    </div><!-- /.canvas-nav-wrap --> 
</header><!-- /.header --> 