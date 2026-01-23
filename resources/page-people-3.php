<?php
	// setting
	$images = "cms/people-03-";
	$page_title = ["R.O", NAME_PEOPLE];
	$page_desc = "オーテック採用サイトの社員紹介ページです。環境システム事業部　R.Oさんの紹介記事です。";
	$page_canonical = URL_PEOPLE."people-3/";

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
				"name" => "PERSON 03"
			],
		],
		"is_single" => true,
		"en" => "PERSON 03",
		"jp" => $peoples[2]["hd"],
		"people" => [
			"shoulder" => $peoples[2]["dept"],
			"name" => $peoples[2]["name"],
			"entry" => $peoples[2]["entry"],
			"school" => $peoples[2]["school"],
		],
		"catch" => [
			"desc" => $peoples[2]["desc"],
		],
		"images" => "cms/people-03-mv.jpg",
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
							"text" => "父親が建設業界で働いていたので、身近に感じていたこともあり、就職活動では「施工管理」の職種に絞って、いろいろな会社を見ていました。<br>大学で開催された企業説明会でオーテックが来ていて、そこで「自動制御設備」を知り興味を持ちました。<br>いくつかの会社の選考に進んでいましたが、受けていた会社は工場に特化した施工管理をしている会社だったりと建物用途が限定されていましたが、自動制御を強みとするオーテックは、ビルやショッピング施設、工場など、あらゆる建物に関われるなと思い、オーテックを選びました。",
						]); ?>
					</div>
					<div class="p-people__intro__block">
						<?php get_template_part(PEOPLE_TITLES, null, [
							"num" => "2",
							"shoulder" => "Q&A",
							"hd" => "現在の仕事のやりがいは何ですか？",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "施工管理の仕事は、工事が始まる前に、設計図をお客様と打ち合わせながら一緒に作成します。そして、施工に向けて調整を進め、工事が始まると、工事業者さんに依頼をし、自動制御設備を一緒に作っていきます。入社前、施工管理の仕事は、ただ工事の現場を見ているだけだと思っていましたが、工事をスムーズに進めるために、関係各者へのいろいろな調整や段取りを行う役割があります。<br>お客様の声を聞いて、それを図面に落とし込むことができるため、そこにやりがいを感じています。<br>また、自分が設計した内容を、工事業者さんに実際にカタチにしてもらい、最終的にそれが動くと、非常に達成感を得ることができます。",
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
							"text" => "これまでのやり方を捨て<br class='pc'>新しい視点を取り入れる",
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
								"text" => "入社して、３度、大型ショッピングモールの現場を担当させてもらっています。<br>いま、ちょうど３件目となるのですが、１件目２件目の時は、先輩に付いてサブとして入らせていただいていたのですが、現在、自分がメイン担当者として対応しています。",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "私は、入社当時から、全部自分でやらないと気が済まない性格でした。<br>大型現場ではない時は、それでも何とか回っていましたが、今、自分がメインの担当者として大型現場をこなすことになり、いままで通りやっていたら物理的に難しいと感じています。",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "今思えば、入社３年の時に、２件目のショッピングモールで、メイン担当者だった先輩の仕事が、もの凄い判断力と決断力で進めていたんだなと感じます。<br>更に、当時と比べると、働き方改革が進み、時間的な制約も厳しくなっています。今の自分の実力では、この現場を１人でやるには限界があるなと。",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "今は、これまでの全部自分でやるスタンスから切り替える良いタイミングだと思って、まわりに協力を仰いで仕事を進めています。<br>この機会に成長し、３件目のショッピングモールを無事に竣工できるよう取り組んでまいります。",
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
							"text" => "大型現場のメイン担当者になってみて「一人じゃできない」と、わかったので、仕事の進め方をまわりの力を積極的に借りる進め方に変えていくことに挑戦しています。<br>これは、物理的に仕事が「間に合わない」という対策でもありますが、それぞれの現場での経験を自分の中だけに留めずに、まわりと共有し、後輩の成長にも繋げていきたいという気持ちがあります。<br>社員みんなが成長できれば、結果的に、会社全体の成長にもつながると思っています。",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "また、現場での施工管理の担当としては、やはり「オーテックに頼んでよかった」と思ってもらえるような工事をしていきたいです。",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "先輩たちの仕事の結果が、今の自分たちの仕事に結びついているので、自分も、後輩たちに仕事を託していけるよう、結果を残していきます。",
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
											"time" => "09:00",
											"desc" => "現場へ直行",
										],
										[
											"size" => "",
											"time" => "09:30",
											"desc" => "施工図の作成、資料作成",
										],
										[
											"size" => "",
											"time" => "12:00",
											"desc" => "お昼休憩",
										],
										[
											"size" => "",
											"time" => "13:00",
											"desc" => "図面の確認や作成、資料作成",
										],
										[
											"size" => "",
											"time" => "15:00",
											"desc" => "打ち合わせ",
										],
										[
											"size" => "",
											"time" => "16:00",
											"desc" => "進捗確認、施工写真撮影",
										],
										[
											"size" => "",
											"time" => "17:00",
											"desc" => "図面の確認や作成、資料作成",
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
									<p class="p-people__info__career__year">2017年</p>
									<p class="p-people__info__career__desc">新卒入社</p>
								</div>
								<div class="p-people__info__career__item">
									<p class="p-people__info__career__year">2017年</p>
									<p class="p-people__info__career__desc">中部支店　工事課配属</p>
								</div>
								<div class="p-people__info__career__item">
									<p class="p-people__info__career__year--last">2022年</p>
									<p class="p-people__info__career__desc--last">主任に昇格</p>
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