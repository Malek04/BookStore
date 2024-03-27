<?php
    require_once __DIR__.'/../Model/Author.php';
    require_once __DIR__.'/../Model/DataBase.php';
    class AuthorConrtoller{

        public static function index(){
            $authors = Author::all();
            require_once __DIR__.'/../View/author/layout.php';
        }

    }
?>