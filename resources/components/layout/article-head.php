<?php
	$list = $args["list"] ?? [];
	$en = $args["en"] ?? "";
	$jp = $args["jp"] ?? "";
	$images = !empty($args["images"]) ? $args["images"] : "";
	$img_sp_size = !empty($args["img_sp_size"]) ? "article-head__pics--".$args["img_sp_size"] : "";

	$s_head = !empty($images) ? "article-head--with-pic" : "";
	$s_cont = !empty($images) ? "article-head__cont--with-pic" : "";

	$is_single = !empty($args["is_single"]) ? true : false;
	$s_head = $is_single ? "article-head--single" : $s_head;

	$cross = !empty($args["cross"]) ? $args["cross"] : [];
	$s_catch = !empty($cross) ? "article-head__catch--cross" : "";

	$message = !empty($args["message"]) ? $args["message"] : "";
	$s_head = !empty($message) ? "article-head--single" : $s_head;
	$s_catch = !empty($message) ? "article-head__catch--message" : $s_catch;

	$project = !empty($args["project"]) ? $args["project"] : [];
	$s_head = !empty($project) ? "article-head--with-pic" : $s_head;

	$catch = !empty($args["catch"]) ? $args["catch"] : [];
	$s_head = !empty($catch) ? "article-head--single" : $s_head;
	$s_catch = !empty($catch) ? "article-head__catch--catch" : $s_catch;

	$people = !empty($args["people"]) ? $args["people"] : [];
	$s_catch = !empty($people) ? "article-head__catch--people" : $s_catch;
?>

<div class="article-head <?= $s_head ?>">
	<div class="l-cont">
		<?php get_template_part(TOPICPATH, null, [
			"list" => $list
		]); ?>
		<div class="article-head__cont <?= $s_cont ?>">
			<div class="article-head__text">
				<?php if (!$is_single): ?>
					<?php get_template_part(ARTICLE_HEAD_HD, null, [
						"en" => $en,
						"jp" => $jp,
					]); ?>
				<?php else: ?>
				<p class="article-head__shoulder"><?= $en ?></p>
				<h1 class="article-head__hd"><?= $jp ?></h1>

				<?php if(!empty($cross)): ?>
				<div class="article-head__cross">
					<?php get_template_part(TYPO, null, [
						"text" => $cross["talk"][0],
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
						"text" => $cross["talk"][1],
						"font" => "yugo",
						"weight" => "bold",
						"size" => "fs-14"
					]); ?>
				</div>
				<?php endif; ?>

				<?php if (!empty($project)): ?>
				<div class="article-head__project-desc">
					<?php get_template_part(TYPO, null, [
						"text" => $project["desc"],
						"font" => "yugo",
						"weight" => "bold",
						"size" => "fs-14"
					]); ?>
				</div>
				<?php endif; ?>

				<?php endif; ?>
			</div>
			<?php if(!empty($images)): ?>
			<div class="article-head__pics <?= $img_sp_size ?>">
				<?php get_template_part(PICTURE, null, [
					"path" => $images,
					"alt" => "",
					"variable" => "article-head__pic",
					"type" => "pill",
				]); ?>
				<?php if(!empty($message)): ?>
				<p class="article-head__pics__text">
					<span class="article-head__pics__text__shoulder"><?= $message["shoulder"] ?></span>
					<span class="article-head__pics__text__name">
						<span><?= $message["name"] ?></span>
						<span class="article-head__pics__text__name-en"><?= $message["en"] ?></span>
					</span>
				</p>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php if ($is_single && empty($project)): ?>
	<div class="article-head__catch <?= $s_catch ?>">
		<div class="article-head__catch__cont">
			<div class="article-head__catch__main">
				<?php if(!empty($cross)): ?>
				<h2 class="article-head__catch__cross"><?= $cross["catch"]["main"] ?></h2>
				<?php endif; ?>

				<?php if(!empty($people)): ?>
					<div class="article-head__people">
						<div class="article-head__people__names">
							<?php get_template_part(ICON_DEP, null, [
								"text" => $people["shoulder"],
								"no_space" => true,
							]); ?>
							<p class="article-head__people__name"><?= $people["name"] ?></p>
						</div>
						<p class="article-head__people__prof">
							<span><?= $people["entry"] ?>年入社</span>
							<span><?= $people["school"] ?>卒</span>
						</p>
					</div>
				<?php endif; ?>
			</div>
			<?php
				if(!empty($cross) || !empty($catch)) {
					$desc = !empty($cross) ? $cross["catch"]["desc"] : $catch["desc"];

					get_template_part(TYPO, null, [
						"text" => $desc,
					]);
				}
			?>
		</div>
	</div>
	<?php elseif(!empty($message) || !empty($catch)): ?>
	<div class="article-head__catch <?= $s_catch ?>">
		<div class="article-head__catch__cont">
			<div class="article-head__catch__main">
				<?php if(!empty($message)): ?>
				<h2 class="article-head__catch__message"><?= $message["lead"] ?></h2>
				<?php endif; ?>

				<?php if(!empty($catch)) {
					$desc = !empty($cross) ? $cross["catch"]["desc"] : $catch["desc"];

					get_template_part(TYPO, null, [
						"text" => $desc,
					]);
				} ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>