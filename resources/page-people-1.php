<?php
	// setting
	$images = "cms/people-01-";
	$page_title = ["I.T", NAME_PEOPLE];
	$page_desc = "オーテック採用サイトの社員紹介ページです。環境システム事業部　I.Tさんの紹介記事です。";
	$page_canonical = URL_PEOPLE."people-1/";

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
				"name" => "PERSON 01"
			],
		],
		"is_single" => true,
		"en" => "PERSON 01",
		"jp" => $peoples[0]["hd"],
		"people" => [
			"shoulder" => $peoples[0]["dept"],
			"name" => $peoples[0]["name"],
			"entry" => $peoples[0]["entry"],
			"school" => $peoples[0]["school"],
		],
		"catch" => [
			"desc" => $peoples[0]["desc"],
		],
		"images" => "cms/people-01-mv.jpg",
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
							"text" => "大学時代に、環境と人との熱のやりとりに関する「温熱環境」という分野を学んでいました。繊維学を専攻していたので、衣服で人の快適さをつくる、ということをテーマに研究をしていた経験から、就職先でも「温熱環境」という分野に関連したところを探していました。<br>オーテックとの出会いは、就活サイトで調べていた時に「人が快適に過ごせる建物環境をつくる」という点で、研究と関わりがある分野だったため興味を持ちました。<br>サイトや説明会で、福利厚生や１年目の研修が充実していて、人事の担当者の印象も良かったため、ここで働きたいと思い志望しました。",
						]); ?>
					</div>
					<div class="p-people__intro__block">
						<?php get_template_part(PEOPLE_TITLES, null, [
							"num" => "2",
							"shoulder" => "Q&A",
							"hd" => "現在の仕事のやりがいは何ですか？",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "オーテックでは新規構築だけでなくメンテナンスや修理などの業務も行っており、契約をしている建物に定期的に点検にうかがっています。メンテナンスと言っても同じ作業ということでもなく、建物の規模や用途によって設計や制御の仕様も違ってくるので、新しい現場に入る度に確認箇所や方法が変わってきます。<br>この仕事を続けていると、街を通る際に、「この建物、入ったことあるな」という建物が増えていき、何だか嬉しい気持ちになります。また、ちょっとマニアックですが、メンテナンスをしていると、建物の裏側で、設計者の意図や配慮が伝わってくることがあり、それがすごく面白いなと感じています。",
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
							"text" => "こなした現場の数だけ<br>想像力も応用力も付く",
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
								"text" => "入社してすぐの頃は、わからないことが多かったため、先輩の後に付いて対応方法を見て学ぶことしかできなかったのですが、現場をこなしていくうちに、知識や経験が増えていくのを実感できています。",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "担当している現場で、お客さんから「ちょっと調子が悪くて見てもらえる？」と呼ばれることがあるのですが、入社当時であれば「確認します」と全て持ち帰っていたものも「それなら、あそこが悪いかな」と見当をつけて調べてみて、自分一人の力で解決できるようになりました。自分で解決できる内容が、年々、増えて来ているなという実感があります。経験が知識になり、そのおかげで応用や想像がつくようになってきているのだと思います。",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "ただ、ごく最近のことですが、入社２年目の終わり頃、空調機器のコントローラーを一度にたくさん替えるという、初めて行う修理の現場がありました。対応の方法が分からない部分があったり、各所への手配が後手後手に回ってしまい、先輩や上司に助けてもらって、なんとか完了できたという経験をしました。",
							]); ?>
							<div class="p-people-descs">
								<?php get_template_part(TYPO, null, [
									"text" => "一人で解決できる現場も増えてきていますが、まだまだ仲間に頼ることは多々あります。",
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" => "いまは、経験が足りていなくて分からないことも、現場での準備不足を感じることもあるので、もっとたくさんの現場をこなして経験を積み、いろんな状況に対処できるようになりたいという気持ちです。",
								]); ?>
							</div>
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
							"text" => "より計画的に、先を見据えて行動を取れるようになりたいです。",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "影響範囲が大きいプロジェクトになると、今はまだ、いつ何をしたらいいのかも分からないということが多い状況にあります。",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "私たちの仕事は、規模が大きなプロジェクトになるほど、想像力や先読みする力が必要になってきます。想像力や先読みする力を養うには、多くの現場を経験するしかないのですが、その下地として、まずはどんな規模でも、プロジェクトの全体像や流れをより早く、より正確に、より具体的に掴めるようになることで、プロジェクトにおいてやるべきことや必要な調整への動きだしが変わってきます。",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "今は、その目線で、目の前のプロジェクトに取り組んでいます。",
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
											"desc" => "出社",
										],
										[
											"size" => "",
											"time" => "08:45",
											"desc" => "現場へ移動し関係者へ挨拶",
										],
										[
											"size" => "",
											"time" => "09:00",
											"desc" => "メンテナンス作業開始",
										],
										[
											"size" => "",
											"time" => "12:00",
											"desc" => "お昼休憩",
										],
										[
											"size" => "",
											"time" => "13:00",
											"desc" => "メンテナンス作業再開",
										],
										[
											"size" => "",
											"time" => "16:00",
											"desc" => "作業を終了し会社へ移動",
										],
										[
											"size" => "",
											"time" => "17:00",
											"desc" => "事務作業",
										],
										[
											"size" => "lg",
											"time" => "18:30",
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
									<p class="p-people__info__career__desc">１年間の技術者研修</p>
								</div>
								<div class="p-people__info__career__item">
									<p class="p-people__info__career__year--last">2022年</p>
									<p class="p-people__info__career__desc--last">環境システム事業部　技術課<br>北関東支店配属</p>
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
				<div class="m-other-links__row p-0">
					<div class="m-other-links__cards">
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
						<a href="../people-3/" class="m-other-links__card-people anm-hover">
							<?php get_template_part(PICTURE, null, [
								"path" => "cms/people-03-mv.jpg",
								"alt" => "",
								"type" => "circle",
								"hover" => "scale",
								"variable" => "m-other-links__card-people__pic"
							]); ?>
							<div class="m-other-links__card-people__text">
								<?php get_template_part(ICON_DEP, null, [
									"text" => $peoples[2]["dept"],
									"no_space" => true,
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" => $peoples[2]["name"],
									"size" => "fs-24",
									"font" => "yugo",
									"weight" => "bold",
									"color" => "gray",
									"variable" => "leading-none mt-[10px] md:mt-[12px]"
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" => $peoples[2]["school"]."卒<br>".$peoples[2]["entry"]."入社",
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