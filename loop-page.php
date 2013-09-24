<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 *循环显示的页面。
 *
 *循环显示的职位及文章内容。见
 * http://codex.wordpress.org/The_Loop了解它，
 * http://codex.wordpress.org/Template_Tags理解
 *在它使用的标记。
 *
 *也可以说是带环page.php儿童主题覆盖。
 *
 *@包WordPress的
 *@分装Twenty_Ten
 *@自二十十大1.2
 */
 
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>



				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## papge -->

<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>