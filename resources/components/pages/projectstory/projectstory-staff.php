<?php
	$path = $args["path"] ? $args["path"] : "";
	$dep = $args["dep"] ? $args["dep"] : "";
	$name = $args["name"] ? $args["name"] : "";
	$entry = $args["entry"] ? $args["entry"] :"";
	$school = $args["school"] ? $args["school"] : "";
	$profile = $args["profile"] ? $args["profile"] : "";
?>

<div class="p-projectstory-intro__staff">
	<?php get_template_part(TYPO_EN, null, [
		"text" => "STAFF",
		"color" => "red",
		"variable" => "leading-normal"
	]); ?>
	<div class="p-projectstory-intro__staff__row">
		<?php get_template_part(PICTURE, null, [
			"path" => $path."staff.jpg",
			"alt" => "",
			"type" => "pill",
			"variable" => "p-projectstory-intro__staff__pic"
		]); ?>
		<div class="p-projectstory-intro__staff__text">
			<div class="p-projectstory-intro__staff__profile">
				<?php get_template_part(ICON_DEP, null, [
					"text" => $dep,
					"no_space" => true,
				]); ?>
				<div class="p-projectstory-intro__staff__name">
					<?php get_template_part(TYPO, null, [
						"text" => $name,
						"font" => "yugo",
						"weight" => "bold",
						"size" => "fs-24",
						"color" => "gray",
						"variable" => "leading-none"
					]); ?>
				</div>
				<?php get_template_part(TYPO, null, [
					"text" => $entry."<br>".$school,
					"size" => "fs-14",
					"variable" => "leading-normal"
				]); ?>
			</div>
			<div class="p-projectstory-intro__staff__his">
				<?php get_template_part(TYPO, null, [
					"text" => $profile,
					"size" => "fs-14",
					"variable" => "leading-[1.75]"
				]); ?>
			</div>
		</div>
	</div>
</div>