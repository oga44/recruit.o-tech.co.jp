<?php
	$date = $args["date"] ? $args["date"] : "";
	$text = $args["text"] ? $args["text"] : "";
?>

<div class="p-projectstory-info__flow__main__col">
	<div class="p-projectstory-info__flow__main__year">
		<?php get_template_part(TYPO, null, [
			"text" => $date,
			"font" => "yugo",
			"weight" => "bold",
			"size" => "fs-14",
			"variable" => "leading-none"
		]); ?>
	</div>
	<div class="p-projectstory-info__flow__main__desc">
		<?php get_template_part(TYPO, null, [
			"text" => $text,
			"font" => "yugo",
			"weight" => "bold",
			"variable" => "leading-none"
		]); ?>
	</div>
</div>