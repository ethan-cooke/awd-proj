<?php

function clean ($str) {
  return htmlspecialchars(stripslashes(trim($str)));
}

function assign ($str) {
  if(isset($str) && !empty($str)) {
    return clean($str);
  }

  header("Location: ../pages/400.php");
  die();
}