<?php
	$images = $args["images"] ? $args["images"] : "";
	$title = $args["title"] ? $args["title"] : "";
	$desc = $args["desc"] ? $args["desc"] : "";
?>

<div class="p-projectstory-info__head">
	<div class="l-cont--sm">
		<div class="p-projectstory-info__head__row">
			<?php get_template_part(PICTURE, null, [
				"path" => $images."info-img-01.jpg",
				"alt" => "",
				"type" => "round-20",
				"variable" => "p-projectstory-info__head__pic"
			]); ?>
			<div class="p-projectstory-info__head__text">
				<?php get_template_part(TYPO, null, [
					"component" => "h2",
					"class_change" => "h5",
					"text" => $title,
					"size" => "sm",
					"color" => "gray",
				]); ?>
				<?php get_template_part(TYPO, null, [
					"text" => $desc,
				]); ?>
			</div>
		</div>
	</div>
</div>