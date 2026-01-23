<?php
	// setting
	$images = "cms/people-04-";
	$page_title = ["Y.S", NAME_PEOPLE];
	$page_desc = "オーテック採用サイトの社員紹介ページです。環境システム事業部　Y.Sさんの紹介記事です。";
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
				"name" => "PERSON 04"
			],
		],
		"is_single" => true,
		"en" => "PERSON 04",
		"jp" => $peoples[3]["hd"],
		"people" => [
			"shoulder" => $peoples[3]["dept"],
			"name" => $peoples[3]["name"],
			"entry" => $peoples[3]["entry"],
			"school" => $peoples[3]["school"],
		],
		"catch" => [
			"desc" => $peoples[3]["desc"],
		],
		"images" => "cms/people-04-mv.jpg",
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
							"text" => "就活中は、カタチあるものを提供している会社に入りたいと思い、モノづくりや建設建築関連の会社を見ていました。<br>文学部卒ということもあり、はじめは職種としては事務系の職種で探していたのですが、選択肢を狭めていると思い、総合職まで幅を広げたところ、オーテックと出会いました。出会う社員の方々の雰囲気が、みんな穏やかで、印象が良かったこともあり応募を決めました。<br>内定後、社会人への不安や仕事内容への不安を抱えていたため、支店見学の機会に、大量の質問を持っていったのですが、先輩社員が長い時間を使って１つひとつ丁寧に答えてくれて、安心して入社をすることができました。",
						]); ?>
					</div>
					<div class="p-people__intro__block">
						<?php get_template_part(PEOPLE_TITLES, null, [
							"num" => "2",
							"shoulder" => "Q&A",
							"hd" => "現在の仕事のやりがいは何ですか？",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "私たち調整の仕事は、機器がちゃんと動くか、新築現場での最後のチェックを行う仕事です。調整の仕事が終わると、実際に建物が動き始めます。<br>調整の仕事が本格的に動くのは竣工間近なタイミングで、工事が終わった箇所から、配線や機器の状態を全て点検し試運転を行っていきます。<br>最後、お客さんに機器の操作説明などを行うのも私たちの役割で、長かった工事の総仕上げとなるので、すべての業務を無事に終えた時に、とても達成感を感じることができます。",
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
							"text" => "自分起点でコミュニケーションを取っていく",
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
								"text" => "調整の仕事は、基本２人ペア（場合によっては３人以上も）で行うため、誰かと一緒に動くことになります。支店配属になり、最初の１年は、先輩社員が現場責任者、自分がサポート役として現場でいろいろと学ばせてもらうのですが、２年目になると現場責任者を任される事もあります。",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "初めて現場責任者を任された際に、協力業者さんが調整のペアとして付いてくれたのですが、自分よりも経験豊富だという点に甘えてしまい、現場のルール共有が漏れていたことが原因で、お客さんに注意されるということがありました。<br>現場には、安全管理のためのルール、現場特有のルールなど、細かなルールがたくさんあり、これらは現場責任者の私から協力業者さんに、ちゃんと伝えなければいけないと感じました。",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "また、この現場は、「スタンドアローン」という仕組みで動いている空調があり、１フロアごとに数箇所ある機器を１つひとつ、風量計測をする業者さんを呼んで点検・設定を行っていくという、私が初めて行う制御の対応がありました。座学では学んでいたのですが、実際に対応するとなると、どうしたらいいか分からず、手こずりましたが、先輩や周囲の協力を得て無事に竣工を迎える事が出来ました。",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "いくつかの失敗・課題もありながらも最初の現場責任者の仕事を終えてみて、この仕事は他の人を巻き込みながら行う仕事なので、「<span class='o-typo__bold'>コミュニケーション</span>」が大事だということを再認識しました。<br>もっと自分から情報共有を行ったり、コミュニケーションを意識的に図って連携をしやすくしたりと、自分起点で動くことで業務がもっと円滑になるんだと気づくことができました。",
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
							"text" => "まだまだ社内や協力業者さんに頼ることが多いのですが、一度、現場で対応した知識は、次の現場で活かし、いずれは現場の課題を自分だけでも解決できるようになりたいです。",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "また、今は私が横浜支店の技術課では一番年下となるので、後輩が入ってくるまでに、私がいろいろ教えてあげられる立場にならないといけないと思っています。<br>先輩たちが忙しいので、私が教えられるようになれたらなと。<br>そのためにも、いろんな現場をこなして知識と経験を増やしていかないといけません。",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "先輩たちに、いま自分の成長を支えてもらっているので、私もこれから入ってくる後輩の成長を支えてあげられるようになりたいと思います。",
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
											"time" => "08:00",
											"desc" => "現場へ直行",
										],
										[
											"size" => "",
											"time" => "08:15",
											"desc" => "朝礼後、1日の流れの確認",
										],
										[
											"size" => "",
											"time" => "09:30",
											"desc" => "２人体制で、調整作業開始",
										],
										[
											"size" => "",
											"time" => "12:00",
											"desc" => "お昼休憩",
										],
										[
											"size" => "",
											"time" => "13:00",
											"desc" => "午前に引き続き、調整作業",
										],
										[
											"size" => "",
											"time" => "17:00",
											"desc" => "中央監視の警報や異常のチェック",
										],
										[
											"size" => "",
											"time" => "17:15",
											"desc" => "翌日の作業内容確認と準備",
										],
										[
											"size" => "lg",
											"time" => "17:30",
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
									<p class="p-people__info__career__year">2022年</p>
									<p class="p-people__info__career__desc">新卒入社</p>
								</div>
								<div class="p-people__info__career__item">
									<p class="p-people__info__career__year">2022年</p>
									<p class="p-people__info__career__desc">１年間の技術者研修</p>
								</div>
								<div class="p-people__info__career__item">
									<p class="p-people__info__career__year--last">2023年</p>
									<p class="p-people__info__career__desc--last">環境システム事業部　技術課<br>横浜支店配属</p>
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
					<a href="../people-5/" class="m-other-links__card-people anm-hover">
							<?php get_template_part(PICTURE, null, [
								"path" => "cms/people-05-mv.jpg",
								"alt" => "",
								"type" => "circle",
								"hover" => "scale",
								"variable" => "m-other-links__card-people__pic"
							]); ?>
							<div class="m-other-links__card-people__text">
								<?php get_template_part(ICON_DEP, null, [
									"text" => $peoples[4]["dept"],
									"no_space" => true,
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" => $peoples[4]["name"],
									"size" => "fs-24",
									"font" => "yugo",
									"weight" => "bold",
									"color" => "gray",
									"variable" => "leading-none mt-[10px] md:mt-[12px]"
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" => $peoples[4]["school"]."卒<br>".$peoples[4]["entry"]."入社",
									"size" => "fs-14",
									"variable" => "leading-normal mt-[10px] md:mt-[14px]"
								]); ?>
							</div>
						</a>
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