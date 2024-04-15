<?php
    require_once __DIR__.'/../Model/Book.php';
    require_once __DIR__.'/../Model/DataBase.php';
    require_once __DIR__.'/../Model/UploadFile.php';
    class BookController{

        public static function indexAction(){
            $books = Book::all();
            require_once __DIR__.'/../View/book/list_book.php';
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
            echo '<script>window.location.href = "index_admin.php?controller=book&action=list";</script>';
        }

        public static function editAction(){
            $b = Book::view($_GET['id']);
            require_once __DIR__.'/../View/book/edit.php';
        }
    
        public static function updateAction(){
            extract($_POST);
            $target_dir = __DIR__.'/../images/cover/';
            $target_file_name = UploadFile::upload("image", $target_dir);
            if ($target_file_name !== null) {
                $_GET['image'] = $target_file_name;
            }
            Book::edit($id_book, $id_genre, $id_author, $title, $length, $language, $price, $image, $description, $qte);
            echo '<script>window.location.href = "index_admin.php?controller=book&action=list";</script>';
        }

        public static function deleteAction(){
            require_once __DIR__.'/../View/book/delete.php';
        }
    
        public static function destroyAction(){
            $id = $_GET['id'];
            book::delete($id);
            echo '<script>window.location.href = "index_admin.php?controller=book&action=list";</script>';
        }
        
    }
?>