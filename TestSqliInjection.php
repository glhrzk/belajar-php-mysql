<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

/*
$username = "admin' #";
$password = "salah";

bisa dimanipulasi bypass admin
*/

// mengatasinya bisa dengan dua cara, menggunakan quote dari method PDO atau pakai prepare statement

// implementasi menggunakan quote, tapi ribet
$username = $connection->quote("admin' #");
$password = $connection->quote("salah passti error");

$sql = "SELECT * FROM admin WHERE username = $username AND password = $password ";

// echo $sql;

$statement = $connection->query($sql);
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
