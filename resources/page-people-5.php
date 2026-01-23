<?php
	// setting
	$images = "cms/people-05-";
	$page_title = ["R.M", NAME_PEOPLE];
	$page_desc = "オーテック採用サイトの社員紹介ページです。管工機材事業部　R.Mさんの紹介記事です。";
	$page_canonical = URL_PEOPLE."people-4/";

	get_header();
?>
<article class="p-people">
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
				"href" => URL_PEOPLE,
				"name" => NAME_PEOPLE
			],
			[
				"href" => "",
				"name" => "PERSON 05"
			],
		],
		"is_single" => true,
		"en" => "PERSON 05",
		"jp" => $peoples[4]["hd"],
		"people" => [
			"shoulder" => $peoples[4]["dept"],
			"name" => $peoples[4]["name"],
			"entry" => $peoples[4]["entry"],
			"school" => $peoples[4]["school"],
		],
		"catch" => [
			"desc" => $peoples[4]["desc"],
		],
		"images" => "cms/people-05-mv.jpg",
		"img_sp_size" => "md"
	]); ?>
	<div class="article-body article-body--blue-light">
		<div class="p-people__intro bg-blue-light-texture">
			<div class="l-cont--sm l-cont--sp-sm">
				<div class="p-people__intro__row">
					<div class="p-people__intro__block">
						<?php get_template_part(PEOPLE_TITLES, null, [
							"num" => "1",
							"shoulder" => "Q&A",
							"hd" => "入社したきっかけはなんですか？",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "建築が好きだったこともあり、就活当初はディベロッパーに就職したかったのですが希望が叶わず、幅を広げて商社希望で就活をしていきました。商社ですと原料メーカーなどの方が給与面なども高いのですが、間接的にでも建物の業界に関わりたいという思いもありオーテックへの入社を決めました。<br>オーテックは福利厚生が充実していて、地元の北海道から就職で知らない土地に行くという不安があったのですが、オーテックの住宅補助（引っ越し費用も）が安心材料となりました。",
						]); ?>
					</div>
					<div class="p-people__intro__block">
						<?php get_template_part(PEOPLE_TITLES, null, [
							"num" => "2",
							"shoulder" => "Q&A",
							"hd" => "現在の仕事のやりがいは何ですか？",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "お客さんに物品を納品する仕事なので、納品して感謝のお言葉をいただく時が、やはり嬉しいです。<br>建設業界での物品のやりとりは、工事現場の動きに合わせて物を届けなければならないので、とても細かい刻みで納品が発生します。<br>例えば、10階建の建物の工事現場の場合、1階層ごとに分けて納品したり、工事内容によっては「3日刻みで納品して欲しい」というような要望もあったりします。また、「どうしても明日欲しい」という突発的な要望が発生することもあるので、臨機応変な対応と先読みするチカラを必要とします。",
						]); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="p-people__main">
			<div class="p-people__episode">
				<div class="p-people__episode__upper">
					<?php get_template_part(PICTURE, null, [
						"path" => $images."img-01.jpg",
						"alt" => "",
						"variable" => "p-people__episode__pic",
					]); ?>
					<div class="p-people__episode__upper__text">
						<?php get_template_part(PEOPLE_TITLES, null, [
							"num" => "3",
							"shoulder" => "EPISODE",
							"hd" => "これまでの仕事を振り返り<br class='pc'>成長できたと感じることは何ですか？",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"component" => "h2",
							"size" => "sm",
							"text" => "失敗の経験からミスを未然に防ぐ癖がついた",
						]); ?>
					</div>
				</div>
				<div class="p-people__episode__lower">
					<?php get_template_part(PICTURE, null, [
						"path" => "common/common-sec-bg-02.png",
						"alt" => "",
						"variable" => "p-people__episode__lowe__bg",
					]); ?>
					<div class="l-cont--sm l-cont--sp-sm relative z-[1]">
						<div class="p-people__episode__lower__text">
							<?php get_template_part(TYPO, null, [
								"text" => "営業デビューしたての時のことですが、何も分かっていなかったにも関わらず、反射的に<span class='o-typo__bold'>「はい、わかりました」</span>と言っていた時期がありました。<br>その時の失敗経験が、いまの私の営業スタイルを築いています。",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "私は衛生機器（トイレ等）の担当をしているのですが、トイレって見えない所で、実はいろんな部品を使っていて、当時、何も知らずに打ち合わせをしてしまったことがあり、結果、お客さんのところに物を届けてみると、「あれが足りない、これは違う」と、必要な物が足りていなかったり、その現場には合わない物を送ってしまったりと、ミスが連発してしまいました。",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "また、お客さんとのやりとりは、図面をベースに必要な物や量を決めていくのですが、お客さんは設計から施工管理までしている図面のプロなので、図面の見方もわからない状態で打ち合わせに望んでしまうと、<span class='o-typo__bold'>「何でそんなこともわからないの」</span>という指摘をもらうようなこともありました。",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "それらの失敗を経験して、打ち合わせの際には分かっていても、確認の意味で<span class='o-typo__bold'>「これって、こうですよね」</span>と聞き直すようにしています。<br>これによって、未然にミスを防げるようになりました。",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "経験がつくと、あれが必要、これも必要とわかってくるので、臨機応変に対応できたり、先読みして動けるようになってくるものです。<br>今は、「<span class='o-typo__bold'>お客さんの要望やニーズにどう応えるか」</span>という点に頭を悩ませています。<br>営業デビューして一番最初につまづき失敗を経験したおかげで、今、本質的なことに目を向けられているのだと思います。",
							]); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="p-people__future">
				<div class="l-cont--xs">
					<?php get_template_part(PICTURE, null, [
						"path" => $images."img-02.jpg",
						"alt" => "",
						"type" => "pill",
						"variable" => "p-people__future__pic",
					]); ?>
				</div>
				<div class="p-people__future__cont l-cont--xxs">
					<?php get_template_part(PEOPLE_TITLES, null, [
						"num" => "4",
						"shoulder" => "FUTURE",
						"hd" => "今後の目標や展望",
					]); ?>
					<div class="p-people-descs">
						<?php get_template_part(TYPO, null, [
							"text" => "自分のいる事業部の<span class='o-typo__bold'>「強み」</span>をつくっていきたい。<br>私のいる部門は、商社という特性上、他社と比べた時に、独自の色を見出しづらい状況です。<br>実際に、選ばれる理由は、物や価格以外には、お客さんとの関係性や営業担当の対応力という<span class='o-typo__bold'>「人」</span>の部分となってきます。<br>いま、他社に置いていかれないように、営業のしやすい環境整備から始めています。<br>例えば、これまでお客さんと打ち合わせをするのに大きな図面を持っていっていましたが、外にいる時に、違う現場から電話がかかってくると、社内に戻ってから確認しなければならず、困っていました。この１テンポの遅れが機会損失を生む可能性があるため、先日、タブレットが導入されました。<br>社員のモチベーションにもつながるので、こういった環境面で改善できるところは、どんどん変えていきたいです。",
						]); ?>
					</div>
				</div>
			</div>
			<div class="p-people__info">
				<div class="p-people__info__cont l-cont--sm">
					<div class="p-people__info__block">
						<div class="p-people__info__head">
							<div class="p-people__info__icon">
								<img src="<?= URL_SVG ?>people-icon-01.svg" alt="">
							</div>
							<h3 class="p-people__info__hd">1日の過ごし方</h3>
						</div>
						<div class="p-people__info__body">
							<div class="p-people__info__sch">
								<?php
									$list = [
										[
											"size" => "lg",
											"time" => "08:45",
											"desc" => "出社",
										],
										[
											"size" => "",
											"time" => "09:00",
											"desc" => "始業し、見積作成作業",
										],
										[
											"size" => "",
											"time" => "10:00",
											"desc" => "現場へ訪問（担当者と打ち合わせ）",
										],
										[
											"size" => "",
											"time" => "12:00",
											"desc" => "お昼休憩",
										],
										[
											"size" => "",
											"time" => "13:00",
											"desc" => "現場へ訪問（受注した現場へ挨拶）",
										],
										[
											"size" => "",
											"time" => "16:00",
											"desc" => "メーカーをアテンドし社員勉強会実施",
										],
										[
											"size" => "",
											"time" => "17:30",
											"desc" => "請求書作成",
										],
										[
											"size" => "lg",
											"time" => "19:00",
											"desc" => "退社",
										],
									];

									foreach ($list as $item):
								?>
								<div class="p-people__info__sch__item">
									<div class="p-people__info__sch__prog<?php if(!empty($item['size'])): ?>--<?= $item['size'] ?><?php endif; ?>"></div>
									<div class="p-people__info__sch__text">
										<p class="p-people__info__sch__time"><?= $item["time"] ?></p>
										<p class="p-people__info__sch__desc"><?= $item["desc"] ?></p>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
					<div class="p-people__info__block">
						<div class="p-people__info__head">
							<div class="p-people__info__icon">
								<img src="<?= URL_SVG ?>people-icon-02.svg" alt="">
							</div>
							<h3 class="p-people__info__hd">これまでのキャリア</h3>
						</div>
						<div class="p-people__info__body">
							<div class="p-people__info__career">
							<div class="p-people__info__career__item">
									<p class="p-people__info__career__year">2021年</p>
									<p class="p-people__info__career__desc">新卒入社</p>
								</div>
								<div class="p-people__info__career__item">
									<p class="p-people__info__career__year">2021年</p>
									<p class="p-people__info__career__desc">支店内研修（他部署経験）</p>
								</div>
								<div class="p-people__info__career__item">
									<p class="p-people__info__career__year--last">2021年</p>
									<p class="p-people__info__career__desc--last">管工機材事業部　営業部　配属</p>
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
					"text" => "他の先輩社員を見る",
				]); ?>
				<div class="m-other-links__row">
					<div class="m-other-links__cards">
					<a href="../people-1/" class="m-other-links__card-people anm-hover">
							<?php get_template_part(PICTURE, null, [
								"path" => "cms/people-01-mv.jpg",
								"alt" => "",
								"type" => "circle",
								"hover" => "scale",
								"variable" => "m-other-links__card-people__pic"
							]); ?>
							<div class="m-other-links__card-people__text">
								<?php get_template_part(ICON_DEP, null, [
									"text" => $peoples[0]["dept"],
									"no_space" => true,
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" => $peoples[0]["name"],
									"size" => "fs-24",
									"font" => "yugo",
									"weight" => "bold",
									"color" => "gray",
									"variable" => "leading-none mt-[10px] md:mt-[12px]"
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" => $peoples[0]["school"]."卒<br>".$peoples[0]["entry"]."入社",
									"size" => "fs-14",
									"variable" => "leading-normal mt-[10px] md:mt-[14px]"
								]); ?>
							</div>
						</a>
						<a href="../people-2/" class="m-other-links__card-people anm-hover">
							<?php get_template_part(PICTURE, null, [
								"path" => "cms/people-02-mv.jpg",
								"alt" => "",
								"type" => "circle",
								"hover" => "scale",
								"variable" => "m-other-links__card-people__pic"
							]); ?>
							<div class="m-other-links__card-people__text">
								<?php get_template_part(ICON_DEP, null, [
									"text" => $peoples[1]["dept"],
									"no_space" => true,
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" => $peoples[1]["name"],
									"size" => "fs-24",
									"font" => "yugo",
									"weight" => "bold",
									"color" => "gray",
									"variable" => "leading-none mt-[10px] md:mt-[12px]"
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" => $peoples[1]["school"]."卒<br>".$peoples[1]["entry"]."入社",
									"size" => "fs-14",
									"variable" => "leading-normal mt-[10px] md:mt-[14px]"
								]); ?>
							</div>
						</a>
					</div>
					<div class="m-other-links__btn">
						<?php get_template_part(BUTTON, null, [
							"href" => URL_PEOPLE,
							"text" => "ALL PEOPLE",
							"font" => "en",
							"hover" => "text-forward-reserve",
							"arrow_hover" => "forward-reserve",
							"variable" => "justify-between"
						]); ?>
					</div>
				</div>
			</div>
		</section>
	</div>
</article>
<?php get_footer(); ?>