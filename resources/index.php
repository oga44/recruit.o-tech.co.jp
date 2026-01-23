<?php get_header(); ?>
<article>
	<section class="fp-mv js-bg-change-section" data-section="common">
		<div class="fp-mv__cont">
			<div class="fp-mv__sliders js-mv-sliders">
				<div class="fp-mv__slider swiper js-mv-slider upper">
					<div class="swiper-wrapper">
						<?php for ($i = 1; $i < 6; $i++): ?>
						<div class="mv-fp__slide swiper-slide">
							<?php get_template_part(PICTURE, null, [
								"path" => "common/common-slide-img-".sprintf('%02d', $i).".jpg",
								"alt" => "",
								"type" => "pill",
							]); ?>
						</div>
						<?php endfor; ?>
					</div>
				</div>
				<div class="fp-mv__slider swiper js-mv-slider lower">
					<div class="swiper-wrapper">
						<?php for ($i = 6; $i < 11; $i++): ?>
						<div class="mv-fp__slide swiper-slide">
							<?php get_template_part(PICTURE, null, [
								"path" => "common/common-slide-img-".sprintf('%02d', $i).".jpg",
								"alt" => "",
								"type" => "pill",
							]); ?>
						</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
			<div class="fp-mv__text">
				<p class="fp-mv__text--jp">仲間と共に挑む。<br>私たちだから<br class="sp">築ける未来がある。</p>
				<p class="fp-mv__text--en">make the Future</p>
			</div>
		</div>
		<a href="<?= URL_INTERVIEW ?>" class="fp-mv__link anm-hover">
			<div class="fp-mv__link__pic">
				<?php get_template_part(PICTURE, null, [
					"path" => "front-page/mv-works.jpg",
					"alt" => "",
					"variable" => "fp-mv__link__pic--body",
					"hover" => "scale"
				]); ?>
			</div>
			<div class="fp-mv__link__text">
				<div class="fp-mv__link__head">
					<p class="fp-mv__link__hd">仕事と人を知る</p>
					<div class="fp-mv__link__arrow anm-arrow">
						<?php get_template_part(ICON_ARROW); ?>
					</div>
				</div>
				<div class="fp-mv__link__desc">オーテックについてより深く知っていただくために、仕事と先輩社員を紹介します</div>
			</div>
		</a>
	</section>
	<section class="fp-about js-bg-change-section" data-section="about">
		<div class="l-cont--sm">
			<div class="fp-about__leads">
				<div class="js-bg-change-section-child">
					<?php get_template_part(TYPO, null, [
						"component" => "p",
						"text" => "今日の社会で私たちが担うのは<br>人々の生活において欠かせない<br>建物施設の「環境」をつくること。",
						"variable" => "fp-about__lead"
					]); ?>
				</div>
				<div class="js-bg-change-section-child">
					<?php get_template_part(TYPO, null, [
						"component" => "p",
						"text" => "言わば、建物が機能するための<br>脳や神経、心臓、動脈をつくっています。",
						"variable" => "fp-about__lead"
					]); ?>
					<?php get_template_part(TYPO, null, [
						"component" => "p",
						"text" => "ビル、商業施設、学校、病院、駅や空港に至るまで<br>私たちの技術によって建物環境をコントロールし<br>人々にとって快適な環境を実現しています。",
						"variable" => "fp-about__lead"
					]); ?>
				</div>
				<div class="js-bg-change-section-child">
					<?php get_template_part(TYPO, null, [
						"component" => "p",
						"text" => "建物の進化と共に広がる未来<br>私たちは、未来に続く建物環境を築くパイオニアとなります。<br>求心力となり、環境技術の未来を一緒につくりましょう。",
						"variable" => "fp-about__lead"
					]); ?>
				</div>
			</div>
		</div>
	</section>
	<div class="fp-intro">
		<section class="fp-message">
			<div class="l-cont--sm l-cont--sp-none">
				<a href="<?= URL_MESSAGE ?>" class="fp-message__link anm-hover">
					<?php get_template_part(TYPO, null, [
						"component" => "h2",
						"text" => "共に築こう<br>快適な環境と人々の未来",
						"type" => "italic",
						"variable" => "fp-message__hd",
						"color" => "gray"
					]); ?>
					<?php get_template_part(BUTTON, null, [
						"href" => URL_MESSAGE,
						"text" => "MESSAGE",
						"font" => "en",
						"type" => "circle",
						"color" => "red",
						"arrow_type" => "circle",
						"arrow_color" => "red",
						"component" => "div",
						"arrow_hover" => "forward-scale",
						"variable" => "justify-end",
					]); ?>
					<div class="fp-message__bg">
						<?php get_template_part(PICTURE, null, [
							"path" => "front-page/message-bg.png",
							"alt" => "",
							"hover" => "scale"
						]); ?>
					</div>
				</a>
			</div>
		</section>
		<section class="fp-business">
			<div class="l-cont--lg l-cont--sp-none">
				<div class="fp-business__cont">
					<div class="fp-business__pics">
						<div class="fp-business__slider js-fp-business-slider">
							<div class="fp-business__slide js-fp-business-slide is-show">
								<?php get_template_part(PICTURE, null, [
									"path" => "front-page/business-img-01.jpg",
									"alt" => "",
									"variable" => "fp-business__pic"
								]); ?>
							</div>
							<div class="fp-business__slide js-fp-business-slide">
								<?php get_template_part(PICTURE, null, [
									"path" => "front-page/business-img-02.jpg",
									"alt" => "",
									"variable" => "fp-business__pic"
								]); ?>
							</div>
						</div>
					</div>
					<div class="fp-business__text">
						<?php get_template_part(SHOULDER, null, [
							"text" => "BUSINESS",
							"color" => "red",
							"component" => "p"
						]); ?>
						<?php get_template_part(TYPO, null, [
							"component" => "h2",
							"text" => "建物環境の専門性を持ち<br class='pc'>２つの事業領域を展開",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"component" => "p",
							"text" => "私たちは、快適な建物環境を実現する環境システム事業と、建設業界に向けた専門商社として商材を提供する管工機材事業を展開しています。２つの事業の相互連携により、人々の快適な暮らしの実現に努めています。",
						]); ?>
						<div class="fp-business__btn">
							<?php get_template_part(BUTTON, null, [
								"href" => URL_BUSINESS,
								"text" => "OUR BUSINESS",
								"font" => "en",
								"hover" => "text-forward-reserve",
								"arrow_hover" => "forward-reserve",
								"variable" => "justify-between md:justify-center",
							]); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="fp-black js-bg-change-section" data-section="black">
		<div class="fp-black__container">
			<section class="fp-tech">
				<div class="fp-tech__head l-cont">
					<div class="flex justify-center">
						<?php get_template_part(SHOULDER, null, [
							"text" => "TECHNOLOGY",
							"color" => "white",
							"component" => "p"
						]); ?>
					</div>
					<div class="fp-tech__head__text">
						<?php get_template_part(TYPO, null, [
							"component" => "h2",
							"text" => "「建物環境」を<br class='sp'>つくる技術",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"component" => "p",
							"text" => "実は、何気なく過ごしている建物の裏側では、<br class='sp'>精密に「環境」がコントロールされています",
						]); ?>
					</div>
				</div>
				<div class="fp-tech__body js-tech-body">
					<div class="fp-tech__area js-tech-area">
						<?php
							$i = 1;
							$tech_list = [
								[
									"hd" => [
										"main" => "空気",
										"sub" => "を制御",
									],
									"desc" => "最適なエネルギー効率を維持しながら、温度、湿度、CO2濃度、気流などをコントロールし、建物を使う人々にとって快適な環境に保つ。"
								],
								[
									"hd" => [
										"main" => "中央監視",
										"sub" => "を制御",
									],
									"desc" => "センサーやネットワークにより建物全体をトータルに管理。蓄積されるエネルギー消費量などのデータを用い、最適な環境のための分析や改善も行う。"
								],
								[
									"hd" => [
										"main" => "セキュリティ",
										"sub" => "を制御",
									],
									"desc" => "利用者の安全を守るため入退室感知や指紋認証などで建物への不正な侵入を防止。セキュリティシステムが監視カメラや空調・照明とも連動し緊急事態に適切に対応。"
								],
								[
									"hd" => [
										"main" => "電気",
										"sub" => "を制御",
									],
									"desc" => "照明、電力供給、配電、発電など、電力を必要とする制御を行う。ライフラインの正常稼働を保つためにリアルタイムで詳細までモニタリングを行う。"
								],
								[
									"hd" => [
										"main" => "衛生",
										"sub" => "を制御",
									],
									"desc" => "いつでも衛生設備を快適で衛生的な状態を保つために、空調や給排水を正しくコントロールし、建物の衛生設備の環境をクリーンに維持する。"
								],
							];
							$tech_count = count($tech_list);
						?>
						<?php foreach($tech_list as $item): ?>
						<div class="fp-tech__block js-tech-block <?php if($i === 1): ?>is-show <?php endif; ?>">
							<div class="fp-tech__image">
								<div class="fp-tech__image__body">
									<img src="<?= URL_SVG ?>fp-tech-img-<?= sprintf('%02d', $i) ?>.svg" alt="" class="fit-contain">
								</div>
							</div>
							<div class="fp-tech__index">
								<?php
									$count = 0;
									while($count < $tech_count):
								?>
								<div class="fp-tech__index__item js-tech-index-item <?php if($$count === 0): ?>is-active<?php endif; ?>"></div>
								<?php
									$count++;
									endwhile;
								?>
							</div>
							<div class="fp-tech__text l-cont--sp">
								<?php get_template_part(PICTURE, null, [
									"path" => "front-page/tech-ele-".sprintf('%02d', $i).".png",
									"alt" => "",
									"variable" => "fp-tech__ele pc",
								]); ?>
								<div>
									<div class="fp-tech__block__title">
										<?php get_template_part(PICTURE, null, [
											"path" => "front-page/tech-ele-".sprintf('%02d', $i)."-sp.png",
											"alt" => "",
											"variable" => "fp-tech__ele sp",
										]); ?>
										<h3 class="fp-tech__block__hd">
											<span class="fp-tech__block__hd--main"><?= $item["hd"]["main"] ?></span>
											<span class="fp-tech__block__hd--sub"><?= $item["hd"]["sub"] ?></span>
										</h3>
									</div>
									<?php get_template_part(TYPO, null, [
										"text" => $item["desc"]
									]); ?>
								</div>
							</div>
						</div>
						<?php
							$i++;
							endforeach;
						?>
					</div>
				</div>
			</section>
			<?php /* 0610非公開
			<div class="fp-tech__lower">
				<div class="l-cont l-cont--sp-none">
					<p class="fp-tech__lower__lead">快適な建物環境を実現する上で<br>オーテックは「空気」の制御を担っています</p>
					<a href="<?= URL_TECHNOLOGY ?>" class="fp-tech__lower__btn anm-hover">
						<p class="fp-tech__lower__main">オーテックの<br class="sp">建物環境を支える技術</p>
						<div class="fp-tech__lower__sub">
							<p class="fp-tech__lower__sub__text">OUR TECHNOLOGY</p>
							<div class="fp-tech__lower__icon">
								<?php get_template_part(BUTTON_ARROW, null, [
									"color" => "white",
									"type" => "circle",
									"size" => "md",
									"hover" => "forward-scale-reserve",
									"variable" => "fp-tech__lower__icon--body"
								]); ?>
							</div>
						</div>
					</a>
				</div>
			</div>
			*/ ?>
			<?php /* 0610非公開
			<section class="fp-story">
				<div class="l-cont">
					<?php get_template_part(SHOULDER, null, [
						"text" => "PROJECT STORY",
						"color" => "white",
					]); ?>
					<div class="fp-story__upper">
						<a href="<?= URL_PROJECT_STORY ?>projectstory-1/" class="fp-story__upper__item anm-hover">
							<?php get_template_part(PICTURE, null, [
								"path" => "front-page/story-img-01.jpg",
								"alt" => "",
								"variable" => "fp-story__upper__pic",
								"type" => "pill",
								"hover" => "scale"
							]); ?>
							<div class="fp-story__upper__text">
								<?php get_template_part(TYPO, null, [
									"component" => "h3",
									"class_change" => "h5",
									"text" => "世界遺産の展示を支える技術<br>鎌倉時代の重要文化財の温湿度・空調を管理",
								]); ?>
								<div class="fp-story__upper__icon">
									<?php get_template_part(BUTTON_ARROW, null, [
										"size" => "md",
										"hover" => "forward-reserve",
										"reserve_color" => "black"
									]); ?>
								</div>
							</div>
						</a>
						<a href="<?= URL_PROJECT_STORY ?>projectstory-2/" class="fp-story__upper__item anm-hover">
							<?php get_template_part(PICTURE, null, [
								"path" => "front-page/story-img-02.jpg",
								"alt" => "",
								"variable" => "fp-story__upper__pic",
								"type" => "pill",
								"hover" => "scale"
							]); ?>
							<div class="fp-story__upper__text">
								<?php get_template_part(TYPO, null, [
									"component" => "h3",
									"class_change" => "h5",
									"text" => "最先端技術でオリンピック会場の環境をつくる<br>自然エネルギーを優先使用し省エネ・省電力化",
								]); ?>
								<div class="fp-story__upper__icon">
									<?php get_template_part(BUTTON_ARROW, null, [
										"size" => "md",
										"hover" => "forward-reserve",
										"reserve_color" => "black"
									]); ?>
								</div>
							</div>
						</a>
					</div>
					<div class="fp-story__btn flex justify-end">
						<?php get_template_part(BUTTON, null, [
							"href" => URL_PROJECT_STORY,
							"text" => "ALL PROJECT STORY",
							"font" => "en",
							"hover" => "text-reserve",
							"hover_color" => "black",
							"arrow_hover" => "forward-reserve",
							"color" => "white",
							"variable" => "justify-between md:justify-center"
						]); ?>
					</div>
			*/ ?>
					<?php /*
					<div class="fp-story__lower">
						<a href="" class="fp-story__lower__item anm-hover">
							<div class="fp-story__lower__text">
								<?php get_template_part(TYPO, null, [
									"component" => "h3",
									"text" => "建物環境を支える技術",
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" => "実は多くの様々な建物環境を支えている<br>オーテックの技術をご紹介します",
									"weight" => "reg",
									"variable" => "fp-story__lower__desc"
								]); ?>
								<div class="fp-story__lower__icon">
									<?php get_template_part(BUTTON_ARROW, null, [
										"size" => "lg",
										"hover" => "forward-reserve",
										"reserve_color" => "black"
									]); ?>
								</div>
							</div>
							<?php get_template_part(PICTURE, null, [
								"path" => "front-page/story-img-03.jpg",
								"alt" => "",
								"type" => "pill",
								"variable" => "fp-story__lower__pic",
								"hover" => "scale"
							]); ?>
						</a>
						<a href="" class="fp-story__lower__item anm-hover">
							<?php get_template_part(PICTURE, null, [
								"path" => "front-page/story-img-04.jpg",
								"alt" => "",
								"type" => "pill",
								"variable" => "fp-story__lower__pic",
								"hover" => "scale"
							]); ?>
							<div class="fp-story__lower__text">
								<?php get_template_part(TYPO, null, [
									"component" => "h3",
									"text" => "プロジェクトストーリー",
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" => "オーテックの技術で支えられている<br>建物環境の実績をご紹介します",
									"weight" => "reg",
									"variable" => "fp-story__lower__desc"
								]); ?>
								<div class="fp-story__lower__icon">
									<?php get_template_part(BUTTON_ARROW, null, [
										"size" => "lg",
										"hover" => "forward-reserve",
										"reserve_color" => "black"
									]); ?>
								</div>
							</div>
						</a>
					</div>
					*/ ?>
			<?php /* 0610非公開
				</div>
			</section>
			*/ ?>
		</div>
	</div>
	<section class="fp-person">
		<div class="fp-person__intro__pics">
			<?php get_template_part(PICTURE, null, [
				"path" => "front-page/person-img-01-sp.jpg",
				"alt" => "",
				"variable" => "fp-person__intro__pic--sp",
				"type" => "pill"
			]); ?>
		</div>
		<div class="l-cont">
			<div class="fp-person__head">
				<?php get_template_part(TYPO, null, [
					"component" => "h2",
					"text" => "「ひと」の数だけ<br>仕事の進め方がある",
					"variable" => "fp-person__head__hd"
				]); ?>
				<?php get_template_part(TYPO, null, [
					"text" => "「オーテックの仕事に「ひと」は欠かせません。<br>どの事業でも、決まったものを売るのではなく、「ひと」が考え行動し<br>答えを導きだします。",
					"variable" => "fp-person__head__desc"
				]); ?>
			</div>
		</div>
		<div class="fp-person__intro">
			<div class="l-cont--md sp-hide">
				<div class="fp-person__intro__pics fp-person__intro__pics--end anm-pl--lg">
					<?php get_template_part(PICTURE, null, [
						"path" => "front-page/person-img-01.jpg",
						"alt" => "",
						"variable" => "fp-person__intro__pic--01",
						"type" => "pill"
					]); ?>
				</div>
				<div class="fp-person__intro__pics anm-pl--md">
					<?php get_template_part(PICTURE, null, [
						"path" => "front-page/person-img-02.jpg",
						"alt" => "",
						"variable" => "fp-person__intro__pic--02",
						"type" => "pill"
					]); ?>
				</div>
				<div class="fp-person__intro__pics fp-person__intro__pics--end fp-person__intro__pics--sm anm-pl">
					<?php get_template_part(PICTURE, null, [
						"path" => "front-page/person-img-03.jpg",
						"alt" => "",
						"variable" => "fp-person__intro__pic--03",
						"type" => "pill"
					]); ?>
				</div>
			</div>
		</div>
		<div class="fp-person__body">
			<div class="l-cont">
				<?php get_template_part(SHOULDER, null, [
					"text" => "PERSON",
					"color" => "red",
				]); ?>
				<div class="fp-person__row">
					<div class="fp-person__cards">
						<?php
							$list = [
								$peoples[0],
								$peoples[2],
							];
							foreach($list as $item) {
								get_template_part(PEOPLE_CARD, null, [
									"href" => URL_PEOPLE."people-".$item["id"]."/",
									"img" => "cms/people-".sprintf('%02d', $item["id"])."-mv.jpg",
									"hd" => str_replace("<br>", "", $item["hd"]),
									"profile" => [
										"name" => $item["name"],
										"icon" => $item["dept"],
										"school" => $item["school"]."卒",
										"year" => $item["entry"]."年入社"
									],
								]);
							}
						?>
					</div>
					<div class="fp-person__cards--lg">
						<?php
							$list = [
								$peoples[1],
							];
							foreach($list as $item) {
								get_template_part(PEOPLE_CARD, null, [
									"href" => URL_PEOPLE."people-".$item["id"]."/",
									"img" => "cms/people-".sprintf('%02d', $item["id"])."-mv.jpg",
									"hd" => str_replace("<br>", "", $item["hd"]),
									"profile" => [
										"name" => $item["name"],
										"icon" => $item["dept"],
										"school" => $item["school"]."卒",
										"year" => $item["entry"]."年入社"
									],
								]);
							}
						?>
						<div class="fp-person__btn">
							<?php get_template_part(BUTTON, null, [
								"href" => URL_PEOPLE,
								"text" => "ALL PEOPLE",
								"font" => "en",
								"hover" => "text-forward-reserve",
								"arrow_hover" => "forward-reserve",
								"variable" => "justify-between md:justify-center"
							]); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="fp-cross">
		<div class="l-cont">
			<div class="grid grid-cols-1 gap-8 md:gap-12">
				<?php get_template_part(SHOULDER, null, [
					"text" => "CROSS TALK",
					"color" => "red",
					"component" => "h2"
				]); ?>
				<div class="fp-cross__body">
					<?php
						$i = 1;
						$cross_list = [$crosstalks[0], $crosstalks[1]];
						foreach ($cross_list as $item):

						$card = $i === 1 ? "fp-cross__card" : "fp-cross__card--lg";
					?>
					<a href="<?= URL_CROSSTALK ?>crosstalk-<?= $i ?>/" class="<?= $card ?> anm-hover">
						<?php get_template_part(PICTURE, null, [
							"path" => "cms/cross-".$item["num"]."-mv.jpg",
							"alt" => "",
							"variable" => "fp-cross__pic",
							"type" => "pill",
							"hover" => "scale",
						]); ?>
						<div class="fp-cross__text">
							<p class="fp-cross__num"><?= $item["num"] ?></p>
							<div class="fp-cross__text__body">
								<?php get_template_part(TYPO, null, [
									"component" => "h3",
									"class_change" => "h4",
									"text" => $item["hd"],
								]); ?>
								<div class="fp-cross__text__row">
									<?php get_template_part(TYPO, null, [
										"text" => $item["cross"][0],
										"font" => "yugo",
										"weight" => "bold",
										"size" => "fs-14"
									]); ?>
									<?php get_template_part(TYPO, null, [
										"text" => "×",
										"font" => "yugo",
										"weight" => "bold",
										"size" => "fs-14"
									]); ?>
									<?php get_template_part(TYPO, null, [
										"text" => $item["cross"][1],
										"font" => "yugo",
										"weight" => "bold",
										"size" => "fs-14"
									]); ?>
								</div>
							</div>
						</div>
					</a>
					<?php
						$i++;
						endforeach;
					?>
				</div>
				<div class="fp-cross__btn">
					<?php get_template_part(BUTTON, null, [
						"href" => URL_CROSSTALK,
						"text" => "ALL CROSS TALK",
						"font" => "en",
						"hover" => "text-forward-reserve",
						"arrow_hover" => "forward-reserve",
						"variable" => "justify-between md:justify-center"
					]); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="fp-culture">
		<div class="l-cont">
			<div class="grid grid-cols-1 gap-8 md:gap-12">
				<?php get_template_part(SHOULDER, null, [
					"text" => "CULTURE",
					"color" => "red",
					"component" => "p"
				]); ?>
				<?php get_template_part(TYPO, null, [
					"component" => "h2",
					"text" => "厳しい場面もあるからこそ<br class='pc'>社内の雰囲気を大切にする文化",
				]); ?>
				<div class="w-full md:w-1/2 md:pr-10">
					<?php get_template_part(TYPO, null, [
						"text" => "オーテックという会社がどんな会社なのか。<br>入社しないと掴みづらい内情を数字やアンケートを使い、わかりやすくご紹介。",
					]); ?>
				</div>
			</div>
		</div>
		<div class="fp-culture__lower l-cont--sm l-cont--sp-none">
			<?php /*
			<a href="<?= URL_KEYWORD ?>" class="fp-culture__item anm-hover">
				<div class="fp-culture__text">
					<?php get_template_part(TYPO, null, [
						"component" => "h3",
						"text" => "数字とキーワードで見る<br>オーテック",
					]); ?>
					<div class="fp-culture__icon">
						<?php get_template_part(BUTTON_ARROW, null, [
							"size" => "lg",
							"hover" => "forward-reserve",
						]); ?>
					</div>
				</div>
				<?php get_template_part(PICTURE, null, [
					"path" => "front-page/culture-img-01.jpg",
					"alt" => "",
					"variable" => "fp-culture__pic",
					"type" => "pill",
					"hover" => "scale",
				]); ?>
			</a>
			*/ ?>
			<a href="<?= URL_VOICE ?>" class="fp-culture__item anm-hover">
				<div class="fp-culture__text l-cont--sp">
					<?php get_template_part(TYPO, null, [
						"component" => "h3",
						"text" => "先輩社員に聞いてみた",
					]); ?>
					<div class="fp-culture__icon">
						<?php get_template_part(BUTTON_ARROW, null, [
							"size" => "lg",
							"hover" => "forward-reserve",
						]); ?>
					</div>
				</div>
				<?php get_template_part(PICTURE, null, [
					"path" => "front-page/culture-img-01.jpg",
					"alt" => "",
					"variable" => "fp-culture__pic",
					"hover" => "scale",
				]); ?>
			</a>
		</div>
	</section>
