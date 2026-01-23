<?php
	$size = !empty($args["size"]) ? $args["size"] : "";
	$arrow_size = !empty($args["arrow_size"]) ? $args["arrow_size"] : $size;
	$type = !empty($args["type"]) ? $args["type"] : "";
	$color = !empty($args["color"]) ? $args["color"] : "";

	$s_size = !empty($size) ? "o-btn-arrow--".$size : "";
	$s_type = !empty($args["type"]) ? "o-btn-arrow--".$type : "";
	$s_size_type = !empty($args["type"]) ? "o-btn-arrow--".$type."-".$size : "";
	$s_color = !empty($args["color"]) ? "o-btn-arrow--".$color : "";

	$hover = !empty($args["hover"]) ? $args["hover"] : "";
	$reserve_color = !empty($args["reserve_color"]) ? "--".$args["reserve_color"] : "";

	$variable = !empty($args["variable"]) ? $args["variable"] : "";

	switch ($hover) {
		case "forward-scale":
			$hover_arrow = "anm-arrow";
			$hover_scale = "anm-circle-scale";
			$hover_reserve = "";
			break;
		case "forward-scale-reserve":
			$hover_arrow = "anm-arrow";
			$hover_scale = "anm-circle-scale";
			$hover_reserve = "anm-color-reserve".$reserve_color;
			break;
		case "forward-reserve":
			$hover_arrow = "anm-arrow";
			$hover_scale = "";
			$hover_reserve = "anm-color-reserve".$reserve_color;
			break;
		case "forward":
			$hover_arrow = "anm-arrow";
			$hover_scale = "";
			$hover_reserve = "";
			break;
		default:
			$hover_arrow = "";
			$hover_scale = "";
			$hover_reserve = "";
			break;
	}
?>

<div class="o-btn-arrow <?= $s_size ?> <?= $s_type ?> <?= $s_size_type ?> <?= $s_color ?> <?= $hover_scale ?> <?= $hover_reserve ?> <?= $variable ?>">
	<?php if(!empty($hover_arrow)): ?><span class="<?= $hover_arrow ?>"><?php endif; ?>
	<?php get_template_part(ICON_ARROW, null, [
		"size" => $arrow_size,
	]); ?>
	<?php if(!empty($hover_arrow)): ?></span><?php endif; ?>
</div>