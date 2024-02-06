<?php
  $date = date('l, F jS');
  $time = date('g:ia');

$response = [
  'date' => $date,
  'time' => $time
];

echo json_encode($response);