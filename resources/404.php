<?php
	// page meta settings
	global $page_title, $page_desc, $page_canonical;
	$page_title = "404";
	$page_desc = "お探しのページが見つかりませんでした。一時的にアクセスができない状況にあるか、移動もしくは削除された可能性があります。";
	$page_canonical = URL_404;

	get_header();
?>
<article class="p-404 l-article">
</article>
<?php get_footer(); ?>