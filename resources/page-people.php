<?php
	$page_title = [NAME_PEOPLE];
	$page_desc = "オーテック採用サイトの社員紹介ページです。オーテックで働く人たちに、入社のきっかけや、いま担当している仕事の面白さを訊いてみました。";
	$page_canonical = URL_PEOPLE;
	get_header();
?>
<article class="p-people">
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
				"name" => NAME_PEOPLE
			],
		],
		"en" => "PEOPLE",
		"jp" => NAME_PEOPLE,
		"images" => "people/people-mv.jpg",
	]); ?>
	<div class="article-body">
		<div class="l-cont">
			<div class="p-people__list">
				<?php
					$list = [
						$peoples[0],
						$peoples[1],
						$peoples[2],
						$peoples[3],
						$peoples[4],
					];

					$i = 1;
					foreach($list as $item) {
						get_template_part(PEOPLE_CARD, null, [
							"href" => "./people-".$i."/",
							"img" => "cms/people-".sprintf('%02d', $i)."-mv.jpg",
							"hd" => str_replace("<br>", "", $item["hd"]),
							"profile" => [
								"name" => $item["name"],
								"icon" => $item["dept"],
								"school" => $item["school"]."卒",
								"year" => $item["entry"]."年入社"
							],
							"archive" => true,
						]);
						$i++;
					}
				?>
			</div>
		</div>
		<div class="m-lower-nav">
			<div class="m-lower-nav__cont l-cont--pc">
				<?php get_template_part(BUTTON_PICTURE, null, [
					"href" => URL_CROSSTALK,
					"jp" => "クロストーク",
					"en" => "CROSS TALK",
					"img" => "common/bnr-cross.jpg",
				]); ?>
				<?php get_template_part(BUTTON_PICTURE, null, [
					"href" => URL_PROJECT_STORY,
					"jp" => "プロジェクトストーリー",
					"en" => "PROJECT STORY",
					"img" => "common/bnr-project.jpg",
				]); ?>
			</div>
		</div>
	</div>
</article>
<?php get_footer(); ?>