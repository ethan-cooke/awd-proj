<?php

if($_SERVER["REQUEST_METHOD"] !== "POST"){
  header("Location: ../pages/400.php");
  exit;
}