<?php
	$href = $args["href"] ?? "";
	$text = !empty($args["text"]) ? $args["text"] : "";

	// 固有変数
	$variable = !empty($args["variable"]) ? $args["variable"] : "";

	// タイプ sep rounded
	$type = !empty($args["type"]) ? $args["type"] : "";

	// フォント en
	$font = !empty($args["font"]) ? $args["font"] : "";
	$font_size = !empty($args["font_size"]) ? $args["font_size"] : "";

	// color
	$color = !empty($args["color"]) ? $args["color"] : "";

	// 外部サイト
	$is_external = !empty($args["is_external"]) ?? false;
	$target = $is_external ? "_blank" : "_self";

	$is_arrow_only = !empty($args["is_arrow_only"]) ?? false;

	$arrow_type = !empty($args["arrow_type"]) ? $args["arrow_type"] : "";
	$arrow_size = !empty($args["arrow_size"]) ? $args["arrow_size"] : "";
	$arrow_color = !empty($args["arrow_color"]) ? $args["arrow_color"] : "";

	$s_type = !empty($type) ? "o-btn--".$type : "";

	// is_externalがtrueの時、s_typeをsepに
	$s_type = $is_external ? "o-btn--sep" : $s_type;

	$s_font = !empty($font) ? "o-btn--".$font : "";
	$s_font_size = !empty($font_size) ? "o-btn--fs-".$font_size : "";
	$s_target = $is_external ? "o-btn--external" : "";
	$s_arrow = $is_arrow_only ? "o-btn--arrow" : "";
	$s_color = !empty($color) ? "o-btn--".$color : "";

	$size = !empty($args["size"]) ? $args["size"] : "";
	$border = !empty($args["border"]) ? $args["border"] : "";

	$component = !empty($args["component"]) ? $args["component"] : "a href='".$href."' target='".$target."'";

	$hover = !empty($args["hover"]) ? $args["hover"] : "";
	$hover_color = !empty($args["hover_color"]) ? $args["hover_color"] : "";

	$hover_wrap = empty($args["component"]) ? "anm-hover" : "";
	$arrow_hover = !empty($args["arrow_hover"]) ? $args["arrow_hover"] : "";
	$arrow_hover_color = !empty($args["arrow_hover_color"]) ? $args["arrow_hover_color"] : "";

	if (!empty($hover)) {
		if (!empty($hover_color)) {
			$hover_color_reserve = "anm-color-reserve anm-color-reserve--".$hover_color;
		} else {
			$hover_color_reserve = "anm-color-reserve";
		}
	} else {
		$hover_color_reserve = "";
	}

	$icon_variable = !empty($args["icon_variable"]) ? $args["icon_variable"] : "";

	switch ($hover) {
		case "text-forward":
			$hover_wrap = "anm-hover anm-hover--hide";
			$hover_text = "anm-forward";
			break;
		case "text-forward-reserve":
			$hover_wrap = "anm-hover anm-hover--hide";
			$hover_text = "anm-forward";
			break;
		case "text-reserve":
			$hover_wrap = "anm-hover anm-hover--hide";
			$hover_text = "";
			break;
		case "icon-reserve":
			$hover_wrap = "anm-hover anm-hover--hide";
			$hover_text= "";
			break;
		default:
			$hover_wrap = "";
			$hover_text= "";
			break;
	}
?>

<<?= $component?> class="o-btn <?= $s_type ?> <?= $s_font_size ?> <?= $s_target ?> <?= $s_color ?> <?= $hover_wrap ?> <?= $hover_color_reserve ?> <?= $variable ?>">

	<?php if(!$is_arrow_only): ?>
	<p class="o-btn__text <?= $hover_text ?>"><?= $text ?></p>
	<?php endif; ?>

	<div class="o-btn__icon <?= $icon_variable ?>">
		<?php if($is_external): ?>
			<?php get_template_part(BUTTON_EXTERNAL); ?>
		<?php else: ?>
			<?php if(empty($type)): ?>
				<?php if(!empty($hover_arrow)): ?><span class="<?= $hover_arrow ?>"><?php endif; ?>
					<?php get_template_part(ICON_ARROW); ?>
				<?php if(!empty($hover_arrow)): ?></span><?php endif; ?>
			<?php elseif($type === "menu"): ?>
				<?php get_template_part(BUTTON_MENU); ?>
			<?php else: ?>
				<?php get_template_part(BUTTON_ARROW, null, [
					"size" => $arrow_size,
					"type" => $arrow_type,
					"color" => $arrow_color,
					"hover" => $arrow_hover,
					"reserve_color" => $arrow_hover_color
				]); ?>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</<?= $component?>>
