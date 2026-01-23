<?php
	$list = $args["list"] ?? [];
?>

<ul class="topic-path">
	<?php
		foreach ($list as $item):

		$start = !empty($item["href"]) ? "a href='".$item["href"]."'" : "p";
		$end = !empty($item["href"]) ? "a" : "p";
	?>
	<li class="topic-path__item">
		<<?= $start ?>class="topic-path__text <?php if($end === "a"): ?>font-manrope font-semibold<?php endif; ?>"><?= $item["name"] ?></<?= $end ?>>
	<?php endforeach; ?>
</ul>