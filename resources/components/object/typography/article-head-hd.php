<?php
	$en = $args["en"] ?? "";
	$jp = $args["jp"] ?? "";

	get_template_part(TYPO, null, [
		"component" => "h1",
		"text" => $en,
		"jp" => $jp,
		"variable" => "article-head-hd"
	]);
?>