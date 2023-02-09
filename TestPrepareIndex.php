<?php

require_once __DIR__ . "/GetConnection.php";

/**
 * prepare statement adalah method di dalam class PDO yang memiliki method lagi
 * atau bisa disebut prepare staement adalah child dari class PDO, tetapi method dari class PDO tidak bisa diturunkan / private / finall method
 * 
 * didalam class prepare ada method binding param, ada execute, dan masih banyak yang lainnya
 * 
 */

$connection = getConnection();

$username = "admin";
$password = "admin";

/**
 * bisa binding menggunakan parameter atau indexing. index dimulai dengan angka 1
 */

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";

$statement = $connection->prepare($sql);
$statement->bindParam(1, $username);
$statement->bindParam(2, $password);
$statement->execute();

$success = false;
$find_user = null;

foreach ($statement as $row) {
    // suksess
    $success = true;
    $find_user = $row["username"];
}

if ($success == true) {
    echo "Sukses Login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal Login" . $find_user . PHP_EOL;
}

$connection = null;
