<?php

// function url_for($script_path) {
//   // add the leading '/' if not present
//   if($script_path[0] != '/') {
//     $script_path = "/" . $script_path;
//   }
//   return WWW_ROOT . $script_path;
// }

function pid() {
  $page = $_GET['page'] ?? 1;
  return $page;
}

function ptitle($id) {
  $title = "page {$id}"; 
  return $title;
}
?>
