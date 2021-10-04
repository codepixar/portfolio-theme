<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Startup
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Post Item Start

?>

<article id="<?php the_ID(); ?>" <?php post_class('blog_item'); ?>>
	<?php 
	/**
	 * Blog Post thumbnail
	 * @Hook  startup_blog_posts_thumb
	 *
	 * @Hooked startup_blog_posts_thumb_cb
	 * 
	 *
	 */
	do_action( 'startup_blog_posts_thumb' );

	/**
	 * 
	 * Blog details wrapper start hook function.
	 * column end.
	 *
	 * Hook startup_blog_details_wrap_start
	 *
	 * @Hooked startup_blog_details_wrap_start_cb
	 *  
	 */
	do_action( 'startup_blog_details_wrap_start' );
	
	/**
	 * Blog Post Meta
	 * @Hook  startup_blog_posts_meta
	 *
	 * @Hooked startup_blog_posts_meta_cb
	 * 
	 *
	 */
	// do_action( 'startup_blog_posts_meta' );

	/**
	 * Blog Post title
	 * @Hook  startup_blog_posts_title
	 *
	 * @Hooked startup_blog_posts_title_cb
	 * 
	 *
	 */
	do_action( 'startup_blog_posts_title' );		
	
	/**
	 * Blog Excerpt With read more button
	 * @Hook  startup_blog_posts_excerpt
	 *
	 * @Hooked startup_blog_posts_excerpt_cb
	 * @Hooked startup_blog_read_more_cb
	 * 
	 *
	 */
	do_action( 'startup_blog_posts_excerpt' );
	
	/**
	 * Blog posts info links hook function.
	 * @Hook  startup_blog_posts_info_link
	 *
	 * @Hooked startup_blog_posts_info_link_cb
	 * 
	 *
	 */
	do_action( 'startup_blog_posts_info_link' );

	/**
	 * 
	 * Blog details wrapper end hook function.
	 * column end.
	 *
	 * Hook startup_blog_details_wrap_end
	 *
	 * @Hooked startup_blog_details_wrap_end_cb
	 *  
	 */
	do_action( 'startup_blog_details_wrap_end' );
	
	?>
</article>