<?php if ( is_page_template( 'tpl/front-page.php' ) || is_404() || get_page_template_slug( get_queried_object_id() ) == 'elementor_header_footer' ) { return; } ?>

<?php 

    $show_action_box = themesflat_get_opt('show_action_box');
    if (themesflat_get_opt_elementor('show_action_box') != '') {
        $show_action_box = themesflat_get_opt_elementor('show_action_box');
    }
    if ($show_action_box == 1) :  
?>

    <div class="container action-bx">
        <div class="row">
            <div class="col-lg-12">
                <div class="action-box themesflat-action-box">
                <div class="overlay"></div>
                <div class="shape1 ani6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                        <path d="M9.14392 0.480024L17.4879 8.57388L27.7641 3.13939L22.6448 13.5762L30.9888 21.67L19.4809 20.0264L14.3617 30.4632L12.3687 19.0107L0.860762 17.3671L11.1369 11.9326L9.14392 0.480024Z" fill="white"/>
                    </svg>
                </div>
                <div class="shape2 ani2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                        <path d="M9.14392 0.480024L17.4879 8.57388L27.7641 3.13939L22.6448 13.5762L30.9888 21.67L19.4809 20.0264L14.3617 30.4632L12.3687 19.0107L0.860762 17.3671L11.1369 11.9326L9.14392 0.480024Z" fill="white"/>
                    </svg>
                </div>
                <div class="shape3 ani7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
                        <path d="M2.44078 0.65913L24.0697 15.0532L0.789568 26.5874L2.44078 0.65913Z" fill="white"/>
                    </svg>
                </div>
                <div class="shape4 ani7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
                        <path d="M2.44078 0.65913L24.0697 15.0532L0.789568 26.5874L2.44078 0.65913Z" fill="white"/>
                    </svg>
                </div>
                <div class="inner">
                    <div class="heading-wrap">
                        <h4 class="bd-box b5"><?php echo themesflat_get_opt('text_action_box'); ?></h4>
                        <h2 class="heading"><?php echo themesflat_get_opt('heading_action_box'); ?></h2>
                        <div class="form-action-box">
                            <?php echo do_shortcode(themesflat_get_opt('form_action_box')); ?>
                        </div>
                    </div>      
                    <div class="image-acb ani4">
                        <img  src="<?php echo esc_url(themesflat_get_opt('action_box_features_image')); ?>" alt="images" />
                    </div>          
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
