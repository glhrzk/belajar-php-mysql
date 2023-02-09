<?php

namespace Repository {

    use Model\Comment;

    interface CommentRepository
    {

        function insert(Comment $comment): Comment;

        function findById(int $id): ?Comment;

        function findAll(): array;
    }

    class CommentRepositoryImpl implements CommentRepository
    {


        // butuh koneksi untuk konek ke database, dibuat konstrak agar langsung di isi
        public function __construct(private \PDO $connection)
        {
        }


        function insert(Comment $comment): Comment
        {
            $sql = "INSERT INTO comments(email, comment) VALUES (?,?)";

            // membuat statement menjadi object prepare.
            $statement = $this->connection->prepare($sql);

            // statement memiliki method execute dari class prepare
            $statement->execute([$comment->getEmail(), $comment->getComment()]);

            $id = $this->connection->lastInsertId();
            $comment->setId($id);

            return $comment;
            // jadi mengembalikan coment dengan membuat object baru dengan ID terakhir yang dibuat
        }

        function findById(int $id): ?Comment
        {
            $sql = "SELECT * FROM comments WHERE id = ?";

            // membuat statement menjadi object prepare.
            $statement = $this->connection->prepare($sql);

            // statement memiliki method execute dari class prepare
            $statement->execute([$id]);

            // jika data ditemukan maka akan dibuat object Comment dengan data yang ditemukan tadi
            if ($row = $statement->fetch()) {
                return new Comment(
                    id: $row["id"],
                    email: $row["email"],
                    comment: $row["comment"],
                );
            } else {
                return \null;
                // jika data tidak ditemukan maka akan dibatu null
            }
        }

        function findAll(): array
        {
            $sql = "SELECT * FROM comments";

            // membuat statement menjadi object prepare.
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $array = [];

            // statement memiliki method fetch dari class prepare
            while ($row = $statement->fetch()) {
                // mencari data satu persatu, lalu data tersebut dibuat object, setelah dibuat object dimasukan ke array
                $array[] = new Comment(
                    id: $row["id"],
                    email: $row["email"],
                    comment: $row["comment"],
                );
            }

            return $array;
            // data yang sudah ditampung diatas maka dikembalikan ke array
        }
    }
}
