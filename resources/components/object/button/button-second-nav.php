<?php
	$href = $args["href"] ?? "";
	$img = $args["img"] ?? "";
	$alt = $args["alt"] ?? "";
	$hd = $args["hd"] ?? "";
	$shoulder = !empty($args["shoulder"]) ? $args["shoulder"] : "";
	$place = !empty($args["place"]) ? $args["place"] : "";

	// cross talk
	$num = !empty($args["num"]) ? $args["num"] : "";
	$cross = !empty($args["cross"]) ? $args["cross"] : [];

	$sp_btn_hide = !empty($args["sp_btn_hide"]) ?? false;
?>

<a href="<?= $href ?>" class="o-btn-second-nav anm-hover">
	<?php get_template_part(PICTURE, null, [
		"path" => $img,
		"alt" => $alt,
		"type" => "pill",
		"hover" => "scale",
		"variable" => "o-btn-second-nav__pic"
	]); ?>
	<div class="o-btn-second-nav__text">
		<?php if(!empty($num)): ?>
		<p class="o-btn-second-nav__num"><?= $num ?></p>
		<?php endif; ?>

		<?php if(!empty($shoulder)): ?>
		<p class="o-btn-second-nav__shoulder"><?= $shoulder ?></p>
		<?php endif; ?>

		<?php get_template_part(TYPO, null, [
			"component" => "h2",
			"class_change" => "h4",
			"text" => $hd,
			"variable" => "o-btn-second-nav__hd"
		]); ?>

		<?php if(!empty($cross)): ?>
		<div class="o-btn-second-nav__row">
			<?php get_template_part(TYPO, null, [
				"text" => $cross[0],
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
				"text" => $cross[1],
				"font" => "yugo",
				"weight" => "bold",
				"size" => "fs-14"
			]); ?>
		</div>
		<?php endif; ?>

		<?php if(!empty($place)): ?>
		<div class="o-btn-second-nav__place">
			<?php get_template_part(TYPO, null, [
				"text" => $place,
				"font" => "yugo",
				"weight" => "bold",
				"size" => "fs-14"
			]); ?>
		</div>
		<?php endif; ?>

		<div class="o-btn-second-nav__btn <?php if($sp_btn_hide): ?>sp-hide<?php endif; ?>">
			<?php get_template_part(BUTTON_ARROW, null, [
				"size" => "md",
				"hover" => "forward-reserve",
			]); ?>
		</div>
	</div>
</a>