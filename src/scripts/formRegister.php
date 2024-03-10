<?php
require __DIR__."/db_connect.php";
require __DIR__."/form_utils.php";
require __DIR__."/post_only.php";


$data = array(
  "prefix" => assign($_POST["prefix"]),
  "first_name" => assign($_POST["firstName"]),
  "initial" => assign($_POST["middleInitial"]),
  "last_name" => assign($_POST["lastName"]),
  "gender" => assign($_POST["gender"]),
  "phone" => assign($_POST["phone"]),
  "email" => assign($_POST["email"]),
  "address" => assign($_POST["address"]),
  "city" => assign($_POST["city"]),
  "region" => assign($_POST["region"]),
  "postal_code" => assign($_POST["postalCode"]),
  "username" => assign($_POST["userName"]),
  "password" => assign($_POST["password"]),
  "registration_datetime" => date("c")
);

$regex = array(
  "prefix" => "/^(Mrs\.|Ms\.|Mr\.|Dr\.)$/",
  "first_name" => "/^[A-Z][A-Za-z]*$/",
  "initial" => "/^[A-Za-z]*$/",
  "last_name" => "/^[A-Z][A-Za-z]*$/",
  "gender" => "/^[FMO]$/",
  "phone" => "/^(\d{3}-)?\d{3}-\d{4}$/",
  "email" => "/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$/",
  "address" => "/^.+$/",
  "city" => "/^.+$/",
  "region" => "/^.+$/",
  "postal_code" => "/^[A-Za-z]\d[A-Za-z] \d[A-Za-z]\d$/",
  "username" => "/^[a-zA-Z0-9_]+$/",
  "password" => "/^.+$/"
);

foreach ($regex as $field => $pattern) {
  if (!preg_match($pattern, $data[$field])) {
    die("Bad $field");
  }
}

if (fieldAlreadyExists($db, "my_Customers", "email", $data["email"])) {
  die("Email already exists");
}

if (fieldAlreadyExists($db, "my_Customers", "username", $data["username"])) {
  die("User already exists");
}

if ($data["password"] != assign($_POST["confirmPassword"])) {
  die("Passwords do not match");
}

$data["password"] = password_hash($data["password"], PASSWORD_DEFAULT);
$columns = implode(', ', array_keys($data));
$values = "'".implode("', '", $data)."'";
$query = "INSERT INTO my_Customers ($columns) VALUES ($values)";
if (mysqli_query($db, $query)) {
  header("Location: ../pages/register_success.php");
} else {
  die("Unable to complete registration");
}