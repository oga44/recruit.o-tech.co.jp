<?php
	$hd = $args["hd"] ?? "";
	$desc = $args["desc"] ?? "";
	$shoulders = !empty($args["shoulders"]) ? $args["shoulders"] : [];
	$other = !empty($args["other"]) ? $args["other"] : "";
	$size = !empty($args["size"]) ? "--".$args["size"] : "";
?>

<div class="o-card-system<?= $size ?>">
	<?php if (!empty($other)): ?><div class="o-card-system__text"><?php endif; ?>
		<?php if (!empty($shoulders)): ?>
		<div class="o-card-system__shoulders">
			<?php foreach ($shoulders as $shoulder): ?>
			<?php get_template_part(TYPO, null, [
				"text" => $shoulder,
				"font" => "yugo",
				"weight" => "bold",
				"size" => "fs-14",
				"variable" => "o-card-system__shoulder leading-[1] tracking-normal",
			]); ?>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
		<?php get_template_part(TYPO, null, [
			"text" => $hd,
			"font" => "yugo",
			"weight" => "bold",
			"size" => "fs-20",
			"variable" => "leading-[1.35]",
		]); ?>
		<?php get_template_part(TYPO, null, [
			"text" => $desc,
			"color" => "gray",
			"size" => "fs-14",
		]); ?>
	<?php if (!empty($other)): ?></div><?php endif; ?>

	<?php if (!empty($other)): ?>
	<div class="o-card-system__other">
		<?php get_template_part(TYPO, null, [
			"text" => $other,
			"weight" => "medium",
		]); ?>
	</div>
	<?php endif; ?>
</div>