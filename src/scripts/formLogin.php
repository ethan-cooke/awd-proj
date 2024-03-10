<?php
session_start();

require __DIR__."/db_connect.php";
require __DIR__."/form_utils.php";
require __DIR__."/post_only.php";

function populate_session ($fields, $data) {
  foreach ($fields as $field) {
    $_SESSION[$field] = $data[$field];
  }
}

$username = assign($_POST["userName"]);
$password = assign($_POST["password"]);

if (!preg_match("/^[a-zA-Z0-9_]+$/", $username)) {
  die("Bad username or password");
}

if (!preg_match("/^.+$/", $password)) {
  die("Bad username or password");
}

$query = "SELECT * FROM my_Customers WHERE username = '$username'";
if ($rows = mysqli_query($db, $query)) {
  if (mysqli_num_rows($rows) == 0) {
    header("Location: ../pages/login.php?retry=true");
  }
  $row = mysqli_fetch_assoc($rows);
  if (password_verify($password, $row["password"])) {
    $fields = array("customer_id", "first_name", "last_name");
    populate_session($fields, $row);
    header("Location: ../my_business.php");
  } else {
    header("Location: ../pages/login.php?retry=true");
  }
} else {
  die("Could not complete login, please try again later.");
}