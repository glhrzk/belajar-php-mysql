<?php

require_once __DIR__ . "/GetConnection.php";

/**
 * fetch all adalah method yang ada di class prepare turunan PDO statement, maka hasilnya pun akan berupa object
 * fetch all digunakan untuk mengambil semua data, dan hasil dari pengembalian data berupa array
 */

$connection = getConnection();

$sql = "SELECT * FROM admin";
$statement = $connection->query($sql);

var_dump($statement->fetchAll());

$connection = null;
