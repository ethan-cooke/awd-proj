<?php
session_start();

require __DIR__."/db_connect.php";
require __DIR__."/cart_utils.php";

$customer_id = $_SESSION["customer_id"];
$order_id = get_order_id($db, $customer_id);
$product_id = $_GET['product'];
$query = "DELETE FROM my_order_items WHERE product_id = $product_id AND order_id = $order_id";
mysqli_query($db, $query);

header("Location: ../pages/shopping_cart.php");