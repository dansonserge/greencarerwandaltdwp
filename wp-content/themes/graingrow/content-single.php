<?php
/**
 * @package graingrow
 */
global $themesflat_thumbnail;
$themesflat_thumbnail = 'themesflat-blog';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post blog-single' ); ?>>
	<!-- begin feature-post single  -->
	<?php get_template_part( 'tpl/feature-post-single'); ?>
	<!-- end feature-post single-->

	<div class="content-post-sigle-title">
		<?php if ( themesflat_get_opt('blog_featured_title') != '' ): ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php endif; ?>
	</div>
	

	<div class="main-post">		
		<div class="entry-content clearfix">
			<?php the_content(); ?>
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'graingrow' ),
				'after'  => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>'
				) );
				?>
		</div><!-- .entry-content -->
	</div><!-- /.main-post -->
</article><!-- #post-## -->
<?php if( themesflat_get_opt('show_entry_footer_content') == 1 ): ?>		
	<?php themesflat_entry_footer(); ?>
<?php endif; ?>