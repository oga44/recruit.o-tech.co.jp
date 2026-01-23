<a href="<?= URL_NEW_GRADUATE ?>" class="m-conversion anm-hover">
	<div class="l-cont h-full">
		<div class="m-conversion__cont">
			<p class="m-conversion__text">仲間と共に挑む。<br>私たちだから築ける未来がある。</p>
			<div  class="m-conversion__entry">
				<p class="m-conversion__entry__text">
					<span class="m-conversion__entry__text--en">ENTRY</span>
				</p>
				<?php get_template_part(BUTTON_ARROW, null, [
					"size" => "lg",
					"arrow_size" => "xl",
					"color" => "white",
					"type" => "circle",
					"hover" => "forward-scale-reserve",
					"reserve_color" => "red"
				]); ?>
			</div>
		</div>
	</div>
	<?php get_template_part(PICTURE, null, [
		"path" => "common/conversion-bg.jpg",
		"alt" => "",
		"variable" => "m-conversion__bg",
		"hover" => "scale"
	]); ?>
</a>
