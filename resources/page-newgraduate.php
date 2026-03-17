<?php
	$page_title = [NAME_NEW_GRADUATE];
	$page_desc = "オーテック採用サイトの新卒募集要項紹介ページです。皆さまのエントリーをお待ちしております。";
	$page_canonical = URL_NEW_GRADUATE;
	get_header();
?>
<article class="p-guideline">
	<?php get_template_part(ARTICLE_HEAD, null, [
		"list" => [
			[
				"href" => URL_HOME,
				"name" => "HOME"
			],
			[
				"href" => "",
				"name" => NAME_NEW_GRADUATE
			],
		],
		"en" => "NEW <br class='sp'>GRADUATE",
		"jp" => NAME_NEW_GRADUATE,
	]); ?>
	<div class="article-body">
		<div class="l-cont">
			<div class="m-two-column">
				<aside class="m-two-column__side sp-hide">
					<ul class="m-two-column__side__list grid grid-cols-1 gap-2">
						<li class="m-two-column__side__item">
							<a href="#s1" class="m-two-column__side__link js-cur-link is-show">募集要項</a>
						</li>
						<li class="m-two-column__side__item">
							<a href="#s2" class="m-two-column__side__link js-cur-link">選考フロー</a>
						</li>
					</ul>
				</aside>
				<div class="m-two-column__main grid grid-cols-1 p-guideline__main">
					<section id="s1" class="js-cur-sec grid grid-cols-1 p-guideline__sec">
						<div class="p-guideline__block">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"class_change" => "h5",
								"text" => "エントリー方法",
								"variable" => "p-guideline__hd"
							]); ?>
							<div class="p-guideline__btns">
								<?php get_template_part(TYPO, null, [
									"text" => "オーテックの選考に直接進みたい方",
									"size" => "lg"
								]); ?>
								<div class="p-guideline__btns__row">
									<a href="<?= URL_MYPAGE_2027 ?>" class="o-btn p-guideline__btn--red" target="_blank">
										<p class="o-btn__text">採用マイページ2027</p>
										<div class="o-btn__icon">
											<?php get_template_part(ICON_EXTERNAL); ?>
										</div>
									</a>
								</div>
							</div>
							<div class="p-guideline__btns">
								<?php get_template_part(TYPO, null, [
									"text" => "マイナビでお申し込みをしたい方",
									"size" => "lg"
								]); ?>
								<div class="p-guideline__btns__row">
									<a href="<?= URL_MYNAVI_2027 ?>" class="o-btn p-guideline__btn" target="_blank">
										<p class="o-btn__text">
											<img src="<?= URL_SVG ?>logo-mynav-2027.svg" alt="マイナビ2027">
										</p>
									</a>
								</div>
							</div>
						</div>
						<div class="p-guideline__block">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"class_change" => "h5",
								"text" => "募集職種",
								"variable" => "p-guideline__hd"
							]); ?>
							<div class="p-guideline__class">
								<?php
									$class_list = [
										[
											"hd" => "技術職",
											"items" => [
												[
													"sub" => "施工管理",
													"desc" => "自身が作成した施工図を基に協力業者への施工指示や、施工に必要な自動制御機器の発注、工事における予算、現場の安全管理などを行います。",
												],
												[
													"sub" => "メンテナンス",
													"desc" => "自動制御システムのメンテナンス契約を取り交わして頂いたお客様の建物について定期的に保守点検を行う仕事です。",
												],
											],
										],
										[
											"hd" => "営業職",
											"items" => [
												[
													"sub" => "国内営業",
													"desc" => "オフィスや工場などの建物内に水や空気を運ぶための配管資材（バルブ・パイプ・継手など）や、豊かな暮らしに欠かせない住宅設備機器（衛生陶器・空調機器）を設備工事業者に販売することが管工機材事業です。建物の用途やお客様のニーズに合わせて最適な商品を選択し供給するのが営業としての使命です。",
												],
											],
										],
									];
									foreach ($class_list as $block):
								?>
								<div class="p-guideline__class__block">
									<h3 class="p-guideline__class__hd"><?= $block["hd"] ?></h3>
									<div class="p-guideline__class__items">
										<?php foreach ($block["items"] as $item): ?>
										<div class="p-guideline__class__item">
											<?php get_template_part(TYPO, null, [
												"text" => $item["sub"],
												"size" => "lg"
											]); ?>
											<?php get_template_part(TYPO, null, [
												"text" => $item["desc"],
											]); ?>
										</div>
										<?php endforeach; ?>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="p-guideline__block">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"class_change" => "h5",
								"text" => "募集学科",
								"variable" => "p-guideline__hd"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "全学部全学科",
								"size" => "lg"
							]); ?>
						</div>
						<div class="p-guideline__block">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"class_change" => "h5",
								"text" => "採用人数",
								"variable" => "p-guideline__hd"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "30名程度",
								"size" => "lg"
							]); ?>
						</div>
						<div class="p-guideline__block">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"class_change" => "h5",
								"text" => "勤務地",
								"variable" => "p-guideline__hd"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "技術職は1年の研修中に希望の勤務地をヒアリング後に7支店のいずれかに決定（配属先候補：北海道支店／東北支店／北関東支店／東関東支店／東京支店／横浜支店／中部支店）<br>営業職は札幌支店／東京支店／大阪支店に配属",
								"size" => "lg"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "※採用年度により配属支店が異なる可能性がございます。詳しくは会社説明会にてご説明しております。",
								"variable" => "p-guideline__cap"
							]); ?>
						</div>
						<div class="p-guideline__block">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"class_change" => "h5",
								"text" => "勤務時間",
								"variable" => "p-guideline__hd"
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "9:00~17:30（休憩12:00~13:00）",
								"size" => "lg"
							]); ?>
						</div>
						<div class="p-guideline__block">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"class_change" => "h5",
								"text" => "初任給",
								"variable" => "p-guideline__hd"
							]); ?>
							<div class="grid grid-cols-1 p-guideline__gap--lg">
								<div class="grid grid-cols-1 p-guideline__gap">
									<?php get_template_part(TYPO, null, [
										"text" => "東京地区勤務",
										"size" => "lg"
									]); ?>
									<?php get_template_part(TYPO, null, [
										"text" => "大学卒　　273.636円（地域手当・住宅手当含む）<br>大学院了　279,996円（地域手当・住宅手当含む）",
									]); ?>
								</div>
								<?php /*
								<div class="grid grid-cols-1 p-guideline__gap">
									<?php get_template_part(TYPO, null, [
										"text" => "支社、営業所勤務",
										"size" => "lg"
									]); ?>
									<?php get_template_part(TYPO, null, [
										"text" => "⼤学院了220,000円<br>⼤学卒206,000円",
									]); ?>
								</div>
								*/ ?>
							</div>
						</div>
						<div class="p-guideline__block">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"class_change" => "h5",
								"text" => "待遇",
								"variable" => "p-guideline__hd"
							]); ?>
							<div class="grid grid-cols-1 p-guideline__gap--lg">
								<div class="grid grid-cols-1 p-guideline__gap">
									<?php get_template_part(TYPO, null, [
										"text" => "諸手当",
										"size" => "lg"
									]); ?>
									<?php get_template_part(TYPO, null, [
										"text" => "時間外手当／技術手当／子ども手当／ライフプラン手当／通勤手当",
									]); ?>
								</div>
								<div class="grid grid-cols-1 p-guideline__gap">
									<?php get_template_part(TYPO, null, [
										"text" => "昇給",
										"size" => "lg"
									]); ?>
									<?php get_template_part(TYPO, null, [
										"text" => "年1回（4月）",
									]); ?>
								</div>
								<div class="grid grid-cols-1 p-guideline__gap">
									<?php get_template_part(TYPO, null, [
										"text" => "賞与",
										"size" => "lg"
									]); ?>
									<?php get_template_part(TYPO, null, [
										"text" => "年2回（6月と12月）",
									]); ?>
									<?php get_template_part(TYPO, null, [
										"text" => "※業績に応じて3月に褒賞金支給",
										"variable" => "p-guideline__cap"
									]); ?>
								</div>
								<div class="grid grid-cols-1 p-guideline__gap">
									<?php get_template_part(TYPO, null, [
										"text" => "福利厚生・社内制度",
										"size" => "lg"
									]); ?>
									<?php get_template_part(TYPO, null, [
										"text" => "産前産後休暇、育児休業、出生時育児休業（産後パパ育休）、育児短時間勤務、看護休暇、介護休業、通信教育（受講費用会社負担）　各種社会保険完備（健康・厚生年金・雇用・労災）、ライフプラン支援金制度、従業員持株会、財形貯蓄制度、借上社宅制度、技術手当、褒賞金制度、確定給付年金、確定拠出年金、資格取得補助制度、保養所（草津）、社内旅行、スポーツサークルなどのクラブ活動",
									]); ?>
								</div>
							</div>
						</div>
						<div class="p-guideline__block">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"class_change" => "h5",
								"text" => "休日休暇",
								"variable" => "p-guideline__hd"
							]); ?>
							<div class="grid grid-cols-1 p-guideline__gap--lg">
								<div class="grid grid-cols-1 p-guideline__gap">
									<?php get_template_part(TYPO, null, [
										"text" => "年間休日125日（※2025年度実績）",
										"size" => "lg"
									]); ?>
									<?php get_template_part(TYPO, null, [
										"text" => "完全週休2⽇制（土曜日、日曜日）祝日、年末年始、夏季、創立記念日等、初年度有給休暇10日",
									]); ?>
								</div>
							</div>
						</div>
						<div class="p-guideline__block">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"class_change" => "h5",
								"text" => "採用実績",
								"variable" => "p-guideline__hd"
							]); ?>
							<div class="grid grid-cols-1 p-guideline__gap--lg">
								<div class="grid grid-cols-1 p-guideline__gap">
									<?php get_template_part(TYPO, null, [
										"text" => "人数",
										"size" => "lg"
									]); ?>
									<?php get_template_part(TYPO, null, [
										"text" => "2025年 34⼈ ／ 2026年 29⼈",
									]); ?>
								</div>
								<div class="grid grid-cols-1 p-guideline__gap">
									<?php get_template_part(TYPO, null, [
										"text" => "採用実績校",
										"size" => "lg"
									]); ?>
									<?php get_template_part(TYPO, null, [
										"text" => "愛知工業大学、愛知淑徳大学、秋田大学、足利大学、足利工業大学、石巻専修大学、岩手大学、追手門学院大学、大妻女子大学、岡山大学、神奈川大学、神奈川工科大学、関西大学、関西学院大学、関東学院大学、共立女子大学、金城学院大学、群馬大学、工学院大学、高知工科大学、神戸学院大学、國學院大學、札幌大学、札幌学院大学、滋賀大学、芝浦工業大学、尚絅学院大学、城西大学、昭和女子大学、信州大学、成蹊大学、清泉女子大学、聖徳大学、専修大学、大同大学、大東文化大学、拓殖大学、多摩大学、玉川大学、千歳科学技術大学、千葉工業大学、中央大学、中京大学、中部大学、津田塾大学、帝京大学、東海大学、東京家政大学、東京経済大学、東京女子大学、東京電機大学、東京都市大学、東京農業大学、東京理科大学、同志社大学、東邦大学、東北学院大学、東北工業大学、東洋大学、東洋英和女学院大学、名古屋工業大学、日本大学、日本工業大学、日本女子大学、法政大学、北海学園大学、北海商科大学、北海道科学大学、宮城学院女子大学、宮城教育大学、武蔵野大学、室蘭工業大学、明治大学、名城大学、目白大学、山形大学、立教大学、龍谷大学、和光大学、和洋女子大学",
									]); ?>
								</div>
							</div>
						</div>
						<div class="p-guideline__block">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"class_change" => "h5",
								"text" => "エントリー方法",
								"variable" => "p-guideline__hd"
							]); ?>
							<div class="p-guideline__btns">
								<?php get_template_part(TYPO, null, [
									"text" => "オーテックの選考に直接進みたい方",
									"size" => "lg"
								]); ?>
								<div class="p-guideline__btns__row">
									<a href="<?= URL_MYPAGE_2027 ?>" class="o-btn p-guideline__btn--red" target="_blank">
										<p class="o-btn__text">採用マイページ2027</p>
										<div class="o-btn__icon">
											<?php get_template_part(ICON_EXTERNAL); ?>
										</div>
									</a>
								</div>
							</div>
							<div class="p-guideline__btns">
								<?php get_template_part(TYPO, null, [
									"text" => "マイナビでお申し込みをしたい方",
									"size" => "lg"
								]); ?>
								<div class="p-guideline__btns__row">
									<a href="<?= URL_MYNAVI_2027 ?>" class="o-btn p-guideline__btn" target="_blank">
										<p class="o-btn__text">
											<img src="<?= URL_SVG ?>logo-mynav-2027.svg" alt="マイナビ2027">
										</p>
									</a>
								</div>
							</div>
						</div>
					</section>
					<section id="s2" class="js-cur-sec">
						<?php get_template_part(TYPO, null, [
							"component" => "h2",
							"class_change" => "h3",
							"text" => "選考フロー",
						]); ?>
						<div class="p-guideline__flow__tabs">
							<button class="p-guideline__flow__tab js-guideline-flow-tab is-show">技術職</button>
							<button class="p-guideline__flow__tab js-guideline-flow-tab">営業職</button>
						</div>
						<div class="p-guideline__flow__cont">
							<div class="p-guideline__flow js-guideline-flow is-show">
								<?php
									$flow = [
										[
											"index" => "01",
											"hd" => "エントリー",
											"desc" => "マイナビより説明会参加のご予約とエントリーをお願いいたします。",
										],
										[
											"index" => "02",
											"hd" => "会社説明会",
											"desc" => "事業内容や会社の基本情報をご紹介します。日程等はマイナビよりご確認ください。",
										],
										[
											"index" => "03",
											"hd" => "一次面接（WEB）",
											"desc" => "人事担当者2名とのオンライン面接を実施いたします。",
										],
										[
											"index" => "04",
											"hd" => "適性検査（WEB）",
											"desc" => "適性試験（適性検査）を実施いたします。※専門知識は不要です。",
										],
										[
											"index" => "05",
											"hd" => "最終面接（対面）",
											"desc" => "対面での個人面接を実施いたします。",
										],
										[
											"index" => "06",
											"hd" => "内定",
											"desc" => "弊社より内定通知書を送付します。ご入社まで、人事担当者が各種手続きなどをフォローします。",
										],
									];
									foreach ($flow as $block):
								?>
								<div class="p-guideline__flow__block">
									<div class="p-guideline__flow__index"><?= $block["index"] ?></div>
									<div class="p-guideline__flow__text">
										<h3 class="p-guideline__flow__hd"><?= $block["hd"] ?></h3>
										<?php get_template_part(TYPO, null, [
											"text" => $block["desc"],
											"size" => "sm"
										]); ?>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
							<div class="p-guideline__flow js-guideline-flow">
								<?php
									$flow = [
										[
											"index" => "01",
											"hd" => "エントリー",
											"desc" => "マイナビより説明会参加のご予約とエントリーをお願いいたします。",
										],
										[
											"index" => "02",
											"hd" => "会社説明会",
											"desc" => "事業内容や会社の基本情報をご紹介します。日程等はマイナビよりご確認ください。",
										],
										[
											"index" => "03",
											"hd" => "適性検査（WEB）",
											"desc" => "適性試験（適性検査）を実施いたします。※専門知識は不要です。",
										],
										[
											"index" => "04",
											"hd" => "一次面接（WEB）",
											"desc" => "人事担当者2名とのオンライン面接を実施いたします。",
										],
										[
											"index" => "05",
											"hd" => "最終面接（対面）",
											"desc" => "対面での個人面接を実施いたします。",
										],
										[
											"index" => "06",
											"hd" => "内定",
											"desc" => "弊社より内定通知書を送付します。ご入社まで、人事担当者が各種手続きなどをフォローします。",
										],
									];
									foreach ($flow as $block):
								?>
								<div class="p-guideline__flow__block">
									<div class="p-guideline__flow__index"><?= $block["index"] ?></div>
									<div class="p-guideline__flow__text">
										<h3 class="p-guideline__flow__hd"><?= $block["hd"] ?></h3>
										<?php get_template_part(TYPO, null, [
											"text" => $block["desc"],
											"size" => "sm"
										]); ?>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
		<?php /*
		<div class="p-guideline__entry">
			<div class="l-cont">
				<div class="text-center">
					<?php get_template_part(TYPO, null, [
						"text" => "みなさまにお会いできることを<br class='sp'>楽しみにお待ちしています。",
						"size" => "lg"
					]); ?>
				</div>
				<a href="" class="o-btn p-guideline__entry__btn" target="_blank">
					<p class="o-btn__text">新卒エントリー</p>
				</a>
			</div>
		</div>
		*/ ?>
	</div>
</article>
<?php get_footer(); ?>