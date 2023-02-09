<?php

/**
 * secara default query query di php itu auto commit ke mysql/database, kita bisa menampung terlebih dahulu di database transaksi
 * jika ada yang salah di salah satu query maka akan di buat error
 * 
 * Database transaction digunakan untuk melakukan transaksi agar tidak terjadi kesalahan ketika membuat database/aplikasi Finance
 * di dalam PDO ada beberapa method yang bisa digunakan untuk database transacion
 * 
 * rollback artinya membatalkan tampungan dari query si sql, tetapi tidak membatalkan id auto incrementnya, AI akan terus bertambah walaupun transaksi error/di rollback
 */

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();
// diawali dengan begin


$connection->exec("INSERT INTO comments(email, comment) VALUES ('budi@gmail.com','Afaan tuh')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('budi@gmail.com','Afaan tuh')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('budi@gmail.com','Afaan tuh')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('budi@gmail.com','Afaan tuh')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('budi@gmail.com','Afaan tuh')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('budi@gmail.com','Afaan tuh')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('budi@gmail.com','Afaan tuh')");

$connection->rollBack();
// dikirim dengan comit