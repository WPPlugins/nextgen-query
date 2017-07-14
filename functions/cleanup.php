<?php
function ngq_show_nextgen_version_func() {
  return false;
}

function ngq_sterilize() {
  if ( get_option('ngq_sterilize') == true ) {
    wp_dequeue_style('nextgen_gallery_related_images');
    wp_dequeue_script('photocrati_ajax');
    wp_dequeue_script('nextgen_lightbox_context');

    add_filter('show_nextgen_version', 'ngq_show_nextgen_version_func');
  }
}
add_action('wp_enqueue_scripts', 'ngq_sterilize', 999);
?>