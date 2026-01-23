<?php
	// setting
	$images = "technology/technology-";
	$page_title = [NAME_TECHNOLOGY];
	$page_desc = "オーテック採用サイトの技術紹介ページです。空気を制御するオーテックのコア技術により建物環境を快適に保ちます。";
	$page_canonical = URL_TECHNOLOGY;

	get_header();
?>

<article class="p-tech">
	<?php get_template_part(ARTICLE_HEAD, null, [
		"list" => [
			[
				"href" => URL_HOME,
				"name" => "HOME"
			],
			[
				"href" => "",
				"name" => NAME_TECHNOLOGY
			],
		],
		"en" => "OUR TECHNOLOGY",
		"jp" => "オーテックの建物環境を支える技術",
		"catch" => [
			"desc" => "日常で利用する施設や、名前を聞いたことある建物など、実はオーテックの技術によって、多くの建物環境がつくられています。暮らしに身近な施設から文化遺産まで、快適性や利便性、環境への配慮、運用の効率化など、目に見えない領域から建物を支えています。",
		],
		"images" => $images."mv.jpg",
	]); ?>
	<div class="article-body">
		<div class="p-tech__sections">
			<section class="p-tech__sec">
				<?php get_template_part(SECTION_HEAD, null, [
					"shoulder" => "Building-Air-system",
					"hd" => "建物内の空気を制御し、<br>快適な環境をつくる技術",
					"desc" => "オーテックのコア技術により、建物環境の自動制御で空気をコントロールし、快適な環境を生み出します。",
					"tech" => [
						"img" => $images."head-img-01.png",
						"alt" => "",
						"bg" => $images."head-bg.png",
					]
				]); ?>
				<div class="p-tech__sec__body">
					<div class="l-cont">
						<div class="p-tech__areas">
							<div class="p-tech__area">
								<?php get_template_part(TECH_INFO, null, [
									"icon" => "01",
									"lead" => "熱を集めて移動させる",
									"hd" => "温度を制御する",
									"desc" => "体に直接風が当たらず、空間全体を柔らかく包み込む全周囲の気流にすることで快適な環境を作ります",
								]); ?>
								<div class="p-tech__items">
									<?php get_template_part(TECH_ITEM, null, [
										"hd" => "空調システム",
										"img" => $images."img-01.jpg",
										"desc" => "建物内の温湿度を、室内センサにより把握し快適な室内環境を整えます。",
									]); ?>
								</div>
							</div>
							<div class="p-tech__area">
								<?php get_template_part(TECH_INFO, null, [
									"icon" => "02",
									"lead" => "快適さだけじゃなく省エネ性も向上させる",
									"hd" => "湿度を制御する",
									"desc" => "体に直接風が当たらず、空間全体を柔らかく包み込む全周囲の気流にすることで快適な環境を作ります",
								]); ?>
								<div class="p-tech__items">
									<?php get_template_part(TECH_ITEM, null, [
										"hd" => "熱源システム",
										"img" => $images."img-01.jpg",
										"desc" => "建物内の温湿度を、室内センサにより把握し快適な室内環境を整えます。",
									]); ?>
									<?php get_template_part(TECH_ITEM, null, [
										"hd" => "空調システム",
										"img" => $images."img-01.jpg",
										"desc" => "建物内の温湿度を、室内センサにより把握し快適な室内環境を整えます。",
									]); ?>
									<?php get_template_part(TECH_ITEM, null, [
										"hd" => "動力設備",
										"img" => $images."img-01.jpg",
										"desc" => "建物内の温湿度を、室内センサにより把握し快適な室内環境を整えます。",
									]); ?>
									<?php get_template_part(TECH_ITEM, null, [
										"hd" => "ボール循環式<br>熱交換器自動洗浄",
										"img" => $images."img-01.jpg",
										"desc" => "建物内の温湿度を、室内センサにより把握し快適な室内環境を整えます。",
									]); ?>
								</div>
							</div>
							<div class="p-tech__area">
								<?php get_template_part(TECH_INFO, null, [
									"icon" => "03",
									"lead" => "つつみこむような気流で快適にする",
									"hd" => "気流を制御する",
									"desc" => "体に直接風が当たらず、空間全体を柔らかく包み込む全周囲の気流にすることで快適な環境を作ります",
								]); ?>
								<div class="p-tech__items">
									<?php get_template_part(TECH_ITEM, null, [
										"hd" => "空調システム",
										"img" => $images."img-01.jpg",
										"desc" => "建物内の温湿度を、室内センサにより把握し快適な室内環境を整えます。",
									]); ?>
								</div>
							</div>
							<div class="p-tech__area">
								<?php get_template_part(TECH_INFO, null, [
									"icon" => "04",
									"lead" => "有害物質を不活化する",
									"hd" => "清浄度を制御する",
									"desc" => "体に直接風が当たらず、空間全体を柔らかく包み込む全周囲の気流にすることで快適な環境を作ります",
								]); ?>
								<div class="p-tech__items">
									<?php get_template_part(TECH_ITEM, null, [
										"hd" => "ボール循環式<br>熱交換器自動洗浄",
										"img" => $images."img-01.jpg",
										"desc" => "建物内の温湿度を、室内センサにより把握し快適な室内環境を整えます。",
									]); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="p-tech__sec">
				<?php get_template_part(SECTION_HEAD, null, [
					"shoulder" => "Plumbing-materials",
					"shoulder_color" => "blue",
					"hd" => "管工機材の提案・提供でサステナブル未来を",
					"desc" => "住まいやオフィス、工場など社会基盤を支える管工機材と、暮らしに欠かせない住宅設備機器を最適な選択と供給をすることでサステナブルな社会づくりに寄与しています。",
					"is_reverse" => true,
					"tech" => [
						"img" => $images."head-img-02.png",
						"alt" => "",
						"bg" => $images."head-bg.png",
					]
				]); ?>
				<div class="p-tech__sec__body">
					<div class="l-cont">
						<div class="p-tech__areas">
							<div class="p-tech__area">
								<?php get_template_part(TECH_INFO, null, [
									"icon" => "05",
									"lead" => "高耐久素材が実現する",
									"hd" => "管類",
									"desc" => "高性能化、小型化が進むエアコンにも対応する銅管は高伝熱化および細径・薄肉化が可能なことから、熱交換器に多く使用されています。",
								]); ?>
								<div class="p-tech__items">
									<?php get_template_part(TECH_ITEM, null, [
										"hd" => "リップルフィルインチューブ",
										"img" => $images."img-01.jpg",
										"desc" => "建物内の温湿度を、室内センサにより把握し快適な室内環境を整えます。",
									]); ?>
								</div>
							</div>
							<div class="p-tech__area">
								<?php get_template_part(TECH_INFO, null, [
									"icon" => "06",
									"lead" => "高耐久素材が実現する",
									"hd" => "継手類",
									"desc" => "高性能化、小型化が進むエアコンにも対応する銅管は高伝熱化および細径・薄肉化が可能なことから、熱交換器に多く使用されています。",
								]); ?>
								<div class="p-tech__items">
									<?php get_template_part(TECH_ITEM, null, [
										"hd" => "リップルフィルインチューブ",
										"img" => $images."img-01.jpg",
										"desc" => "建物内の温湿度を、室内センサにより把握し快適な室内環境を整えます。",
									]); ?>
								</div>
							</div>
							<div class="p-tech__area">
								<?php get_template_part(TECH_INFO, null, [
									"icon" => "07",
									"lead" => "高耐久素材が実現する",
									"hd" => "バルブ類",
									"desc" => "高性能化、小型化が進むエアコンにも対応する銅管は高伝熱化および細径・薄肉化が可能なことから、熱交換器に多く使用されています。",
								]); ?>
								<div class="p-tech__items">
									<?php get_template_part(TECH_ITEM, null, [
										"hd" => "リップルフィルインチューブ",
										"img" => $images."img-01.jpg",
										"desc" => "建物内の温湿度を、室内センサにより把握し快適な室内環境を整えます。",
									]); ?>
								</div>
							</div>
							<div class="p-tech__area">
								<?php get_template_part(TECH_INFO, null, [
									"icon" => "08",
									"lead" => "高耐久素材が実現する",
									"hd" => "配管関連部材",
									"desc" => "高性能化、小型化が進むエアコンにも対応する銅管は高伝熱化および細径・薄肉化が可能なことから、熱交換器に多く使用されています。",
								]); ?>
								<div class="p-tech__items">
									<?php get_template_part(TECH_ITEM, null, [
										"hd" => "リップルフィルインチューブ",
										"img" => $images."img-01.jpg",
										"desc" => "建物内の温湿度を、室内センサにより把握し快適な室内環境を整えます。",
									]); ?>
								</div>
							</div>
							<div class="p-tech__area">
								<?php get_template_part(TECH_INFO, null, [
									"icon" => "09",
									"lead" => "高耐久素材が実現する",
									"hd" => "住宅設備機器類",
									"desc" => "高性能化、小型化が進むエアコンにも対応する銅管は高伝熱化および細径・薄肉化が可能なことから、熱交換器に多く使用されています。",
								]); ?>
								<div class="p-tech__items">
									<?php get_template_part(TECH_ITEM, null, [
										"hd" => "リップルフィルインチューブ",
										"img" => $images."img-01.jpg",
										"desc" => "建物内の温湿度を、室内センサにより把握し快適な室内環境を整えます。",
									]); ?>
								</div>
							</div>
							<div class="p-tech__area">
								<?php get_template_part(TECH_INFO, null, [
									"icon" => "10",
									"lead" => "高耐久素材が実現する",
									"hd" => "消防消火関連製品",
									"desc" => "高性能化、小型化が進むエアコンにも対応する銅管は高伝熱化および細径・薄肉化が可能なことから、熱交換器に多く使用されています。",
								]); ?>
								<div class="p-tech__items">
									<?php get_template_part(TECH_ITEM, null, [
										"hd" => "リップルフィルインチューブ",
										"img" => $images."img-01.jpg",
										"desc" => "建物内の温湿度を、室内センサにより把握し快適な室内環境を整えます。",
									]); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="p-tech__lower">
			<div class="p-tech__motif">
				<?php get_template_part(PICTURE, null, [
					"path" => "common/common-motif.png",
					"alt" => "",
					"variable" => "w-full h-full"
				]); ?>
			</div>
			<div class="m-basic-slider js-basic-slider-wrap">
				<div class="m-basic-slider__head">
					<?php get_template_part(TYPO, null, [
						"component" => "h2",
						"sizes" => "sm",
						"text" => "様々な建物にオーテックの<br class='pc'>知見や技術は使われています",
					]); ?>
					<div class="m-basic-slider__navs sp-hide">
						<div class="m-basic-slider__nav m-basic-slider__prev js-basic-slider-prev">
							<?php get_template_part(ICON_ARROW); ?>
						</div>
						<div class="m-basic-slider__nav m-basic-slider__next js-basic-slider-next">
							<?php get_template_part(ICON_ARROW); ?>
							<?php /*
							<svg class="m-basic-slider__nav__ring" viewBox="0 0 56 56">
								<circle cx="28" cy="28" r="27.5"  class="m-basic-slider__nav__ring--circle" />
							</svg>
							*/ ?>
						</div>
					</div>
				</div>
				<div class="m-basic-slider__main swiper js-basic-slider">
					<div class="swiper-wrapper">
						<div class="m-basic-slider__slide swiper-slide">
							<div class="m-basic-slider__shoulder">
								<span class="m-basic-slider__shoulder--icon"></span>
								<span>医療・介護</span>
							</div>
							<?php get_template_part(PICTURE, null, [
								"path" => $images."slide-img-01.jpg",
								"alt" => "",
								"type" => "round-20",
								"variable" => "m-basic-slider__pic"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "公立西知多総合病院",
								"font" => "yugo",
								"size" => "fs-20",
								"weight" => "bold",
								"variable" => "leading-[1.35] mt-[20px]"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "使われている技術と建物コンセプトの説明使われている技術と建物コンセプトの説明使われている技術と建物コンセプトの説明",
								"size" => "fs-14",
								"variable" => "tracking-wider mt-[20px]"
							]); ?>
						</div>
						<div class="m-basic-slider__slide swiper-slide">
							<div class="m-basic-slider__shoulder">
								<span class="m-basic-slider__shoulder--icon"></span>
								<span>体育施設</span>
							</div>
							<?php get_template_part(PICTURE, null, [
								"path" => $images."slide-img-02.jpg",
								"alt" => "",
								"type" => "round-20",
								"variable" => "m-basic-slider__pic"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "武蔵野の森総合スポーツプラザ",
								"font" => "yugo",
								"size" => "fs-20",
								"weight" => "bold",
								"variable" => "leading-[1.35] mt-[20px]"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "使われている技術と建物コンセプトの説明使われている技術と建物コンセプトの説明使われている技術と建物コンセプトの説明",
								"size" => "fs-14",
								"variable" => "tracking-wider mt-[20px]"
							]); ?>
						</div>
						<div class="m-basic-slider__slide swiper-slide">
							<div class="m-basic-slider__shoulder">
								<span class="m-basic-slider__shoulder--icon"></span>
								<span>教育・研究</span>
							</div>
							<?php get_template_part(PICTURE, null, [
								"path" => $images."slide-img-03.jpg",
								"alt" => "",
								"type" => "round-20",
								"variable" => "m-basic-slider__pic"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "あいち産業科学技術総合センター",
								"font" => "yugo",
								"size" => "fs-20",
								"weight" => "bold",
								"variable" => "leading-[1.35] mt-[20px]"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "使われている技術と建物コンセプトの説明使われている技術と建物コンセプトの説明使われている技術と建物コンセプトの説明",
								"size" => "fs-14",
								"variable" => "tracking-wider mt-[20px]"
							]); ?>
						</div>
						<div class="m-basic-slider__slide swiper-slide">
							<div class="m-basic-slider__shoulder">
								<span class="m-basic-slider__shoulder--icon"></span>
								<span>医療・介護</span>
							</div>
							<?php get_template_part(PICTURE, null, [
								"path" => $images."slide-img-01.jpg",
								"alt" => "",
								"type" => "round-20",
								"variable" => "m-basic-slider__pic"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "公立西知多総合病院",
								"font" => "yugo",
								"size" => "fs-20",
								"weight" => "bold",
								"variable" => "leading-[1.35] mt-[20px]"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "使われている技術と建物コンセプトの説明使われている技術と建物コンセプトの説明使われている技術と建物コンセプトの説明",
								"size" => "fs-14",
								"variable" => "tracking-wider mt-[20px]"
							]); ?>
						</div>
						<div class="m-basic-slider__slide swiper-slide">
							<div class="m-basic-slider__shoulder">
								<span class="m-basic-slider__shoulder--icon"></span>
								<span>体育施設</span>
							</div>
							<?php get_template_part(PICTURE, null, [
								"path" => $images."slide-img-02.jpg",
								"alt" => "",
								"type" => "round-20",
								"variable" => "m-basic-slider__pic"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "武蔵野の森総合スポーツプラザ",
								"font" => "yugo",
								"size" => "fs-20",
								"weight" => "bold",
								"variable" => "leading-[1.35] mt-[20px]"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "使われている技術と建物コンセプトの説明使われている技術と建物コンセプトの説明使われている技術と建物コンセプトの説明",
								"size" => "fs-14",
								"variable" => "tracking-wider mt-[20px]"
							]); ?>
						</div>
						<div class="m-basic-slider__slide swiper-slide">
							<div class="m-basic-slider__shoulder">
								<span class="m-basic-slider__shoulder--icon"></span>
								<span>教育・研究</span>
							</div>
							<?php get_template_part(PICTURE, null, [
								"path" => $images."slide-img-03.jpg",
								"alt" => "",
								"type" => "round-20",
								"variable" => "m-basic-slider__pic"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "あいち産業科学技術総合センター",
								"font" => "yugo",
								"size" => "fs-20",
								"weight" => "bold",
								"variable" => "leading-[1.35] mt-[20px]"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "使われている技術と建物コンセプトの説明使われている技術と建物コンセプトの説明使われている技術と建物コンセプトの説明",
								"size" => "fs-14",
								"variable" => "tracking-wider mt-[20px]"
							]); ?>
						</div>
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
				<div class="mt-[32px] md:mt-[80px]">
					<?php get_template_part(BUTTON, null, [
						"href" => "",
						"text" => "施工事例をもっと見る",
						"is_external" => true,
						"arrow_type" => "circle",
						"hover" => "icon-reserve",
					]); ?>
				</div>
			</div>
		</div>

		<div class="m-lower-nav">
			<div class="m-lower-nav__cont l-cont--pc">
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