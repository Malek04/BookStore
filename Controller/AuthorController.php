<?php
    require_once __DIR__.'/../Model/Author.php';
    require_once __DIR__.'/../Model/DataBase.php';
    require_once __DIR__.'/../Model/UploadFile.php';
    class AuthorConrtoller{

        public static function indexAction(){
            $authors = Author::all();
            require_once __DIR__.'/../View/author/layout.php';
        }
    
        public static function createAction(){
            require_once __DIR__.'/../View/author/create.php';
        }
    
        public static function storeAction($p) {
            $target_dir = __DIR__.'/../images/author/';
            $target_file_name = UploadFile::upload("image", $target_dir);
            
            if ($target_file_name !== null) {
                $_POST['image'] = $target_file_name;
            }
            $o = Author::create($p);
        }
        
        public static function deleteAction(){
            $id = $_GET['id'];
            require_once __DIR__.'/../View/author/delete.php';
        }
    
        public static function destroyAction(){
            $id = $_GET['id'];
            Author::delete($id);
            header('location:index.php');
        }
    
    }
    ?>