<?php
require __DIR__."/db_connect.php";

$c_data = mysqli_query($db, "SELECT * FROM my_categories ORDER BY name");
$categories = mysqli_fetch_all($c_data, MYSQLI_ASSOC);

$query = "SELECT * FROM my_products";
if(isset($_GET["category"])) {
  $catCode = mysqli_real_escape_string($db, $_GET["category"]);
  $query .= " WHERE category = '$catCode'";
}
$data = mysqli_query($db, $query);
$products = mysqli_fetch_all($data, MYSQLI_ASSOC);