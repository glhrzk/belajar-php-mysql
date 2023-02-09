<?php

namespace Model {

    /**
     * ini adalah reseprentasi dari table comment, di OOP adalah seperti ini
     */

    class Comment
    {

        public function __construct(
            private ?int $id = \null,
            private ?string $email = \null,
            private ?string $comment = \null
            // menggunakan fitur baru di php 8 yaitu, atribut promote to properties
        ) {
        }


        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getComment()
        {
            return $this->comment;
        }

        public function setComment($comment)
        {
            $this->comment = $comment;
        }
    }
}
