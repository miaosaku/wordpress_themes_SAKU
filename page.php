<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 **模板来显示所有网页。
 *
 *这是模板，显示默认情况下所有的网页。
 *请注意，这是WordPress的构造页面
 *和其他'的网页，在你的WordPress站点将使用
 *不同的模板。
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 / *执行循环来输出页面。
*如果你想在子重载主题这就包含文件
*所谓环page.php，这将被使用。
* /
			 */
			get_template_part( 'loop', 'page' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
