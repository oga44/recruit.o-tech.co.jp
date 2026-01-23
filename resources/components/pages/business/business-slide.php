<?php
	$href = $args["href"] ?? "";
	$img = $args["img"] ?? "";
	$hd = $args["hd"] ?? "";
	$name = $args["name"] ?? "";
	$shoulder = $args["shoulder"] ?? "";
	$desc = $args["desc"] ?? "";
?>

<a href="<?= $href ?>" class="m-basic-slider__slide swiper-slide anm-hover">
	<?php get_template_part(PICTURE, null, [
		"path" => $img,
		"alt" => "",
		"type" => "pill",
		"hover" => "scale"
	]); ?>
	<?php get_template_part(TYPO, null, [
		"component" => "h3",
		"class_change" => "h5",
		"text" => $hd,
		"size" => "sm",
		"variable" => "mt-[20px] md:mt-[24px] mb-[18px] md:mb-[20px]"
	]); ?>
	<?php /* get_template_part(ICON_DEP, null, [
		"text" => $shoulder,
		"no_space" => true,
	]); */ ?>
	<?php get_template_part(TYPO, null, [
		"text" => $name,
		"size" => "fs-24",
		"font" => "yugo",
		"weight" => "bold",
		"color" => "gray",
		"variable" => "leading-none mt-[10px] md:mt-[12px]"
	]); ?>
	<?php get_template_part(TYPO, null, [
		"text" => $desc,
		"size" => "fs-14",
		"variable" => "leading-normal mt-[10px] md:mt-[14px]"
	]); ?>
</a>