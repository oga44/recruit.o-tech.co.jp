<?php
	$page_title = $args["title"] ? $args["title"] : "";
	$page_desc = $args["desc"] ? $args["desc"] : SITE_DESC;
	$page_canonical = $args["canonical"] ? $args["canonical"] : URL_HOME;
	$page_type = is_home() || is_front_page() ? "website" : "article";

	if (isset($page_title)) {
		$titles = [SITE_NAME];
		if(is_array($page_title)) {
			$titles = array_merge($page_title, $titles);
		} elseif (is_string($page_title)) {
			if($page_title != '') array_unshift($titles, $page_title);
		}
		$view_page_title = implode(PAGE_TITLE_DELIMITER, $titles);
	} else {
		$view_page_title = SITE_NAME;
	}
?>

<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?= URL_FAVICON ?>">
<link rel="apple-touch-icon-precomposed" href="<?= URL_TOUCH_ICON ?>">
<title><?= $view_page_title ?></title>
<meta name="description" content="<?= $page_desc ?>">
<meta property="og:title" content="<?= $view_page_title ?>">
<meta property="og:type" content="<?= $page_type ?>">
<meta property="og:url" content="<?= $page_canonical ?>">
<meta property="og:site_name" content="<?= SITE_NAME; ?>">
<meta property="og:description" content="<?= $page_desc ?>">
<meta property="og:image" content="<?= URL_STATIC ?>ogp.png">
<meta name="twitter:card" content="summary_large_image">
<link href="<?= $page_canonical ?>" rel="canonical">
<?php wp_head(); ?>
<?php get_template_part('components/meta/font'); ?>
<?php get_template_part('components/meta/css'); ?>