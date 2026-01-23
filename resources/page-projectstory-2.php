<?php
	// setting
	$p = $projects[1];
	$images = "cms/projectstory-".$p["num"]."-";
	$page_title = ["発想の転換で工数を削減。社内もフル活用し、プロジェクトを成功に導く", NAME_PROJECT_STORY];
	$page_desc = "";
	$page_canonical = URL_PROJECT_STORY."projectstory-1/";

	get_header();
?>
<article class="p-projectstory">
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
				"href" => URL_PROJECT_STORY,
				"name" => NAME_PROJECT_STORY
			],
			[
				"href" => "",
				"name" => "PROJECT STORY ".$p["num"]
			],
		],
		"is_single" => true,
		"en" => "PROJECT STORY ".$p["num"],
		"jp" => $p["hd"],
		"project" => [
			"desc" => $p["place"]
		],
		"images" => $images."mv.jpg",
	]); ?>
	<div class="article-body">
		<div class="p-projectstory-intro">
			<div class="l-cont--sm l-cont--sp-sm">
				<?php get_template_part(TYPO_EN, null, [
					"text" => "OUTLINE",
					"color" => "red",
					"variable" => "leading-normal"
				]); ?>
				<div class="p-projectstory-intro__outline">
					<?php get_template_part(TYPO, null, [
						"component" => "h4",
						"class_change" => "h5",
						"text" => "通常通りやっては間に合わない。工数を削減するために工夫を凝らす",
						"size" => "sm",
					]); ?>
					<div class="p-projectstory-intro__outline__row">
						<?php get_template_part(TYPO, null, [
							"text" => "広大なショッピング施設の新規建設プロジェクト。<br>震災の影響や短工期が重なり、竣工にどう間に合わせるかという課題がありました。<br>広い現場は体力が必要、ということで当時入社３年目で若手だった N.Tが、大規模プロジェクトを担当することに。<br>短い工期の中で間に合わせるために奮闘した、このプロジェクトの裏側を語ってもらいました。",
						]); ?>
					</div>
				</div>
				<?php get_template_part(PROJECTSTORY_STAFF, null, [
					"path" => $images,
					"dep" => "環境システム事業部",
					"name" => "N.T",
					"entry" => "2007年入社",
					"school" => "電子工学科卒",
					"profile" => "2007年 入社<br>2007年 工事課で施工管理を担当<br>2018年 課長代理に就任<br>2022年 課長に就任",
				]); ?>
			</div>
		</div>
		<div class="p-projectstory-main">
			<?php get_template_part(PICTURE, null, [
				"path" => $images."main.jpg",
				"alt" => "",
			]); ?>

			<?php
				$sections = [
					[
						"num" => "01",
						"hd" => "若くて体力があることを買われ、大きな現場を任せてもらう",
						"descs" => [
							"当時、私の所属する部門のトップである東京支店の支店長は、現社長の市原社長だったのですが、入社して３年目だった私は、大きな案件を担当したくて、よく<span class='o-typo__bold'>「チャレンジさせてくれ」</span>とアピールしていました。",
							"そして、ダイバーシティ東京 プラザの引き合いをいただいた時に、市原社長から<span class='o-typo__bold'>「大型ショッピング施設は広いから、若くて体力があるメンバーに任せたい」</span>とオファーをいただき担当することになりました。",
							"このプロジェクトの前に１件、埼玉にある大型のショッピング施設を担当していたときのサブコンさんが今回も同じチームでプロジェクトに取り組むことができるという点も私が担当するメリットでした。",
							"大型ショッピング施設の現場は、端から端まで歩くと結構な距離になります。<br>1日のうちで現場の進捗状況を見て回るので、本当に体力が必要でした（笑）"
						],
					],
					[
						"num" => "02",
						"hd" => "工期がとにかく短く、どう間に合わせるかが課題",
						"descs" => [
							"プロジェクトがスタートしたのが東日本大震災が起こった年で、全体の工事が工程通りに進まず、どんどん遅れていきました。<br>ただ、ダイバーシティ東京プラザのオープン日は変更とはならないため、作業期間がすごく短いことが確定した状態でプロジェクトが始まりました。",
							"現場に入ってからも、すぐに工事は入らないので、設計図をチェックし、事前に確認しておかないといけないところや他の業者に質疑をしないといけないところなどを詰めます。<br>施設が広すぎるため配線に関しても、当初想定をしていた通信ケーブルを引っ張るにも距離が長すぎて距離制限に耐えられない等の課題が出てきて、耐えられるケーブルとして光ケーブルに変更しなきゃいけない事案等がありました。<br>このような、追加のお金が必要となる交渉ごとも、プロジェクトを進める上で発生します。",
							"このプロジェクトでは、現場担当の私で追加工事の金額交渉がうまくまとまらず、支店長（市原社長）に来てもらったのを覚えています（笑）<br>私でまとまらないんだったら、上の人に来てもらうしかない、と思ってお願いをしました。それで話がまとまるのなら、会社としてはハッピーなので。",
							"このプロジェクトの最大の課題は、工期が短かったので、普通にやっていては間に合わないというところでした。<br>社内で<span class='o-typo__bold'>「どうやったら終わるか」</span>というアイデア出しの会議をしたり、みんなで知恵を出し合いました。"
						],
					],
					[
						"num" => "03",
						"hd" => "「現場での作業をいかに減らすか」を考えた",
						"descs" => [
							"「どうやったら終わるか」という議論によって、<span class='o-typo__bold'>「現場での作業をいかに減らすか」</span>という考え方に至りました。",
							"例えば、導入する機器に配線する作業を１つとってみても、広大な施設に何百セットも設置するため、相当な工数になります。<br>これを減らすために、機器の仕入れ元に交渉をして、現場でつける予定だった配線を送り、仕入れ元の方で対応をしてもらうことで、大きく工数が削減できました。",
							"現場で作業をするのは、すごく効率の悪い部分もあり、ミスも起きやすいので、とにかく徹底的に、ここを減らす工夫をしました。",
							"最後は、いろんな人がサポートに来てくれて、どうにか工期内に間に合わせることができました。"
						],
					],
					[
						"num" => "04",
						"hd" => "周りの助けがあって、一人前になれた",
						"descs" => [
							"私が20代だった頃は、現場に出るメンバーに対しては今より「放置」されることが多かったのですが（笑）、それでも、私が市原社長に相談に行くと親身になって聞いてくれて、目線を合わせてアドバイスをいただけていました。<br>私にとって市原社長は、憧れの上司です。",
							"いま、私も部下を持つようになり、若いメンバーが早く一人前になれるように、どんどん経験させるようにしています。<br>現場に出ていると、どうしても１人で悩むこともあるので、毎週メンバーを集めて、悩みや困っていることを解消できる場を設けています。",
							"当時、市原社長が私にしてくれたように、私も部下が思い切り挑戦できるように、成長をサポートをできる環境を作っていきたいです。"
						],
					],
				];

				foreach ($sections as $section):
			?>
			<section class="p-projectstory__sec">
				<div class="l-cont--sm">
					<div class="p-projectstory__sec__head">
						<p class="p-projectstory__sec__num"><?= $section["num"] ?></p>
						<div class="p-projectstory__sec__head__text">
							<div class="p-projectstory__sec__shoulder">
								<?php get_template_part(TYPO_EN, null, [
									"text" => "SCENE",
									"color" => "blue",
									"variable" => "leading-none"
								]); ?>
								<?php get_template_part(TYPO_EN, null, [
									"text" => $section["num"],
									"color" => "blue",
									"variable" => "leading-none"
								]); ?>
							</div>
							<?php get_template_part(TYPO, null, [
								"text" => $section["hd"],
								"component" => "h2",
								"size" => "sm"
							]); ?>
						</div>
					</div>
					<div class="p-projectstory__sec__body">
						<?php get_template_part(PICTURE, null, [
							"path" => $images."img-".$section["num"].".jpg",
							"alt" => "",
							"type" => "pill",
							"variable" => "p-projectstory__sec__body__pic"
						]); ?>
						<div class="p-projectstory__sec__descs">
							<?php
								foreach ($section["descs"] as $desc) {
									get_template_part(TYPO, null, [
										"text" => $desc,
									]);
								}
							?>
						</div>
					</div>
				</div>
			</section>
			<?php endforeach; ?>
		</div>
		<div class="p-projectstory-info">
			<?php get_template_part(PROJECTSTORY_INFO_HEAD, null, [
				"images" => $images,
				"title" => "ダイバーシティ東京 プラザ",
				"desc" => "東京臨海副都心の立地を活かし、訪れるたびに新たな魅力に出会える「劇場型都市空間」をコンセプトに154店舗が入居する地下1階地上9階建45,300平方メートル、駐車場台数1,400台の大型商業施設。",
			]); ?>
			<div class="p-projectstory-info__body">
				<div class="l-cont--sm l-cont--sp-sm">
					<div class="p-projectstory-info__body__blocks">
						<div class="p-projectstory-info__body__block">
							<?php get_template_part(TYPO_EN, null, [
								"text" => "TECHNOLOGY",
								"color" => "blue",
								"variable" => "leading-none"
							]); ?>
							<div class="mt-[12px] md:mt-[16px]">
								<?php get_template_part(TYPO, null, [
									"component" => "h3",
									"class_change" => "h4",
									"text" => "導入技術・システム",
								]); ?>
							</div>
							<div class="p-projectstory-info__items">
								<?php
									$info_items = [
										[
											"img" => "02",
											"hd" => "ビルマネジメントシステム",
											"desc" => "中央監視装置はBMS（ビルマネジメントシステム）対応となっており、省エネ・省力化を行い快適な環境が提供されています。",
										],
										[
											"img" => "",
											"hd" => "地域冷暖房の採用",
											"desc" => "建物の空調熱源には地域冷暖房が採用されており、DDC制御による空調機、外調機とファンコイルユニットを組合せた温度制御を行っております。",
										],
									];

									foreach ($info_items as $item):
								?>
								<div class="p-projectstory-info__item">
									<div class="p-projectstory-info__item__text">
										<?php get_template_part(TYPO, null, [
											"component" => "h4",
											"class_change" => "h5",
											"text" => $item["hd"],
											"size" => "sm",
											"color" => "gray",
											"variable" => "leading-normal",
										]); ?>
										<?php get_template_part(TYPO, null, [
											"text" => $item["desc"],
										]); ?>
									</div>
									<?php if(!empty($item["img"])): ?>
									<?php get_template_part(PICTURE, null, [
										"path" => $images."info-img-".$item["img"].".jpg",
										"alt" => "",
										"type" => "round-20",
										"variable" => "p-projectstory-info__item__pic"
									]); ?>
									<?php endif; ?>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="p-projectstory-info__body__block">
							<div class="p-projectstory-info__flow">
								<div class="p-projectstory-info__flow__text">
									<?php get_template_part(TYPO_EN, null, [
										"text" => "WORK FLOW",
										"color" => "blue",
										"variable" => "leading-none"
									]); ?>
									<div class="mt-[12px] md:mt-[16px]">
										<?php get_template_part(TYPO, null, [
											"component" => "h3",
											"class_change" => "h4",
											"text" => "ワークフロー",
										]); ?>
									</div>
								</div>
								<div class="p-projectstory-info__flow__main">
									<div class="p-projectstory-info__flow__main__cols">
										<?php
											$flow_columns = [
												[
													"date" => "2010年 7月",
													"text" => "現場入り",
												],
												[
													"date" => "2011年 2月",
													"text" => "工事着工",
												],
												[
													"date" => "2012年 3月",
													"text" => "竣工",
												],
											];

											foreach ($flow_columns as $col) {
												get_template_part(PROJECTSTORY_FLOW_COL, null, [
													"date" => $col["date"],
													"text" => $col["text"],
												]);
											}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="m-other-links">
			<div class="l-cont">
				<?php get_template_part(TYPO, null, [
					"component" => "h2",
					"class_change" => "h3",
					"text" => "他のプロジェクトストーリーを見る",
				]); ?>
				<div class="m-other-links__row">
					<div class="m-other-links__cards">
						<?php get_template_part(PROJECTSTORY_OTHER_CARD, null, [
							"link" => "../projectstory-3/",
							"num" => "03",
							"text" => $projects[2]["hd"],
							"place" => $projects[2]["place"],
						]); ?>
					</div>
					<div class="m-other-links__btn">
						<?php get_template_part(BUTTON, null, [
							"href" => URL_PROJECT_STORY,
							"text" => "ALL PROJECT STORY",
							"font" => "en",
							"hover" => "text-forward-reserve",
							"arrow_hover" => "forward-reserve",
						]); ?>
					</div>
				</div>
			</div>
		</section>
	</div>
</article>
<?php get_footer(); ?>