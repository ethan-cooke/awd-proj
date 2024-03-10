<?php
require($_SERVER["CONTEXT_DOCUMENT_ROOT"].'/../htpasswd/mysqldb.inc');
$db = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno() || $db == null) {
    $err = mysqli_connect_error();
    echo "Database connection failed: $err";
}

function fieldAlreadyExists($db, $tableName, $fieldName, $fieldValue) {
    $query = "SELECT COUNT(*) as count FROM $tableName WHERE $fieldName = '$fieldValue'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['count'] > 0;
}