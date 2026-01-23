<?php
	$p = $crosstalks[0];
	$page_title = ["入社２年目の同期対談　１年間の技術者研修を終えて", NAME_CROSSTALK];
	$page_desc = "未経験で知識も無い業界に就職するのは不安ですよね。研修制度が手厚いという点に惹かれて入社した社員も多数おりますが、実際のところ入社後の技術者研修ってハードなの？１年間でどんなことが身につくの？という疑問を、ちょうど１年間の技術者研修を終えたばかりの若手社員３人に訊いてみました。";
	$page_canonical = URL_CROSSTALK."crosstalk-1/";
	get_header();

	$images = "cms/cross-".$p["num"]."-"
?>
<article class="p-crosstalk">
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
				"href" => URL_CROSSTALK,
				"name" => NAME_CROSSTALK
			],
			[
				"href" => "",
				"name" => "CROSS TALK ".$p["num"]
			],
		],
		"is_single" => true,
		"en" => "CROSS TALK ".$p["num"],
		"jp" => $p["hd"],
		"cross" => [
			"talk" => $p["cross"],
			"catch" => [
				"main" => "オーテックと言えば、手厚い研修",
				"desc" => "未経験で知識も無い業界に就職するのは不安ですよね。研修制度が手厚いという点に惹かれて入社した社員も多数おりますが、実際のところ入社後の技術者研修ってハードなの？１年間でどんなことが身につくの？という疑問を、ちょうど１年間の技術者研修を終えたばかりの若手社員３人に訊いてみました。"
			]
		],
		"images" => "cms/cross-".$p["num"]."-mv.jpg",
	]); ?>
	<div class="article-body">
		<div class="p-crosstalk__peoples">
			<div class="l-cont--sm l-cont--sp-sm">
				<div class="p-crosstalk__peoples__row">
					<?php
						$i = 1;
						$list = [
							[
								"dept" => "環境システム事業部",
								"name" => "T.Y",
								"entry" => "2023",
								"school" => "工学部ロボット理工学科",
							],
							[
								"dept" => "環境システム事業部",
								"name" => "R.S",
								"entry" => "2023",
								"school" => "理工学部情報電子工学科",
							],
							[
								"dept" => "環境システム事業部",
								"name" => "S.Y",
								"entry" => "2023",
								"school" => "理工学部情報学科",
							],
						];

						foreach($list as $item):
					?>
					<div class="p-crosstalk__people">
						<?php get_template_part(PICTURE, null, [
							"path" => $images."people-".sprintf('%02d', $i).".jpg",
							"alt" => "",
							"variable" => "p-crosstalk__people__pic",
						]); ?>
						<div>
							<?php get_template_part(ICON_DEP, null, [
								"text" => $item["dept"],
								"no_space" => true,
							]); ?>
							<p class="p-crosstalk__people__name"><?= $item["name"] ?></p>
							<p class="p-crosstalk__people__year"><?= $item["entry"] ?>年入社</p>
							<p class="p-crosstalk__people__school"><?= $item["school"] ?>卒</p>
						</div>
					</div>
					<?php
						$i++;
						endforeach;
					?>
				</div>
			</div>
		</div>
		<?php get_template_part(CROSSTALK_SECTION, null, [
			"hd" => "入社前を振り返ってみて",
			"q_num" => "1",
			"q_text" => "なぜ、オーテックに入社しようと思ったのですか？",
			"q_img" => [
				"path" => $images."img-01.jpg",
				"alt" => "",
			],
			"q_items" => [
				[
					"img" => [
						"path" => $images."people-03.jpg",
						"alt" => "",
					],
					"name" => "S.Y",
					"descs" => ["説明会で、オーテックの仕事に興味を持ちました。<br>ただ、自分が学校で学んだ分野とも違っていたため、知識ゼロという状態なのは不安でした。<br>そのため、就職活動中に調べてもみたのですが、どんなことをするのかもハッキリわからなかったです。<br>そんな状況もあり、研修期間が長いという点には惹かれました。<br>入社して現場に配属される前に、しっかり学べる期間があることが安心でした。"],
				],
				[
					"img" => [
						"path" => $images."people-02.jpg",
						"alt" => "",
					],
					"name" => "R.S",
					"descs" => ["給与と福利厚生が魅力的で、入社を決めました。<br>学生時代まで、地元の宮城にいたため、就職したら一人暮らしするんだろうなと思っていたのですが、オーテックは福利厚生で、借上社宅制度があるので、一人暮らしのお財布にとても優しいんです。<br>宮城を出て、知らない土地で１人暮らしをすることに不安を感じていましたが、実際は１年目は研修期間中の生活棟（一人一部屋の会社が用意した施設）暮らしで、同じ研修を受けている同期仲間が近くにいたので、困ることもありませんでした。"],
				],
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "T.Y",
					"descs" => ["説明会の時の先輩社員さんの印象や人柄がすごく良かったのが魅力でした。<br>入社して、ほぼ初めて東京に行くという点や、同期と仲良くなれるかと、いろいろと不安ではありましたが、研修期間中の生活棟での生活のおかげで、同期ともだいぶ仲良くなれましたし、入社前に思っていた不安は入ってみて、すぐに解消されました。"],
				],
			],
			"contents" => [
				[
					"q_num" => "2",
					"q_text" => "入社前、１年間の技術研修について、どんな印象でしたか？",
					"q_items" => [
						[
							"img" => [
								"path" => $images."people-03.jpg",
								"alt" => "",
							],
							"name" => "S.Y",
							"descs" => ["研修が手厚かったのが、他の会社と比べても魅力だと思っていました。"],
						],
						[
							"img" => [
								"path" => $images."people-02.jpg",
								"alt" => "",
							],
							"name" => "R.S",
							"descs" => ["応募した時に見た求人の内容が、メンテナンス中心のことが書かれていたこともあり、入社するまでメンテナンスの会社だと思っていました。<br>ビルメンテナンスの会社にしては、研修期間が１年もあって「長いな～」とは思っていたのですが（笑）"],
						],
						[
							"img" => [
								"path" => $images."people-01.jpg",
								"alt" => "",
							],
							"name" => "T.Y",
							"descs" => ["たしかに、「１年やるんだ」と長い印象ではありましたね。<br>仕事についていけるか不安もあったので、配属前に学べる機会があるのは良い印象でした。"],
						],
					],
				]
			],
			"lower_pic" => [
				"path" => $images."img-02.jpg",
				"alt" => "",
			]
		]); ?>
		<?php get_template_part(CROSSTALK_SECTION, null, [
			"hd" => "１年間の技術者研修について",
			"q_num" => "3",
			"q_text" => "研修ではどんなことを学びましたか？",
			"q_img" => [
				"path" => $images."img-03.jpg",
				"alt" => "",
			],
			"q_items" => [
				[
					"img" => [
						"path" => $images."people-03.jpg",
						"alt" => "",
					],
					"name" => "S.Y",
					"descs" => ["習うこと全てが今まで触れたことも見たこともない内容だったので、現場に配属されるまでに、いろいろ覚えないとという気持ちでした。"],
				],
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "T.Y",
					"descs" => ["建物の構造とか、裏側がどうなっているとか、初めて知ることが多かったです。<br>ビルの上にあるタンクとか、なんとなく存在は知っていたけど、研修を受けるまで、何のためにあるかとか知らなかったですね。"],
				],
				[
					"img" => [
						"path" => $images."people-02.jpg",
						"alt" => "",
					],
					"name" => "R.S",
					"descs" => ["建物構造や制御の仕組みなどを座学で学んだり、現場で扱う機器の使い方などの実技講習もあります。<br>あと、現場に出るために必要な資格があるので、１年研修の中で、みんな資格取得をします。"],
				],
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "T.Y",
					"descs" => ["支店での現場研修の期間があるのですが、その時に、座学で学んだことや、資料で見ていた機械室などを実際に見れた時のことは、すごく印象に残っています。"],
				],
			],
			"contents" => [
				[
					"q_num" => "4",
					"q_text" => "研修期間中、大変だと感じたことはありますか？",
					"q_items" => [
						[
							"img" => [
								"path" => $images."people-03.jpg",
								"alt" => "",
							],
							"name" => "S.Y",
							"descs" => ["移動が多いのが、結構大変でしたね。<br>3月に地元から東京に引っ越して、7月から４ヶ月は現場研修で支店に行き、また３ヶ月東京に戻って、２回目の現場研修で違う支店に２ヶ月行ってと、何度も引っ越すので、それが結構ハードに感じました。"],
						],
						[
							"img" => [
								"path" => $images."people-01.jpg",
								"alt" => "",
							],
							"name" => "T.Y",
							"descs" => ["数ヶ月単位で場所が移るので、その都度、引越しをするのは、たしかに忙しいと感じましたね。"],
						],
						[
							"img" => [
								"path" => $images."people-02.jpg",
								"alt" => "",
							],
							"name" => "R.S",
							"descs" => ["座学で、分からないこともたくさんありました。<br>１年間って長いなと最初は思っていましたが、１年間も研修しなきゃいけないと上が判断するくらい、知識が必要なんだなと理解できました。"],
						],
					],
				],
				[
					"q_num" => "5",
					"q_text" => "研修で得られた成果は何ですか？",
					"q_items" => [
						[
							"img" => [
								"path" => $images."people-01.jpg",
								"alt" => "",
							],
							"name" => "T.Y",
							"descs" => ["同期と仲良くなれたことですね。最初不安だったのですが、１年間でだいぶ仲良くなれました。"],
						],
						[
							"img" => [
								"path" => $images."people-02.jpg",
								"alt" => "",
							],
							"name" => "R.S",
							"descs" => ["私も、同期と仲良くなれたことが一番大きいと感じています。<br>東京での研修も、支店での研修も、慣れない土地で過ごす上で、孤独にならないか不安でしたが、同期が話相手や遊び相手になってくれました。"],
						],
						[
							"img" => [
								"path" => $images."people-03.jpg",
								"alt" => "",
							],
							"name" => "S.Y",
							"descs" => ["支店研修に行って、配属前に実際に現場に連れて行ってもらえたのは良い機会でした。<br>あと、支店研修は、配属先の希望を出して、極力、希望に沿って振り分けてもらえるので、２年目に自分が配属される予定の支店の雰囲気や、先輩たちと触れ合えて、心の準備もできたので良かったです。"],
						],
						[
							"img" => [
								"path" => $images."people-02.jpg",
								"alt" => "",
							],
							"name" => "R.S",
							"descs" => ["あと、現場で仕事をする上で必要な基礎知識は学べました。<br>例えば、配線を繋ぐための図面の読み方とか、入社して初めて知りましたが、これから現場で確実に必要になってくる知識の１つです。"],
						],
					],
				],
			],
			"lower_pic" => [
				"path" => $images."img-04.jpg",
				"alt" => "",
			]
		]); ?>
		<?php get_template_part(CROSSTALK_SECTION, null, [
			"hd" => "研修を終え、現場に配属になって",
			"q_num" => "6",
			"q_text" => "配属が決まり、これから、どんな仕事をされる予定ですか？",
			"q_img" => [
				"path" => $images."img-05.jpg",
				"alt" => "",
			],
			"q_items" => [
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "T.Y",
					"descs" => ["施工管理で先輩と同じ現場に入る予定です。ただ、いつでも仕事を任せてもらえるように準備をしています。今は、積極的に何でも挑戦していく心づもりです。"],
				],
				[
					"img" => [
						"path" => $images."people-03.jpg",
						"alt" => "",
					],
					"name" => "S.Y",
					"descs" => ["先輩と一緒に現場を経験し、徐々に自分の担当を受け持つ予定です。<br>まだ配属されて２ヶ月ですが、現場に立ってみて、既に研修時期とのギャップを感じています。<br>知識を教えてもらえていた研修と違い、現場では、分からないことは自分から教えてもらいに行かなければならないので、受け身ではいられません。<br>また、１年上の先輩は、自分の担当を持っているのですが「私も１年でこうならないと」と少し焦る部分もあります。"],
				],
				[
					"img" => [
						"path" => $images."people-02.jpg",
						"alt" => "",
					],
					"name" => "R.S",
					"descs" => ["私も同じように、来年、１つ上の先輩と同じレベルになれているかと想像すると、今は、とにかく先輩に付いて場数を踏まないといけないという気持ちになります。<br>私は配属されて、担当をいくつか持たされていますが、まだ１人で現場は難しいレベルです。"],
				],
			],
			"contents" => [
				[
					"q_num" => "7",
					"q_text" => "これからの意気込みを教えてください",
					"q_items" => [
						[
							"img" => [
								"path" => $images."people-03.jpg",
								"alt" => "",
							],
							"name" => "S.Y",
							"descs" => ["早くも知識面、技術面で足りていないことだらけだと感じているので、いろんな現場に行って経験を積んでいきたいと思います。<br>どんな現場にも学ぶべきことがあるので、行く場所それぞれで最大限に学んで、できることを増やしていく。"],
						],
						[
							"img" => [
								"path" => $images."people-01.jpg",
								"alt" => "",
							],
							"name" => "T.Y",
							"descs" => ["まだ分からないことの方が多いけど、分からないからといって消極的になってしまっては機会が減ってしまうので、ビビらずに積極的にチャレンジしていって成長したいです。　"],
						],
						[
							"img" => [
								"path" => $images."people-02.jpg",
								"alt" => "",
							],
							"name" => "R.S",
							"descs" => ["この仕事は、一般の人には浸透していないマイナーな仕事です。<br>建物環境について、普段の生活で人々が気にしていないということは、逆に、私たちの仕事が上手くいっているということだと思っています。<br>表立って目立つ仕事ではありませんが、縁の下の力持ちとして、社会を支えていきたい。"],
						],
					],
				],
			],
			"lower_pic" => [
				"path" => $images."img-06.jpg",
				"alt" => "",
			]
		]); ?>
		<?php get_template_part(CROSSTALK_SECTION, null, [
			"hd" => "後輩へのメッセージ",
			"q_num" => "8",
			"q_text" => "研修期間の過ごし方へのアドバイスはありますか？",
			"q_img" => [
				"path" => $images."img-07.jpg",
				"alt" => "",
			],
			"q_items" => [
				[
					"img" => [
						"path" => $images."people-03.jpg",
						"alt" => "",
					],
					"name" => "S.Y",
					"descs" => ["入社したての時期は、研修が座学の期間となるので、大学の授業の延長のような気持ちになりがちなのですが、仕事をする上で知っておくべき知識が多いので、しっかり切り替えて取り組んだ方がいいです。<br>これから現場で使う知識なので、実技も含め、しっかり理解しながら勉強をする研修期間にしてもらいたいです。"],
				],
				[
					"img" => [
						"path" => $images."people-02.jpg",
						"alt" => "",
					],
					"name" => "R.S",
					"descs" => ["同期と一緒に過ごせる貴重な１年となるので、勉強もしつつではありますが、同期との時間を大切に。２年目以降は、バラバラの支店で個々に頑張らなければならないので、悔いが残らない１年間にしてもらいたいです。"],
				],
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "T.Y",
					"descs" => ["同期ももちろんですが、２か所の支店研修もあるので、いろんな人と関われる機会でもあるので、積極的に多くの人と話して欲しい。<br>支店配属後は、その支店の人と関わることがほとんどになってしまうので、この機会に繋がりを多く作るのがおすすめです。"],
				],
			],
			"contents" => [
				[
					"q_num" => "9",
					"q_text" => "就活中の後輩へのメッセージをお願いします",
					"q_items" => [
						[
							"img" => [
								"path" => $images."people-01.jpg",
								"alt" => "",
							],
							"name" => "T.Y",
							"descs" => ["未経験、知識がないのは、みんな同じです。<br>難しく考えて、一歩踏み込めなくなる方が勿体ないので、積極的にチャレンジしてみてください。"],
						],
						[
							"img" => [
								"path" => $images."people-02.jpg",
								"alt" => "",
							],
							"name" => "R.S",
							"descs" => ["就職活動中、いろいろと悩む時期だと思いますが、悔いが残らないように就活して欲しい。<br>オーテックは、現場の担当は、喋る機会が多いので、特にコミュニケーションが好きな人に合っています。"],
						],
						[
							"img" => [
								"path" => $images."people-03.jpg",
								"alt" => "",
							],
							"name" => "S.Y",
							"descs" => ["オーテックは、研修期間の長さと福利厚生の充実さが魅力的です。<br>また、就職したら、みんなスタートラインは同じところから始まります。<br>オーテックは、知識ゼロ、経験ゼロでも、安心して学べる環境があるので、学生時代の経験を気にしたり、文系理系も関係なく入ってきても大丈夫です。"],
						],
					],
				],
			],
			"lower_pic" => [
				"path" => $images."img-08.jpg",
				"alt" => "",
			]
		]); ?>

		<section class="m-other-links">
			<div class="l-cont">
				<?php get_template_part(TYPO, null, [
					"component" => "h2",
					"class_change" => "h3",
					"text" => "他のクロストークを見る",
				]); ?>
				<div class="m-other-links__row">
					<div class="m-other-links__cards">
						<?php
							$item = $crosstalks[1];
						?>
						<a href="../crosstalk-2/" class="m-other-links__card-cross anm-hover">
							<?php get_template_part(PICTURE, null, [
								"path" => "cms/cross-02-mv.jpg",
								"alt" => "",
								"variable" => "fp-cross__pic",
								"type" => "pill",
								"hover" => "scale",
							]); ?>
							<div class="m-other-links__card-cross__text">
								<p class="m-other-links__card-cross__num"><?= $item["num"] ?></p>
								<div class="m-other-links__card-cross__body">
									<p class="m-other-links__card-cross__hd"><?= $item["hd"] ?></p>
									<div class="m-other-links__card-cross__row">
										<?php get_template_part(TYPO, null, [
											"text" => $item["cross"][0],
											"font" => "yugo",
											"weight" => "bold",
											"size" => "fs-14"
										]); ?>
										<?php get_template_part(TYPO, null, [
											"text" => "×",
											"font" => "yugo",
											"weight" => "bold",
											"size" => "fs-14"
										]); ?>
										<?php get_template_part(TYPO, null, [
											"text" => $item["cross"][1],
											"font" => "yugo",
											"weight" => "bold",
											"size" => "fs-14"
										]); ?>
									</div>
								</div>
							</div>
						</a>
						<?php
							$item = $crosstalks[2];
						?>
						<a href="../crosstalk-3/" class="m-other-links__card-cross anm-hover">
							<?php get_template_part(PICTURE, null, [
								"path" => "cms/cross-03-mv.jpg",
								"alt" => "",
								"variable" => "fp-cross__pic",
								"type" => "pill",
								"hover" => "scale",
							]); ?>
							<div class="m-other-links__card-cross__text">
								<p class="m-other-links__card-cross__num"><?= $item["num"] ?></p>
								<div class="m-other-links__card-cross__body">
									<p class="m-other-links__card-cross__hd"><?= $item["hd"] ?></p>
									<div class="m-other-links__card-cross__row">
										<?php get_template_part(TYPO, null, [
											"text" => $item["cross"][0],
											"font" => "yugo",
											"weight" => "bold",
											"size" => "fs-14"
										]); ?>
										<?php get_template_part(TYPO, null, [
											"text" => "×",
											"font" => "yugo",
											"weight" => "bold",
											"size" => "fs-14"
										]); ?>
										<?php get_template_part(TYPO, null, [
											"text" => $item["cross"][1],
											"font" => "yugo",
											"weight" => "bold",
											"size" => "fs-14"
										]); ?>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="m-other-links__btn">
						<?php get_template_part(BUTTON, null, [
							"href" => URL_CROSSTALK,
							"text" => "ALL CROSS TALK",
							"font" => "en",
							"hover" => "text-forward-reserve",
							"arrow_hover" => "forward-reserve",
							"variable" => "justify-between md:justify-center",
						]); ?>
					</div>
				</div>
			</div>
		</section>
	</div>
</article>
<?php get_footer(); ?>