<?php
    require_once __DIR__.'/../Model/Genre.php';
    require_once __DIR__.'/../Model/DataBase.php';
    class GenreController{

        public static function indexAction(){
            $genres = Genre::all();
            require_once __DIR__.'/../View/Genre/layout.php';
        }

        public static function createAction(){
            require_once __DIR__.'/../View/Genre/create.php';
        }

        public static function storeAction($p){
            $g = Genre::create($p);
        }

        public static function deleteAction(){
            $id= $_GET['id'];
            require_once __DIR__.'/../View/genre/delete.php';
        }
    
        public static function destroyAction(){
            $id = $_GET['id'];
            genre::delete($id);
            header('location:index.php');
        }

    }
?>