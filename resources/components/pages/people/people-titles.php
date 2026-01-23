<?php
	$num = $args["num"] ?? "";
	$shoulder = $args["shoulder"] ?? "";
	$hd = $args["hd"] ?? "";
?>

<div class="p-people-titles">
	<p class="p-people-titles__num"><?= $num ?></p>
	<div class="p-people-titles__text">
		<p class="p-people-titles__shoulder"><?= $shoulder ?></p>
		<p class="p-people-titles__hd"><?= $hd ?></p>
	</div>
</div>