<?php

function get_order_id ($db, $customer_id) {
  $rows = mysqli_query($db, "SELECT order_id FROM my_orders WHERE c_id = '$customer_id' AND o_status = 'IP'");
  if (mysqli_num_rows($rows) == 0) {
    $query = "INSERT INTO my_orders (c_id, o_status) VAlUES ('$customer_id', 'IP')";
    mysqli_query($db, $query);
    return mysqli_insert_id($db);
  } else {
    $order_row = mysqli_fetch_assoc($rows);
    return $order_row["order_id"];
  }
}