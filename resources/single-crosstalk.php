<?php
	// wp setting
	$field = get_fields();

	$full_url = get_permalink();
	$url_parts = explode('/', rtrim($full_url, '/'));
	$slug = end($url_parts);

	$original_title = get_the_title();
	$format_title = str_replace("&lt;br>", "　", $original_title);
	$format_title2 = str_replace("&lt;br>", "<br>", $original_title);

	$cross_id = sprintf('%02d', $field["crosstalk_id"]);
	$cross_cross = [$field["crosstalk_cross"]["crosstalk_cross_left"], $field["crosstalk_cross"]["crosstalk_cross_right"]];

	$page_title = [$format_title, NAME_CROSSTALK];
	$page_desc = "未経験で知識も無い業界に就職するのは不安ですよね。研修制度が手厚いという点に惹かれて入社した社員も多数おりますが、実際のところ入社後の技術者研修ってハードなの？１年間でどんなことが身につくの？という疑問を、ちょうど１年間の技術者研修を終えたばかりの若手社員３人に訊いてみました。";

	$page_canonical = URL_CROSSTALK.$slug."/";
	get_header();
?>
<article class="p-crosstalk">
	<?php get_template_part(ARTICLE_HEAD, null, [
		"list" => [
			[
				"href" => URL_HOME,
				"name" => "HOME"
			],
			[
				"href" => URL_INTERVIEW,
				"name" => NAME_INTERVIEW
			],
			[
				"href" => URL_CROSSTALK,
				"name" => NAME_CROSSTALK
			],
			[
				"href" => "",
				"name" => "CROSS TALK ".$cross_id
			],
		],
		"is_single" => true,
		"en" => "CROSS TALK ".$cross_id,
		"jp" => $format_title2,
		"cross" => [
			"talk" => $cross_cross,
			"catch" => [
				"main" => $field["crosstalk_mv"]["crosstalk_mv_title"],
				"desc" => $field["crosstalk_mv"]["crosstalk_mv_desc"]
			]
		],
		"images" => get_the_post_thumbnail_url(),
	]); ?>
	<div class="article-body">
		<div class="p-crosstalk__peoples">
			<div class="l-cont--sm l-cont--sp-sm">
				<div class="p-crosstalk__peoples__row">
					<?php
						$peoples = $field["crosstalk_people"];
						foreach($peoples as $item):
						$img_url = $item["crosstalk_people_pic"];
						$image_info = get_image_info_from_url($img_url);
					?>
					<div class="p-crosstalk__people">
						<?php get_template_part(PICTURE, null, [
							"path" => $img_url,
							"alt" => $image_info["alt"],
							"variable" => "p-crosstalk__people__pic",
						]); ?>
						<div>
							<?php get_template_part(ICON_DEP, null, [
								"text" => $item["crosstalk_people_dept"],
								"no_space" => true,
							]); ?>
							<p class="p-crosstalk__people__name"><?= $item["crosstalk_people_name"] ?></p>
							<p class="p-crosstalk__people__year"><?= $item["crosstalk_people_entry"] ?>年入社</p>
							<p class="p-crosstalk__people__school"><?= $item["crosstalk_people_school"] ?>卒</p>
						</div>
					</div>
					<?php
						endforeach;
					?>
				</div>
			</div>
		</div>

		<?php
			$bodies = $field["crosstalk_body"];

			foreach ($bodies as $body):
				$body_title = $body["crosstalk_body_title"];
				$last_img = $body["crosstalk_last_picture"];
				$last_image_info = get_image_info_from_url($last_img);

				// first talk
				$details = $body["crosstalk_detail"];
				$first = $details[0];
				$first_q_num = $first["crosstalk_q_num"];
				$first_subject = $first["crosstalk_subject"];
				$first_img = $first["crosstalk_detail_pic"];
				$first_img_info = get_image_info_from_url($first_img);
				$first_talks = $first["crosstalk_talks"];

				$filtered_details = array_filter($details, function($detail) {
					return !isset($detail['crosstalk_detail_pic']) || empty($detail['crosstalk_detail_pic']);
				});
		?>
		<section class="p-crosstalk__sec">
			<div class="p-crosstalk__hd-wrap">
				<?php get_template_part(TYPO, null, [
					"component" => "h2",
					"text" => $body_title,
					"size" => "sm",
					"variable" => "p-crosstalk__hd"
				]); ?>
			</div>
			<div class="l-cont l-cont--sp-sm relative z-[1]">
				<div class="p-crosstalk__sec__head">
					<div class="p-crosstalk__sec__head__text">
						<p class="p-crosstalk__sec__head__q">Q<?= $first_q_num ?></p>
						<?php get_template_part(TYPO, null, [
							"text" => $first_subject,
							"component" => "h3",
							"change_class" => "h4",
						]); ?>
					</div>
					<?php get_template_part(PICTURE, null, [
						"path" => $first_img,
						"alt" => $first_img_info["alt"],
						"variable" => "p-crosstalk__sec__head__pic",
						"type" => "pill",
					]); ?>
				</div>
				<div class="p-crosstalk__sec__body">
					<div class="p-crosstalk__sec__inner">
						<div class="p-crosstalk__sec__row">
							<?php
								foreach ($first_talks as $item):
									$talk_img = $item["crosstalk_talk_pic"];
									$talk_alt = get_image_info_from_url($talk_img)["alt"];
									$talk_name = $item["crosstalk_talk_name"];
									$talk_body = $item["crosstalk_talk_body"];
							?>
							<?php get_template_part(CROSSTALK_ITEM, null, [
								"img" => [
									"path" => $talk_img,
									"alt" => $talk_alt,
								],
								"name" => $talk_name,
								"desc" => $talk_body,
							]); ?>
							<?php endforeach; ?>
						</div>
						<?php if (!empty($second) || isset($second)): ?>
						<?php
							foreach ($filtered_details as $detail):
								$q_num = $detail["crosstalk_q_num"];
								$subject = $detail["crosstalk_subject"];
								$talks = $detail["crosstalk_talks"];
						?>
						<div class="p-crosstalk__sec__second">
							<div class="p-crosstalk__sec__second__head">
								<p class="p-crosstalk__sec__head__q">Q<?= $q_num ?></p>
								<?php get_template_part(TYPO, null, [
									"text" => $subject,
									"component" => "h3",
									"change_class" => "h4",
								]); ?>
							</div>
							<div class="p-crosstalk__sec__row">
								<?php
									foreach ($talks as $item):
										$talk_img = $item["crosstalk_talk_pic"];
										$talk_alt = get_image_info_from_url($talk_img)["alt"];
										$talk_name = $item["crosstalk_talk_name"];
										$talk_body = $item["crosstalk_talk_body"];
								?>
								<?php get_template_part(CROSSTALK_ITEM, null, [
									"img" => [
										"path" => $talk_img,
										"alt" => $talk_alt,
									],
									"name" => $talk_name,
									"desc" => $talk_body,
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
						"path" => $last_img,
						"alt" => $last_image_info["alt"],
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
		<?php endforeach; ?>

		<?php get_template_part(RELATED_POSTS); ?>
	</div>
</article>
<?php get_footer(); ?>