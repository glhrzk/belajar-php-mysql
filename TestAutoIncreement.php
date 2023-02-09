<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();


/**
 * menggunakan method yang ada di PDO yaitu lastInsertID untuk mengambil data terakhir yang dimasukan secara auto increement
 */
$connection->exec("INSERT INTO comments(email, comment) VALUES('galihrizki23@gmail.com', 'affan tuh')");
$id = $connection->lastInsertId();

echo $id;


$connection = null;
