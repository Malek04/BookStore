<?php
    require_once __DIR__.'/../Model/Book.php';
    require_once __DIR__.'/../Model/DataBase.php';
    require_once __DIR__.'/../Model/UploadFile.php';
    class BookConrtoller{

        public static function indexAction(){
            $books = Book::all();
            require_once __DIR__.'/../View/book/layout.php';
        }

        public static function createAction(){
            require_once __DIR__.'/../View/book/create.php';
        }

        public static function storeAction($p){
            $target_dir = __DIR__.'/../Images/cover/';
            $target_file_name = UploadFile::upload("image", $target_dir);
            if ($target_file_name !== null) {
                $_POST['image'] = $target_file_name;
            }
            $b = Book::create($p);
        }

        public static function editAction(){
            $b = Book::view($_GET['id']);
            require_once __DIR__.'/../View/book/modify.php';
        }
    
        public static function updateAction(){
            extract($_POST);
            $target_dir = __DIR__.'/../images/cover/';
            $target_file_name = UploadFile::upload("image", $target_dir);
            if ($target_file_name !== null) {
                $_GET['image'] = $target_file_name;
            }
            Book::edit($id_book, $id_genre, $id_author, $title, $length, $language, $price, $image, $description, $qte);
            header('location:index.php');
        }

        public static function deleteAction(){
            $id= $_GET['id'];
            require_once __DIR__.'/../View/book/delete.php';
        }
    
        public static function destroyAction(){
            $id = $_GET['id'];
            book::delete($id);
            header('location:index.php');
        }
        
    }
?>