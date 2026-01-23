<?php
	$p = $crosstalks[1];
	$page_title = ["若手社員が社長に訊く　壁にぶつかった時の乗り越え方", NAME_CROSSTALK];
	$page_desc = "代表の市原は、新卒でオーテックに入社し、さまざまな部署や業務を経験し、現在のポジションにいます。現場のことも、会社のことも知っている代表に、若手社員が抱えている悩みを相談してみました。社会人になれば壁にぶつかることはありますが、そんな時の壁の乗り越え方のヒントを社長に訊いてみました。";
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
				"main" => "社長も、はじめは新卒だった",
				"desc" => "代表の市原は、新卒でオーテックに入社し、さまざまな部署や業務を経験し、現在のポジションにいます。現場のことも、会社のことも知っている代表に、若手社員が抱えている悩みを相談してみました。社会人になれば壁にぶつかることはありますが、そんな時の壁の乗り越え方のヒントを社長に訊いてみました。",
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
								"dept" => "代表取締役社長",
								"name" => "社長",
								"entry" => "1980",
								"school" => "",
							],
							[
								"dept" => "管工機材事業部",
								"name" => "A.O",
								"entry" => "2022",
								"school" => "経営学科",
							],
							[
								"dept" => "環境システム事業部",
								"name" => "C.K",
								"entry" => "2020",
								"school" => "工学部生命化学科",
							],
							[
								"dept" => "管工機材事業部",
								"name" => "H.I ",
								"entry" => "2017",
								"school" => "経営学部経営学科",
							],
							[
								"dept" => "環境システム事業部",
								"name" => "N.Y",
								"entry" => "2019",
								"school" => "文学部",
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
			"hd" => "メンタルのコントロール",
			"q_num" => "1",
			"q_text" => "気持ちの切り替え方について",
			"q_img" => [
				"path" => $images."img-01.jpg",
				"alt" => "",
			],
			"q_items" => [
				[
					"img" => [
						"path" => $images."people-02.jpg",
						"alt" => "",
					],
					"name" => "A.O",
					"descs" => ["業務でミスをしたり、お客様からお叱りを受けた時に、1日、憂鬱な気分になってしまいます。<br>社長は、そんな時、どうやって気持ちを切り替えていましたか？"],
				],
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "社長",
					"descs" => [
						"自分にミスがあった時には、もちろん人間だから反省して落ち込んだりもしたけど、落ち込む気持ちよりも「解決しなきゃ」という気持ちを優先して、解決することに目線を持っていくと、早く気持ちを切り替えられますよ。",
						"私のところには、会社で起こったトラブルの話が上がってくるのだけど、それを聞くと一瞬、「えーっ」って気持ちにはなるけど、怒ったり、落ち込んだりしても解決しないので、「まず解決しましょ」という思考で動くようにしています。<br>そこで、私が何か言っても、みんなが本音を話し辛くなっちゃいますし。",
						"「この状況をどう解決しましょうか」と、みんなの気持ちを問題が起こっちゃったマイナス思考から、「解決する」というプラス思考に持っていくようにします。<br>モチベーションが上がるわけではないけどね（笑）",
						"解決した後で、振り返りながら原因だったり対策と向き合えばいいんです。",
					],
				],
			],
			"contents" => [
				[
					"q_num" => "2",
					"q_text" => "苦手なお客様との付き合い方",
					"q_items" => [
						[
							"img" => [
								"path" => $images."people-02.jpg",
								"alt" => "",
							],
							"name" => "A.O",
							"descs" => ["あと、お客様によっては、コミュニケーションが上手くいかないこともあったりして、悩んでいます。"],
						],
						[
							"img" => [
								"path" => $images."people-01.jpg",
								"alt" => "",
							],
							"name" => "社長",
							"descs" => [
								"私も現場にいた時は、よくお客さんから叱られていたな〜（笑）<br>苦手なお客さんもいましたよ。",
								"人によっては、合う合わないがあるから、どうしても合わない人は、「こういう人もいる」と、少し俯瞰してみると、落ち着いて対応できますよ。",
								"合わない人がいると、避けたくもなっちゃうんだけど、仕事なので、どうしても付き合っていかないといけなかったりもしますよね。<br>そういう時は「どう付き合っていくか」という思考に転換してみるといい。",
								"どんな人でも、何か、きっかけがあったりするものです。<br>得意そうな先輩を捕まえて一緒に対応するとか、自分からコミュニケーションを増やしていってみるとか、いろんなやり方を試してみるんです。<br>攻略が難しい人ほど、攻略できた時に、嬉しいじゃないですか。それに自分の自信にもつながります。",
							],
						],
						[
							"img" => [
								"path" => $images."people-02.jpg",
								"alt" => "",
							],
							"name" => "A.O",
							"descs" => ["ありがとうございます。実践してみたいと思います。"],
						],
						[
							"img" => [
								"path" => $images."people-01.jpg",
								"alt" => "",
							],
							"name" => "社長",
							"descs" => [
								"まわりの先輩とかに、相談してる？<br>先輩に「こんなことがあったんですよ」って言うことで、自分の気持ちを落ち着かせると、次の行動も起こしやすくなるし、助けてももらえますよ。",
								"やっぱり一番は、吐き出すこと。<br>困っていること、悩んでいることは、発信すれば、まわりが助けてくれる。<br>同じ会社だし、部署の人がみんなが味方だと思えば、悩んでいることも共有していくことで楽になりますよ。",
								"相談がしやすい社内環境づくりは、プロジェクトや研修を実施して、会社としてチカラを入れて作っている所だけど、私より、みんなの方が、この先オーテックで長く働いていくので、もっと良い環境を目指して一緒に作っていってもらえるといいと思います。",
							],
						],
					]
				],
			],
			"lower_pic" => [
				"path" => $images."img-02.jpg",
				"alt" => "",
			]
		]); ?>
		<?php get_template_part(CROSSTALK_SECTION, null, [
			"hd" => "仕事の幅やスキルの広げ方",
			"q_num" => "3",
			"q_text" => "もっと仕事をこなせるようになるには",
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
					"name" => "C.K",
					"descs" => ["いま、現場で施工管理の仕事をしているのですが、現場にいると、どうしてもスケジュールが流動的になることがあります。私の場合、急なタスクが入ってきたりすると、当初予定していたスケジュールが崩れてしまいがちでして。<br>仕事の優先順位づけやコントロールについて、社長は当時、どのように対応されていましたか？"],
				],
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "社長",
					"descs" => [
						"私が工事を担当している当時も、そうでしたよ。<br>日々、突発的なことも入ってくるけど、全体の期日は変わらないので、どうにか時間のやりくりをしなければいけませんよね。",
						"言われるがままに全て受け止めていると回らなくなっちゃうから、一旦、自分の状況について説明していいと思います。<br>それは社内でも社外でも同じだと思っていて、まずは、こちらの状況を伝えること。<br>その上で「今日中にお願い」と頼まれた時に、そのまま受けるのではなく「もう1日もらえますか」と交渉のお願いをするといいですよ。",
						"例えば、交渉して半日もらえたら、自分が全部かかえるのではなく、社内に相談するという選択肢もできるし。自分で対応するにしても、いっぱいいっぱいで考える時間が無い中で受けるより、気持ちの余裕ができると物事を整理できて、仕事の質にも繋がる。",
						"あと、実は、社内の人に相談をしていると、お願いしやすい人とか、自分と相性がいい人が分かってくるので、だんだん自分のチャンネルが増えていって、自分が受けられる仕事の幅も広がるんですよ。そうなると、自分にも余裕が出来てきて、何か急なお願いをされても慌てないで冷静に整理ができるようになる。<br>そういう目線で、社内の人とも、一緒に仕事をするのを試していって、上手くいったことを広げていくといいですよ。",
						"何にも無い時に、仕事の幅を広げるって難しいから、困った時こそ自分でかかえないでまわりに頼ってみること。<br>自分が楽になれて、仕事の幅も広げられて、より多くの人と連携ができますよ。",
					]
				]
			],
			"contents" => [
				[
					"q_num" => "4",
					"q_text" => "現場でスキルアップするためにできること",
					"q_items" => [
						[
							"img" => [
								"path" => $images."people-03.jpg",
								"alt" => "",
							],
							"name" => "C.K",
							"descs" => ["技術的な問題に直面した時、先輩たちに聞いたら、すぐに答えをもらえるのですが、もっと自分がスキルアップをするためには、何か意識した方がいいことはありますか？"],
						],
						[
							"img" => [
								"path" => $images."people-01.jpg",
								"alt" => "",
							],
							"name" => "社長",
							"descs" => [
								"私も、現場で部下を持つようになった時に、部下に色々聞かれるもんだから、早急な自分のスキルアップが必要な状態の時があって。その時は、現場でありがちなトラブル集やQ&Aなどが載っているような本を買って、自分が困った時に助けになるアイテムを持つようにしていました。<br>それと、メーカーさんから新製品が出た時は、必ず講習会にいっていましたよ。分からないことは担当を捕まえて聞いたりも。",
								"いざという時に自分が困らないように、自分が何が弱いか、何を知らないかを把握しておくのが良いですよ。分かっていることがあれば、先回りして情報収集もできるし、現場が始まるまでの準備期間に勉強もできる。",
							],
						],
						[
							"img" => [
								"path" => $images."people-03.jpg",
								"alt" => "",
							],
							"name" => "C.K",
							"descs" => ["なるほど、その発想はありませんでした。"],
						],
						[
							"img" => [
								"path" => $images."people-01.jpg",
								"alt" => "",
							],
							"name" => "社長",
							"descs" => [
								"困ったり、課題がある時ほど人脈も広がるから、社外にも頼って、自分のチャンネルにしてしまうといい。<br>仕事って大変だけど、問題解決のために、新しいことを知ったり、出会いがあったりと、自分にプラスな要素がたくさんあるから、楽しんで取り組んでもらったら、スキルもどんどん上がっていきますよ。",
							],
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
			"hd" => "仕事との向き合い方",
			"q_num" => "5",
			"q_text" => "仕事の考え方や取り組み方をどうアップデートするか",
			"q_img" => [
				"path" => $images."img-05.jpg",
				"alt" => "",
			],
			"q_items" => [
				[
					"img" => [
						"path" => $images."people-04.jpg",
						"alt" => "",
					],
					"name" => "H.I",
					"descs" => ["社長は、30代40代で仕事に対する考え方が変わったり、悩まれたりしましたか？<br>いま、まわりに30代の先輩社員が少なく仕事への取り組み方や少し先のキャリアについて、どう描いていったらいいか悩んでいます。"],
				],
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "社長",
					"descs" => [
						"今の状況は、大変だと思うけど、ある意味チャンスだと思いますよ。<br>そんなに遠慮しなくても、上に気を使わずに何でもやれる環境があると思います。",
						"上司や先輩がいないと、自分で考えないといけないし、自分のところに仕事も降ってくるだろうから忙しいし大変なんだけど、自分がやれる範囲を広げるチャンスですよ。<br>そして、組織の上を目指すなら、はやく行ける可能性もあるし、自分のやれる範囲や権限も、交渉しやすい環境だと思います。",
						"ただ、「20代の成長」「30代の成長」、みたいな形で、枠にとらわれて欲しくなくて。<br>思うことがあれば発言も提案もして欲しいですし、みんなから、どんどん突き上げていって欲しいです。<br>新しいやり方の確立もぜんぜんありだと思いますし、現場の若手の意見を取り入れた議論が、もっと発生したら面白くなりますよ。",
					],
				],
				[
					"img" => [
						"path" => $images."people-04.jpg",
						"alt" => "",
					],
					"name" => "H.I",
					"descs" => ["たしかに、私の目線からも、まだまだ変えられるところがあると思っています。"],
				],
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "社長",
					"descs" => [
						"最前線にいる、みんなから声を上げて議論しないと、現場がその議論に到達するまでに何年もかかると思っています。",
						"声をあげたら、今度は、ルールを作る方に関われて、それを経験すれば、そのルールについては社内で一番詳しい人になれる。<br>作っている時は、自分の仕事とプラスアルファで、やらなきゃいけないことができるので、ちょっとだけ大変だけど、ルールを作る側になった方が絶対にいいです。",
						"これから、そういう姿を見て後輩が育っていくだろうし、関わりたいという後輩が出てきたら誘ってあげて、一緒に経験してほしい。<br>共通の経験や感覚が組織をもっと強くする。一緒にやったって経験は、すごい大切だから。",
					],
				],
				[
					"img" => [
						"path" => $images."people-04.jpg",
						"alt" => "",
					],
					"name" => "H.I",
					"descs" => ["わかりました。意識して声を上げてみたいと思います。"],
				],
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "社長",
					"descs" => [
						"今の延長線上ではダメで、会社も、もっと変われないといけない。<br>みんなが疑問に思うことがあれば、新鮮な気持ちで投げかけてもらいたいです。<br>それを受け止められる組織にしていきます。",
						"みんなは、これからどんどんいろんなことをやっていけるんだから、羨ましいですよ。<br>頑張ってね、期待しています。"
					],
				],
			],
			"lower_pic" => [
				"path" => $images."img-06.jpg",
				"alt" => "",
			]
		]); ?>
		<?php get_template_part(CROSSTALK_SECTION, null, [
			"hd" => "会社からの期待に応えたい",
			"q_num" => "6",
			"q_text" => "一般職から総合職に転換した私たちに、会社が期待すること",
			"q_img" => [
				"path" => $images."img-07.jpg",
				"alt" => "",
			],
			"q_items" => [
				[
					"img" => [
						"path" => $images."people-05.jpg",
						"alt" => "",
					],
					"name" => "N.Y",
					"descs" => ["今回、一般職から総合職へのコース転換制度を利用して、今年度から総合職となりました。<br>一般職から総合職に転換した私たちに、会社が期待することがあれば、教えて欲しいです。"],
				],
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "社長",
					"descs" => [
						"任された仕事を１つずつクリアして、どんどん責任のある仕事に挑戦していってもらいたいです。<br>そのために、自分の可能性を信じて、「これ、やれます」とか「次のこれ、できると思います」と、積極的に発信してもらうことが大事です。",
						"それを見て、「自分にも、もっとやれることがあるかも」と、思ってくれる人が増えて欲しいと思っています。<br>一般職から総合職に移ってくれたみんながロールモデルとなって、次の人が目指すようになる流れが徐々に出来てくれば、いずれは垣根も無くなると思います。",
						"会社としては、せっかく勇気を持って移ってきてくれた人に、自分の可能性を広げてもらいたいので、バックアップもしますし、チャンスも作っていきたいんです。",
					],
				],
				[
					"img" => [
						"path" => $images."people-05.jpg",
						"alt" => "",
					],
					"name" => "N.Y",
					"descs" => ["そうですね！"],
				],
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "社長",
					"descs" => [
						"みんなが発信してくれたら、最初は自信がなくて一般職に入ってきた人も勇気をもらえると思いますし、今の総合職の人にも刺激にもなると思います。",
						"成長したいと思ってくれる人が、増えるようになってもらいたいから、まずは、総合職に転換を決めたみんなにどんどん活躍してもらいたいです。"
					],
				],
			],
			"lower_pic" => [
				"path" => $images."img-08.jpg",
				"alt" => "",
			]
		]); ?>
		<?php get_template_part(CROSSTALK_SECTION, null, [
			"hd" => "みんなで、会社を作っていく",
			"q_num" => "7",
			"q_text" => "「社員の成長」がキーワード",
			"q_img" => [
				"path" => $images."img-09.jpg",
				"alt" => "",
			],
			"q_items" => [
				[
					"img" => [
						"path" => $images."people-01.jpg",
						"alt" => "",
					],
					"name" => "社長",
					"descs" => [
						"若手のみんなの活躍にすごく期待をしています。<br>一人ひとりが、自分の目標を掲げて取り組んでもらえると、それが社員の成長になり、結果、会社の成長につながると思っています。",
						"みんなも成長を実感できると、楽しいでしょう。<br>私も、社員の成長を見るのが、ものすごく嬉しくて、それがライフワークになっています（笑）",
						"それと、社員全員が会社の運営に関わっていると思っています。<br>だから「会社に使われる」という意識ではなく、「会社をつくっている」という意識をみんなに持っていただきたいです。",
						"「会社をつくる」ということは、私や役員が発信していることだけが全てではなく、若手も中堅も役員も、みんな発信していって欲しいと思っています。",
						"そんな会社をこれからも一緒につくっていきましょう。　",
					],
				],
			],
			"lower_pic" => [
				"path" => $images."img-10.jpg",
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