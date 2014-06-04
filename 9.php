<?php
	$post_max_size = "16M";
	$last = $post_max_size{strlen($post_max_size)-1};
	$post_max_size = (integer) $post_max_size;
	switch ($last):
		case "G": $post_max_size *= 1024;
		case "M": $post_max_size *= 1024;
		case "K": $post_max_size *= 1024;
	endswitch;
	echo "$post_max_size\n";
?>
