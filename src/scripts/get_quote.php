<?php
include('/var/shared/vendor/autoload.php');
include($_SERVER["CONTEXT_DOCUMENT_ROOT"] . '/../htpasswd/mongodb.inc');
$client = new MongoDB\Client(
  "mongodb://$user:$passwd@$host/$db"
);

$collection = $client->$db->quotes_mongo;

$ids = $collection->distinct('_id');
srand(date('Ymd'));
shuffle($ids);
$randId = reset($ids);
$quote = $collection->findOne(['_id' => $randId]);

$quoteText = "Today's {$quote["adjective"]} quote of the day: \"{$quote["quote"]}\" - {$quote["author"]}";
echo $quoteText;