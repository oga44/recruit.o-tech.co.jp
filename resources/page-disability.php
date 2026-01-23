<?php get_header(); ?>
<article class="p-faq">
	<div class="article-head">
		<div class="l-cont">
			<?php get_template_part(TOPICPATH, null, [
				"list" => [
					[
						"href" => URL_HOME,
						"name" => "HOME"
					],
					[
						"href" => URL_FAQ,
						"name" => NAME_FAQ
					],
				]
			]); ?>
			<div class="article-head__cont">
				<?php get_template_part(ARTICLE_HEAD_HD, null, [
					"en" => "FAQ",
					"jp" => NAME_FAQ,
				]); ?>
			</div>
		</div>
	</div>
	<div class="article-body">
		<div class="l-cont">
			<div class="m-two-column">
				<aside class="m-two-column__side">
					<ul class="m-two-column__side__list grid grid-cols-1 gap-2">
						<li class="m-two-column__side__item">
							<a href="#s1" class="m-two-column__side__link js-cur-link">応募・選考について</a>
						</li>
						<li class="m-two-column__side__item">
							<a href="#s2" class="m-two-column__side__link js-cur-link">会社・働き方について</a>
						</li>
						<li class="m-two-column__side__item">
							<a href="#s3" class="m-two-column__side__link js-cur-link">その他</a>
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
						<div class="p-faq__cont grid  grid-cols-1 gap-6">
							<?php get_template_part(FAQ_CARD, null, [
								"q" => "入社前に勉強しておいたほうがいいことや、事前に必要な知識・資格等はありますか？",
								"a" => "特に定めておりません。入社後の研修や自己研鑽によって身につけられますので、今は学生時代にしかできないことにとことんチャレンジしてください。"
							]); ?>
							<?php get_template_part(FAQ_CARD, null, [
								"q" => "文系卒で、建築・建設の知識もないのですが職種は限定されますか？",
								"a" => ""
							]); ?>
							<?php get_template_part(FAQ_CARD, null, [
								"q" => "外国籍の採用は行なっていますか？",
								"a" => ""
							]); ?>
							<?php get_template_part(FAQ_CARD, null, [
								"q" => "選考期間はどのくらいですか？",
								"a" => ""
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
								"q" => "入社後の部署異動、キャリアチェンジは可能ですか？",
								"a" => "職種によって規定は異なりますが可能です。例えば営業職の場合、配属後2～3年を経過すれば希望を出すことができます。また施工管理から営業職への異動も可能です。"
							]); ?>
							<?php get_template_part(FAQ_CARD, null, [
								"q" => "配属はどのように決まりますか？希望は通りますか？",
								"a" => ""
							]); ?>
							<?php get_template_part(FAQ_CARD, null, [
								"q" => "異動、転属、転勤はどのタイミングでありますか？",
								"a" => ""
							]); ?>
							<?php get_template_part(FAQ_CARD, null, [
								"q" => "勤務地の希望は出せますか？",
								"a" => ""
							]); ?>
							<?php get_template_part(FAQ_CARD, null, [
								"q" => "産休・育休の取得は可能ですか？",
								"a" => ""
							]); ?>
							<?php get_template_part(FAQ_CARD, null, [
								"q" => "産休・育休からの復職後、時短勤務は可能ですか？",
								"a" => ""
							]); ?>
							<?php get_template_part(FAQ_CARD, null, [
								"q" => "服装や髪型は自由ですか？",
								"a" => ""
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
								"q" => "インターンシップは行っていますか？",
								"a" => ""
							]); ?>
							<?php get_template_part(FAQ_CARD, null, [
								"q" => "OB・OG訪問は可能ですか？",
								"a" => ""
							]); ?>
						</div>
					</section>
				</div>
			</div>
		</div>
		<div class="p-faq__contact">
			<div class="l-cont">
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
						"text" => "その他気になることや、ご質問は、<br>人事部までお気軽にご相談ください。",
					]); ?>
				</div>
				<div class="p-faq__contact__btn">
					<a href="<?= URL_CONTACT ?>" class="o-btn p-faq__contact__link">
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