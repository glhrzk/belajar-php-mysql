<?php

/**
 * prepare statement adalah method di dalam class PDO yang memiliki method lagi
 * atau bisa disebut prepare staement adalah child dari class PDO, tetapi method dari class PDO tidak bisa diturunkan / private / finall method
 * 
 * didalam class prepare ada method binding param, ada execute, dan masih banyak yang lainnya
 * 
 */

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "glh";
$password = "glh";

// bisa juga dilakukan dengan query insert/update
$sql = "INSERT INTO admin(username, password) VALUES(:parameter1, :parameter2)";

$statement = $connection->prepare($sql);
$statement->bindParam("parameter1", $username);
$statement->bindParam("parameter2", $password);
$statement->execute(); // untuk mengeksekusi sql

$connection = null;
