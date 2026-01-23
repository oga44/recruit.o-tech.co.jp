<?php
	// setting
	$images = "business/business-";
	$page_title = [NAME_BUSINESS];
	$page_desc = "オーテック採用サイトの事業紹介ページです。オーテックでは、環境システム事業と管工機材事業の２つの事業を展開しています。";
	$page_canonical = URL_BUSINESS;

	get_header();
?>

<article class="p-business">
	<?php get_template_part(ARTICLE_HEAD, null, [
		"list" => [
			[
				"href" => URL_HOME,
				"name" => "HOME"
			],
			[
				"href" => "",
				"name" => NAME_BUSINESS
			],
		],
		"en" => "BUSINESS",
		"jp" => "事業紹介",
	]); ?>
	<div class="article-body">
		<?php get_template_part(SECTION_HEAD, null, [
			"hd" => "快適な建物環境を<br class='pc'>実現するための２つの事業",
			"desc" => "オーテックは、環境システム事業と管工機材事業の2つの事業で、建物環境を支えています。",
			"text_area_size" => "lg",
			"nav" => [
				[
					"href" => "#s1",
					"text" => "環境システム事業"
				],
				[
					"href" => "#s2",
					"text" => "管工機材事業"
				],
			],
			"business" => [
				"img" => $images."head-img-01.png",
				"alt" => "",
			],
			"img_size" => "full"
		]); ?>
		<div class="p-business__sections">
			<section id="s1" class="p-business__sec">
				<div class="p-business__sec__head l-cont">
					<?php get_template_part(SHOULDER, null, [
						"component" => "p",
						"text" => "Building-system",
						"color" => "blue",
						"bg_color" => "transparent",
						"no_icon" => true,
						"type" => "pill"
					]); ?>
					<?php get_template_part(TYPO, null, [
						"component" => "h3",
						"class_change" => "h2",
						"size" => "sm",
						"text" => "環境システム事業",
					]); ?>
				</div>
				<div class="p-business__sec__body">
					<div class="p-business__sec__upper">
						<?php get_template_part(PICTURE, null, [
							"path" => $images."img-01.jpg",
							"alt" => "",
							"variable" => "p-business__sec__upper__pic"
						]); ?>
						<div class="p-business__sec__upper__text">
							<?php get_template_part(TYPO, null, [
								"component" => "h4",
								"class_change" => "h3",
								"text" => "確かな設計・施工と提案力。<br>快適な建物環境の持続をサポート",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "新築及び改修時の自動制御システムを設計から施工、完成後のメンテナンスまで自社一貫の体制で行います。オフィスビル、病院、ホテル、クリーンルームを持つ工場まで、様々な建物用途に合わせた自動制御システムを提供しています。",
							]); ?>
						</div>
					</div>
					<div class="p-business__sec__main">
						<div class="l-cont">
							<div class="p-business__sec__main__cont">
								<?php get_template_part(BUSINESS_ITEM, null, [
									"icon" => "01",
									"hd" => "提案",
									"desc" => "運用データを基により効率的で省エネルギーなシステム運用をご提案します。
									建物設備の機能維持のため、自動制御機器の中長期保全計画をご提案します。",
								]); ?>
								<?php get_template_part(BUSINESS_ITEM, null, [
									"icon" => "02",
									"hd" => "分析",
									"desc" => "サステナビリティな社会実現のため、計測データや制御・運用データを基により効率的で省エネルギーな運用を支援します。",
								]); ?>
								<?php get_template_part(BUSINESS_ITEM, null, [
									"icon" => "04",
									"hd" => "設計・施工",
									"desc" => "設計段階からの包括的な関与により、最適な建物環境へのソリューションを提供し、豊富な施工・販売実績を積み重ねてきました。<br>さらに、地域密着の協力会社ネットワークを築き上げ、より地域に密着したサービスを提供しています。",
								]); ?>
								<?php get_template_part(BUSINESS_ITEM, null, [
									"icon" => "03",
									"hd" => "保守・<br class='sp'>メンテナンス",
									"desc" => "保守・メンテナンスの総合点検、トラブルへの24時間緊急点検にも対応可能。<br>改修工事には設計から責任をもって担当します。",
								]); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="p-business__people">
					<div class="m-basic-slider js-basic-slider-wrap">
						<div class="m-basic-slider__head">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"class_change" => "h4",
								"sizes" => "sm",
								"text" => "環境システム事業に携わる先輩社員",
							]); ?>
							<div class="m-basic-slider__navs sp-hide">
								<div class="m-basic-slider__nav m-basic-slider__prev js-basic-slider-prev">
									<?php get_template_part(ICON_ARROW); ?>
								</div>
								<div class="m-basic-slider__nav m-basic-slider__next js-basic-slider-next">
									<?php get_template_part(ICON_ARROW); ?>
								</div>
							</div>
						</div>
						<div class="m-basic-slider__main swiper js-basic-slider">
							<div class="swiper-wrapper">
								<?php
									$list = [
										$peoples[0],
										$peoples[1],
										$peoples[2],
									];

									$i = 1;
									foreach($list as $item) {
										get_template_part(BUSINESS_SLIDE, null, [
											"href" => URL_PEOPLE."people-".$i."/",
											"img" => "cms/people-".sprintf('%02d', $i)."-mv.jpg",
											"hd" => str_replace("<br>", "", $item["hd"]),
											"name" => $item["name"],
											"desc" => $item["entry"]."年入社"."　".$item["school"]."卒",
										]);
										$i++;
									}
								?>
						</div>
						<div class="m-basic-slider__navs pc-hide">
							<div class="m-basic-slider__nav m-basic-slider__prev js-basic-slider-prev">
								<?php get_template_part(ICON_ARROW); ?>
							</div>
							<div class="m-basic-slider__nav m-basic-slider__next js-basic-slider-next">
								<?php get_template_part(ICON_ARROW); ?>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="s2" class="p-business__sec">
				<div class="p-business__sec__head l-cont">
					<?php get_template_part(SHOULDER, null, [
						"component" => "p",
						"text" => "Plumbing-materials",
						"color" => "blue",
						"bg_color" => "transparent",
						"no_icon" => true,
						"type" => "pill"
					]); ?>
					<?php get_template_part(TYPO, null, [
						"component" => "h3",
						"class_change" => "h2",
						"size" => "sm",
						"text" => "管工機材事業",
					]); ?>
				</div>
				<div class="p-business__sec__body">
					<div class="p-business__sec__upper">
						<?php get_template_part(PICTURE, null, [
							"path" => $images."img-02.jpg",
							"alt" => "",
							"variable" => "p-business__sec__upper__pic"
						]); ?>
						<div class="p-business__sec__upper__text">
							<?php get_template_part(TYPO, null, [
								"component" => "h4",
								"class_change" => "h3",
								"text" => "メーカーとお客様の間に立つ「専門商社」<br>建築に必要な管工機材・住宅設備をワンストップでお届け",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "「建物の血管」に例えられる管工機材類（バルブ・継手・配管材料等）や住宅設備機器（衛生陶器・空調機・換気扇・送風機・ポンプ・受水槽等）を販売し、専門商社および問屋として、お客様のニーズや用途に合わせた最適な商品を提供しています。",
							]); ?>
						</div>
					</div>
					<div class="p-business__sec__main">
						<div class="l-cont">
							<div class="p-business__sec__main__cont">
								<?php get_template_part(BUSINESS_ITEM, null, [
									"icon" => "01",
									"hd" => "提案",
									"desc" => "多様な商流から全国の現場に商品を届ける、メーカーとお客様の間に立つ「専門商社」として、幅広い分野の商品を包括的にご提案します。",
								]); ?>
								<?php get_template_part(BUSINESS_ITEM, null, [
									"icon" => "05",
									"hd" => "提供",
									"desc" => "在庫管理、物流システムの迅速化に取り組み、工事現場の予期せぬ要望にも柔軟に対応。<br>スムーズな建築・設備工事をサポートします。",
								]); ?>
							</div>
						</div>
					</div>
				</div>
				<?php /*
				<div class="p-business__people">
					<div class="m-basic-slider js-basic-slider-wrap">
						<div class="m-basic-slider__head">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"class_change" => "h4",
								"sizes" => "sm",
								"text" => "管工機材事業に携わる先輩社員",
							]); ?>
							<div class="m-basic-slider__navs sp-hide">
								<div class="m-basic-slider__nav m-basic-slider__prev js-basic-slider-prev">
									<?php get_template_part(ICON_ARROW); ?>
								</div>
								<div class="m-basic-slider__nav m-basic-slider__next js-basic-slider-next">
									<?php get_template_part(ICON_ARROW); ?>
								</div>
							</div>
						</div>
						<div class="m-basic-slider__main swiper js-basic-slider">
							<div class="swiper-wrapper">
								<?php get_template_part(BUSINESS_SLIDE, null, [
									"img" => $images."slide-img-01.jpg",
									"hd" => "構築した制御システムが初めて稼働した時の感動が忘れられない",
									"name" => "田中 亜喜",
									"shoulder" => "施工管理",
									"desc" => "建築学科卒　2020年入社",
								]); ?>
								<?php get_template_part(BUSINESS_SLIDE, null, [
									"img" => $images."slide-img-01.jpg",
									"hd" => "構築した制御システムが初めて稼働した時の感動が忘れられない",
									"name" => "田中 亜喜",
									"shoulder" => "施工管理",
									"desc" => "建築学科卒　2020年入社",
								]); ?>
								<?php get_template_part(BUSINESS_SLIDE, null, [
									"img" => $images."slide-img-01.jpg",
									"hd" => "構築した制御システムが初めて稼働した時の感動が忘れられない",
									"name" => "田中 亜喜",
									"shoulder" => "施工管理",
									"desc" => "建築学科卒　2020年入社",
								]); ?>
								<?php get_template_part(BUSINESS_SLIDE, null, [
									"img" => $images."slide-img-01.jpg",
									"hd" => "構築した制御システムが初めて稼働した時の感動が忘れられない",
									"name" => "田中 亜喜",
									"shoulder" => "施工管理",
									"desc" => "建築学科卒　2020年入社",
								]); ?>
								<?php get_template_part(BUSINESS_SLIDE, null, [
									"img" => $images."slide-img-01.jpg",
									"hd" => "構築した制御システムが初めて稼働した時の感動が忘れられない",
									"name" => "田中 亜喜",
									"shoulder" => "施工管理",
									"desc" => "建築学科卒　2020年入社",
								]); ?>
								<?php get_template_part(BUSINESS_SLIDE, null, [
									"img" => $images."slide-img-01.jpg",
									"hd" => "構築した制御システムが初めて稼働した時の感動が忘れられない",
									"name" => "田中 亜喜",
									"shoulder" => "施工管理",
									"desc" => "建築学科卒　2020年入社",
								]); ?>
							</div>
						</div>
						<div class="m-basic-slider__navs pc-hide">
							<div class="m-basic-slider__nav m-basic-slider__prev js-basic-slider-prev">
								<?php get_template_part(ICON_ARROW); ?>
							</div>
							<div class="m-basic-slider__nav m-basic-slider__next js-basic-slider-next">
								<?php get_template_part(ICON_ARROW); ?>
							</div>
						</div>
					</div>
				</div>
				*/ ?>
			</section>
		</div>
<?php /* 6/10非公開
		<div class="m-lower-nav">
			<div class="m-lower-nav__cont l-cont--pc">
			<?php get_template_part(BUTTON_PICTURE, null, [
					"href" => URL_TECHNOLOGY,
					"jp" => "オーテックの<br class='sp'>建物環境を支える技術",
					"en" => "TECHNOLOGY",
					"img" => "common/bnr-technology.jpg",
				]); ?>
			</div>
		</div>
*/ ?>
	</div>
</article>
<?php get_footer(); ?>