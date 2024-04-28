<?php
if (!isset($db)) {
  require __DIR__."/db_connect.php";
}

if (isset($_SESSION["customer_id"])) {
  $customer_id = $_SESSION["customer_id"];
  $query = "SELECT order_id FROM my_orders WHERE c_id = '$customer_id' AND o_status ='IP'";
  if ($rows = mysqli_query($db, $query)) {
    if (mysqli_num_rows($rows) > 0) {
      $row = mysqli_fetch_assoc($rows);
      $order_id = $row["order_id"];
      
      $query = 
            "SELECT p.p_id, p.name as name, p.image as image, p.price as price, i.qty as quantity
            FROM my_order_items AS i
            JOIN my_products AS p ON i.product_id = p.p_id
            WHERE i.order_id = $order_id";

      $data = mysqli_query($db, $query);
      $cart_products = mysqli_fetch_all($data, MYSQLI_ASSOC);  
    } else {
      $cart_products = [];
    }
  } else {
    die("Could not display cart, please try again later.");
  }

  $subtotal = 0;
  foreach ($cart_products as $product) {
    $subtotal = $subtotal + ($product["price"] * $product["quantity"]);
  }
} else {
  $cart_products = [];
  $subtotal = 0;
}