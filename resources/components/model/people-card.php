<?php
	$href = $args["href"] ?? "";
	$img = $args["img"] ?? "";
	$hd = $args["hd"] ?? "";
	$profile = $args["profile"] ?? [];
	$name = $profile["name"] ?? "";
	$icon = $profile["icon"] ?? "";
	$school = $profile["school"] ?? "";
	$year = $profile["year"] ?? "";
	$is_archive = !empty($args["archive"]) ? true : false;
	$s_row = $is_archive ? "--br" : "";
	$s_profile = $is_archive ? "m-people-card__profile--br" : "";
	$s_low = $is_archive ? "m-people-card__profile__low--br" : "";
?>

<a href="<?= $href ?>" class="m-people-card anm-hover">
	<?php get_template_part(PICTURE, null, [
		"path" => $img,
		"alt" => "",
		"type" => "pill",
		"hover" => "scale"
	]); ?>
	<div class="m-people-card__text">
		<?php if(!$is_archive): ?>
		<?php get_template_part(TYPO, null, [
			"component" => "h3",
			"class_change" => "h4",
			"text" => $hd,
		]); ?>
		<?php else: ?>
		<h2 class="m-people-card__hd"><?= $hd ?></h2>
		<?php endif; ?>
		<div class="m-people-card__profile <?= $s_profile ?>">
			<p class="m-people-card__profile__icon"><?= $icon ?></p>
			<div class="m-people-card__row<?= $s_row ?>">
				<p class="m-people-card__name"><?= $name ?></p>
				<div class="m-people-card__profile__low <?= $s_low ?>">
					<p class="m-people-card__school"><?= $school ?></p>
					<p class="m-people-card__year"><?= $year ?></p>
				</div>
			</div>
		</div>
	</div>
</a>