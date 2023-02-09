<?php

/**
 * exec digunakan untuk parameter/fumgsi/method yang tidak mengemabalikan nilai
 * seperti insert, update, delete.
 */

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

// multiline string
$sql = <<< SQL
    INSERT INTO customers(id, name, email)
    VALUES ('rzk', 'rizki', 'rizki@test.com');
SQL;

$connection->exec($sql);
$connection = null;
