<?php
    require_once __DIR__.'/../Model/Genre.php';
    require_once __DIR__.'/../Model/DataBase.php';
    class GenreController{

        public static function indexAction(){
            $genres = Genre::all();
            require_once __DIR__.'/../View/Genre/list_genre.php';
        }

        public static function createAction(){
            require_once __DIR__.'/../View/Genre/create.php';
        }

        public static function storeAction($p){
            $g = Genre::create($p);
            echo '<script>window.location.href = "index_admin.php?controller=genre&action=list";</script>';
        }

        public static function editAction(){
            $var = $_GET['id'];
            $g = Genre::view($var);
            require_once __DIR__.'/../View/genre/edit.php';
        }
    
        public static function updateAction(){
            extract($_POST);
            Genre::edit($id, $genre);
            echo '<script>window.location.href = "index_admin.php?controller=genre&action=list";</script>';
        }

        public static function deleteAction(){
            require_once __DIR__.'/../View/genre/delete.php';
        }
    
        public static function destroyAction(){
            $id = $_GET['id'];
            genre::delete($id);
            echo '<script>window.location.href = "index_admin.php?controller=genre&action=list";</script>';
        }

    }
?>