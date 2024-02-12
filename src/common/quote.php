<?php
  $json = file_get_contents(__DIR__.'/../resources/quotes.json');
  $quotes = json_decode($json, true);

  $randomIndex = array_rand($quotes);

  $quote = $quotes[$randomIndex];
  $quoteText = "Today's {$quote["adjective"]} quote of the day: \"{$quote["quote"]}\" - {$quote["author"]}";

  echo $quoteText;