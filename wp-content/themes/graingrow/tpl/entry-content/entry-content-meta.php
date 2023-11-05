<?php  
/**
 * @package graingrow
 */
?>
<?php 
echo '<div class="post-meta">';
    $meta_elements = themesflat_layout_draganddrop(themesflat_get_opt( 'meta_elements' ));
    foreach ( $meta_elements as $meta_element ) :
        if ( 'date' == $meta_element ) {
            echo '<span class="item-meta post-date">';   
                $archive_year  = get_the_time('Y'); 
                $archive_month = get_the_time('m'); 
                $archive_day   = get_the_time('d');                 
                echo '<i class="meta-icon icon-graingrow-seo28" aria-hidden="true"></i><a class="meta-text" href="'.get_day_link( $archive_year, $archive_month, $archive_day).'">'.get_the_date().'</a>';
            echo '</span>';
        }   elseif ( 'author' == $meta_element ) {
                echo '<span class="item-meta post-author">';
                    printf(
                    '<i class="meta-icon icon-graingrow-grow7" aria-hidden="true"></i><a class="meta-text" href="%s" title="%s" rel="author">By %s</a>',
                    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) )),
                    esc_attr( sprintf( esc_html__( 'View all posts by %s', 'graingrow' ), get_the_author() ) ),get_the_author());
                echo '</span>';
        } elseif ( 'comment' == $meta_element ) {
            echo'<span class="item-meta post-comments"><i class="meta-icon icon-graingrow-grow8" aria-hidden="true"></i><span class="meta-text">';
                    comments_number ();
            echo '</span></span>';
        } elseif ( 'view' == $meta_element ) {
            echo '<span class="item-meta post-view"><i class="meta-icon icon-graingrow-view" aria-hidden="true"></i>'. themesflat_get_post_views(get_the_ID()) .'</span>';
        }
    endforeach;
echo '</div>';
?>