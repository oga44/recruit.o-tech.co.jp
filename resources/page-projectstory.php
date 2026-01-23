<?php
	$page_title = [NAME_PROJECT_STORY];
	$page_desc = "オーテック採用サイトのプロジェクトストーリー紹介ページです。オーテックで働く人たちに、これまでに手がけたプロジェクトの裏側について、技術やプロジェクトの大変だったことなどを訊いてみました。";
	$page_canonical = URL_PROJECT_STORY;
	get_header();
?>
<article class="p-project-story">
	<?php get_template_part(ARTICLE_HEAD, null, [
		"list" => [
			[
				"href" => URL_HOME,
				"name" => "HOME"
			],
			[
				"href" => URL_INTERVIEW,
				"name" => NAME_INTERVIEW
			],
			[
				"href" => "",
				"name" => NAME_PROJECT_STORY
			],
		],
		"en" => "PROJECT STORY",
		"jp" => NAME_PROJECT_STORY,
		"images" => "projectstory/projectstory-mv.jpg",
	]); ?>
	<div class="article-body">
		<div class="l-cont">
			<div class="m-second-nav">
				<?php get_template_part(BUTTON_SECOND_NAV, null, [
					"href" => "./projectstory-1/",
					"img" => "cms/projectstory-01-mv.jpg",
					"shoulder" => "PROJECT STORY 01",
					"hd" => $projects[0]["hd"],
					"place" => $projects[0]["place"],
				]); ?>
				<?php get_template_part(BUTTON_SECOND_NAV, null, [
					"href" => "./projectstory-2/",
					"img" => "cms/projectstory-02-mv.jpg",
					"shoulder" => "PROJECT STORY 02",
					"hd" => $projects[1]["hd"],
					"place" => $projects[1]["place"],
				]); ?>
				<?php get_template_part(BUTTON_SECOND_NAV, null, [
					"href" => "./projectstory-3/",
					"img" => "cms/projectstory-03-mv.jpg",
					"shoulder" => "PROJECT STORY 03",
					"hd" => $projects[2]["hd"],
					"place" => $projects[2]["place"],
				]); ?>
			</div>
		</div>
		<div class="m-lower-nav">
			<div class="m-lower-nav__cont l-cont--pc">
				<?php get_template_part(BUTTON_PICTURE, null, [
					"href" => URL_PEOPLE,
					"jp" => "社員紹介",
					"en" => "PEOPLE",
					"img" => "common/bnr-people.jpg",
				]); ?>
				<?php get_template_part(BUTTON_PICTURE, null, [
					"href" => URL_CROSSTALK,
					"jp" => "クロストーク",
					"en" => "CROSS TALK",
					"img" => "common/bnr-cross.jpg",
				]); ?>
			</div>
		</div>
	</div>
</article>
<?php get_footer(); ?>