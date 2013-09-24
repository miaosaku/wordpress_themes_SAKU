<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
	<meta name="keywords" content="<?php wp_title(); echo ' , '; bloginfo( 'name' ); echo ' , '; bloginfo( 'description' ); ?>" />
	<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script  src="<?php bloginfo('template_url');?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/slimbox2.js"></script>
<script type="text/javascript">jQuery(function($){$("'.entry-content.' a[rel!=link]:has(img)").slimbox();});</script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.lazyload.js"></script>
<script type="text/javascript">
jQuery(document).ready(
function($){
$("img").lazyload({
     placeholder : "<?php bloginfo('template_url');?>/images/fill.gif",
     effect      : "fadeIn"
    });
});
</script>
    
    
	<?php wp_head(); ?> 
    
    <?php if ( is_singular() ){ ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/comments-ajax.js"></script>
	<?php } ?>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
<?php if ( is_singular() ){ ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/comments-ajax.js"></script>
<?php } ?> 



</head>


<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<?php include(TEMPLATEPATH . '/slideshow.php'); ?>
            
<nav id="access" role="navigation">
				<?php wp_nav_menu( array('menu' => 'Header Menu','menu_id'=>'nav','container'=>'ul' )); ?> <!-- editable within the Wordpress backend -->
			</nav>




            <div id="a1">
				<div id="branding" role="banner">
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> id="site-title">
					<span>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</span>
				</<?php echo $heading_tag; ?>>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>
                </div>
           <!-- start -->

<!-- end -->
			
			</div>
			</div><!-- #branding -->

<!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">

