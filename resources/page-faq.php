<?php
	$page_title = [NAME_FAQ];
	$page_desc = "オーテック採用サイトのよくある質問紹介ページです。採用時によく聞かれる質問と回答をご紹介します。";
	$page_canonical = URL_FAQ;
	get_header();
?>
<article class="p-faq">
	<?php get_template_part(ARTICLE_HEAD, null, [
		"list" => [
			[
				"href" => URL_HOME,
				"name" => "HOME"
			],
			[
				"href" => "",
				"name" => NAME_FAQ
			],
		],
		"en" => "FAQ",
		"jp" => NAME_FAQ,
	]); ?>
	<div class="article-body">
		<div class="l-cont">
			<div class="m-two-column">
				<aside class="m-two-column__side">
					<ul class="m-two-column__side__list grid grid-cols-1 gap-2">
						<li class="m-two-column__side__item">
							<a href="#s1" class="m-two-column__side__link js-cur-link is-show">
								<span>応募・選考について</span>
								<span class="m-two-column__side__arrow"><?php get_template_part(ICON_ARROW); ?></span>
							</a>
						</li>
						<li class="m-two-column__side__item">
							<a href="#s2" class="m-two-column__side__link js-cur-link">
								<span>会社・働き方について</span>
								<span class="m-two-column__side__arrow"><?php get_template_part(ICON_ARROW); ?></span>
							</a>
						</li>
						<li class="m-two-column__side__item">
							<a href="#s3" class="m-two-column__side__link js-cur-link">
								<span>その他</span>
								<span class="m-two-column__side__arrow"><?php get_template_part(ICON_ARROW); ?></span>
							</a>
						</li>
					</ul>
				</aside>
				<div class="m-two-column__main p-faq__main grid grid-cols-1">
					<section id="s1" class="js-cur-sec">
						<?php get_template_part(TYPO, null, [
							"component" => "h2",
							"class_change" => "h3",
							"text" => "応募・選考について",
						]); ?>
						<div class="p-faq__cont grid  grid-cols-1 gap-4 md:gap-6">
							<?php get_template_part(FAQ_CARD, null, [
								"q" => "入社前に勉強しておいたほうがいいことや、事前に必要な知識・資格等はありますか？",
								"a" => "基本的にはありません。技術職の方は入社後に第二種電気工事士の資格取得が必要な為、参考程度に予習を推奨しますが、必須ではありません。"
							]); ?>

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "現在技術職志望ですが、建築・建設とは関係ないのですが、職種は限定されますか？", 
								"a" => "限定されません。文理不問での募集を行っており、入社後の教育・研修制度が充実しておりますので安心してご応募ください。"
							]); ?>

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "選考期間はどのくらいですか？",
								"a" => "会社説明会参加後、約１ヶ月程度となります。"
							]); ?>

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "既卒でも応募できますか？",
								"a" => "既卒・第二新卒の採用も行っております。"
							]); ?>

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "インターンシップは行なっていますか？",
								"a" => "ワンデイ仕事体験を行っており、施工管理の仕事を体験できます。"
							]); ?>

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "OB・OG訪問は可能ですか？",
								"a" => "行っていませんが、選考フローの中で先輩社員面談を実施しています。"
							]); ?>
						</div>
					</section>
					<section id="s2" class="js-cur-sec">
						<?php get_template_part(TYPO, null, [
							"component" => "h2",
							"class_change" => "h3",
							"text" => "会社・働き方について",
						]); ?>
						<div class="p-faq__cont grid  grid-cols-1 gap-6">
						<?php get_template_part(FAQ_CARD, null, [
								"q" => "配属はどのように決まりますか？希望は通りますか？",
								"a" => "技術職では１年目の研修において、数回ヒアリングを行い、決定します。例年７割程度の方が希望通りの勤務地に配属となりますが、同期の中で希望勤務地が集中した場合はその限りではありません。"
							]); ?>

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "入社後の部署移動・キャリアチェンジは可能ですか？",
								"a" => "可能です。本人の希望や適性をみて判断しています。"
							]); ?>

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "異動、転属、転勤はどのタイミングでありますか？",
								"a" => "総合職の場合、キャリアアップや人員配置を目的とした異動がありますが、時期や頻度は社員によって異なります。"
							]); ?>

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "勤務地の希望は出せますか？",
								"a" => "技術職では１年目の研修において、数回ヒアリングを行い、決定します。例年７割程度の方が希望通りの勤務地に配属となりますが、同期の中で希望勤務地が集中した場合はその限りではありません。"
							]); ?>

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "服装や髪型は自由ですか？",
								"a" => "ビジネスなので、お客様に失礼とならない服装と髪型としています。"
							]); ?>

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "テレワークは在宅勤務などの制度はありますか？",
								"a" => "あります。育児や介護、その他の都合により利用している方がいます。"
							]); ?>

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "残業時間はどれくらいありますか？",
								"a" => "部署により異なりますが、全社平均では20時間程度となっております。会社として働き方改革を行っており、業務効率化とシステム導入を推進しています。"
							]); ?>

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "フレックス勤務制度など、ありますか？",
								"a" => "フレックス勤務制度はありません。ただ、規程内での時差出勤制度はあります。"
							]); ?>
						</div>
					</section>
					<section id="s3" class="js-cur-sec">
						<?php get_template_part(TYPO, null, [
							"component" => "h2",
							"class_change" => "h3",
							"text" => "その他",
						]); ?>
						<div class="p-faq__cont grid  grid-cols-1 gap-6">
							<?php get_template_part(FAQ_CARD, null, [
								"q" => "社宅や寮はありますか？",
								"a" => "借上社宅制度がございます。"
							]); ?>  

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "住宅補助はありますか？",
								"a" => "借上社宅制度では家賃95％が会社負担となります。（入社後～満25歳適用）"
							]); ?>

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "産休・育休の取得は可能ですか？",
								"a" => "可能です。女性は取得は100％。男性は8割以上が取得されています。"
							]); ?>

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "産休・育休からの復職後、時短勤務は可能ですか？",
								"a" => "可能です。"
							]); ?>

							<?php get_template_part(FAQ_CARD, null, [
								"q" => "仕事以外で、社員が交流する機会や活動はありますか？",
								"a" => "会社のクラブ活動では部署を超えたコミュニケーションが活発です。フットサルでは全国から集まり大会を開催しております。"
							]); ?>
						</div>
					</section>
				</div>
			</div>
		</div>
		<div class="p-faq__contact">
			<div class="l-cont l-cont--sp-sm">
				<?php get_template_part(SHOULDER, null, [
					"text" => "CONTACT",
					"component" => "p",
					"text_align" => "center",
					"no_icon" => true
				]); ?>
				<div class="p-faq__contact__hd">
					<?php get_template_part(TYPO, null, [
						"component" => "h3",
						"class_change" => "h4",
						"text" => "その他気になることや、<br class='sp'>ご質問は、<br>人事部までお気軽にご相談ください。",
					]); ?>
				</div>
				<div class="p-faq__contact__btn">
					<a href="<?= URL_CONTACT ?>" class="o-btn p-faq__contact__link" target="_blank">
						<p class="o-btn__text">お問い合わせ</p>
						<div class="o-btn__icon">
							<?php get_template_part(ICON_EXTERNAL); ?>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</article>
<?php get_footer(); ?>