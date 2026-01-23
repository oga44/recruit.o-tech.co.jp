<?php
	$component = !empty($args["component"]) ? $args["component"] : "p";
	$text = $args["text"] ?? "";
	$jp = !empty($args["jp"]) ? $args["jp"] : "";
	$class_change = !empty($args["class_change"]) ? $args["class_change"] : $component;

	$align = !empty($args["align"]) ? "text-".$args["align"] : "";
	$size = !empty($args["size"]) ? $args["size"] : "";
	$type = !empty($args["type"]) ? "o-typo__".$class_change."--".$args["type"] : "";
	$color = !empty($args["color"]) ? "o-typo__".$class_change."--".$args["color"] : "";
	$variable = !empty($args["variable"]) ? $args["variable"] : "";

	$font = !empty($args["font"]) ? "o-typo__".$class_change."--".$args["font"] : "";
	$weight = !empty($args["weight"]) ? "o-typo__".$class_change."--".$args["weight"] : "";

	$s_size = !empty($size) ? "o-typo__".$class_change."--".$size : "";

	$li_circle = !empty($args["li_circle"]) ? "--".$args["li_circle"] : "";
	$s_li_circle = !empty($li_circle) ? "o-typo__li__circle".$li_circle : "o-typo__li__circle";
?>
<<?= $component ?> class="o-typo__<?= $class_change ?> <?= $align ?> <?= $s_size ?> <?= $font ?> <?= $weight ?> <?= $type ?> <?= $color ?> <?= $variable ?>">
	<?php if ($component === "li"): ?>
	<span class="<?= $s_li_circle ?>"></span>
	<?php endif; ?>
	<span><?= $text ?></span>
	<?php if (!empty($jp)): ?>
	<span class="o-typo__<?= $class_change ?>--jp <?= $variable ?>--jp"><?= $jp ?></span>
	<?php endif; ?>
</<?= $component ?>>