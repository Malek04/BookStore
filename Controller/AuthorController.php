<?php
    require_once __DIR__.'/../Model/Author.php';
    require_once __DIR__.'/../Model/DataBase.php';
    require_once __DIR__.'/../Model/UploadFile.php';
    class AuthorController{

        public static function indexAction(){
            $authors = Author::all();
            require_once __DIR__.'/../View/author/list_author.php';
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
            echo '<script>window.location.href = "index_admin.php?controller=author&action=list";</script>';
        }
        
        public static function editAction(){
            $a = author::view($_GET['id']);
            require_once __DIR__.'/../View/author/edit.php';
        }
    
        public static function updateAction(){
            extract($_POST);
            $target_dir = __DIR__.'/../images/author/';
            $target_file_name = UploadFile::upload("image", $target_dir);
            if ($target_file_name !== null) {
                $_GET['image'] = $target_file_name;
            }
            Author::edit($id_author, $name, $image, $about);
            echo '<script>window.location.href = "index_admin.php?controller=author&action=list";</script>';
        }

        public static function deleteAction(){
            $id = $_GET['id'];
            require_once __DIR__.'/../View/author/delete.php';
        }
    
        public static function destroyAction(){
            $id = $_GET['id'];
            Author::delete($id);
            echo '<script>window.location.href = "index_admin.php?controller=author&action=list";</script>';
        }
    
    }
    ?>