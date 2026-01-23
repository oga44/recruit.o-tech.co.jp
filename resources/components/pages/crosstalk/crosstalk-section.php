<?php
	$hd = $args["hd"] ?? "";
	$q_num = $args["q_num"] ?? "";
	$q_text = $args["q_text"] ?? "";
	$q_img = $args["q_img"] ?? [];
	$q_img_path = $q_img["path"] ?? "";
	$q_img_alt = $q_img["alt"] ?? "";
	$q_items = $args["q_items"] ?? [];
	$contents = $args["contents"] ?? [];
	$lower_pic = $args["lower_pic"] ?? "";
?>

<section class="p-crosstalk__sec">
	<div class="p-crosstalk__hd-wrap">
		<?php get_template_part(TYPO, null, [
			"component" => "h2",
			"text" => $hd,
			"size" => "sm",
			"variable" => "p-crosstalk__hd"
		]); ?>
	</div>
	<div class="l-cont l-cont--sp-sm relative z-[1]">
		<div class="p-crosstalk__sec__head">
			<div class="p-crosstalk__sec__head__text">
				<p class="p-crosstalk__sec__head__q">Q<?= $q_num ?></p>
				<?php get_template_part(TYPO, null, [
					"text" => $q_text,
					"component" => "h3",
					"change_class" => "h4",
				]); ?>
			</div>
			<?php get_template_part(PICTURE, null, [
				"path" => $q_img_path,
				"alt" => $q_img_alt,
				"variable" => "p-crosstalk__sec__head__pic",
				"type" => "pill",
			]); ?>
		</div>
		<div class="p-crosstalk__sec__body">
			<div class="p-crosstalk__sec__inner">
				<div class="p-crosstalk__sec__row">
					<?php foreach ($q_items as $item): ?>
					<?php get_template_part(CROSSTALK_ITEM, null, [
						"img" => [
							"path" => $item["img"]["path"],
							"alt" => $item["img"]["alt"],
						],
						"name" => $item["name"],
						"descs" => $item["descs"],
					]); ?>
					<?php endforeach; ?>
				</div>
				<?php if (!empty($contents)): ?>
				<?php foreach ($contents as $cont): ?>
				<div class="p-crosstalk__sec__second">
					<div class="p-crosstalk__sec__second__head">
						<p class="p-crosstalk__sec__head__q">Q<?= $cont["q_num"] ?></p>
						<?php get_template_part(TYPO, null, [
							"text" => $cont["q_text"],
							"component" => "h3",
							"change_class" => "h4",
						]); ?>
					</div>
					<div class="p-crosstalk__sec__row">
						<?php foreach ($cont["q_items"] as $item): ?>
						<?php get_template_part(CROSSTALK_ITEM, null, [
							"img" => [
								"path" => $item["img"]["path"],
								"alt" => $item["img"]["alt"],
							],
							"name" => $item["name"],
							"descs" => $item["descs"],
						]); ?>
						<?php endforeach; ?>
					</div>
				</div>
				<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="p-crosstalk__sec__lower-pic">
			<?php get_template_part(PICTURE, null, [
				"path" => $lower_pic["path"],
				"alt" => $lower_pic["alt"],
				"type" => "pill",
			]); ?>
		</div>
	</div>
	<div class="p-crosstalk__sec__bg">
		<?php get_template_part(PICTURE, null, [
			"path" => "common/common-sec-bg.png",
			"alt" => "",
		]); ?>
	</div>
</section>