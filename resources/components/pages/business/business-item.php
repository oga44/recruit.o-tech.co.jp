<?php
	$icon = $args["icon"] ?? "";
	$hd = $args["hd"] ?? "";
	$desc = $args["desc"] ?? "";
?>

<div class="p-business__item js-accordion">
	<div class="p-business__item__head js-accordion-btn anm-hover">
		<div class="p-business__item__head__main">
			<div class="p-business__item__icon">
				<img src="<?= URL_SVG ?>business-icon-<?= $icon ?>.svg" alt="">
			</div>
			<?php get_template_part(TYPO, null, [
				"component" => "h5",
				"text" => $hd,
			]); ?>
		</div>
		<?php get_template_part(ICON_TOGGLE); ?>
	</div>
	<div class="p-business__item__body js-accordion-target js-accordion-pt-40">
		<div class="js-accordion-target-inner">
			<?php get_template_part(TYPO, null, [
				"text" => $desc,
			]); ?>
		</div>
	</div>
</div>