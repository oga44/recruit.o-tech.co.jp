<?php
	// setting
	$images = "support/support-";
	$page_title = [NAME_SUPPORT];
	$page_desc = "オーテック採用サイトの教育制度・研修制度紹介ページです。オーテックでは専門知識や業務に役立つスキルを獲得していただくための教育・研修制度が充実しています。";
	$page_canonical = URL_SUPPORT;

	get_header();
?>

<article class="p-support">
	<?php get_template_part(ARTICLE_HEAD, null, [
		"list" => [
			[
				"href" => URL_HOME,
				"name" => "HOME"
			],
			[
				"href" => "",
				"name" => NAME_SUPPORT
			],
		],
		"en" => "SUPPORT",
		"jp" => NAME_SUPPORT,
	]); ?>
	<div class="article-body article-body--blue-light">
		<div class="p-support__intro bg-blue-light-texture">
			<div class="l-cont l-cont--sp-sm">
				<?php get_template_part(TYPO, null, [
					"text" => "オーテックでは、入社時点での<br class='sp'>専門的な知識やスキルは求めていません。<br>多様なバックグラウンドを持つ人たちが集まり、多角的な視点を持った強い組織ができあがると考えているからです。<br>入社後には、専門知識や業務に役立つスキルを獲得していただくための教育・研修制度が充実しています。",
					"font" => "yugo",
					"weight" => "bold",
					"size" => "fs-18",
					"variable" => "leading-[1.75] text-center",
				]); ?>
			</div>
			<div class="p-support__intro__img">
				<div class="p-support__intro__img--sp l-cont--pc">
					<?php get_template_part(PICTURE, null, [
						"path" => $images."img.png",
						"alt" => "",
						"variable" => "p-support__intro__img--body"
					]); ?>
				</div>
			</div>
		</div>
		<div class="p-support__main">
			<div class="l-cont">
				<div class="p-support__sections">
					<section class="p-support__sec">
						<div class="p-support__sec__head">
							<div class="p-support__sec__head__icon">
								<img src="<?= URL_SVG ?>support-icon-01.svg" alt="">
							</div>
							<div class="p-support__sec__head__text">
								<?php get_template_part(SHOULDER, null, [
									"component" => "p",
									"text" => "EDUCATION",
									"color" => "red",
									"no_icon" => true,
								]); ?>
								<?php get_template_part(TYPO, null, [
									"component" => "h2",
									"class_change" => "h3",
									"text" => "教育制度",
								]); ?>
							</div>
						</div>
						<div class="p-support__sec__body">
							<div class="m-card-system--col2">
								<?php get_template_part(CARD_SYSTEM, null, [
									"shoulders" => ["共通"],
									"hd" => "通信教育制度",
									"desc" => "自身のスキルアップや能力開発、資格取得の勉強のために通信教育を準備しています。受講費用は会社が全額負担します。",
								]); ?>
								<?php get_template_part(CARD_SYSTEM, null, [
									"shoulders" => ["共通"],
									"hd" => "資格取得支援制度",
									"desc" => "・業務に必要な資格取得の初回の受検費用を会社が負担します。<br>・資格取得後、経験に応じて手当てを支給します。<br>・学習のための通信教育講座を会社負担で受講できます。",
								]); ?>
							</div>
						</div>
					</section>

					<section class="p-support__sec">
						<div class="p-support__sec__head">
							<div class="p-support__sec__head__icon">
								<img src="<?= URL_SVG ?>support-icon-02.svg" alt="">
							</div>
							<div class="p-support__sec__head__text">
								<?php get_template_part(SHOULDER, null, [
									"component" => "p",
									"text" => "TRAINING",
									"color" => "red",
									"no_icon" => true,
								]); ?>
								<?php get_template_part(TYPO, null, [
									"component" => "h2",
									"class_change" => "h3",
									"text" => "研修制度",
								]); ?>
							</div>
						</div>
						<div class="p-support__sec__body">
							<div class="m-card-system">
								<?php get_template_part(CARD_SYSTEM, null, [
									"shoulders" => ["共通", "1年目"],
									"hd" => "新入社員研修",
									"desc" => "ビジネスマナー研修をはじめ課題研修、見学、役員との食事会などを行います。",
								]); ?>
								<?php get_template_part(CARD_SYSTEM, null, [
									"shoulders" => ["技術系", "1年目"],
									"hd" => "１年目技術者研修",
									"desc" => "研修施設イノベーションプラザでの技術講習やCAD実習、実際の現場へ赴いてのJOB研修などを1年掛けてじっくり行います。",
								]); ?>
								<?php get_template_part(CARD_SYSTEM, null, [
									"shoulders" => ["共通", "1年目"],
									"hd" => "新入社員フォローアップ研修",
									"desc" => "入社１年目を対象に、１年を振り返り、２年目の未来を描く。本格的な社会人へのマインドセットとコミュニケーションマインドセットの醸成をします。",
								]); ?>
								<?php get_template_part(CARD_SYSTEM, null, [
									"shoulders" => ["共通", "2年目"],
									"hd" => "メーカー研修",
									"desc" => "自動制御機器メーカーや住設機器メーカーにて勉強会や研修会を行います。",
								]); ?>
								<?php get_template_part(CARD_SYSTEM, null, [
									"shoulders" => ["技術系", "2年目"],
									"hd" => "2年目技術者研修",
									"desc" => "入社２年目の技術系総合職員を対象に職務施行に必要な基礎知識、技術・技能の習得を目的にした研修を実施し、広い視野の涵養を図り、自己啓発を促進させ、実務能力向上を目的としています。",
								]); ?>
								<?php get_template_part(CARD_SYSTEM, null, [
									"shoulders" => ["技術系", "3年目"],
									"hd" => "OJTフォロー",
									"desc" => "入社３年目を対象に、OJT担当をする上で必要なマインドとコミュニケーションスキルを習得する。リーダーシップ発揮の意識を醸成します。",
								]); ?>
								<?php get_template_part(CARD_SYSTEM, null, [
									"shoulders" => ["技術系", "3年目"],
									"hd" => "階層別研修(初級〜上級)",
									"desc" => "初級・中級・上級と年次ごとに実施し、各階層で必要なスキルの習得を目指します。",
								]); ?>
								<?php get_template_part(CARD_SYSTEM, null, [
									"shoulders" => ["一般", "1年目"],
									"hd" => "キャリアデザイン研修",
									"desc" => "一般職女性を対象に、自分の強みや周囲からの期待を踏まえ、今後のキャリア（仕事を通じての自己実現・自己表現）や自分の将来像について考えます。また更なる活躍に向け、自分の言動が周囲に与える影響力を理解し、相手や状況に応じた関わり方、仕事の目的を意識した仕事の進め方について学びます。",
								]); ?>
								<?php /*
								<?php get_template_part(CARD_SYSTEM, null, [
									"shoulders" => ["技術系", "2年目"],
									"hd" => "OJT研修",
									"desc" => "入社２年目、３年目の社員を対象に、先輩社員とのマンツーマン指導による実務を通して知識やスキルを身につける",
								]); ?>
								*/ ?>
								<div class="o-card-system sp-hide"></div>
							</div>
						</div>
					</section>
				</div>
			</div>

			<div class="m-lower-nav">
				<div class="m-lower-nav__cont l-cont--pc">
					<?php get_template_part(BUTTON_PICTURE, null, [
						"href" => URL_BENEFIT,
						"jp" => NAME_BENEFIT,
						"en" => "BENEFIT",
						"img" => "common/bnr-benefit.jpg",
					]); ?>
				</div>
			</div>
		</div>
	</div>
</article>
<?php get_footer(); ?>