<?php

/**
 * secara default query query di php itu auto commit ke mysql/database, kita bisa menampung terlebih dahulu di database transaksi
 * 
 * Database transaction digunakan untuk melakukan transaksi agar tidak terjadi kesalahan ketika membuat database/aplikasi Finance
 * di dalam PDO ada beberapa method yang bisa digunakan untuk database transacion
 */

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();
// diawali dengan begin


$connection->exec("INSERT INTO comments(email, comment) VALUES ('glhrzk@gmail.com','Afaan tuh')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('glhrzk@gmail.com','Afaan tuh')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('glhrzk@gmail.com','Afaan tuh')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('glhrzk@gmail.com','Afaan tuh')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('glhrzk@gmail.com','Afaan tuh')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('glhrzk@gmail.com','Afaan tuh')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('glhrzk@gmail.com','Afaan tuh')");

$connection->commit();
// dikirim dengan comit