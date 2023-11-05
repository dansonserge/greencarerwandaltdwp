<?php 

$style_header = themesflat_get_opt('style_header');
if (themesflat_get_opt_elementor('style_header') != '') {
    $style_header = themesflat_get_opt_elementor('style_header');
}
$topbar = themesflat_get_opt('topbar_show');
if (themesflat_get_opt_elementor('topbar_show') != '') {
    $topbar = themesflat_get_opt_elementor('topbar_show');
}
if ( $topbar != 1 ) return;
?>
<!-- Topbar -->
<?php if($style_header == 'header-02'): ?>
    <div class="themesflat-top">    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inside">
                        <div class="content-left">
                            <ul class="flat-information">

                                <?php if( themesflat_get_opt('topbar_address') != '' ): ?>
                                <li>
                                    <?php echo wp_kses(themesflat_get_opt('topbar_address_label'), themesflat_kses_allowed_html()); ?>
                                    <span><?php echo esc_attr(themesflat_get_opt('topbar_address')); ?></span>
                                </li>
                                <?php endif; ?>

                                <?php if( themesflat_get_opt('topbar_email') != '' ): ?>
                                <li>
                                    <?php echo wp_kses(themesflat_get_opt('topbar_email_label'), themesflat_kses_allowed_html()); ?>
                                    <span><?php echo esc_attr(themesflat_get_opt('topbar_email')); ?></span>
                                </li>
                                <?php endif; ?>

                               

                                
                            </ul>
                        </div><!-- content-left -->

                        <div class="content-right">
                            <?php  
                                if ( themesflat_get_opt('social_topbar') == 1 ): 
                                echo '<span class="label-social">'.esc_html_e( 'Follow Us:', 'graingrow' ).'</span>';
                                    themesflat_render_social();    
                                endif;
                            ?>
                        </div><!-- content-right -->
                    </div><!-- /.container-inside -->
                </div>
            </div>
        </div><!-- /.container -->        
    </div><!-- /.topbar -->
<?php else: ?>
    <div class="themesflat-top">    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inside">
                        <div class="content-left">
                            <ul class="flat-information">

                                <?php if( themesflat_get_opt('topbar_address') != '' ): ?>
                                <li>
                                    <?php echo wp_kses(themesflat_get_opt('topbar_address_label'), themesflat_kses_allowed_html()); ?>
                                    <span><?php echo esc_attr(themesflat_get_opt('topbar_address')); ?></span>
                                </li>
                                <?php endif; ?>

                                <?php if( themesflat_get_opt('topbar_email') != '' ): ?>
                                <li>
                                    <?php echo wp_kses(themesflat_get_opt('topbar_email_label'), themesflat_kses_allowed_html()); ?>
                                    <span><?php echo esc_attr(themesflat_get_opt('topbar_email')); ?></span>
                                </li>
                                <?php endif; ?>

                               

                                
                            </ul>
                        </div><!-- content-left -->

                        <div class="content-right">
                            <?php  
                                if ( themesflat_get_opt('social_topbar') == 1 ): 
                                echo '<span class="label-social">'.esc_html_e( 'Follow Us:', 'graingrow' ).'</span>';
                                    themesflat_render_social();    
                                endif;
                            ?>
                        </div><!-- content-right -->
                    </div><!-- /.container-inside -->
                </div>
            </div>
        </div><!-- /.container -->        
    </div><!-- /.topbar -->
<?php endif; ?>