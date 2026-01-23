<?php if (is_home() || is_front_page() || is_page("front")): ?>
<script type="module" crossorigin src="<?= vite_src_js("front-page.js") ?>"></script>
<?php endif; ?>
<script type="module" crossorigin src="<?= vite_src_js("app.js") ?>"></script>