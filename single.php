<?php
  $post = $wp_query->post;
	if (in_category('character')) {
    include(TEMPLATEPATH.'/single-character.php');
  } else {
    include(TEMPLATEPATH.'/single_default.php');
  }
?>
