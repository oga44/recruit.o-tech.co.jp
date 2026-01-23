<?php
	$component = !empty($args["component"]) ? $args["component"] : "h2";
	$text = $args["text"] ?? "";
	$color = !empty($args["color"]) ? "o-shoulder--".$args["color"] : "";
	$bg_color = !empty($args["bg_color"]) ? "o-shoulder--bg-".$args["bg_color"] : "";
	$text_align = !empty($args["text_align"]) ? "justify-".$args["text_align"] : "";
	$no_icon = !empty($args["no_icon"]) ? true : false;
	$type = !empty($args["type"]) ? "o-shoulder--".$args["type"] : "";
	$variable = !empty($args["variable"]) ? $args["variable"] : "";
?>

<<?= $component ?> class="o-shoulder <?= $type ?> <?= $color ?> <?= $bg_color ?> <?= $text_align ?> <?= $variable ?>">
	<?php if (!$no_icon): ?>
	<span class="o-shoulder__icon"></span>
	<?php endif; ?>
	<span class="o-shoulder__text"><?= $text ?></span>
</<?= $component ?>>