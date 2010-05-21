<?php
function checked($check) {
  $out = "";
  if($check == true || $check == 1) {
    $out .= "checked=\"checked\"";
  }
  return $out;
}

?>