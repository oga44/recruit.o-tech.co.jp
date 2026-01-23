<?php $is_front = is_home() || is_front_page() || is_page("front") ? "is-front" : ""; ?>
<section class="m-info <?= $is_front ?>">
	<div class="l-cont">
		<?php get_template_part(SHOULDER, null, [
			"text" => "INFORMATION"
		]); ?>
		<div class="m-info__cards">
			<?php get_template_part(CARD, null, [
				"href" => URL_BENEFIT,
				"jp" => "福利厚生と働く環境",
				"en" => "BENEFIT",
				"bg" => "common/info-benefit.jpg"
			]); ?>
			<?php get_template_part(CARD, null, [
				"href" => URL_SUPPORT,
				"jp" => "教育制度・研修制度",
				"en" => "SUPPORT",
				"bg" => "common/info-support.jpg"
			]); ?>
			<?php get_template_part(CARD, null, [
				"href" => URL_FAQ,
				"jp" => "よくある質問",
				"en" => "FAQ",
				"bg" => "common/info-faq.jpg"
			]); ?>
		</div>
		<div class="m-info__btns">
			<?php get_template_part(BUTTON, null, [
				"href" => URL_NEW_GRADUATE,
				"text" => NAME_NEW_GRADUATE,
				"type" => "rounded",
				"arrow_type" => "circle",
				"font_size" => "20",
				"hover" => "text-reserve",
				"hover_color" => "red",
				"arrow_hover" => "forward-reserve",
				"arrow_hover_color" => "white-black",
			]); ?>
			<?php get_template_part(BUTTON, null, [
				"href" => URL_CAREER,
				"text" => NAME_CAREER,
				"type" => "rounded",
				"arrow_type" => "circle",
				"font_size" => "20",
				"hover" => "text-reserve",
				"hover_color" => "red",
				"arrow_hover" => "forward-reserve",
				"arrow_hover_color" => "white-black",
			]); ?>
			<?php /* 0610非公開
			<?php get_template_part(BUTTON, null, [
				"href" => URL_DISABILITY,
				"text" => "障がい者採用",
				"type" => "rounded",
				"arrow_type" => "circle",
				"font_size" => "20",
				"hover" => "text-reserve",
				"hover_color" => "red",
				"arrow_hover" => "forward-reserve",
				"arrow_hover_color" => "white-black",
			]); ?>
			*/ ?>
		</div>
	</div>
</section>