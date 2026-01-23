<?php
	// setting
	$p = $projects[0];
	$images = "cms/projectstory-".$p["num"]."-";
	$page_title = ["不透明な過去データを膨大な調査で補い築45年の建物を最新設備へとリニューアル", NAME_PROJECT_STORY];
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
						"text" => "十分な資料が残されていない中、手探りで調査しながら進行",
						"size" => "sm",
					]); ?>
					<div class="p-projectstory-intro__outline__row">
						<?php get_template_part(TYPO, null, [
							"text" => "築45年という古いビルの改修に伴う自動制御のリニューアルプロジェクト。<br>正確な図面が残されておらず、膨大な調査から取り組み、古い設備の撤去、当時の最新だった自動制御システムの設置・構築を行いました。<br>庁舎ということで日々の機能は止めずに工事を実施するという、さまざまな箇所に気を遣わなければいけない難易度の高いプロジェクトでした。<br>当時、入社8年目でプロジェクトを担当したY.Hに、担当者からしか見えないプロジェクトの裏側を語ってもらいました。",
						]); ?>
					</div>
				</div>
				<?php get_template_part(PROJECTSTORY_STAFF, null, [
					"path" => $images,
					"dep" => "環境システム事業部",
					"name" => "Y.H",
					"entry" => "2006年入社",
					"school" => "工学部電子工学科卒",
					"profile" => "2006年　入社（北海道支店に配属）<br>2006年　技術課に配属<br>2008年　工事課で施工管理を担当<br>2013年　営業部に異動<br>2015年　工事課に異動<br>2017年　東北支店に転勤<br>2022年　課長代理<br>2024年　営業部に異動",
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
						"hd" => "「とんでもない現場を任されたな」と思った",
						"descs" => ["2014年のプロジェクトで、私がちょうど工事課から営業に異動になったタイミングだったが、オファーがかかり担当することになりました。<br>およそ３年がかりの大規模プロジェクトだったため、このプロジェクト専属の担当者が欲しいという要望があり、当時そのタイミングに工事課の人員が不足していたこともあり、工事経験者でありながら「異動したて」ということで担当現場を持っていなかった私が選ばれたのでした。", "「人がいないからしょうがない」と思ってオファーを受けましたが、庁舎ということで機能を停止せずに施工を行うプロジェクトで、かつ建物の用途や特徴を見て大変さも理解できたので、<span class='o-typo__bold'>「とんでもない現場を任されたな」</span>と思いましたよ（笑）<br>経験豊富な施工管理ができるパートナーさんに入ってもらい２人体制でプロジェクトを対応。", "明治時代に建てられた「赤れんが」の愛称を持つ旧本庁舎が観光スポットとして有名ですが、1968年に竣工した北海道本庁舎も結構、年季が入っています。当時で、築45年でしたからね。<br>地上12階、地下2階の建物で、大規模な耐震改修工事を行う中で、自動制御システムも45年物の設備を、当時の最新設備に換えるというプロジェクトでした。<br>耐震改修工事はゼネコンさん、設備をサブコンさんが担当する中で、オーテックはサブコンさんと組んで、旧設備の撤去から、空調設備と中央監視装置のリニューアルを担当しました。"],
					],
					[
						"num" => "02",
						"hd" => "プロジェクトは、いろいろな制約のある中で進めていく",
						"descs" => ["このプロジェクトは、新築物件ではないため<span class='o-typo__bold'>「機能を維持したまま」</span>というのが制約としてありました。これが結構ネックで、「知事室」など、入室するのにも申請がいるような部屋があったり、平日にできない作業があったりと、工事以外にも気を遣うところがいろいろとありました。",  "築45年ということもあり、当然、資料も十分ではなく、提供された手描きの図面は、実際に現場を確認してみると、あるはずの配管が無かったり、盤図に載っていない配線があったりと、不透明な情報を正しく把握するところから始めました。<br>12階建ビルの全ての部屋の空調設備を調査しなければならないという、途方もない分量の調査でした。", "あと、建物が古いので、普段、人が入らない場所はホコリや汚れが酷かったり、また夏場に熱源の機械室の作業がすごく暑かったりといった状況で、毎日着替えを２セット現場に持っていっていました（笑）"],
					],
					[
						"num" => "03",
						"hd" => "現場に行くたびに起こる予測不能な事態を、手探りで１つずつ潰していく",
						"descs" => ["毎日のように、わからないことが発生するので１つずつ課題を潰してくしかありませんでした。<br>建物の中には、何百何千という配線が張り巡らされているのですが、図面に載っていなければ、予測しながら調べていって、配線を追いかけるという地道な確認の繰り返し。<br>調査のフェーズだけでも、多大な労力がかかりました。", "庁舎機能を維持したまま改修を進めるプロジェクトだったため、工事のフェーズはいくつかのステップにわけてあり、ステップに合わせて作業をする流れでした。<br>ステップごとにリリースがあり、週末に工事作業をしたところを土日のうちに切り替えて、月曜日から実際にお客さんが使用し始めるというサイクルで、土日の切り替えの日には、社内のメンバーみんなに来てもらって助けてもらいました。"],
					],
					[
						"num" => "04",
						"hd" => "「段取り８割、仕事２割」と「周りの巻き込み」がポイント",
						"descs" => [
							"全体工期に向けて、すべての業者がそれぞれに工事作業がある中で、調整し合いながら作業を進めていくので、作業現場の取り合いになったりもします。どの業者も自分たちが原因で工期を遅らせるわけにはいかないので。<br>現場では、自分たちが動きやすくなるように段取りをしたり、他の業者ともコミュニケーションを取っていくことが大切です。",
							"昔、上司から教わった<span class='o-typo__bold'>「段取り８割、仕事２割」</span>との言葉が、自分の仕事への取り組み方の基礎になっていたので、前持っての調整・段取りを意識的に行なっていました。",
							"当時の工事課の上司には、ポイントポイントで相談をしながら「オレ１人では無理だよ」と伝えていたので、パワーがいるタイミングには、社内からもヘルプが来てくれていました。<br>オーテックには、仕事で社内の人を動かすのに気を遣う必要は無いという文化があり、<span class='o-typo__bold'>「周りを巻き込んだ方が上手くいく」</span>と入社した時から言われていました。",
							"プロジェクトの大詰めの部分で、中央監視装置の切り替えのタイミングまでに、工事が間に合うか間に合わないかの瀬戸際のシーンもありましたが、この時も周りを巻き込みながら、なんとか完了させることができました。<br>周りが協力してくれなかったら、終わっていなかもしれません。",
							"このプロジェクトを思い返すと<span class='o-typo__bold'>「ひたすらに大変だった」</span>という感想しかありませんが、当時30代になりたてくらいの年齢で大規模案件を任せてもらえて、社内のメンバーに助けてもらったことや上司にアドバイスをもらったことが助けとなり、無事にプロジェクトを終わらせることができました。", "当時は現場に放り込まれて、ほったらかしになっていた部分もあるので、これからの若手メンバーには、そうならない環境をつくってあげたいです。<br>聞きやすい環境を作ってあげたり、適切なアドバイスをあげたり、私のこれまでの経験を踏まえて、若手メンバーの育成に取り組んでいきたいと思っています。"
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
				"title" => "北海道本庁舎",
				"desc" => "1968年に竣工。地上12階、地下2階。<br>敷地内に明治時代に建てられた旧本庁舎があり、札幌の人気観光スポットにもなっている。",
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
											"desc" => "空調・熱源・電気関係を集中管理しつつ、省エネルギー・省力化を実現するために、各種データ収集も行なっています。",
										],
										[
											"img" => "",
											"hd" => "受電設備のスイッチへの配慮",
											"desc" => "この施設では中央監視装置で受電設備のスイッチ操作ができるようになっていたので、リスク回避のために、スイッチ部分は鍵付きにし、スリーアクションの仕組みを導入。",
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
													"date" => "2014年 5月",
													"text" => "調査開始",
												],
												[
													"date" => "2014年 9月",
													"text" => "工事着工",
												],
												[
													"date" => "2017年 3月",
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
							"link" => "../projectstory-2/",
							"num" => "02",
							"text" => $projects[1]["hd"],
							"place" => $projects[1]["place"],
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