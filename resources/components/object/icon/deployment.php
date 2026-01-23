<?php
	$text = $args["text"] ?? "";
	$no_space = !empty($args["no_space"]) ? "ml-0" : "";
?>

<p class="o-icon-dep <?= $no_space ?>"><?= $text ?></p>