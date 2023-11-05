<?php 
$has_carousel = '';
if ( $settings['carousel'] == 'yes' ) {
    $has_carousel = 'has-carousel';
}

$classes = 'tf-portfolio-wrap tf-widget-portfolio-wrap';
$classes .= ' '.$settings['types'];
$classes .= ' '.$settings['style'];
$classes .= ' '.$has_carousel;

if ( get_query_var('paged') ) {
   $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
   $paged = get_query_var('page');
} else {
   $paged = 1;
}
$query_args = array(
    'post_type' => 'portfolios',
    'posts_per_page' => $settings['posts_per_page'],
    'paged'     => $paged
);

if (! empty( $settings['posts_categories'] )) {         
    $query_args['tax_query'] = array(
                            array(
                                'taxonomy' => 'portfolios_category',
                                'field'    => 'slug',
                                'terms'    => $settings['posts_categories']
                            ),
                        );
}        
if ( ! empty( $settings['exclude'] ) ) {                
    if ( ! is_array( $settings['exclude'] ) )
        $exclude = explode( ',', $settings['exclude'] );

    $query_args['post__not_in'] = $exclude;
}

$query_args['orderby'] = $settings['order_by'];
$query_args['order'] = $settings['order'];

if ( $settings['sort_by_id'] != '' ) {  
    $sort_by_id = array_map( 'trim', explode( ',', $settings['sort_by_id'] ) );
    $query_args['post__in'] = $sort_by_id;
    $query_args['orderby'] = 'post__in';
}

$show_filter_class = '';

$query = new WP_Query( $query_args );
if ( $query->have_posts() ) : ?>
<div class="<?php echo esc_attr($classes); ?>">

    <?php
    if ($settings['show_filter'] == 'yes'):
        $show_filter_class = 'container-filter show-filter';
        $filter_category_order = $settings['filter_category_order'];
        $filters = wp_list_pluck( get_terms( 'portfolios_category','hide_empty=1'), 'name','slug' );
        echo '<ul class="portfolio-filter posttype-filter"><li class="active"><a data-filter="*" href="#">' . esc_html__( 'All', 'themesflat-core' ) . '</a></li>'; 
        if ($filter_category_order == '') { 

            foreach ($filters as $key => $value) {
                echo '<li><a data-filter=".' . esc_attr( strtolower($key)) . '" href="#" title="' . esc_attr( $value ) . '">' . esc_html( $value ) . '</a></li>'; 
            }
        
        }
        else {
            $filter_category_order = explode(",", $filter_category_order);
            foreach ($filter_category_order as $key) {
                $key = trim($key);
                echo '<li><a data-filter=".' . esc_attr( strtolower($key)) . '" href="#" title="' . esc_attr( $filters[$key] ) . '">' . esc_html( $filters[$key] ) . '</a></li>'; 
            }
        }
        echo '</ul>';
    endif;
    ?>

    <div class="wrap-portfolios-post row <?php echo esc_attr($settings['columns']); ?> <?php echo esc_attr($show_filter_class); ?>">

        <?php if ( $settings['carousel'] == 'yes' ): ?>
            <div class="owl-carousel" data-loop="<?php echo esc_attr($settings['carousel_loop']); ?>" data-space="<?php echo esc_attr($settings['spacing_item_carousel']); ?>" data-auto="<?php echo esc_attr($settings['carousel_auto']); ?>" data-column="<?php echo esc_attr($settings['carousel_column_desk']); ?>" data-column2="<?php echo esc_attr($settings['carousel_column_tablet']); ?>" data-column3="<?php echo esc_attr($settings['carousel_column_mobile']); ?>" data-prev_icon="<?php echo esc_attr($settings['carousel_prev_icon']) ?>" data-next_icon="<?php echo esc_attr($settings['carousel_next_icon']) ?>" data-arrow="<?php echo esc_attr($settings['carousel_arrow']) ?>" data-bullets="<?php echo esc_attr($settings['carousel_bullets']) ?>">
        <?php endif; ?>

        <?php $count = 1; while ( $query->have_posts() ) : $query->the_post();                                      
            ?>
            <?php 
            global $post;
            $id = $post->ID;
            $termsArray = get_the_terms( $id, 'portfolios_category' );
            $termsString = "";

            if ( $termsArray ) {
                foreach ( $termsArray as $term ) {
                    $itemname = strtolower( $term->slug ); 
                    $itemname = str_replace( ' ', '-', $itemname );
                    $termsString .= $itemname.' ';
                }
            }

            
            ?>              
            <div class="item <?php echo esc_attr( $termsString ); ?>  <?php if( $count == 2 ) echo 'active';?>">
                <div class="portfolios-post portfolios-post-<?php the_ID(); ?>">
                    <div class="featured-post">
                        <a href="<?php echo get_the_permalink(); ?>">
                        <?php 
                            if ( has_post_thumbnail() ) { 
                                echo sprintf('<img src="%s" alt="image">', \Elementor\Group_Control_Image_Size::get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail', $settings ));
                            }                                           
                        ?>
                        </a>
                        <div class="content">
                            <div class="inner-content">
                                <h4 class="title">
                                     <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                </h4>
                                <div class="portfolios-category"><?php echo esc_attr ( the_terms( get_the_ID(), 'portfolios_category', '', ', ', '' ) ); ?></div>
                                <div class="tf-button-container">
                                    <a href="<?php echo esc_url( get_permalink() ) ?>" class="tf-button-pj">
                                        <?php echo \Elementor\Addon_Elementor_Icon_manager_graingrow::render_icon( $settings['post_icon_readmore'], [ 'aria-hidden' => 'true' ] );?>
                                    </a>
                                </div>
                            </div>                                              
                        </div>
                    </div>
                </div>
            </div>               
        <?php $count++; endwhile; ?>

        <?php if ( $settings['carousel'] == 'yes' ): ?>
            </div>
        <?php endif; ?>

    </div>
    <?php if ( $settings['show_loadmore'] == 'yes' && $settings['carousel'] == 'no' ) {
					themesflat_pagination_posttype($query, 'loadmore' ); wp_reset_postdata();
				} else {
					wp_reset_postdata();
				} ?>
</div>
<?php
else:
    esc_html_e('No posts found', 'themesflat-core');
endif;