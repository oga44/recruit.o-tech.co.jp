<?php
	$component = !empty($args["component"]) ? $args["component"] : "li";
	$href = $args["href"] ?? "";
	$date = $args["date"] ?? "";
	$desc = $args["desc"] ?? "";
	$icon = !empty($args["icon"]) ? $args["icon"] : "";
	$border = !empty($args["border"]) ? "m-news-item--border-".$args["border"] : "";

	$is_external = !empty($args["is_external"]) ?? false;
	$target = $is_external ? "_blank" : "_self";

	$no_hover = empty($args["accordion"]) ? "no-hover" : "";

	$is_accordion = !empty($args["accordion"]) ?? false;
	$accordion = !empty($args["accordion"]) ? "-acc -border anm-hover js-accordion" : "";
	$accordion_btn = !empty($args["accordion"]) ? "no-border js-accordion-btn" : "";
?>

<<?= $component ?> class="m-news-item w-full <?= $border ?> <?= $accordion ?>">
	<div class="m-news-item__link <?= $no_hover ?> <?= $accordion_btn ?>">
		<p class="m-news-item__date"><?= $date ?></p>
		<div class="m-news-item__desc"><?= $desc ?></div>
		<?php if($is_accordion): ?>
		<div class="m-news-item__toggle">
		<?php get_template_part(ICON_TOGGLE); ?>
		</div>
		<?php endif; ?>
	</div>
	<?php if($is_accordion): ?>
	<div class="m-news-item__body js-accordion-target">
		<div class="m-news-item__body__inner js-accordion-target-spacer">
			<p class="m-news-item__body__desc"><?= $args["accordion"] ?></p>
		</div>
	</div>
	<?php endif; ?>
</<?= $component ?>>

<?php /*
<<?= $component ?> class="m-news-item w-full">
	<div target="<?= $target ?>" class="m-news-item__link <?= $border ?>">
		<p class="m-news-item__date"><?= $date ?></p>
		<p class="m-news-item__desc"><?= $desc ?></p>
		<?php if(!empty($icon)): ?>
		<p class="m-news-item__icon">
			<?php if($icon === "pdf"): ?>
			<span>PDF</span>
			<?php elseif($icon === "external"): ?>
			<?php get_template_part(ICON_EXTERNAL); ?>
			<?php endif; ?>
		</p>
		<?php endif; ?>
	</div>
</<?= $component ?>>
*/ ?>