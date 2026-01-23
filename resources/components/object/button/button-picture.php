<?php
	$href = $args["href"] ?? "";
	$jp = $args["jp"] ?? "";
	$en = $args["en"] ?? "";
	$img = $args["img"] ?? "";
?>

<a href="<?= $href ?>" class="o-btn-picture anm-hover">
	<div class="o-btn-picture__cont">
		<dl class="o-btn-picture__text">
			<dt class="o-btn-picture__main"><?= $jp ?></dt>
			<dd class="o-btn-picture__sub"><?= $en ?></dd>
		</dl>
		<div class="o-btn-picture__icon">
			<?php get_template_part(BUTTON_ARROW, null, [
				"size" => "md",
				"color" => "white",
				"type" => "circle",
				"hover" => "forward-scale-reserve",
				"reserve_color" => "black"
			]); ?>
		</div>
	</div>
	<div class="o-btn-picture__bg">
		<?php get_template_part(PICTURE, null, [
			"path" => $img,
			"alt" => "",
			"hover" => "scale"
		]); ?>
	</div>
</a>