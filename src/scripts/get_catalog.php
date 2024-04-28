<?php
require __DIR__."/db_connect.php";

$db = new TimewarpDb();

$categories = $db->query("SELECT * FROM categories ORDER BY name")->fetchArray();

$query = "SELECT * FROM products";
if(isset($_GET["category"])) {
  $catCode = $db->escapeString($_GET["category"]);
  $query .= " WHERE category = '$catCode'";
}

$products = $db->query($query)->fetchArray();