</article>
<div class="fp-lower">
	<section class="fp-news">
		<div class="l-cont">
			<?php get_template_part(SHOULDER, null, [
				"text" => "NEWS"
			]); ?>
			<ul class="fp-news__list">
				<?php get_template_part(NEWS_ITEM, null, [
					"href" => "",
					"is_external" => false,
					"date" => "2024.08.20",
					"desc" => "システムメンテナンスのお知らせ：2024年8月23日（金）22：00～翌01：00",
					"accordion" => "平素より当社採用サイトをご利用いただき、誠にありがとうございます。<br> 誠に勝手ながら、以下の時間帯においてシステムメンテナンスを実施いたします。<br>メンテナンス期間：2024年8月23日（金）22：00～翌01：00<br>※時間は前後する場合がございます。<br>※メンテナンス中はアクセスできない時間帯がございます。<br>皆さまには大変ご迷惑をおかけいたしますが、何卒ご理解いただきますようお願い申し上げます。",
					"icon" => "pdf",
				]); ?>
				<?php get_template_part(NEWS_ITEM, null, [
					"href" => "",
					"is_external" => false,
					"date" => "2024.06.10",
					"desc" => "採用サイトをリニューアルいたしました。",
					"icon" => "pdf",
				]); ?>
			</ul>
			<?php /*
			<div class="fp-news__all">
				<?php get_template_part(BUTTON, null, [
					"href" => "",
					"text" => "VIEW ALL",
					"type" => "menu",
					"arrow_type" => "circle",
					"font" => "en",
					"hover" => "icon-reserve"
				]); ?>
			</div>
			*/ ?>
		</div>
	</section>
<?php get_footer(); ?>