<?php
	// setting
	$images = "cms/people-02-";
	$page_title = ["T.M", NAME_PEOPLE];
	$page_desc = "オーテック採用サイトの社員紹介ページです。環境システム事業部　T.Mさんの紹介記事です。";
	$page_canonical = URL_PEOPLE."people-2/";

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
				"name" => "PERSON 02"
			],
		],
		"is_single" => true,
		"en" => "PERSON 02",
		"jp" => $peoples[1]["hd"],
		"people" => [
			"shoulder" => $peoples[1]["dept"],
			"name" => $peoples[1]["name"],
			"entry" => $peoples[1]["entry"],
			"school" => $peoples[1]["school"],
		],
		"catch" => [
			"desc" => $peoples[1]["desc"],
		],
		"images" => "cms/people-02-mv.jpg",
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
							"text" => "家族が建設業界に勤めていたため、この業界が身近なものでした。<br>就職活動時は、文系だったこともあり営業職に就きたいなと思い、いろんな業界を見ていましたが、建設業界を調べていた時に「自動制御」という存在を知り、オーテックにたどり着きました。<br>「自動制御」に興味を持ったので、オーテックを受けることにしたのですが、「営業職」で考えると、この業界は現場を知らないと無理だなと思い、現場を知れるポジションを選んで応募しました。<br>経済学部ということもあり企業情報も調べてみて、オーテックは財務状況なども安心ができる状態だったのと、長い歴史もあるので安定しているという印象だったため、内定を貰いオーテックに決めました。",
						]); ?>
					</div>
					<div class="p-people__intro__block">
						<?php get_template_part(PEOPLE_TITLES, null, [
							"num" => "2",
							"shoulder" => "Q&A",
							"hd" => "現在の仕事のやりがいは何ですか？",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "オーテックの仕事の領域は、建物を作る際の空調設備を担当するサブコンと組んで、空調機器を自動制御する仕組みを作る部分です。<br>私たち工事課は、自動制御を実現させるための配線の段取りや、仕様を精密に落とし込んだ「施工図」の作成、施工の工程管理を担っています。<br>やはり、自分が担当した現場で、実装した機器が思い通りに動いた時には、とても達成感を感じます。<br>しかし、うまくいくことばかりではなく、臨機応変に対応を迫られるシーンも多くあります。そんな中でも、まわりと協力し、みんなで課題を解決できた時に、面白さや充実感を見出せます。",
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
							"text" => "質問や相談に対して<br>答えを出せるようになった",
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
								"text" => "支店への配属後、大きな現場に配置されたのですが一緒に現場を担当していた先輩が都合により退職してしまい、常駐できるのが自分１人という時期がありました。<br>先輩たちが本当に優しく、自分の現場が終わったら駆けつけてくれたり、聞いたことに対して何でも答えてくれたりと、１人の現場ではありましたが心細さは感じていませんでした。<br>しかし、まだ何も分からない時期だったため、現場で聞かれることに対しては「一旦、確認します」という回答ばかりしていました。",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "上司や先輩、職人さんも助けてくれたので、周りのおかげで無事に竣工することができたのですが、分からないことが多く、当時の自分には、とにかく聞くことしかできないということを認識した経験でした。",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "現在、いろいろな現場を経験し、お客さんから「これってどういう動きをするのですか」と聞かれた際に、自信を持って答えられることが増えてきました。<br>施工管理の立場は、職人さんからも相談されることもあり、それに対しても着実に「それはいい」「それはダメ」と自分ではっきりとした答えを出せるようになっていっていると感じています。",
							]); ?>
							<?php get_template_part(TYPO, null, [
								"text" => "最初の頃は、とにかく何もできなかったのですが、現場で発生する質問や相談に、自信を持って答えられた時、自分の成長を実感することができます。",
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
							"text" => "いずれは、大きな現場を１人でまわせるようになりたいです。",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "大型物件の現場は２名体制が基本ですが、１人でまわせるようになることで、会社にも利益を残せます。そのためには、もっと仕事を早くこなせるようにならなくてはなりません。",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "入社したての頃は、自分１人で何もできず、とにかく先輩に聞く毎日でした。<br>当時は、言っていることすらわからないから、調べてみるけど、そこにも時間がかかって、仕事も進まないという状況でした。",
						]); ?>
						<?php get_template_part(TYPO, null, [
							"text" => "しかし、知識や経験が付くと、だんだん仕事が早くなっていきます。<br>今の自分の経験値では、まだ大きな現場を１人でまわすイメージは湧いていませんが、まずはステップとして、自分がしてもらったように、後輩が困った時にサポートができる先輩になりたいです。",
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
											"desc" => "朝礼",
										],
										[
											"size" => "",
											"time" => "08:30",
											"desc" => "危険予知活動、現場巡回、資料作成",
										],
										[
											"size" => "",
											"time" => "12:00",
											"desc" => "お昼休憩",
										],
										[
											"size" => "",
											"time" => "13:00",
											"desc" => "昼礼、職人さんと現場確認",
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
											"desc" => "翌日の段取り、図面の確認",
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
									<p class="p-people__info__career__year">2022年</p>
									<p class="p-people__info__career__desc">新卒入社</p>
								</div>
								<div class="p-people__info__career__item">
									<p class="p-people__info__career__year">2022年</p>
									<p class="p-people__info__career__desc">１年間の技術者研修</p>
								</div>
								<div class="p-people__info__career__item">
									<p class="p-people__info__career__year--last">2023年</p>
									<p class="p-people__info__career__desc--last">環境システム事業部　工事課<br>横浜支店配属</p>
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