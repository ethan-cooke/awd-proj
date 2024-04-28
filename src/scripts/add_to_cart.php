<?php
session_start();

require __DIR__."/db_connect.php";
require __DIR__."/form_utils.php";
require __DIR__."/cart_utils.php";

$product_id = assign($_POST["product"]);
$qty = assign($_POST["qty"]);

if(isset($_SESSION["customer_id"])) {
  $customer_id = $_SESSION["customer_id"];
  $order_id = get_order_id($db, $customer_id);
  $query = "INSERT INTO my_order_items (order_id, product_id, qty) VALUES ($order_id, $product_id, $qty)";
  if (mysqli_query($db, $query)) {
    header("Location: ../pages/shopping_cart.php");
  } else {
    die("Unable to complete registration");
  }
} else {
  header("Location: ../pages/login.php");
}



