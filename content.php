<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php 
if ( ! is_single() ):
  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
  $url = $thumb['0'];
?>
<div class="post-thumbnail-wrapper">
  <div class="post-thumbnail-box<?php if ( ! $url ): echo ( ' no-thumbnail' ); endif; ?>"<?php if ( $url ): echo ( ' style="background-image: url('.$url.');"' ); endif; ?> >
    <a href="<?php echo( esc_url( get_permalink() ) ); ?>" rel="bookmark">
      <div class="entry-title">
        <h3><?php echo ( get_the_date() ); ?></h3>
        <?php the_title( '<h1>', '</h1>' ); ?>
      </div>
    </a>    
  </div>
</div>
<?php
endif;
?>

<?php if ( is_single() ): ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		//twentyfifteen_post_thumbnail();
	?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class="entry-meta"><?php 
              echo( get_the_date() ); 
              
              $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfifteen' ) );
            if ( $categories_list && twentyfifteen_categorized_blog() ) {
                printf( ' - <span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
                    _x( 'Categories', 'Used before category names.', 'twentyfifteen' ),
                    $categories_list
                );
            }

            $tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfifteen' ) );
            if ( $tags_list ) {
                printf( ' - <span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
                    _x( 'Tags', 'Used before tag names.', 'twentyfifteen' ),
                    $tags_list
                );
            }
              ?></p>
          
        <?php
            the_excerpt();            
		?>      
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			/*wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );*/
		?>
	</div><!-- .entry-content -->

	<?php
		// Author bio.
		//if ( is_single() && get_the_author_meta( 'description' ) ) :
		//	get_template_part( 'author-bio' );
		//endif;
	?>

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
<?php endif; ?>