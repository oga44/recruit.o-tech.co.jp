<?php get_template_part('components/model/information'); ?>
<?php if(is_home() || is_front_page() || is_page("front")): ?>
</div>
<?php endif; ?>
<?php get_template_part('components/model/conversion'); ?>
</main>



<footer class="footer">
	<div class="l-cont--sm">
		<div class="footer__cont">
			<div class="footer__main">
				<div class="footer__logos">
					<p class="footer__logo"><img src=<?= URL_LOGO ?> alt=<?= NAME_CORP ?>></p>
					<p class="footer__site-title"><img src=<?= URL_SITE_TITLE ?> alt="RECRUITING SITE"></p>
				</div>
				<dl class="footer__info">
					<dt class="footer__corp"><?= NAME_CORP ?></dt>
					<dd class="footer__info__desc">
						〒135-0016<br>東京都江東区東陽2-4-2（新宮ビル内）<br>TEL <a class="footer__tel" href="tel:03-3699-0411">03-3699-0411</a> / FAX 03-3360-6202
					</dd>
				</dl>
				<div class="footer__btn">
					<?php get_template_part(BUTTON, null, [
						"href" => URL_CORP,
						"text" => "コーポレートサイト",
						"arrow_type" => "circle",
						"is_external" => true,
						"hover_color" => "transparent",
						"hover" => "icon-reserve",
					]); ?>
				</div>
			</div>
			<div class="footer__nav">
				<?php get_template_part(NAV_BASIC); ?>
			</div>
		</div>
	</div>
	<div class="l-cont--lg">
		<div class="footer__lower">
			<p class="footer__copyright">&copy; 2023 OTEC All Rights Reserved.</p>
			<div class="footer__others">
				<a href="<?= URL_PRIVACY ?>" target="_blank" class="footer__other__link">個人情報保護方針</a>
				<a href="<?= URL_TERMS ?>" target="_blank" class="footer__other__link">利用規約</a>
			</div>
		</div>
	</div>
</footer>
</div><!-- /.wrapper -->
<div class="wrapper-bg js-bg-change">
	<div class="wrapper-bg__common js-bg-change-bg" data-section="common">
		<div class="wrapper-bg__common__body wrapper-bg__common__bg">
			<?php get_template_part(PICTURE, null, [
				"path" => "common/common-bg.png",
				"sp" => "common/common-bg-sp.png",
				"alt" => "",
			]); ?>
		</div>
		<div class="wrapper-bg__common__body wrapper-bg__common__ele">
			<?php get_template_part(PICTURE, null, [
				"path" => "common/common-bg-o.png",
				"sp" => "common/common-bg-o-sp.png",
				"alt" => "",
			]); ?>
		</div>
	</div>
	<?php if (is_home() || is_front_page() || is_page("front")): ?>
	<div class="wrapper-bg__about js-bg-change-bg" data-section="about">
		<div class="wrapper-bg__about--child js-bg-change-child is-show">
			<?php get_template_part(PICTURE, null, [
				"path" => "front-page/about-bg-01.jpg",
				"alt" => "",
			]); ?>
		</div>
		<div class="wrapper-bg__about--child js-bg-change-child">
			<?php get_template_part(PICTURE, null, [
				"path" => "front-page/about-bg-02.jpg",
				"alt" => "",
			]); ?>
		</div>
		<div class="wrapper-bg__about--child js-bg-change-child">
			<?php get_template_part(PICTURE, null, [
				"path" => "front-page/about-bg-03.jpg",
				"alt" => "",
			]); ?>
		</div>
	</div>
	<div class="wrapper-bg__black js-bg-change-bg" data-section="black">
		<div class="wrapper-bg__black--body"></div>
	</div>
	<?php endif; ?>
</div>
<?php wp_footer(); ?>
<?php get_template_part('components/meta/js'); ?>
</body>
</html>
