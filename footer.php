<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

<div  id="site-info">
<a href="<?php echo home_url( '/' ); ?>"  target="_blank" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
&nbsp ©2011
&nbsp由 <a href="http://wordpress.org/" target="_blank" >WordPress</a>驱动&nbsp 遵循<a href="http://creativecommons.org/licenses/by-nc-nd/2.5/" target="_blank">CC2.5</a>共享协议 <!-- #site-info -->

<strong class="theme">Themes by <a href="http://blog.saku.cc/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/saku.cc.png"  /></a></strong>

</div>


		</div><!-- #colophon -->
        

        
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<div id="web11">
<div class="web1"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank"><img src="<?php bloginfo('template_url');?>/images/Rss.png" width="48" height="48" /></a></div>
<div class="web1"><a href="http://twitter.com/Miao_SAKU" target="_blank"><img src="<?php bloginfo('template_url');?>/images/Twitter.PNG" width="48" height="48" /></a></div>
<div class="web1"><a href="https://profiles.google.com/u/0/hm00com" target="_blank"><img src="<?php bloginfo('template_url');?>/images/Buzz.png" width="48" height="48" /></a></div>
<div class="web1"><a href="hm00com@gmail.com" target="_blank"><img src="<?php bloginfo('template_url');?>/images/Gmail.PNG" width="48" height="48" /></a></div>
</div>
	</body>
</html>
