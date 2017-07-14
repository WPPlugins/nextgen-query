<?php
function compareOrder($a, $b) {
  return $a->_ngiw->_cache['sortorder'] - $b->_ngiw->_cache['sortorder'];
}

function ngq_singlepic($image_id){
  global $nggdb;
  $image = $nggdb->find_image($image_id);
  return $image->_ngiw->_cache;
}

function ngq_gallery($gallery_id){
  global $nggdb;
  $images = $nggdb->get_gallery($gallery_id, 'pid', 'ASC', true, 0, 0);
  usort($images, 'compareOrder');

  $only_images = array();
  foreach ( $images as $i => $ii ) {
    $only_images[$i] = $ii->_ngiw->_cache;
  }

  return $only_images;
}
?>