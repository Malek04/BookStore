<?php
    require_once __DIR__.'/../Model/Author.php';
    require_once __DIR__.'/../Model/DataBase.php';
    class AuthorConrtoller{

        public static function indexAction(){
            $authors = Author::all();
            require_once __DIR__.'/../View/author/layout.php';
        }

        public static function createAction(){
            require_once __DIR__.'/../View/author/create.php';
        }

        public static function storeAction($p){
            $o = Author::create($p);
        }

    }
?>