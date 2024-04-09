<?php
session_start();

require __DIR__."/db_connect.php";
require __DIR__."/cart_utils.php";

$customer_id = $_SESSION["customer_id"];
$order_id = get_order_id($db, $customer_id);
header("Location: ../pages/shopping_cart.php");