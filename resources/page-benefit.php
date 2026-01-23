<?php
	// setting
	$page_title = [NAME_BENEFIT];
	$page_desc = "オーテック採用サイトの福利厚生と働く環境紹介ページです。オーテックは社員に対する手厚い福利厚生制度が１つの魅力となります。";
	$page_canonical = URL_BENEFIT;
	$images = "benefit/benefit-";

	get_header();
?>

<article class="p-benefit">
	<?php get_template_part(ARTICLE_HEAD, null, [
		"list" => [
			[
				"href" => URL_HOME,
				"name" => "HOME"
			],
			[
				"href" => "",
				"name" => NAME_BENEFIT
			],
		],
		"en" => "BENEFIT",
		"jp" => NAME_BENEFIT,
	]); ?>
	<div class="article-body">
		<div class="l-cont">
			<?php get_template_part(TYPO, null, [
				"text" => "従業員一人ひとりが、<br class='sp'>いきいきと働けて、<br>仕事もプライベートも自分らしく<br class='sp'>充実するように<br>さまざまな制度を用意し、<br class='sp'>アップデートしていきます。",
				"font" => "yugo",
				"weight" => "bold",
				"size" => "fs-24",
				"variable" => "leading-[1.75] text-center",
			]); ?>
			<div class="p-benefit__sections">
				<section class="p-benefit__sec">
					<div class="p-benefit__sec__head">
						<?php get_template_part(SHOULDER, null, [
							"component" => "p",
							"text" => "Welfare",
							"color" => "red",
							"no_icon" => true,
						]); ?>
						<?php get_template_part(TYPO, null, [
							"component" => "h2",
							"class_change" => "h3",
							"text" => "福利厚生",
						]); ?>
					</div>
					<div class="p-benefit__sec__body">
						<div class="p-benefit__areas">
							<div class="p-benefit__area">
								<div class="p-benefit__area__hd">
									<div class="p-benefit__area__hd__icon">
										<img src="<?= URL_SVG ?>benefit-icon-01.svg" alt="">
									</div>
									<?php get_template_part(TYPO, null, [
										"component" => "h3",
										"class_change" => "h5",
										"text" => "リフレッシュに関する制度",
									]); ?>
								</div>
								<div class="p-benefit__area__body">
									<div class="m-card-system">
										<?php get_template_part(CARD_SYSTEM, null, [
											"hd" => "スポーツサークルなどの<br>クラブ活動",
											"desc" => "サッカー部やバレーボール部など、積極的に活動を行っています。会社に申請することで、クラブ活動費として予算が付きます。",
										]); ?>
										<?php get_template_part(CARD_SYSTEM, null, [
											"hd" => "社内旅行",
											"desc" => "支店内での社員旅行を自由に計画ができ、会社からのを補助を受ける事も可能です。",
										]); ?>
										<?php get_template_part(CARD_SYSTEM, null, [
											"hd" => "保養所の活用",
											"desc" => "プライベートのお休みの旅行などで草津にある保養所を利用することができます。",
										]); ?>
									</div>
								</div>
							</div>

							<div class="p-benefit__area">
								<div class="p-benefit__area__hd">
									<div class="p-benefit__area__hd__icon">
										<img src="<?= URL_SVG ?>benefit-icon-02.svg" alt="">
									</div>
									<?php get_template_part(TYPO, null, [
										"component" => "h3",
										"class_change" => "h5",
										"text" => "住宅に関する制度",
									]); ?>
								</div>
								<div class="p-benefit__area__body">
									<div class="m-card-system--col2">
										<?php get_template_part(CARD_SYSTEM, null, [
											"hd" => "住宅手当",
											"desc" => "自宅からの通勤者や借上げ社宅制度の適用期間満了者には最大3万5千円の住宅手当を支給します。※社内規定に基づく",
										]); ?>
										<div class="o-card-system sp-hide"></div>
										<div class="o-card-system--full">
											<div class="o-card-system__text">
												<?php get_template_part(TYPO, null, [
													"text" => "借上社宅制度",
													"font" => "yugo",
													"weight" => "bold",
													"size" => "fs-20",
													"variable" => "leading-[1.35]",
												]); ?>
												<?php get_template_part(TYPO, null, [
													"text" => "社員が選択した賃貸物件を会社が契約し、その家賃を会社と社員で割って払っていく制度になります。入社後～満25歳までの社員は家賃の95％を補助し、25歳以降は、80％、70％と年齢に応じて補助率が変わります。<br>※社宅上限額<br>東京支店、横浜支店・８万円／東北支店、東関東支店、中部支店・６万円／北海道支店、北関東支店・5.5万円",
													"color" => "gray",
													"size" => "fs-14",
												]); ?>
											</div>

											<div class="o-card-system__other">
												<div class="p-benefit__block">
													<p class="p-benefit__block__hd">
														<span class="p-benefit__block__icon">
															<img src="<?= URL_SVG ?>benefit-icon-06.svg" alt="">
														</span>
														<span>転勤なしの場合</span>
													</p>
													<div class="p-benefit__block__inner">
														<?php get_template_part(PICTURE, null, [
															"path" => $images."img-01.png",
															"alt" => "",
															"variable" => "p-benefit__block__pic"
														]); ?>
													</div>
												</div>
												<div class="p-benefit__block">
													<p class="p-benefit__block__hd">
														<span class="p-benefit__block__icon">
															<img src="<?= URL_SVG ?>benefit-icon-06.svg" alt="">
														</span>
														<span>転勤ありの場合</span>
													</p>
													<div class="p-benefit__block__inner">
														<?php get_template_part(PICTURE, null, [
															"path" => $images."img-02.png",
															"alt" => "",
															"variable" => "p-benefit__block__pic"
														]); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="p-benefit__area">
								<div class="p-benefit__area__hd">
									<div class="p-benefit__area__hd__icon">
										<img src="<?= URL_SVG ?>benefit-icon-03.svg" alt="">
									</div>
									<?php get_template_part(TYPO, null, [
										"component" => "h3",
										"class_change" => "h5",
										"text" => "仕事に関する制度",
									]); ?>
								</div>
								<div class="p-benefit__area__body">
									<div class="m-card-system">
										<?php get_template_part(CARD_SYSTEM, null, [
											"hd" => "技術手当",
											"desc" => "会社が必要と認めた資格を取得した時、毎月の給与として支給される手当になります。",
										]); ?>
										<?php get_template_part(CARD_SYSTEM, null, [
											"hd" => "資格取得支援",
											"desc" => "社員が資格を取得しやすいような環境整備として、取得したい資格の多くを通信教育で学習することが出来ます。この通信教育は会社負担しているため、多くの社員が活用しています。<br>また、資格試験の1回目の試験費用は会社負担の為、常に向上心を持って自身のスキルアップに挑戦しやすい制度となっています。",
										]); ?>
										<div class="o-card-system sp-hide"></div>
									</div>
								</div>
							</div>

							<div class="p-benefit__area">
								<div class="p-benefit__area__hd">
									<div class="p-benefit__area__hd__icon">
										<img src="<?= URL_SVG ?>benefit-icon-04.svg" alt="">
									</div>
									<?php get_template_part(TYPO, null, [
										"component" => "h3",
										"class_change" => "h5",
										"text" => "資産形成に関する制度",
									]); ?>
								</div>
								<div class="p-benefit__area__body">
									<div class="m-card-system--col2">
										<?php get_template_part(CARD_SYSTEM, null, [
											"hd" => "従業員持株会",
											"desc" => "オーテックの従業員のみ加入が可能であり、毎月の給与から個人が設定した金額（拠出金）を控除し、オーテックの株を買付できる制度です。加入者は拠出金の10％が奨励金としてオーテックから付与されます。会社の業績が良くなれば自社株の配当も上がり、株主である従業員の資産として還元されるため、モチベーションアップにも繋がります。",
										]); ?>
										<?php get_template_part(CARD_SYSTEM, null, [
											"hd" => "ライフプラン支援金制度",
											"desc" => "従業員の退職後の資産形成をフォローする制度になります。毎月会社から1万円が確定拠出年金制度（DC）の為に、社員1人1人に支給されます。",
										]); ?>
										<div class="o-card-system--full">
											<div class="o-card-system__text">
												<?php get_template_part(TYPO, null, [
													"text" => "退職金制度",
													"font" => "yugo",
													"weight" => "bold",
													"size" => "fs-20",
													"variable" => "leading-[1.35]",
												]); ?>
												<?php get_template_part(TYPO, null, [
													"text" => "社員の老後資産の形成を支援するため、確定拠出年金制度(DC)、確定給付年金制度(DB)の２つの退職金制度を設けております。",
													"color" => "gray",
													"size" => "fs-14",
												]); ?>
											</div>

											<div class="o-card-system__other">
												<div class="p-benefit__block">
													<p class="p-benefit__block__hd">
														<span class="p-benefit__block__icon">
															<img src="<?= URL_SVG ?>benefit-icon-07.svg" alt="">
														</span>
														<span>確定拠出年金制度(DC)</span>
													</p>
													<div class="p-benefit__block__inner">
														<?php get_template_part(PICTURE, null, [
															"path" => $images."img-03.png",
															"alt" => "",
															"variable" => "p-benefit__block__pic"
														]); ?>
													</div>
												</div>
												<div class="p-benefit__block">
													<p class="p-benefit__block__hd">
														<span class="p-benefit__block__icon">
															<img src="<?= URL_SVG ?>benefit-icon-07.svg" alt="">
														</span>
														<span>確定給付年金制度(DB)</span>
													</p>
													<div class="p-benefit__block__inner">
														<?php get_template_part(PICTURE, null, [
															"path" => $images."img-04.png",
															"alt" => "",
															"variable" => "p-benefit__block__pic"
														]); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="p-benefit__sec">
					<div class="p-benefit__sec__head">
						<?php get_template_part(SHOULDER, null, [
							"component" => "p",
							"text" => "Environment",
							"color" => "red",
							"no_icon" => true,
						]); ?>
						<?php get_template_part(TYPO, null, [
							"component" => "h2",
							"class_change" => "h3",
							"text" => "働く環境",
						]); ?>
					</div>
					<div class="p-benefit__sec__body">
						<div class="p-benefit__areas">
							<div class="p-benefit__area">
								<div class="p-benefit__area__hd">
									<div class="p-benefit__area__hd__icon">
										<img src="<?= URL_SVG ?>benefit-icon-05.svg" alt="">
									</div>
									<?php get_template_part(TYPO, null, [
										"component" => "h3",
										"class_change" => "h5",
										"text" => "柔軟な働き方",
									]); ?>
								</div>
								<div class="p-benefit__area__body">
									<div class="m-card-system">
										<?php get_template_part(CARD_SYSTEM, null, [
											"hd" => "子育て支援",
											"desc" => "産前産後休業・育児休業・産後パパ育休・育児短時間勤務制度などの制度から、多くの社員が活用し、その後復職されています。",
										]); ?>
										<?php get_template_part(CARD_SYSTEM, null, [
											"hd" => "介護休業",
											"desc" => "ご家族で介護が必要な方は介護休業を取得することが可能です。",
										]); ?>
										<?php get_template_part(CARD_SYSTEM, null, [
											"hd" => "休みの種類",
											"desc" => "1日有給や半日単位での半日有給、その他にも時間単位でお休みを取れる時間単位年休を取得することが可能です。社員の方も適宜使いやすい有給を取得されています。",
										]); ?>
										<?php /*
										<?php get_template_part(CARD_SYSTEM, null, [
											"hd" => "カフェテリアプラン",
											"desc" => "（仮）「カフェテリアプラン」とは、自分の生活スタイルに合わせた福利厚生を実現するため、複数のメニューの中から好きな福利厚生を選ぶことができる制度です。",
											"other" => "（仮）育児用品／塾代・進学受験費用／家事代行補助／通信教育／各種スクール・セミナー／<br class='pc'>講座の受講料／書籍／フィットネスジム／健康器具購入費補助／<br class='pc'>通信料／帰省旅費／水道・光熱費／海外赴任者の補助 等",
											"size" => "full"
										]); ?>
										*/ ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>

		<div class="m-lower-nav">
			<div class="m-lower-nav__cont l-cont--pc">
				<?php get_template_part(BUTTON_PICTURE, null, [
					"href" => URL_FAQ,
					"jp" => NAME_FAQ,
					"en" => "TECHNOLOGY",
					"img" => "common/bnr-faq.jpg",
				]); ?>
			</div>
		</div>
	</div>
</article>
<?php get_footer(); ?>