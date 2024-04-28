<?php

require __DIR__."/get_cart.php";

foreach ($cart_products as $product) {
  $query = "UPDATE my_products SET stock = stock - {$product["quantity"]} WHERE p_id = {$product["p_id"]}";
  mysqli_query($db, $query);
}

$order_date = date("Y/m/d");
mysqli_query($db, "UPDATE my_orders SET o_status = 'CO', order_date = '$order_date' WHERE order_id = $order_id");