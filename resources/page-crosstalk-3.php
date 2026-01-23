<?php
	$p = $crosstalks[2];
	$page_title = ["女性社員の本音トーク オーテックは働きやすい？", NAME_CROSSTALK];
	$page_desc = "";
	$page_canonical = URL_CROSSTALK."crosstalk-2/";
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
				"main" => "社歴も職種も異なる女性社員座談会",
				"desc" => "オーテックは、長く働いていける会社として、自己成長の機会やライフワークバランスのための制度など、働きやすさ向上に取り組んでいます。入社4年の若手メンバーから20年弱のメンバーまで、オーテックの働きやすさについて、それぞれの視点で語ってもらいました。",
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
								"name" => "M.U",
								"entry" => "2010",
								"school" => "生活環境学科",
							],
							[
								"dept" => "環境システム事業部",
								"name" => "K.T",
								"entry" => "2006",
								"school" => "社会学部社会学科",
							],
							[
								"dept" => "環境システム事業部",
								"name" => "N.K",
								"entry" => "2020",
								"school" => "理学部数物科学科",
							],
							[
								"dept" => "管理本部",
								"name" => "M.H",
								"entry" => "2005",
								"school" => "人間環境学部",
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
							<?php if(!empty($item["school"])): ?>
							<p class="p-crosstalk__people__school"><?= $item["school"] ?>卒</p>
							<?php endif; ?>
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
			"hd" => "キャリアについて",
			"q_num" => "1",
			"q_text" => "これまでのオーテックでの経歴について教えてください",
			"q_img" => [
				"path" => $images."img-01.jpg",
				"alt" => "",
			],
			"q_items" => [
				[
					"img" => [
						"path" => $images."people-04.jpg",
						"alt" => "",
					],
					"name" => "M.H",
					"descs" => ["2005年に一般職での入社で、入社時から人事課に所属しています。<br>最初は、採用まわりを担当させてもらっていましたが、2020年頃から、研修についても担当をさせてもらっています。"],
				],
				[
					"img" => [
						"path" => $images."people-03.jpg",
						"alt" => "",
					],
					"name" => "N.K",
					"descs" => ["2020年に総合職として入社しました。<br>1年間研修を経て、今は工事の現場を受け持ち施工管理の業務を行なっています。"],
				],
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "M.U",
					"descs" => ["2010年入社です。入社して4年間は技術部にいたため、現場に出ていました。<br>その後、営業に異動になり、現在に至ります。"],
				],
				[
					"img" => [
						"path" => $images."people-02.jpg",
						"alt" => "",
					],
					"name" => "K.T",
					"descs" => ["2006年に一般職で入社し、工事課の所属としてCADで図面を描いたり書類を作成を担当していましたが、現在はエンジニアリング部に配属されています。"],
				],
			],
			"contents" => [
				[
					"q_num" => "2",
					"q_text" => "どんなきっかけで、社内でのキャリアチェンジを経験されましたか?",
					"q_items" => [
						[
							"img" => [
								"path" => $images."people-04.jpg",
								"alt" => "",
							],
							"name" => "M.H",
							"descs" => ["部署や職種は、人事から変わっていないのですが、2017年に一般職から総合職に、コース転換をしました。<br>当時は、仕事にも慣れて「もっと仕事を頑張りたい」という想いが強かった時期で、ちょうどコース転換の制度ができた時に、<span class='o-typo__bold'>「いいチャンスだな」</span>と思って挑戦しました。<br>一般職から総合職になったことで、一般職では、サポート的な業務内容が多かったのですが、総合職になって、大きなタスク自体を任されるようになり、やりがいや責任も増しましたね。"],
						],
						[
							"img" => [
								"path" => $images."people-02.jpg",
								"alt" => "",
							],
							"name" => "K.T",
							"descs" => ["私も、今年、一般職から総合職に転換しました。<br>総合職に挑戦しようと思ったのは、仕事の幅を広げたいと思ったからです。<br>前に、社内の<span class='o-typo__bold'>「働き方改革」</span>のプロジェクトメンバーに入れてもらったのですが、その時、色々な立場の人とプロジェクトをこなした経験から、<span class='o-typo__bold'>「自分にも、もっとやれることがある」</span>と強く感じ、仕事の幅を広げたいと思うようになりました。"],
						],
						[
							"img" => [
								"path" => $images."people-01.jpg",
								"alt" => "",
							],
							"name" => "M.U",
							"descs" => ["技術職を４年経験し<span class='o-typo__bold'>「営業をやってみないか」</span>と声をかけていただいたことがきっかけです。<br>学生時代は建築系の専攻だったということもあり、この業界に興味を持って入社したので、営業をやるとは思っていなかったのですが。<br>せっかく声をかけてもらえたので、やらずに断るのもなと思い、挑戦してみようと営業に異動を決めました。"],
						],
					]
				],
				[
					"q_num" => "3",
					"q_text" => "これからのキャリアの目標を教えてください",
					"q_items" => [
						[
							"img" => [
								"path" => $images."people-04.jpg",
								"alt" => "",
							],
							"name" => "M.H",
							"descs" => ["入社して、ずっと人事の部署でやってきたので、これからも社員にとって働きやすい会社を作っていくことに貢献したいです。<br>これまでの経験から、会社にとって利益になるのかメリットになるのか、よく考えるようになったので、会社と社員の双方にとって、良い組織づくりをしていけたらなと思っています。"],
						],
						[
							"img" => [
								"path" => $images."people-02.jpg",
								"alt" => "",
							],
							"name" => "K.T",
							"descs" => ["いま、総合職になったことで、レベルアップしていきたいという気持ちが強いです。<br>先日、仕事の幅を広げるために、計装士２級の試験を受けたのですが、もともと文系出身ということもあり、計算など忘れてしまっていて、算数からやり直すくらい勉強をしました（笑）<br>まだ図面を描くところまでしかできないので、知識をつけ、できることを広げていきたいです。"],
						],
						[
							"img" => [
								"path" => $images."people-01.jpg",
								"alt" => "",
							],
							"name" => "M.U",
							"descs" => ["私が営業している保守メンテナンスのサービスは会社の財産となっていく重要な商品です。継続しているお客様との信頼関係を築くことと、当社の施工後も保守メンテナンスという形で関わっていけるように新規獲得していきたいです。<br>この春から、課長代理という立場に上がり、チームを引っ張っていくことも期待されていますが、肩肘張らずにキャリアを積んでいけたらと思います。"],
						],
						[
							"img" => [
								"path" => $images."people-03.jpg",
								"alt" => "",
							],
							"name" => "N.K",
							"descs" => ["自動制御は現場ごとに内容が異なり、新しい監視装置も出てきているため、覚えることがたくさんありますが、勉強や経験を通して少しずつできることが増えてきたと感じています。<br>今後は、VE案を自分で考える、システム検討をするなど、一人でできることを増やしていきたいです。"],
						],
					],
				],
			],
			"lower_pic" => [
				"path" => $images."img-02.jpg",
				"alt" => "",
			]
		]); ?>
		<?php get_template_part(CROSSTALK_SECTION, null, [
			"hd" => "ワークライフバランスについて",
			"q_num" => "4",
			"q_text" => "ライフステージが変わるに連れ、働き方はどう変化しましたか？",
			"q_img" => [
				"path" => $images."img-03.jpg",
				"alt" => "",
			],
			"q_items" => [
				[
					"img" => [
						"path" => $images."people-02.jpg",
						"alt" => "",
					],
					"name" => "K.T",
					"descs" => ["子どもが生まれるまでは<span class='o-typo__bold'>「終わらなければ残業すればいい」</span>と思ってやっていたけど、育児休暇から復帰後は、保育園のお迎え時間までに絶対に帰らないといけないというリミットができたため、残業ができず、毎日時間との戦いで必死でしたよ（笑）<br>今でこそ、働き方改革で会社全体としても残業が少なくなっていますが、当時は残業する人も多く、正直、ちょっと肩身が狭かった。<br>でも、今は環境が追いついてきて、帰れますし、休暇も取りやすい環境になりました。まわりも子育てしている人も増えていて、私の所属する部署でも２人が育児休暇中です。"],
				],
				[
					"img" => [
						"path" => $images."people-04.jpg",
						"alt" => "",
					],
					"name" => "M.H",
					"descs" => ["昔は、そうだったよね〜。わかる。", "私は子育ての兼ね合いで時差出勤をしていますが、同じように、過去に自分がどれだけ残業をしていたかを実感しています。<br>考えることも多い仕事だけど、悩んでいる時間がもったいないので、時間を決めてメリハリをつけるようになりました。", "私も同じ部署に子育て中のメンバーが多いので、情報共有や悩み相談ができるので心強いです。"],
				],
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "M.U",
					"descs" => ["私は育児休暇から復帰後、時短勤務で働いています。<br>出産前と比べると、時間の使い方について<span class='o-typo__bold'>「いかに凝縮させるか」</span>という気持ちで取り組むようになりました。<br>部署内でもフォローし合えていますが、人数が少ない部署でもあるので、営業は担当先が決まっているという点で、自分の仕事はしっかりコントロールするように意識しています。"],
				],
			],
			"contents" => [
				[
					"q_num" => "5",
					"q_text" => "ライフワークバランスは取れていますか？",
					"q_items" => [
						[
							"img" => [
								"path" => $images."people-04.jpg",
								"alt" => "",
							],
							"name" => "M.H",
							"descs" => ["働き方については、まだ復帰したばかりなので模索中ですが、子育てに関する制度はフル活用しています。<br>産休育休、時差出勤、状況に応じて在宅ワークを認めるなど、会社も仕事と家庭の両立を考えて、年々、制度を見直してくれている感じはあります。"],
						],
						[
							"img" => [
								"path" => $images."people-03.jpg",
								"alt" => "",
							],
							"name" => "N.K",
							"descs" => ["男性の育休取得率も高く感じます。私の同期も取得していました。<br>あと、子育てとは関係ありませんが、会社全体として休みやすい雰囲気はあると思います。<br>私の上司も、率先して有給を使って休んでいるので、おかげで私たちも休みを取りやすいです。<br>休日出勤した時も<span class='o-typo__bold'>「きちんと代休を取るように」</span>という課の方針なので、しっかり休まされます。"],
						],
						[
							"img" => [
								"path" => $images."people-01.jpg",
								"alt" => "",
							],
							"name" => "M.U",
							"descs" => ["家庭と仕事をちゃんと切り替えて、両立できています。<br>時短勤務の制度が小学校入学前まで伸びたおかげもあります。<br>もともと、子どもが３歳になるまでは時短勤務が認められていましたが、会社が社員の要望を吸い上げる機会を作っていて、その要望の中に<span class='o-typo__bold'>「時短勤務制度の期間を延ばしてほしい」</span>という意見があり、それを実現してくれました。"],
						],
						[
							"img" => [
								"path" => $images."people-02.jpg",
								"alt" => "",
							],
							"name" => "K.T",
							"descs" => ["私が時短出勤をしていた時は３歳まででしたよ。"],
						],
						[
							"img" => [
								"path" => $images."people-01.jpg",
								"alt" => "",
							],
							"name" => "M.U",
							"descs" => ["そう、国の法制度だと、今の育児短時間勤務は３歳未満の子供が対象みたいです。<br>小学校入学までに延ばすという検討はされているみたいなのですが、会社はそれを見越して、時短勤務の期間を延ばすという決定をしてくれました。"],
						],
						[
							"img" => [
								"path" => $images."people-04.jpg",
								"alt" => "",
							],
							"name" => "M.H",
							"descs" => ["社員の働きやすさのために制度を拡充してくれているのは、感じるよね。"],
						],
						[
							"img" => [
								"path" => $images."people-02.jpg",
								"alt" => "",
							],
							"name" => "K.T",
							"descs" => ["本当に働きやすくなっていってると思う。<br>いま私は、家庭の協力のおかげでフルタイムで働けていますが、できれば、もう少しテレワークが許容されると更に嬉しいかな。<br>子育ての都合で午後に予定がある日は、休まざるを得ない時があるのだけど、実際は午前中は稼働できる状態だったりすることが多くて、せっかく会社に貢献できるのに勿体無いなと。"],
						],
						[
							"img" => [
								"path" => $images."people-04.jpg",
								"alt" => "",
							],
							"name" => "M.H",
							"descs" => ["あぁ、それなら、私も時差出勤の時間をもう少し早くしてもらえると、もっと働きやすくなる。"],
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
			"hd" => "オーテックの働きやすさについて",
			"q_num" => "6",
			"q_text" => "業界特有と言えるような働く環境の特長はありますか？",
			"q_img" => [
				"path" => $images."img-05.jpg",
				"alt" => "",
			],
			"q_items" => [
				[
					"img" => [
						"path" => $images."people-03.jpg",
						"alt" => "",
					],
					"name" => "N.K",
					"descs" => ["施工管理は、もともと1人１現場という配置なので、例えばライフイベントによって休暇をいただくことになった際に、長期の現場だと、引き継ぎ等がちょっと心配ですね。<br>現場の負担についてはまだまだ課題がありますが、２名体制の検討など見直しをしようという 動きはあります。"],
				],
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "M.U",
					"descs" => ["やはり男性が多い仕事ではありますね。<br>ただ、私が現場に出ている時に比べて、少しずつ女性が増えてきているように感じます。"],
				],
				[
					"img" => [
						"path" => $images."people-03.jpg",
						"alt" => "",
					],
					"name" => "N.K",
					"descs" => ["そうですね。<br>男性の方が全体的には多いですが、女性も増えていると感じますよ。現場でよく見かけます。<br>大きな現場に行くと、女性専用の休憩室や更衣室など、環境もきちんと別れています。"],
				],
				[
					"img" => [
						"path" => $images."people-04.jpg",
						"alt" => "",
					],
					"name" => "M.H",
					"descs" => ["会社は<span class='o-typo__bold'>「女性管理職を増やしていこう」</span>という方針はありますが、まだまだ多くないですね。<br>男性管理職がパワフルに働いていて、真似できないなと思ってしまうことも（笑）", "会社として、いろいろな改革を行なっていて、これまで無かったことを試しているので、いまからロールモデルをつくっていく必要がある。<br>人事としては、男女関係なく未来の若手が安心して働けるようにしていきたいです。"],
				],
			],
			"contents" => [
				[
					"q_num" => "7",
					"q_text" => "オーテックの働きやすさについて、これから働く人に何がオススメできますか？",
					"q_items" => [
						[
							"img" => [
								"path" => $images."people-04.jpg",
								"alt" => "",
							],
							"name" => "M.H",
							"descs" => ["ライフイベントによってキャリアが中断される、ということは無いので、長く働きやすいなと思っています。"],
						],
						[
							"img" => [
								"path" => $images."people-01.jpg",
								"alt" => "",
							],
							"name" => "M.U",
							"descs" => ["女性への理解促進の研修を男性管理職に実施していたりと、会社として女性に働き続けて欲しいんだろうな、というメッセージを受け取れています。<br>あと、社員の声にちゃんと耳を傾けてくれる会社なので、抱えている悩みも言いやすいし、むしろ「言って欲しい」と言われるくらいです。"],
						],
						[
							"img" => [
								"path" => $images."people-02.jpg",
								"alt" => "",
							],
							"name" => "K.T",
							"descs" => ["会社が、働く環境を整えようとしているのが、よく伝わってきます。<br>上の立場の方が率先して、女性についての理解を深めてくれていて、安心して働けています。"],
						],
						[
							"img" => [
								"path" => $images."people-03.jpg",
								"alt" => "",
							],
							"name" => "N.K",
							"descs" => ["働き方改革を行っていて、社員一人一人が働きやすい環境にしたいという想いが伝わります。<br>私の部署だと女性が少ないだけに、現場での女性視点での悩みがあったら伝えるようにしています。<br>そこに対して、上司も動いてくれますし、上層部も試行錯誤してくれるのを感じます。"],
						],
					]
				]
			],
			"lower_pic" => [
				"path" => $images."img-06.jpg",
				"alt" => "",
			]
		]); ?>
		<?php get_template_part(CROSSTALK_SECTION, null, [
			"hd" => "後輩へのメッセージ",
			"q_num" => "8",
			"q_text" => "これから一緒に働く後輩へ、メッセージをお願いします",
			"q_img" => [
				"path" => $images."img-07.jpg",
				"alt" => "",
			],
			"q_items" => [
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "M.U",
					"descs" => ["会社が変わろうとしていて、社員の声がどんどん反映されていくのが感じられます。<br>まだまだ伸び代があるので、「これから、もっといい会社にしていく」という気持ちで入ってきてもらえると嬉しいです。"],
				],
				[
					"img" => [
						"path" => $images."people-03.jpg",
						"alt" => "",
					],
					"name" => "N.K",
					"descs" => ["この仕事は、専門的な分野だという点が楽しい部分だと思っています。<br>そして、国の施策も含め、業界全体としても変わってきているのを実感します。<br>会社も、いまの時代にあった働き方を模索しているので、一緒に<span class='o-typo__bold'>「これからの働き方」</span>を作っていければと思います。"],
				],
				[
					"img" => [
						"path" => $images."people-02.jpg",
						"alt" => "",
					],
					"name" => "K.T",
					"descs" => ["頑張ろうという意欲に応えてくれる上司がいます！<br>文系だった私も、専門知識が必要な資格を取ることができました(笑)<br>会社自体、これからの時代に合わせた働き方を探している最中です。<br>結婚してもママになっても安心して働ける職場づくりを一緒に考えていければいいなと思います。"],
				],
				[
					"img" => [
						"path" => $images."people-04.jpg",
						"alt" => "",
					],
					"name" => "M.H",
					"descs" => ["働きやすさをつくっていく発展途上にあり、まだ完成しきれていないですが、会社はすごく柔軟で、新しい制度もどんどんできていっている状況です。<br>一緒に働きやすさをつくっていけたらと思っています。みんなの意見も沢山もらいたいです。"],
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
							$item = $crosstalks[0];
						?>
						<a href="../crosstalk-1/" class="m-other-links__card-cross anm-hover">
							<?php get_template_part(PICTURE, null, [
								"path" => "cms/cross-01-mv.jpg",
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