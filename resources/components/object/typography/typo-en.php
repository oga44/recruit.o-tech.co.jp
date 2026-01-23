<?php
	$text = $args["text"] ?? "";
	$color = !empty($args["color"]) ? $args["color"] : "";
	$weight = !empty($args["weight"]) ? $args["weight"] : "bold";
	$size = !empty($args["size"]) ? $args["size"] : "14";
	$variable = !empty($args["variable"]) ? $args["variable"] : "";

	get_template_part(TYPO, null, [
		"text" => $text,
		"font" => "en",
		"color" => $color,
		"weight" => $weight,
		"size" => "fs-".$size,
		"variable" => $variable,
	]);
?>