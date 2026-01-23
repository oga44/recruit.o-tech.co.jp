<?php
	$page_title = [NAME_CROSSTALK];
	$page_desc = "オーテック採用サイトのクロストーク紹介ページです。オーテックで働く人たちに、働きやすさについてや、社内の文化などについて対談形式で訊いてみました。";
	$page_canonical = URL_CROSSTALK;
	get_header();
?>
<article class="p-crosstalk">
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
				"name" => NAME_CROSSTALK
			],
		],
		"en" => "CROSS TALK",
		"jp" => NAME_CROSSTALK,
		"images" => "crosstalk/crosstalk-mv.jpg",
	]); ?>
	<div class="article-body">
		<div class="l-cont">
			<div class="m-second-nav">
				<?php
					$i = 1;
					$cross_list = [$crosstalks[0], $crosstalks[1], $crosstalks[2]];
					foreach ($cross_list as $item) {
						get_template_part(BUTTON_SECOND_NAV, null, [
							"href" => "./crosstalk-".$i."/",
							"img" => "cms/cross-".$item["num"]."-mv.jpg",
							"num" => $item["num"],
							"hd" => $item["hd"],
							"cross" => $item["cross"],
							"sp_btn_hide" => true,
						]);
						$i++;
					}
				?>
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