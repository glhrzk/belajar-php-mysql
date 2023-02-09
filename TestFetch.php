<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = :parameter1 AND password = :parameter2";

$statement = $connection->prepare($sql);
$statement->bindParam("parameter1", $username);
$statement->bindParam("parameter2", $password);
$statement->execute(); // untuk mengeksekusi sql


/**
 * fetch adalah method yang ada di class prepare PDO statement, maka hasilnya pun akan berupa object
 * fetch digunakan untuk mengambil satu data saja, jadi jika dicek lagi saja.
 */

$row = $statement->fetch();
if ($row) {
    echo "Sukses login: " . $row["username"] . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

var_dump($statement->fetch());

$connection = null;
