<?php
	$shoulder = !empty($args["shoulder"]) ? $args["shoulder"] : "";
	$shoulder_color = !empty($args["shoulder_color"]) ? $args["shoulder_color"] : "white";
	$shoulder_bg_color = $shoulder_color === "blue" ? "blue-light" : "blue";

	$hd = $args["hd"] ?? "";
	$desc = $args["desc"] ?? "";
	$nav = !empty($args["nav"]) ? $args["nav"] : [];

	$tech = !empty($args["tech"]) ? $args["tech"] : [];
	$tech_img_width = !empty($tech["img_width"]) ? "section-head__img__body--".$tech["img_width"] : "";

	$business = !empty($args["business"]) ? $args["business"] : [];

	$is_reverse = !empty($args["is_reverse"]) ?? false;
	$s_reverse = $is_reverse ? "--reverse" : "";

	$text_area_size = !empty($args["text_area_size"]) ? "--".$args["text_area_size"] : "";

	$img_size = !empty($args["img_size"]) ? "section-head__img--".$args["img_size"] : "";
?>

<div class="section-head">
	<div class="section-head__text<?= $s_reverse ?><?= $text_area_size ?>">
		<div>
			<?php if (!empty($shoulder)): ?>
			<?php get_template_part(SHOULDER, null, [
				"component" => "p",
				"text" => "Building-Air-system",
				"color" => $shoulder_color,
				"bg_color" => $shoulder_bg_color,
				"no_icon" => true,
				"type" => "pill"
			]); ?>
			<?php endif; ?>

			<?php get_template_part(TYPO, null, [
				"component" => "h2",
				"size" => "sm",
				"text" => $hd,
				"variable" => "tracking-[0.05em]"
			]); ?>
			<div class="mt-[28px] md:mt-[40px]">
				<?php get_template_part(TYPO, null, [
					"text" => $desc,
					"size" => "fs-14",
					"color" => "black-dark"
				]); ?>
			</div>
			<?php if (!empty($nav)): ?>
			<div class="section-head__navs">
				<?php foreach ($nav as $link): ?>
				<?php get_template_part(BUTTON, null, [
					"href" => $link["href"],
					"text" => $link["text"],
					"hover" => "text-reserve",
					"arrow_hover" => "reserve",
					"icon_variable" => "rotate-90",
					"variable" => "justify-between md:justify-center min-w-0",
				]); ?>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="section-head__img<?= $s_reverse ?> <?= $img_size ?>">
		<?php if (!empty($tech)): ?>
		<div class="section-head__img__body <?= $tech_img_width ?>">
			<?php get_template_part(PICTURE, null, [
				"path" => $tech["img"],
				"alt" => $tech["alt"],
			]); ?>
		</div>
		<div class="section-head__img__bg<?= $s_reverse ?>">
			<?php get_template_part(PICTURE, null, [
				"path" => $tech["bg"],
				"alt" => "",
			]); ?>
		</div>
		<?php endif; ?>

		<?php if (!empty($business)): ?>
		<div class="section-head__img__inner">
			<?php get_template_part(PICTURE, null, [
				"path" => $business["img"],
				"alt" => $business["alt"],
			]); ?>
		</div>
		<?php endif; ?>
	</div>
</div>