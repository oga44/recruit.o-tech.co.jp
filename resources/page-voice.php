<?php
	// setting
	$images = "voice/voice-";
	$page_title = [NAME_VOICE];
	$page_desc = "オーテック採用サイトの社員アンケート紹介ページです。オーテックで働く先輩社員にアンケートを実施。気になるあれこれについて若手社員のリアルな声をお届けします。";
	$page_canonical = URL_VOICE;

	get_header();
?>

<article class="p-voice">
	<div class="article-head">
		<div class="l-cont">
			<?php get_template_part(TOPICPATH, null, [
				"list" => [
					[
						"href" => URL_HOME,
						"name" => "HOME"
					],
					[
						"href" => "",
						"name" => NAME_VOICE
					],
				]
			]); ?>
			<div class="article-head__cont">
				<?php get_template_part(ARTICLE_HEAD_HD, null, [
					"en" => "VOICE",
					"jp" => NAME_VOICE,
				]); ?>
			</div>
		</div>
	</div>
	<div class="article-body">
		<div class="p-voice__lead">
			<?php get_template_part(TYPO, null, [
				"text" => "若手先輩社員に<br class='sp'>オーテックについて<br>気になるあれこれをアンケートで<br class='sp'>聞いてみました。<br>若手社員のリアルな声を<br class='sp'>お届けします。",
				"size" => "fs-24",
				"weight" => "bold",
				"variable" => "text-center leading-[1.75]"
			]); ?>
		</div>
		<div class="p-voice__sections">
			<section class="p-voice__sec">
				<div class="l-cont">
					<?php get_template_part(TYPO, null, [
						"component" => "h2",
						"class_change" => "h4",
						"text" => "先輩たちの就活事情",
					]); ?>

					<div class="p-voice__sec__cont">
						<div class="p-voice__blocks">
							<div class="p-voice__block">
								<div class="p-voice__block__head">
									<div class="p-voice__block__icon">
										<img src="<?= URL_SVG ?>voice-icon-01.svg" alt="">
									</div>
									<?php get_template_part(TYPO, null, [
										"text" => "就活でみていた業界は？",
										"size" => "fs-20",
										"weight" => "bold",
										"color" => "red",
										"variable" => "leading-[1.35] tracking-normal flex-1 w-full"
									]); ?>
								</div>
								<div class="p-voice__block__body">
									<?php get_template_part(PICTURE, null, [
										"path" => $images."graph-01.png",
										"alt" => "",
										"variable" => "p-voice__block__graph"
									]); ?>
								</div>
							</div>
							<div class="p-voice__block">
								<div class="p-voice__block__head">
									<div class="p-voice__block__icon">
										<img src="<?= URL_SVG ?>voice-icon-02.svg" alt="">
									</div>
									<?php get_template_part(TYPO, null, [
										"text" => "企業選びで重視していたこと",
										"size" => "fs-20",
										"weight" => "bold",
										"color" => "red",
										"variable" => "leading-[1.35] tracking-normal flex-1 w-full"
									]); ?>
								</div>
								<div class="p-voice__block__body">
									<div class="p-voice__bubbles">
										<p class="p-voice__bubble">
											<span>仕事内容が<br>やりたいことか</span>
										</p>
										<p class="p-voice__bubble--lg">
											<span>将来性や<br>成長性など</span>
										</p>
										<p class="p-voice__bubble">
											<span>会社の<br>規模や歴史</span>
										</p>
										<p class="p-voice__bubble--lg">
											<span>福利厚生や<br>条件面</span>
										</p>
										<p class="p-voice__bubble">
											<span>業界や<br>事業領域</span>
										</p>
										<p class="p-voice__bubble--sm">
											<span>社員の雰囲気や<br>実際に会った時の<br>印象</span>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="p-voice__block">
							<div class="p-voice__block__head">
								<div class="p-voice__block__icon">
									<img src="<?= URL_SVG ?>voice-icon-03.svg" alt="">
								</div>
								<?php get_template_part(TYPO, null, [
									"text" => "オーテックに決めた理由",
									"size" => "fs-20",
									"weight" => "bold",
									"color" => "red",
									"variable" => "leading-[1.35] tracking-normal flex-1 w-full"
								]); ?>
							</div>
							<div class="p-voice__block__body p-voice__block__body--sp-full">
								<?php get_template_part(PICTURE, null, [
									"path" => $images."img-01.png",
									"sp" => $images."img-01-sp.png",
									"alt" => "",
								]); ?>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="p-voice__sec">
				<div class="l-cont">
					<?php get_template_part(TYPO, null, [
						"component" => "h2",
						"class_change" => "h4",
						"text" => "仕事をしてみてわかったこと",
					]); ?>

					<div class="p-voice__sec__cont">
						<div class="p-voice__block js-voice-wrap">
							<div class="p-voice__block__head">
								<div class="p-voice__block__icon">
									<img src="<?= URL_SVG ?>voice-icon-04.svg" alt="">
								</div>
								<?php get_template_part(TYPO, null, [
									"text" => "入社前と入社後で、<br class='sp'>どんなギャップがあった？",
									"size" => "fs-20",
									"weight" => "bold",
									"color" => "red",
									"variable" => "leading-[1.35] tracking-normal flex-1 w-full"
								]); ?>

								<nav class="p-voice__block__nav">
									<button class="p-voice__block__nav__btn js-voice-toggle is-active" data-cont="1">仕事の内容</button>
									<button class="p-voice__block__nav__btn js-voice-toggle" data-cont="2">働き方</button>
									<button class="p-voice__block__nav__btn js-voice-toggle" data-cont="3">人間関係</button>
								</nav>
							</div>
							<div class="p-voice__block__body">
								<?php
									$i = 1;
									$contents = [
										[
											"id" => "1",
											"item" => [
												[
													"text" => "協力会社の施工を管理するのが仕事だと思っていたが、実際には、具体的な指示や、設計まで行う",
													"icon" => "01",
												],
												[
													"text" => "覚えることが多く、内容の難易度も高いと感じた",
													"icon" => "02",
												],
												[
													"text" => "想像していたよりも専門的な知識が必要だった",
													"icon" => "03",
												],
												[
													"text" => "「計装（けいそう）」という言葉を初めて聞いた",
													"icon" => "04",
												],
												[
													"text" => "基礎知識だけでなく、工事や技術の幅広い知識が必要だと感じた",
													"icon" => "05",
												],
												[
													"text" => "CADや積算を業務として行なったり、今後、設計のような仕事もやる可能性があるという点",
													"icon" => "06",
												],
											],
										],
										[
											"id" => "2",
											"item" => [
												[
													"text" => "現場によっては、土日出勤がある",
													"icon" => "07",
												],
												[
													"text" => "好きなタイミングで有給が取得できる",
													"icon" => "08",
												],
												[
													"text" => "思っていたよりも忙しく、残業時間も多い",
													"icon" => "09",
												],
												[
													"text" => "一人の時間が意外と多く、気楽でもある",
													"icon" => "10",
												],
												[
													"text" => "まだ紙が多い。非効率な部分もある",
													"icon" => "11",
												],
												[
													"text" => "上場企業ではあるが、意外と自分の意見も通りやすいと感じた",
													"icon" => "12",
												],
											],
										],
										[
											"id" => "3",
											"item" => [
												[
													"text" => "建設業ということで、職人気質な人が多いと思っていたが、案外、普通の人が多い",
													"icon" => "13",
												],
												[
													"text" => "社内は雰囲気がよく、居心地が良いと感じる",
													"icon" => "14",
												],
												[
													"text" => "上下関係も良好で、年齢が離れている先輩や上司にも、気軽に話すことができる",
													"icon" => "15",
												],
												[
													"text" => "コミュニケーションの少ない会社だと思っていたが、先輩たちから、よく声をかけてくれる",
													"icon" => "27",
												],
											],
											"col" => "2"
										],
									];

									foreach ($contents as $cont):
									$current = $i === 1 ? "is-show" : "";
									$col = !empty($cont["col"]) ? "--col".$cont["col"] : "";
								?>
								<div class="p-voice__block__body__cont<?= $col ?> js-voice-target <?= $current ?>" data-cont="<?= $cont["id"]?>">
									<?php foreach ($cont["item"] as $item): ?>
									<div class="p-voice__block__body__item">
										<?php get_template_part(TYPO, null, [
											"text" => $item["text"],
											"size" => "fs-15",
											"weight" => "medium",
											"variable" => "leading-[1.5]"
										]); ?>
										<div class="p-voice__block__body__item__icon">
											<img src="<?= URL_SVG ?>voice-item-icon-<?= $item["icon"] ?>.svg" alt="">
										</div>
									</div>
									<?php endforeach; ?>
								</div>
								<?php
									$i++;
									endforeach;
								?>
							</div>
						</div>

						<div class="p-voice__block bg-blue-light3">
							<div class="p-voice__block__head">
								<div class="p-voice__block__icon">
									<img src="<?= URL_SVG ?>voice-icon-05.svg" alt="">
								</div>
								<?php get_template_part(TYPO, null, [
									"text" => "どんなところにやりがいを<br class='sp'>感じている？",
									"size" => "fs-20",
									"weight" => "bold",
									"color" => "red",
									"variable" => "leading-[1.35] tracking-normal flex-1 w-full"
								]); ?>
							</div>
							<div class="p-voice__block__body">
								<?php get_template_part(PICTURE, null, [
									"path" => $images."img-02.png",
									"sp" => $images."img-02-sp.png",
									"alt" => "",
								]); ?>
							</div>
						</div>

						<div class="p-voice__block">
							<div class="p-voice__block__head">
								<div class="p-voice__block__icon">
									<img src="<?= URL_SVG ?>voice-icon-06.svg" alt="">
								</div>
								<?php get_template_part(TYPO, null, [
									"text" => "自分の仕事の<br class='sp'>気に入っているポイント",
									"size" => "fs-20",
									"weight" => "bold",
									"color" => "red",
									"variable" => "leading-[1.35] tracking-normal flex-1 w-full"
								]); ?>
							</div>
							<div class="p-voice__block__body">
								<?php get_template_part(PICTURE, null, [
									"path" => $images."img-03.png",
									"sp" => $images."img-03-sp.png",
									"alt" => "",
								]); ?>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="p-voice__sec">
				<div class="l-cont">
					<?php get_template_part(TYPO, null, [
						"component" => "h2",
						"class_change" => "h4",
						"text" => "オーテックのここがいい",
					]); ?>

					<div class="p-voice__sec__cont">
						<div class="p-voice__blocks">
							<div class="p-voice__block">
								<div class="p-voice__block__head">
									<div class="p-voice__block__icon">
										<img src="<?= URL_SVG ?>voice-icon-07.svg" alt="">
									</div>
									<?php get_template_part(TYPO, null, [
										"text" => "オーテックの好きなところ",
										"size" => "fs-20",
										"weight" => "bold",
										"color" => "red",
										"variable" => "leading-[1.35] tracking-normal flex-1 w-full"
									]); ?>
								</div>
								<div class="p-voice__block__body">
									<?php get_template_part(PICTURE, null, [
										"path" => $images."graph-02.png",
										"alt" => "",
										"variable" => "p-voice__block__graph"
									]); ?>
								</div>
							</div>
							<div class="p-voice__block">
								<div class="p-voice__block__head">
									<div class="p-voice__block__icon">
										<img src="<?= URL_SVG ?>voice-icon-08.svg" alt="">
									</div>
									<?php get_template_part(TYPO, null, [
										"text" => "入社するまでわからなかった<br>オーテックの意外な一面",
										"size" => "fs-20",
										"weight" => "bold",
										"color" => "red",
										"variable" => "leading-[1.35] tracking-normal flex-1 w-full"
									]); ?>
								</div>
								<div class="p-voice__block__body">
									<?php get_template_part(PICTURE, null, [
										"path" => $images."img-04.png",
										"sp" => $images."img-04-sp.png",
										"alt" => "",
									]); ?>
								</div>
							</div>
							<div class="p-voice__block">
								<div class="p-voice__block__head">
									<div class="p-voice__block__icon">
										<img src="<?= URL_SVG ?>voice-icon-09.svg" alt="">
									</div>
									<?php get_template_part(TYPO, null, [
										"text" => "競合に比べ自信を持てること",
										"size" => "fs-20",
										"weight" => "bold",
										"color" => "red",
										"variable" => "leading-[1.35] tracking-normal flex-1 w-full"
									]); ?>
								</div>
								<div class="p-voice__block__body">
									<?php get_template_part(PICTURE, null, [
										"path" => $images."graph-03.png",
										"alt" => "",
										"variable" => "p-voice__block__graph"
									]); ?>
								</div>
							</div>
							<div class="p-voice__block">
								<div class="p-voice__block__head">
									<div class="p-voice__block__icon">
										<img src="<?= URL_SVG ?>voice-icon-10.svg" alt="">
									</div>
									<?php get_template_part(TYPO, null, [
										"text" => "会社の将来に期待していること",
										"size" => "fs-20",
										"weight" => "bold",
										"color" => "red",
										"variable" => "leading-[1.35] tracking-normal flex-1 w-full"
									]); ?>
								</div>
								<div class="p-voice__block__body">
									<?php get_template_part(PICTURE, null, [
										"path" => $images."graph-04.png",
										"alt" => "",
										"variable" => "p-voice__block__graph"
									]); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="p-voice__sec">
				<div class="l-cont">
					<?php get_template_part(TYPO, null, [
						"component" => "h2",
						"class_change" => "h4",
						"text" => "先輩たちからのメッセージ",
					]); ?>

					<div class="p-voice__sec__cont">
						<div class="p-voice__block">
							<div class="p-voice__block__head">
								<div class="p-voice__block__icon">
									<img src="<?= URL_SVG ?>voice-icon-11.svg" alt="">
								</div>
								<?php get_template_part(TYPO, null, [
									"text" => "こんな人柄の後輩と働きたい",
									"size" => "fs-20",
									"weight" => "bold",
									"color" => "red",
									"variable" => "leading-[1.35] tracking-normal flex-1 w-full"
								]); ?>
							</div>
							<div class="p-voice__block__body">
								<div class="p-voice__rank">
									<div class="p-voice__rank__main">
										<div class="p-voice__rank__item p-voice__rank__item--lg">
											<div class="p-voice__rank__icon p-voice__rank__icon--lg">
												<div class="z-[2]">
													<?php get_template_part(TYPO_EN, null, [
														"text" => "1",
														"size" => "32",
														"color" => "white",
														"variable" => "leading-none tracking-normal"
													]); ?>
												</div>
												<div class="p-voice__rank__ribbon">
													<?php get_template_part(ICON_RIBBON); ?>
												</div>
											</div>
											<div class="p-voice__rank__text">
												<?php get_template_part(TYPO, null, [
													"text" => "コミュニケーション力がある人",
													"component" => "p",
													"class_change" => "h4",
													"variable" => "p-voice__rank__text--body-lg"
												]); ?>
												<div class="p-voice__rank__emoji p-voice__rank__emoji--lg">
													<img src="<?= URL_SVG ?>voice-icon-14.svg" alt="">
												</div>
											</div>
										</div>
									</div>
									<div class="p-voice__rank__sub">
										<div class="p-voice__rank__item">
											<div class="p-voice__rank__icon">
												<div class="z-[2]">
													<?php get_template_part(TYPO_EN, null, [
														"text" => "2",
														"size" => "24",
														"color" => "white",
														"variable" => "leading-none tracking-normal"
													]); ?>
												</div>
												<div class="p-voice__rank__ribbon c-2">
													<?php get_template_part(ICON_RIBBON); ?>
												</div>
											</div>
											<div class="p-voice__rank__text">
												<?php get_template_part(TYPO, null, [
													"text" => "根性があり<br>精神力が強い人",
													"component" => "p",
													"class_change" => "h5",
													"size" => "xl"
												]); ?>
												<div class="p-voice__rank__emoji">
													<img src="<?= URL_SVG ?>voice-icon-15.svg" alt="">
												</div>
											</div>
										</div>
										<div class="p-voice__rank__item">
											<div class="p-voice__rank__icon">
												<div class="z-[2]">
													<?php get_template_part(TYPO_EN, null, [
														"text" => "3",
														"size" => "24",
														"color" => "white",
														"variable" => "leading-none tracking-normal"
													]); ?>
												</div>
												<div class="p-voice__rank__ribbon c-3">
													<?php get_template_part(ICON_RIBBON); ?>
												</div>
											</div>
											<div class="p-voice__rank__text">
												<?php get_template_part(TYPO, null, [
													"text" => "積極性があり、<br>向上心が高い人",
													"component" => "p",
													"class_change" => "h5",
													"size" => "xl"
												]); ?>
												<div class="p-voice__rank__emoji">
													<img src="<?= URL_SVG ?>voice-icon-16.svg" alt="">
												</div>
											</div>
										</div>
										<div class="p-voice__rank__item">
											<div class="p-voice__rank__icon">
												<div class="z-[2]">
													<?php get_template_part(TYPO_EN, null, [
														"text" => "4",
														"size" => "24",
														"color" => "white",
														"variable" => "leading-none tracking-normal"
													]); ?>
												</div>
												<div class="p-voice__rank__ribbon c-4">
													<?php get_template_part(ICON_RIBBON); ?>
												</div>
											</div>
											<div class="p-voice__rank__text">
												<?php get_template_part(TYPO, null, [
													"text" => "想像力があり、<br>空気が読める人",
													"component" => "p",
													"class_change" => "h5",
													"size" => "xl"
												]); ?>
												<div class="p-voice__rank__emoji">
													<img src="<?= URL_SVG ?>voice-icon-17.svg" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="p-voice__block js-voice-wrap">
							<div class="p-voice__block__head">
								<div class="p-voice__block__icon">
									<img src="<?= URL_SVG ?>voice-icon-12.svg" alt="">
								</div>
								<?php get_template_part(TYPO, null, [
									"text" => "後輩へのおすすめポイント",
									"size" => "fs-20",
									"weight" => "bold",
									"color" => "red",
									"variable" => "leading-[1.35] tracking-normal flex-1 w-full"
								]); ?>

								<nav class="p-voice__block__nav">
									<button class="p-voice__block__nav__btn js-voice-toggle is-active" data-cont="4">福利厚生と待遇</button>
									<button class="p-voice__block__nav__btn js-voice-toggle" data-cont="5">教育・研修制度</button>
									<button class="p-voice__block__nav__btn js-voice-toggle" data-cont="6">業界や会社のこと</button>
									<button class="p-voice__block__nav__btn js-voice-toggle" data-cont="7">その他</button>
								</nav>
							</div>
							<div class="p-voice__block__body">
								<?php
									$i = 1;
									$contents = [
										[
											"id" => "4",
											"item" => [
												[
													"text" => "手厚い家賃補助や借上げ社宅制度があるため、一人暮らしも安心してできる",
													"icon" => "16",
												],
												[
													"text" => "ライフステージに合わせた制度も整っているので、長期的に見て働きやすい会社だと思います",
													"icon" => "14",
												],
												[
													"text" => "ボーナスや技術手当などがあり、金銭面も実際のところ悪くない",
													"icon" => "17",
												],
												[
													"text" => "産休・育休も取りやすい",
													"icon" => "18",
												],
											],
											"col" => "2"
										],
										[
											"id" => "5",
											"item" => [
												[
													"text" => "新人研修が充実している点",
													"icon" => "20",
												],
												[
													"text" => "一年の研修はとても有意義です",
													"icon" => "08",
												],
												[
													"text" => "研修制度が手厚く、いきなり現場に投げ出されることなく、技術力が向上できる",
													"icon" => "18",
												],
												[
													"text" => "一年研修は本当に魅力的だと思います。事前に理解することが難しい業界ですが、一年研修で基本的な用語などを学ぶ事ができます",
													"icon" => "21",
												],
												[
													"text" => "他の企業では、あまりない１年間の研修があるため、入社してから勉強できる機会が大いにある",
													"icon" => "16",
												],
												[
													"text" => "技術職は専門性が高い分野であり、一年目でたっぷり時間を使って資格を取ることができるため、手に職を付ける事ができる",
													"icon" => "19",
												],
											],
										],
										[
											"id" => "6",
											"item" => [
												[
													"text" => "建築業界は将来的にも安定が見込める業界",
													"icon" => "07",
												],
												[
													"text" => "未経験でも、仕事を経験していくと、技術力と知識がしっかり身に付く",
													"icon" => "22",
												],
												[
													"text" => "事業の安定性と、社会貢献度が高い点",
													"icon" => "23",
												],
												[
													"text" => "自分が携わった現場が完成した時、大きなやりがいを感じられる",
													"icon" => "24",
												],
												[
													"text" => "景気に左右されにくく安定性がある業界",
													"icon" => "20",
												],
												[
													"text" => "様々な部署があり、自分にあう部署を見つけられる",
													"icon" => "21",
												],
												[
													"text" => "社内の雰囲気が、とても良い",
													"icon" => "15",
													"size" => "half",
												],
												[
													"text" => "全員、おおらかで、何でも教えてくれる",
													"icon" => "18",
													"size" => "half",
												],
												[
													"text" => "雰囲気も良く、親切な人が多い職場",
													"icon" => "16",
													"size" => "half",
												],
												[
													"text" => "フランクな人間関係で、理解のある人が多い点",
													"icon" => "25",
													"size" => "half",
												],
											],
										],
										[
											"id" => "7",
											"item" => [
												[
													"text" => "100周年が間近なので、期待できます",
													"icon" => "17",
												],
												[
													"text" => "離職率の低さ",
													"icon" => "20",
												],
												[
													"text" => "作業着で仕事ができる",
													"icon" => "26",
												],
												[
													"text" => "デスクワークオンリーが苦手な人に合う仕事",
													"icon" => "12",
												],
											],
											"col" => "2"
										],
									];

									foreach ($contents as $cont):
									$current = $i === 1 ? "is-show" : "";
									$col = !empty($cont["col"]) ? "--col".$cont["col"] : "";
								?>
								<div class="p-voice__block__body__cont<?= $col ?>  js-voice-target <?= $current ?>" data-cont="<?= $cont["id"]?>">
									<?php foreach ($cont["item"] as $item): ?>
									<?php $size = !empty($item["size"]) ? "p-voice__block__body__item--".$item["size"] : "p-voice__block__body__item"; ?>
									<div class="<?= $size ?>">
										<?php get_template_part(TYPO, null, [
											"text" => $item["text"],
											"size" => "fs-15",
											"weight" => "medium",
											"variable" => "leading-[1.5]"
										]); ?>
										<div class="p-voice__block__body__item__icon">
											<img src="<?= URL_SVG ?>voice-item-icon-<?= $item["icon"] ?>.svg" alt="">
										</div>
									</div>
									<?php endforeach; ?>
								</div>
								<?php
									$i++;
									endforeach;
								?>
							</div>
						</div>

						<div class="p-voice__block">
							<div class="p-voice__block__head">
								<div class="p-voice__block__icon">
									<img src="<?= URL_SVG ?>voice-icon-13.svg" alt="">
								</div>
								<?php get_template_part(TYPO, null, [
									"text" => "先輩たちの今後の目標",
									"size" => "fs-20",
									"weight" => "bold",
									"color" => "red",
									"variable" => "leading-[1.35] tracking-normal flex-1 w-full"
								]); ?>
							</div>
							<div class="p-voice__block__body">
								<div class="p-voice__goal">
									<?php
										$goal = [
											[
												"href" => URL_PEOPLE."people-1/",
												"img" => "01",
												"name" => $peoples[0]["name"],
												"year" => $peoples[0]["entry"],
												"message" => "まだ現場で仲間に頼ることがあるので、より計画的に、先を見据えて行動を取れるようになりたいです。",
											],
											[
												"href" => URL_PEOPLE."people-2/",
												"img" => "02",
												"name" => $peoples[1]["name"],
												"year" => $peoples[1]["entry"],
												"message" => "会社に利益を残せるように、いずれは、大きな現場を１人でまわせるようになりたいです。",
											],
											[
												"href" => URL_PEOPLE."people-3/",
												"img" => "03",
												"name" => $peoples[2]["name"],
												"year" => $peoples[2]["entry"],
												"message" => "現場での施工管理の担当としては、「オーテックに頼んでよかった」と思ってもらえるような工事をしていきたいです。",
											],
										];

										foreach ($goal as $item):
									?>
									<a href="<?= $item["href"] ?>" class="p-voice__goal__item anm-hover">
										<div class="p-voice__goal__main">
											<?php get_template_part(PICTURE, null, [
												"path" => "cms/people-".$item["img"]."-mv.jpg",
												"alt" => "",
												"type" => "circle",
												"variable" => "p-voice__goal__pic",
												"hover" => "scale"
											]); ?>
											<div class="p-voice__goal__prof">
												<div class="p-voice__goal__prof__name">
													<?php get_template_part(TYPO, null, [
														"text" => $item["name"],
														"size" => "fs-24",
														"variable" => "leading-none"
													]); ?>
												</div>
												<?php get_template_part(TYPO, null, [
													"text" => $item["year"]."年入社",
													"size" => "fs-14",
													"variable" => "leading-normal"
												]); ?>
											</div>
										</div>
										<div class="p-voice__goal__message">
											<div class="p-voice__goal__message__text">
												<?php get_template_part(TYPO, null, [
													"text" => $item["message"],
													"variable" => "p-voice__goal__message__text--body leading-[1.65]"
												]); ?>
											</div>
											<?php get_template_part(BUTTON_ARROW, null, [
												"color" => "white",
												"type" => "circle",
												"hover" => "forward-scale-reserve",
												"reserve_color" => "black"
											]); ?>
										</div>
									</a>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<?php /* 0610非公開
		<div class="m-lower-nav">
			<div class="m-lower-nav__cont l-cont--pc">
			<?php get_template_part(BUTTON_PICTURE, null, [
					"href" => URL_PEOPLE,
					"jp" => "数字とキーワードで見るオーテック",
					"en" => "KEY-WORDS",
					"img" => "common/bnr-keyword.jpg",
				]); ?>
			</div>
		</div>
		*/ ?>
	</div>
</article>
<?php get_footer(); ?>