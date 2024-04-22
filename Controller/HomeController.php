<?php
    require_once __DIR__.'/../Model/Book.php';
    require_once __DIR__.'/../Model/DataBase.php';
    require_once __DIR__.'/../Model/Genre.php';
    require_once __DIR__.'/../Model/Author.php';
    class HomeController{

        public static function indexAction(){
            $books = Book::all();
        }
    }
?>