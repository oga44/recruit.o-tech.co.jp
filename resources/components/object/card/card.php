<?php
	$href = $args["href"] ?? "";
	$jp = $args["jp"] ?? "";
	$en = $args["en"] ?? "";
	$bg = !empty($args["bg"]) ? $args["bg"] : "";
?>

<a href="<?= $href ?>" class="o-card anm-hover">
	<div class="o-card__inner">
		<dl class="o-card__text">
			<dt class="o-card__jp"><?= $jp ?></dt>
			<dd class="o-card__en"><?= $en ?></dd>
		</dl>
		<div class="o-card__arrow">
			<?php get_template_part(BUTTON_ARROW, null, [
				"hover" => "forward-reserve",
				"reserve_color" => "black"
			]); ?>
		</div>
	</div>
	<?php if(!empty($bg)): ?>
	<?php get_template_part(PICTURE, null, [
		"path" => $bg,
		"alt" => $jp,
		"variable" => "o-card__bg",
	]); ?>
	<?php endif; ?>
</a>