<?php
    require_once __DIR__.'/../Model/Book.php';
    require_once __DIR__.'/../Model/DataBase.php';
    class BookConrtoller{

        public static function indexAction(){
            $books = Book::all();
            require_once __DIR__.'/../View/book/layout.php';
        }

        public static function createAction(){
            require_once __DIR__.'/../View/book/create.php';
        }

        public static function storeAction($p){
            $b = Book::create($p);
        }
    
    }
?>