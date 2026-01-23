<?php

add_filter('upload_mimes', function($mimes) { $mimes['avif'] = 'image/avif'; return $mimes; });
add_filter('ext2type', function($types) { $types['image'][] = 'avif'; return $types; });
add_filter('wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
$filetype = wp_check_filetype( $filename, $mimes );
return ['ext'=>$filetype['ext'], 'type'=>$filetype['type'], 'proper_filename'=>$data['proper_filename']];
}, 10, 4 );