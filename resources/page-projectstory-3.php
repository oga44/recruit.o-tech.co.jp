<?php
	// setting
	$p = $projects[2];
	$images = "cms/projectstory-".$p["num"]."-";
	$page_title = ["病院には全ての自動制御が詰まっている。およそ３年がかりの大規模改修プロジェクト", NAME_PROJECT_STORY];
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
						"text" => "病院を一期・二期の工事に分けて建て替える高難易度のプロジェクト",
						"size" => "sm",
					]); ?>
					<div class="p-projectstory-intro__outline__row">
						<?php get_template_part(TYPO, null, [
							"text" => "病院ということで、熱源、空調、中央監視など、建物環境を制御する各種一通りの設備が導入されています。<br>第二期工事の際には、第一期工事で完成した棟が動いている状態にあり、壁一枚隔てたところには患者さんがいるという中で、様々な制約や慎重さが要される工事でした。<br>大規模かつ技術力も必要なプロジェクトで、大変だとわかっていたが挑戦をしたH.Sに、プロジェクトの裏側を語ってもらいました。",
						]); ?>
					</div>
				</div>
				<?php get_template_part(PROJECTSTORY_STAFF, null, [
					"path" => $images,
					"dep" => "環境システム事業部",
					"name" => "H.S",
					"entry" => "2006年入社",
					"school" => "電子工学科卒",
					"profile" => "2006年 入社　<br>2006年 工事課に配属<br>2013年 技術課に異動<br>2018年 課長代理に就任<br>2022年 営業部環境ソリューション課に異動<br>2023年 課長に就任",
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
						"hd" => "やったことのない工事もあり、自分にとっては「挑戦」だった",
						"descs" => [
							"私が入社して３年目に携わったプロジェクトで、当時の上司から「やってみる？」と言ってもらったため、担当することになりました。",
							"ただ、病院の工事では、基本的な機械設備が一通りあって、自動制御も全ての分野で行っているため、<span class='o-typo__bold'>「大変だろうな」</span>とは想像をしていました。<br>全ての分野となると、やったことのない工事もあり、その上で工期も短かったので、その当時の自分の中では、大変な挑戦となりました。",
							"プロジェクトが始まってからは、案の定、毎日わからないことが発生する状況で、調べる、考える、それでもわからないことは聞く、という毎日を過ごすことになりました。",
							"当時の私が、わからないことを早く解決するためにできることは、社内、お客さん、協力会社の方と、知ってそうな人にとにかく聞きに行くことでした。しかし、それを続けていると、仲良くなる人が出てきて、聞くよりも前にアラートを出してくれる協力会社の方もいたりと、ちょっとずつ周りに助けてもらえることが増えました。"
						],
					],
					[
						"num" => "02",
						"hd" => "二期に分けて工事をする難しさを経験する",
						"descs" => [
							"元々あった病院を半分ずつ二期に分けて建て替えを行うプロジェクトだったのですが、一期・二期とそれぞれに大変さがありました。",
							"第一期工事の際は、次に第二期工事が控えているため、第二期工事で必要になる配線を伸ばしておく必要があるなど、第二期工事の内容を理解し第一期工事の内から対応すべき部分がありました。<br>また、第一期工事が完了した病院エリアは、第二期工事が始まる前に稼働するため、第一期工事で建物全体の基本的な機能は全てつくる必要があり、工事としては第一期工事の方が大変でした。",
							"ただ、第二期工事を開始する際には、病院がすでに稼働している状態となるので、技術的には第二期工事の方が難しい内容でした。<br>第二期工事に関しては、増築のようなもので、壁一枚挟んで向こう側に患者さんがいる状態で工事を進めなくてはならなかったため、様々な制約がある中での工事となりました。<br>例えば、音が出る作業を行うにも時間制限があったり、すでに稼働している中央監視装置に影響が出るなど、様々な確認を要しながらの作業が必要でした。　<br>中央監視装置に関係するような作業を行うときは、都度、建物の管理者に<span class='o-typo__bold'>「中央監視に警報でます」</span>と調整を行ってから動かなければなりませんでした。"
						],
					],
					[
						"num" => "03",
						"hd" => "限られたコミュニケーションの中で、効率よく指示を出す",
						"descs" => [
							"工期が最初から十分では無かったため、わからないことだらけではありましたが、遅れを発生させないようにと、工事を前に進めることに毎日必死でした。",
							"そんな状況の中で意識していたのは、<span class='o-typo__bold'>限られたコミュニケーションタイミングを逃さないこと</span>でした。",
							"オーテックの工事での協力会社の方への指示は、私が出さなければなりません。<br>協力会社の方たちが作業を開始する前の朝礼の時間が一番指示を出すのに適したタイミングなので、朝礼前に現場を巡回して、今どこに注力すべきかや、内装工事の進捗状況などの把握に努めました。<br>それによって、朝礼時に協力会社の方へ指示ができるようになり、現場が効率よく動けるようになりました。",
							"これは、この先の自分の仕事にも生きています。"
						],
					],
					[
						"num" => "04",
						"hd" => "プロジェクトを通して自分の基礎ができた",
						"descs" => [
							"今思い返しても、入社３年目から５年目で対応したこのプロジェクトが、自分の基礎になっています。<br>病院ということで幅広い自動制御設備を実装したという点でも、１つの現場で多くを学ぶことができたため、担当できて良かったです。<span class='o-typo__bold'>結構大変でしたけど（笑）</span><br>実際に、これ以降に担当したプロジェクトが、少し簡単に思えることもあったくらい、このプロジェクトを通して成長ができました。",
							"実は、大森赤十字病院さんは、プロジェクトが終わった後も点検のご依頼をいただいており、私が技術部（点検をする部門）に部署異動することになった際に、再び担当させてもらいました。<br>こうやって、建物をつくって、その後もお付き合いが続くというのは、非常に嬉しいことです。",
							"いま私は、営業というポジションに異動になり、建物の中央監視システムの更新や省エネ化に関する提案を行っているのですが、オーテックで過去に自動制御システムを納入させていただいたお客さまに、その後も価値を提供できるので、とてもやりがいを感じています。",
							"また、提案が通る程に売上にも繋がるので、会社の利益にも貢献していきたいと思っています。"
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
				"title" => "日本赤十字社　大森赤十字病院",
				"desc" => "日本赤十字社東京都支部が東京都大田区に設置する地下2階地上8階建約22,000平方メートル、病床数344床の急性期病院。武蔵野赤十字病院に次いで、日赤東京都支部2カ所目の病院として1953年7月に開設されました。",
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
											"img" => "",
											"hd" => "中央監視装置",
											"desc" => "当時の最新中央監視装置システムを導入。中央監視装置により、各棟の空調・衛生・電気設備の集中監視を行っています。エネルギ―使用目標に対する進捗管理と快適性の評価なども行われています。",
										],
										[
											"img" => "",
											"hd" => "様々な自動制御",
											"desc" => "空調・衛生・電気・熱源をはじめとした全分野の自動制御が導入されています。病院ならではとして、部屋の圧力コントロールを行う制御なども実現。",
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
													"date" => "2009年 2月",
													"text" => "現場入り",
												],
												[
													"date" => "2010年 3月",
													"text" => "第一期工事着工",
												],
												[
													"date" => "2010年 9月",
													"text" => "第二期工事着工",
												],
												[
													"date" => "2011年 9月",
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
							"link" => "../projectstory-1/",
							"num" => "01",
							"text" => $projects[0]["hd"],
							"place" => $projects[0]["place"],
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