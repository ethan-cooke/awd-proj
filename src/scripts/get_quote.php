<?php
  $json = file_get_contents('resources/quotes.json');
  $quotes = json_decode($json);

  $randomIndex = array_rand($quotes);

  $quote = $quotes[$randomIndex];
  
  $response = [
    'adjective' => $quote['adjective'],
    'quote'=> $quote['quote'],
    'author'=> $quote['author']
  ];

  echo json_encode($response);