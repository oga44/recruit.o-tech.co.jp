<?php
	$page_title = [NAME_MESSAGE];
	$page_desc = "オーテック採用サイトの代表と採用担当者からのメッセージ紹介ページです。";
	$page_canonical = URL_MESSAGE;
get_header(); ?>
<article class="p-message">
	<?php get_template_part(ARTICLE_HEAD, null, [
		"list" => [
			[
				"href" => URL_HOME,
				"name" => "HOME"
			],
			[
				"href" => "",
				"name" => NAME_MESSAGE
			],
		],
		"en" => "MESSAGE",
		"jp" => NAME_MESSAGE,
		"message" => [
			"shoulder" => "代表取締役社長",
			"name" => "市原 伸一",
			"en" => "Ichihara Shinichi",
			"lead" => "会社は、みんなで<br class='sp'>つくっていくもの",
		],
		"images" => "message/message-mv.jpg",
	]); ?>
	<div class="article-body">
		<div class="p-message__intro">
			<div class="p-message__intro__cont l-cont--sm l-cont--sp-sm">
				<div class="p-message__intro__descs">
					<p class="p-message__intro__desc">オーテックは、空調の自動制御システムの施工と、管工機材の販売の２つの軸で、快適な建物環境の実現に寄与しています。<br>温度や空調、エネルギー、衛生など、目には見えない部分を制御するシステムを構築しコントロールすることで、人々が建物で快適に過ごせる環境をつくり出しています。</p>
					<p class="p-message__intro__desc">私たちの事業は、建物ごとにクライアントのニーズも違いますし、実現したい環境や、現場で発生する課題も違ってきます。<br>その中で、社員一人ひとりが、課題の解決策を考え提案を行ってきた結果が、今日までの実績を積み重ねてくれています。</p>
					<p class="p-message__intro__desc">オーテックの事業の中心には、いつでも「人」があります。「人」が財産であり、<b>社員の成長</b>こそが、会社の成長であると考えています。<b>私を含め、オーテックのみんなが、どう成長するかで、会社の成長や未来が決まる</b>と捉えています。</p>
				</div>
			</div>
			<div class="p-message__intro__bg">
				<?php get_template_part(PICTURE, null, [
					"path" => "common/common-sec-bg.png",
					"alt" => "",
				]); ?>
			</div>
		</div>
		<div class="p-message__sections">
			<section class="p-message__sec">
				<div class="p-message__sec__head">
					<div class="l-cont--sm l-cont--sp-sm">
						<p class="p-message__sec__head__shoulder">
							<span class="p-message__sec__head__shoulder--body">現場から学んだ私の仕事観</span>
						</p>
						<div class="p-message__sec__head__hd">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"text" => "1人で頑張るのではなく<br class='pc'>自分に無い力は、周りの力を全て使う",
								"size" => "sm",
								"variable" => "leading-normal tracking-[0.02em]"
							]); ?>
						</div>
					</div>
				</div>
				<div class="p-message__sec__body">
					<?php get_template_part(PICTURE, null, [
						"path" => "message/message-img-01.jpg",
						"alt" => "",
						"variable" => "p-message__sec__pic",
						"type" => "pill"
					]); ?>
					<div class="p-message__sec__text">
						<p class="p-message__sec__body__desc">私は、1980年4月に大石商事株式会社（後にオーテックへ社名変更）に新卒で入社しました。私のキャリアのスタートは、工事担当者として現場から始まりました。</p>
						<p class="p-message__sec__body__desc">当時、私が工事担当者として現場で働いていた時、<b>自分はプロジェクトの担当ではあるけど、会社の仕事なのだから責任は会社が取るのが当然で、自分が困ってることに対して、会社の資源は「人」も含めて全部使っていいし、助けてもらっていい</b>と考えていました。</p>
						<p class="p-message__sec__body__desc">そのため、困った時は、解決策を知っていそうな人に電話をしたり、先輩を捕まえて現場に連れていき「どうしたらいいですかね」とよく聞いていました。新人の頃は「ちょっと仕事できないよね」とか「そんなこともわからないのか」と社内で言われることもありましたが、自分が悩んでしまい物事が進まず、お客さんに迷惑をかけてしまうより、聞ける人に聞いて解決できた方がいいなと思っていました。</p>
						<p class="p-message__sec__body__desc">会社は結果を望んでいるのであって、「自分は仕事ができる」というパフォーマンスをするよりも、周りのいろんな力を使ってでも結果を出せるということが大切であり、結果を出すためのプロセスにおいて、1人で抱えこみ頑張らなければいけない、ということは全くないのです。</p>
					</div>
				</div>
			</section>
			<section class="p-message__sec">
				<div class="p-message__sec__head">
					<div class="l-cont--sm l-cont--sp-sm">
						<p class="p-message__sec__head__shoulder">
							<span class="p-message__sec__head__shoulder--body">最初は、できなくてもいい</span>
						</p>
						<div class="p-message__sec__head__hd">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"text" => "「自分の成長」をテーマに<br class='pc'>仕事を楽しんでもらいたい",
								"size" => "sm",
								"variable" => "leading-normal tracking-[0.02em]"
							]); ?>
						</div>
					</div>
				</div>
				<div class="p-message__sec__body p-message__sec__body--reserve">
					<?php get_template_part(PICTURE, null, [
						"path" => "message/message-img-02.jpg",
						"alt" => "",
						"variable" => "p-message__sec__pic",
						"type" => "pill"
					]); ?>
					<div class="p-message__sec__text">
						<p class="p-message__sec__body__desc">これからオーテックに就職される方は、現場で悩むこともあるかもしれませんが、初めから１人でできる人はいないので、どんどん周りに協力を仰ぎ、その中で自分がどう成長するかということをテーマに仕事に取り組んでいただけたらと思います。</p>
						<p class="p-message__sec__body__desc">最初はできないことを受け入れて、たくさんの人に教えてもらいながら仕事をこなし、<b>「こんなことはもう聞かなくなったな」</b>とか<b>「これは自分でも解決できるようになったな」</b>という、自分の成長を喜びとして感じてもらいたいです。</p>
					</div>
				</div>
				<div class="p-message__sec__body__low l-cont--sm l-cont--sp-sm">
					<div class="p-message__sec__text">
						<p class="p-message__sec__body__desc">入社して工事担当しか経験してこなかった私も、筑波出張所（現在の東関東支店）の所長になった際に、営業をしなければいけないポジションになり悩んだ時期がありました。当然、営業経験なんかありません。<br>何をすればいいか分からず、お客さんのところに「お仕事ありますか？」と聞きに行くことから始めましたが、「別の業者を使ってるから」と入口で追い返される日々を過ごしました。正直とても嫌でした。お客さんの社屋の前に車をつけて、今日もあんな風に対応されるんだなと思ったら、車から降りるのにちょっと時間がかかったり、車の中で大きな声を出して自分に喝を入れたり。</p>
					</div>
					<div class="p-message__sec__text">
						<p class="p-message__sec__body__desc">ただ、続けていくうちに「行くところが無いので、会社をサボるわけにもいかないし、来週もまた来ますね」と切り返せるようになり、顔の出し方を覚え、最初は追い返されていた会社からも「座っていいよ」と、お茶まで出してもらえるようになりました。<b>「１分で追い返されていたのが、今日は５分も中に入れた」</b>という小さな成功をモチベーションにしながら、自分の成長を感じられる仕事になりました。</p>
						<p class="p-message__sec__body__desc">行動を起こしたからこそ経験できることがあります。<br>自分で考え行動したことは、上手くいっても、いかなくても、たくさんの学びが自分に返ってきます。<br>これから入社される方には、仕事を通して、ご自身の成長を感じ、楽しんでもらいたいです。</p>
					</div>
				</div>
			</section>
			<section class="p-message__sec">
				<div class="p-message__sec__head p-message__sec__head--center">
					<div class="l-cont--sm l-cont--sp-sm">
						<p class="p-message__sec__head__shoulder p-message__sec__head__shoulder--center">
							<span class="p-message__sec__head__shoulder--body">いろんな人がいるから面白い</span>
						</p>
						<div class="p-message__sec__head__hd p-message__sec__head__hd--center">
							<?php get_template_part(TYPO, null, [
								"component" => "h2",
								"text" => "いろんなタイプの人が、<br class='pc'>いろんな部署で活躍できる。<br class='pc'>そんな会社に。",
								"size" => "sm",
								"variable" => "leading-normal tracking-[0.02em]"
							]); ?>
						</div>
					</div>
				</div>
				<div class="p-message__sec__body p-message__sec__body--center">
					<div class="p-message__sec__text">
						<p class="p-message__sec__body__desc--md">よく面接の時に「オーテックでは、どういう人が活躍していますか」と聞かれることがあるのですが、「<b>オーテックは１つの色のタイプの人は求めていません</b>」と回答を差し上げています。</p>
						<p class="p-message__sec__body__desc--md">それぞれが考えを持っていて、ちゃんと言葉に出して考えを伝えられる人が集まることで、議論した際にも、いろんな意見が出て、1人では考えつかないような発想が生まれます。<br>オーテックの仕事は、みんなで協力しながら行っていく仕事だからこそ、いろんな考え、視点を持った人がいてくれた方が、上手くいきやすくなります。<br>社員の個性を尊重しつつ、会社として個人の成長の機会をつくっていきます。みんなが自己成長のマインドを持って動いていけば、それが会社の成長につながると考えています。</p>
						<p class="p-message__sec__body__desc--md">オーテックは、これから一緒に成長していける人をお待ちしております。<br>みんなで、未来をつくっていきましょう。</p>
					</div>
				</div>
			</section>
		</div>
		<div class="p-message__low">
			<div class="p-message__slider swiper js-common-loop-slider">
				<div class="swiper-wrapper">
					<?php for ($i = 1; $i < 13; $i++): ?>
					<div class="p-message__slider__slide swiper-slide">
						<?php get_template_part(PICTURE, null, [
							"path" => "common/common-slide-img-".sprintf('%02d', $i).".jpg",
							"alt" => "",
							"type" => "pill",
						]); ?>
					</div>
					<?php endfor; ?>
				</div>
			</div>
			<div class="p-message__low__text">
				<?php get_template_part(TYPO, null, [
					"component" => "h2",
					"text" => "共に築こう<br>快適な環境と<br class='sp'>人々の未来",
					"type" => "italic",
					"variable" => "p-message__low__lead"
				]); ?>
				<div class="p-message__sec__text">
					<p class="p-message__sec__body__desc">持続可能な社会の実現において、私たちだからこそできることがあります。</p>
					<p class="p-message__sec__body__desc">管工機材事業では、建物で使う資材をサステナブルなものにするための提案を行っています。また、環境システム事業では、快適な温度や湿度など心地良さを実現しながら「どうエネルギーを使わないで実現させるか」「既設の建物を構造を変えずにどう省エネにするか」などのアクションを行なっています。</p>
					<p class="p-message__sec__body__desc">オーテックの事業は、益々これからの時代に必要とされていく分野であり、時代に合わせた高い技術や提案力を要求される業界になっていくことは必至です。<br>時代の変化に合わせて、現場から、これまでのオーテックに無かった新しい発想が、どんどん生まれていくことが想像されます。</p>
					<p class="p-message__sec__body__desc">これから入社される方々が、新しい発想で、これからのオーテックをつくっていくことを期待しています。</p>
				</div>
			</div>
			<div class="p-message__low__bg">
				<?php get_template_part(PICTURE, null, [
					"path" => "message/message-low-bg.png",
					"alt" => "",
					"fit" => "contain"
				]); ?>
			</div>
		</div>

		<div class="p-message-recruiter">
			<div class="p-message-recruiter__head l-cont">
				<?php get_template_part(SHOULDER, null, [
					"text" => "RECRUITER MESSAGE",
					"color" => "red",
					"component" => "p"
				]); ?>
				<?php get_template_part(TYPO, null, [
					"component" => "h2",
					"text" => "採用担当者からの<br class='sp'>メッセージ",
					"size" => "sm"
				]); ?>
			</div>
			<div class="p-message-recruiter__body">
				<div class="l-cont--sm">
					<div class="p-message-recruiter__intro">
						<?php get_template_part(PICTURE, null, [
							"path" => "message/message-recruiter-img-01.jpg",
							"alt" => "",
							"type" => "pill",
						]); ?>
						<p class="p-message-recruiter__intro__desc">オーテックの事業は、就職活動中の皆さまにとっては身近ではないと思います。<br>どんなことでも、最初は未経験、無知から始まります。私たちは、これから新しい挑戦を始める、皆さまの成長に期待をしています。</p>
					</div>

					<div class="p-message-recruiter__mid">
						<div class="p-message-recruiter__mid__pics">
							<?php get_template_part(PICTURE, null, [
								"path" => "message/message-recruiter-img-02.jpg",
								"alt" => "",
								"type" => "pill",
								"variable" => "w-full",
							]); ?>
							<div class="p-message-recruiter__mid__pics__text">
								<div>
									<p class="p-message-recruiter__mid__shoulder">総務統括部　統括部長</p>
									<p class="p-message-recruiter__mid__name">
										<span>種田 啓史</span>
										<span class="p-message-recruiter__mid__name-en">Taneda Keishi</span>
									</p>
								</div>
							</div>
						</div>
						<div class="p-message-recruiter__mid__text">
							<div class="p-message__sec__text">
								<?php get_template_part(TYPO, null, [
									"text" => "就職活動に取り組むみなさん、こんにちは。<br>私たちオーテックは、空調設備の自動制御工事を行う企業です。快適な空間を作り出すための自動制御を提供することで、人々の生活の質の向上に貢献し、「人に対するアメニティ」を提供しています。",
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" => "この空調自動制御工事は、省エネルギーや持続可能な社会に貢献していくために、より重要な位置づけとなっており、社会的使命も高まっています。また、我々自身も、エネルギー効率や生産性向上に向け取り組んでおり、サステナビリティ経営を推進しています。",
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" => "オーテックの大切な資産は、高い専門性を持つ一人ひとりの社員です。この専門性を身につけるために、入社後には１年間の研修が、その後も定期的に研修を実施しています。また、通常の業務においても、実践的な経験を積み重ねることで、エンジニアとしての成長につなげています。こうして鍛えられたみなさんが、会社の強みとなり、ともに成長する相乗効果を生み出しています。",
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" => "オーテックは、事業を開始して９０年を迎えました。次の１００年に向けて成長を続け、存在していくことが社会にとっても必要だと考えています。そのためにはエンジニアの成長が欠かせません。私たちと一緒に、人々の豊かな生活空間づくりに貢献してみませんか。ぜひ一人ひとりの個性と情熱を存分に発揮していただき、一緒に成長し、新しい価値を生み出していきましょう。みなさんの熱意あるエントリーを心よりお待ちしています。",
								]); ?>
							</div>
						</div>
					</div>

					<div class="p-message-recruiter__low">
						<div class="p-message-recruiter__low__block">
							<div class="p-message-recruiter__low__profile">
								<?php get_template_part(PICTURE, null, [
									"path" => "message/message-recruiter-img-04.jpg",
									"alt" => "",
									"type" => "circle",
									"variable" => "p-message-recruiter__low__pic",
								]); ?>
								<div>
									<p>総務統括部　人事課　課長<br>2006年入社</p>
									<p class="p-message-recruiter__low__name">天池　元基</p>
								</div>
							</div>
							<div class="p-message-recruiter__low__text">
								<?php get_template_part(TYPO, null, [
									"text" => "当社にご関心を持っていただき、誠にありがとうございます。皆さんの中には就職活動に不安を感じている方もいらっしゃるかと思いますが、どうぞご安心ください。当社では、皆さんの個性と情熱を大切にし、一人ひとりが最大限に活躍できる環境を整えています。入社後も充実した研修制度とサポート体制があり、新たなチャレンジを全力で応援します。皆さんと共に未来を創ることを楽しみにしています。",
									"weight" => "medium"
								]); ?>
							</div>
						</div>
						<div class="p-message-recruiter__low__block">
							<div class="p-message-recruiter__low__profile">
								<?php get_template_part(PICTURE, null, [
									"path" => "message/message-recruiter-img-03.jpg",
									"alt" => "",
									"type" => "circle",
									"variable" => "p-message-recruiter__low__pic",
								]); ?>
								<div>
									<p>総務統括部　人事課<br>2005年入社</p>
									<p class="p-message-recruiter__low__name">本多　真紀</p>
								</div>
							</div>
							<div class="p-message-recruiter__low__text">
								<?php get_template_part(TYPO, null, [
									"text" => "お互いが「オーテックで働くイメージを持てるかどうか」が大事だと考えています。そのために、私たちは採用活動の各フェーズでさまざまな情報を提供しますし、質問には本音ベースでおこたえします。みなさんからも、ご自身のことをお伝えいただきたいと思っています。自分のことを話すのが苦手な方もいるかもしれませんが（私も苦手です）頑張って伝えようとする姿に、あなたらしさを感じるものです。お会いできることを楽しみにしていますね。",
									"weight" => "medium"
								]); ?>
							</div>
						</div>
						<div class="p-message-recruiter__low__block">
							<div class="p-message-recruiter__low__profile">
								<?php get_template_part(PICTURE, null, [
									"path" => "message/message-recruiter-img-05.jpg",
									"alt" => "",
									"type" => "circle",
									"variable" => "p-message-recruiter__low__pic",
								]); ?>
								<div>
									<p>総務統括部　人事課<br>2018年入社</p>
									<p class="p-message-recruiter__low__name">小林　未波</p>
								</div>
							</div>
							<div class="p-message-recruiter__low__text">
								<?php get_template_part(TYPO, null, [
									"text" => "たくさんの企業さんのなかから、オーテックを見つけて下さりありがとうございます。皆さんが就職活動をするうえでご自身と向き合ったように、当社も常に自社の在り方と向き合っています。創業９０年という歴史を次の１００年に向けてどうつなげるか、持続可能な社会の達成にどう貢献できるか…などなど、使命感を抱きながら、同時にわくわくしながら、これからも成長するオーテックは、前向きで誠実な皆さんと一緒に歩んでいけたらと考えています。ご興味持たれましたら、まずはエントリーをお待ちしております。",
									"weight" => "medium"
								]); ?>
							</div>
						</div>
						<div class="p-message-recruiter__low__block">
							<div class="p-message-recruiter__low__profile">
								<?php get_template_part(PICTURE, null, [
									"path" => "message/message-recruiter-img-06.jpg",
									"alt" => "",
									"type" => "circle",
									"variable" => "p-message-recruiter__low__pic",
								]); ?>
								<div>
									<p>総務統括部　人事課<br>2021年入社</p>
									<p class="p-message-recruiter__low__name">浅野　洸俊</p>
								</div>
							</div>
							<div class="p-message-recruiter__low__text">
								<?php get_template_part(TYPO, null, [
									"text" => "やりたいことも目指したいことも見つからない。そんな中、なんとなく就職活動に参加する人もいるかと思います。面接が上手い人はどんどん内定を貰い、就活に焦る方もいるかと思います。オーテックでは人物重視の採用を行っており、面接時には和やかな雰囲気感であなたの人柄を知れる場にしたいと常に考えています。私たち人事はあなたの味方です。私達にあなたのこれまでの様々なご経験を教えて下さい。それでは、オーテック採用担当一同、あなたとお会いできる事を心よりお待ちしております。",
									"weight" => "medium"
								]); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>
<?php get_footer(); ?>