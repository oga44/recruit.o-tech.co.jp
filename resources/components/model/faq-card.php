<?php
	$q = $args["q"] ?? "";
	$a = $args["a"] ?? "";
?>
<div class="m-faq-card js-accordion">
	<div class="m-faq-card__cont js-accordion-btn anm-hover">
		<div class="m-faq-card__text">
			<p class="m-faq-card__shoulder">Q</p>
			<p class="m-faq-card__desc m-faq-card__desc--q"><?= $q ?></p>
		</div>
		<?php get_template_part(ICON_TOGGLE); ?>
	</div>
	<div class="m-faq-card__cont--a js-accordion-target">
		<div class="m-faq-card__text m-faq-card__text--a js-accordion-target-spacer">
			<p class="m-faq-card__shoulder m-faq-card__shoulder--a">A</p>
			<p class="m-faq-card__desc m-faq-card__desc--a"><?= $a ?></p>
		</div>
	</div>
</div>