<?php
function get_image_info_from_url($img_url) {
	$img_id = attachment_url_to_postid($img_url);
	$img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);

	return [
		'url' => $img_url,
		'id' => $img_id,
		'alt' => $img_alt
	];
}