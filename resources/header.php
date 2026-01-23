<!DOCTYPE html>
<html lang="ja" prefix="og: https://ogp.me/ns#">
<head>
	<?php get_template_part('components/meta/gtm-head'); ?>
	<?php
		global $page_title, $page_desc, $page_canonical;
		get_template_part('components/meta/meta', null, [
			"title" => $page_title,
			"desc" => $page_desc,
			"canonical" => $page_canonical
		]);
	?>
</head>
<?php $is_front = is_home() || is_front_page() || is_page("front") ? "is-front" : ""; ?>
<body id="top" class="<?= $is_front ?>">
	<?php get_template_part('components/meta/gtm-body'); ?>
	<div class="wrapper">
		<header class="header js-header">
			<div class="header__wrap js-header-wrap">
				<div class="header__main js-header-main">
					<div class="header__cont l-cont--lg">
						<h1 class="header__logo">
							<a href="<?= URL_HOME ?>" class="header__logo--link">
								<span class="header__logo--body"><img src=<?= URL_LOGO ?> alt=<?= NAME_CORP ?>></span>
								<span class="header__logo--en">RECRUITING<br class="pc">SITE</span>
							</a>
						</h1>
						<div class="header__ui">
							<a href="<?= URL_CAREER ?>" class="header__btn anm-text-up sp-hide">
								<span class="anm-text-up__wrap">
									<span class="anm-text-up__body">キャリア採用</span>
									<span class="anm-text-up__body">キャリア採用</span>
								</span>
							</a>
							<?php /* 0610非公開
							<a href="<?= URL_DISABILITY ?>" class="header__btn anm-text-up sp-hide">
								<span class="anm-text-up__wrap">
									<span class="anm-text-up__body">障がい者採用</span>
									<span class="anm-text-up__body">障がい者採用</span>
								</span>
							</a>
							*/ ?>
							<a href="<?= URL_NEW_GRADUATE ?>" class="header__btn header__btn--entry anm-text-up">
								<span class="anm-text-up__wrap">
									<span class="anm-text-up__body">ENTRY</span>
									<span class="anm-text-up__body">ENTRY</span>
								</span>
							</a>
							<button class="header__hamburger js-header-hamburger">
								<span class="header__hamburger--bar"></span>
								<span class="header__hamburger--bar"></span>
								<span class="header__hamburger--bar"></span>
							</button>
						</div>
					</div>
				</div>
				<div class="header__nav js-header-nav">
					<div class="l-cont">
						<div class="header__nav__cont js-header-nav-cont">
							<div class="header__nav__main">
								<div class="header__nav__gnav">
									<?php get_template_part(NAV_BASIC); ?>
								</div>
								<div class="header__nav__text">
									<p class="header__nav__lead">
										<img src="<?= URL_SVG ?>nav-lead.svg" alt="仲間と共に挑む。私たちだから築ける未来がある。">
									</p>
									<p class="header__nav__hd">
										<img src="<?= URL_SVG ?>nav-hd.svg" alt="make the Future">
									</p>
									<a href="<?= URL_NEW_GRADUATE ?>" class="header__nav__btn anm-text-up">
										<span class="anm-text-up__wrap">
											<span class="anm-text-up__body">ENTRY</span>
											<span class="anm-text-up__body">ENTRY</span>
										</span>
									</a>
								</div>
							</div>
							<div class="header__nav__news w-full">
								<?php get_template_part(NEWS_ITEM, null, [
									"component" => "div",
									"href" => "",
									"is_external" => false,
									"date" => "2024.08.20",
									"desc" => "システムメンテナンスのお知らせ：2024年8月23日（金）22：00～翌01：00",
									"icon" => "pdf",
									"border" => "top"
								]); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="header__bgs js-header-bgs">
					<div class="header__circle js-header-circle">
						<img src="<?= URL_SVG ?>header-circle.svg" alt="" class="fit-cover">
					</div>
					<div class="header__bg js-header-bg"></div>
				</div>
			</div>
		</header>
		<main class="main">