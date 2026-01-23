<?php
	$page_title = [NAME_INTERVIEW];
	$page_desc = "オーテック採用サイトの仕事と人の紹介ページです。様々な切り口で、オーテックで働く人たちのインタビューコンテンツを紹介します。";
	$page_canonical = URL_INTERVIEW;
	get_header();
?>
<article class="p-interview">
	<?php get_template_part(ARTICLE_HEAD, null, [
		"list" => [
			[
				"href" => URL_HOME,
				"name" => "HOME"
			],
			[
				"href" => "",
				"name" => NAME_INTERVIEW
			],
		],
		"en" => "WORK & PEOPLE",
		"jp" => NAME_INTERVIEW,
		"images" => "interview/interview-mv.jpg",
	]); ?>
	<div class="article-body">
		<div class="l-cont l-cont--sp-sm">
			<p class="p-interview__lead">オーテックについてより深く知っていただくために、<br>仕事と先輩社員を紹介します。</p>
		</div>
		<div class="p-interview__slider swiper js-common-loop-slider">
			<div class="swiper-wrapper">
				<div class="p-interview__slide swiper-slide">
					<?php get_template_part(PICTURE, null, [
						"path" => "interview/interview-slide-01.jpg",
						"alt" => "",
						"type" => "pill",
						"variable" => "p-interview__slide--01"
					]); ?>
				</div>
				<div class="p-interview__slide swiper-slide">
					<?php get_template_part(PICTURE, null, [
						"path" => "interview/interview-slide-02.jpg",
						"alt" => "",
						"type" => "pill",
						"variable" => "p-interview__slide--02"
					]); ?>
				</div>
				<div class="p-interview__slide swiper-slide">
					<?php get_template_part(PICTURE, null, [
						"path" => "interview/interview-slide-03.jpg",
						"alt" => "",
						"type" => "pill",
						"variable" => "p-interview__slide--03"
					]); ?>
				</div>
				<div class="p-interview__slide swiper-slide">
					<?php get_template_part(PICTURE, null, [
						"path" => "interview/interview-slide-04.jpg",
						"alt" => "",
						"type" => "pill",
						"variable" => "p-interview__slide--04"
					]); ?>
				</div>
				<div class="p-interview__slide swiper-slide">
					<?php get_template_part(PICTURE, null, [
						"path" => "interview/interview-slide-05.jpg",
						"alt" => "",
						"type" => "pill",
						"variable" => "p-interview__slide--04"
					]); ?>
				</div>
				<div class="p-interview__slide swiper-slide">
					<?php get_template_part(PICTURE, null, [
						"path" => "interview/interview-slide-01.jpg",
						"alt" => "",
						"type" => "pill",
						"variable" => "p-interview__slide--01"
					]); ?>
				</div>
				<div class="p-interview__slide swiper-slide">
					<?php get_template_part(PICTURE, null, [
						"path" => "interview/interview-slide-02.jpg",
						"alt" => "",
						"type" => "pill",
						"variable" => "p-interview__slide--02"
					]); ?>
				</div>
				<div class="p-interview__slide swiper-slide">
					<?php get_template_part(PICTURE, null, [
						"path" => "interview/interview-slide-03.jpg",
						"alt" => "",
						"type" => "pill",
						"variable" => "p-interview__slide--03"
					]); ?>
				</div>
				<div class="p-interview__slide swiper-slide">
					<?php get_template_part(PICTURE, null, [
						"path" => "interview/interview-slide-04.jpg",
						"alt" => "",
						"type" => "pill",
						"variable" => "p-interview__slide--04"
					]); ?>
				</div>
				<div class="p-interview__slide swiper-slide">
					<?php get_template_part(PICTURE, null, [
						"path" => "interview/interview-slide-05.jpg",
						"alt" => "",
						"type" => "pill",
						"variable" => "p-interview__slide--04"
					]); ?>
				</div>
			</div>
			<div class="p-interview__slider__bg">
				<?php get_template_part(PICTURE, null, [
					"path" => "interview/interview-slider-bg.png",
					"alt" => "",
				]); ?>
			</div>
		</div>
		<div class="p-interview__index">
			<div class="l-cont">
				<div class="p-interview__index__cont">
					<a href="<?= URL_PEOPLE ?>" class="p-interview__index__link anm-hover">
						<div class="p-interview__index__text">
							<?php get_template_part(SHOULDER, null, [
								"text" => "PEOPLE",
								"color" => "red",
								"component" => "p"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"text" => "社員紹介",
								"size" => "sm",
								"variable" => "p-interview__index__hd"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "先輩社員たちが、今どんな仕事をしているのか<br>仕事を通じて、これまでにどんな成長があったのか<br>インタビュー形式で紹介いたします",
							]); ?>
							<div class="p-interview__index__icon">
								<?php get_template_part(BUTTON_ARROW, null, [
									"size" => "md",
									"hover" => "forward-reserve",
								]); ?>
							</div>
						</div>
						<?php get_template_part(PICTURE, null, [
							"path" => "interview/interview-img-01.jpg",
							"alt" => "",
							"variable" => "p-interview__index__pic",
							"type" => "pill",
							"hover" => "scale"
						]); ?>
					</a>

					<a href="<?= URL_CROSSTALK ?>" class="p-interview__index__link anm-hover">
						<div class="p-interview__index__text md:order-2">
							<?php get_template_part(SHOULDER, null, [
								"text" => "CROSS TALK",
								"color" => "red",
								"component" => "p"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"text" => "クロストーク",
								"size" => "sm",
								"variable" => "p-interview__index__hd"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "オーテックの研修制度ってどうだった？<br>会社の雰囲気や、働きやすさってどうなの？<br>社員の本音を対談形式で紹介いたします",
							]); ?>
							<div class="p-interview__index__icon">
								<?php get_template_part(BUTTON_ARROW, null, [
									"size" => "md",
									"hover" => "forward-reserve",
								]); ?>
							</div>
						</div>
						<?php get_template_part(PICTURE, null, [
							"path" => "interview/interview-img-02.jpg",
							"alt" => "",
							"variable" => "p-interview__index__pic md:order-1",
							"type" => "pill",
							"hover" => "scale"
						]); ?>
					</a>

					<a href="<?= URL_PROJECT_STORY ?>" class="p-interview__index__link anm-hover">
						<div class="p-interview__index__text">
							<?php get_template_part(SHOULDER, null, [
								"text" => "PROJECT STORY",
								"color" => "red",
								"component" => "p"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"text" => "プロジェクトストーリー",
								"size" => "sm",
								"variable" => "p-interview__index__hd"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "オーテックがこれまでに手がけてきた建物について<br class='pc'>携わったメンバーによる裏側のストーリーを紹介いたします",
							]); ?>
							<div class="p-interview__index__icon">
								<?php get_template_part(BUTTON_ARROW, null, [
									"size" => "md",
									"hover" => "forward-reserve",
								]); ?>
							</div>
						</div>
						<?php get_template_part(PICTURE, null, [
							"path" => "interview/interview-img-03.jpg",
							"alt" => "",
							"variable" => "p-interview__index__pic",
							"type" => "pill",
							"hover" => "scale"
						]); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</article>
<?php get_footer(); ?>