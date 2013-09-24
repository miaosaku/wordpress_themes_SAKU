<?php
/*
Template Name: my-archive
*/
?>
<?php
/*
璇存槑锛氭寜鍏堝悗椤哄簭鍒嗕负锛孋SS | PHP | jQuery
*/
?>
<!--鍗氬header璋冪敤-->
<?php get_header(); ?>

<!--杩欓噷寮€濮婥SS鏍峰紡瀹氫箟-->



<!--杩欓噷寮€濮嬪疄鐜板姛鑳�-->

<div id="container">
	<div class="title">
		<h2><?php the_title(); ?></h2>
		<div class="fixed"></div>
	</div>
	<div class="content">
	
	<!--鏍稿績浠ｇ爜寮€濮�-->
	
<a id="expand_collapse" href="#">全部展开/收缩</a>
<div id="archives"><?php archives_list_SHe(); ?></div>
<!--鏍稿績浠ｇ爜缁撴潫-->
		
		
		<div class="fixed"></div>
	</div>
	</div>
    
    <div>
	<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>

<!--杩欓噷寮€濮媕Query-->

