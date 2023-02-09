<?php

/**
 * query digunakan untuk parameter/fumgsi/method yang mengembalikan nilai
 * seperti select
 */


require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

// parameter
$sql = "SELECT id, name, email FROM customers";
$statement = $connection->query($sql);

// result dari fungsi query adalah PDOStatement berupa implement dari IteratorAggregate
foreach ($statement as $row) {
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "ID : $id" . PHP_EOL;
    echo "Name : $name" . PHP_EOL;
    echo "Email : $email" . PHP_EOL;
}

$connection = null;
