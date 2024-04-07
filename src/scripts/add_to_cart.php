<?php
session_start();

require __DIR__."/db_connect.php";
require __DIR__."/form_utils.php";

$product_id = assign($_POST["product"]);
$qty = assign($_POST["qty"]);

$customer_id = $_SESSION["customer_id"];
if ($rows = mysqli_query($db, "SELECT order_id FROM my_orders WHERE c_id = '$customer_id' AND o_status = 'IP'")) {
  if (mysqli_num_rows($rows) == 0) {
    $query = "INSERT INTO my_orders (c_id, o_status) VAlUES ('$customer_id', 'IP')";
    mysqli_query($db, $query);
    $order_id = mysqli_insert_id($db);
  } else {
    $order_row = mysqli_fetch_assoc($rows);
    $order_id = $order_row["order_id"];
  }
  $query = "INSERT INTO my_order_items (order_id, product_id, qty) VALUES ($order_id, $product_id, $qty)";
  if (mysqli_query($db, $query)) {
    header("Location: ../pages/shopping_cart.php");
  } else {
    die("Unable to complete registration");
  }
} else {
  die("Could not add to cart, please try again later.");
}

