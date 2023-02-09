<?php

require_once __DIR__ . "/GetConnection.php";
require_once __DIR__ . "/Model/Comment.php";
require_once __DIR__ . "/Repository/CommentRepository.php";

use Repository\CommentRepositoryImpl;
use Model\Comment;

// membuat koneksi database menggunakan PDO Statement
$connection = getConnection();


// membuat object RepositoryComent menggunakan data yang ada di $connection
$repository = new CommentRepositoryImpl($connection);

// insert data
// $comment = new Comment(email: "repository@test.com", comment: "Hay");
// $newComent = $repository->insert($comment);
// var_dump($newComent->getId());


// // cek data by id
// $comment = $repository->findById(25);
// var_dump($comment);


// cek semua data
$comments = $repository->findAll();
var_dump($comments);


// menutup koneksi agar tidak terjadi koneksi leak
$connection = null;
