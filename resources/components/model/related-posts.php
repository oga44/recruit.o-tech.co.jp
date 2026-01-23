<?php
	$current_post_id = get_the_ID();
	$current_crosstalk_id = get_field('crosstalk_id', $current_post_id);

	$args = array(
		"post_type" => "crosstalk",
		"posts_per_page" => 2,
		"post__not_in" => array($current_post_id),
		'meta_key' => 'crosstalk_id',
		"orderby" => "meta_value_num",
		"order" => "ASC",
	);
	$related_posts = new WP_Query($args);

	if ($related_posts->have_posts()):
?>
<section class="m-other-links">
	<div class="l-cont">
		<?php get_template_part(TYPO, null, [
			"component" => "h2",
			"class_change" => "h3",
			"text" => "他のクロストークを見る",
		]); ?>
		<div class="m-other-links__row">
			<div class="m-other-links__cards">
				<?php
					while ($related_posts->have_posts()):
					$related_posts->the_post();

					$field = get_fields();
					$cross_id = sprintf('%02d', $field["crosstalk_id"]);
				?>
				<a href="<?= get_permalink() ?>" class="m-other-links__card-cross anm-hover">
					<?php get_template_part(PICTURE, null, [
						"path" => get_the_post_thumbnail_url(),
						"alt" => "",
						"variable" => "fp-cross__pic",
						"type" => "pill",
						"hover" => "scale",
					]); ?>
					<div class="m-other-links__card-cross__text">
						<p class="m-other-links__card-cross__num"><?= $cross_id ?></p>
						<div class="m-other-links__card-cross__body">
							<p class="m-other-links__card-cross__hd"><?= get_the_title() ?></p>
							<div class="m-other-links__card-cross__row">
								<?php get_template_part(TYPO, null, [
									"text" => $field["crosstalk_cross"]["crosstalk_cross_left"],
									"font" => "yugo",
									"weight" => "bold",
									"size" => "fs-14"
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" => "×",
									"font" => "yugo",
									"weight" => "bold",
									"size" => "fs-14"
								]); ?>
								<?php get_template_part(TYPO, null, [
									"text" =>$field["crosstalk_cross"]["crosstalk_cross_right"],
									"font" => "yugo",
									"weight" => "bold",
									"size" => "fs-14"
								]); ?>
							</div>
						</div>
					</div>
				</a>
				<?php endwhile; ?>
			</div>
			<div class="m-other-links__btn">
				<?php get_template_part(BUTTON, null, [
					"href" => URL_CROSSTALK,
					"text" => "ALL CROSS TALK",
					"font" => "en",
					"hover" => "text-forward-reserve",
					"arrow_hover" => "forward-reserve",
					"variable" => "justify-between md:justify-center",
				]); ?>
			</div>
		</div>
	</div>
</section>
<?php
	endif;
	wp_reset_postdata();
?>