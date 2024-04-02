<?php
    require_once __DIR__.'/../Model/Admin.php';
    require_once __DIR__.'/../Model/DataBase.php';
    class AdminController{

        public static function indexAction(){
            $admins = Admin::all();
            require_once __DIR__.'/../View/admin/layout.php';
        }

        public static function createAction(){
            require_once __DIR__.'/../View/admin/create.php';
        }

        public static function storeAction($p){
            $o = Admin::create($p);
        }

        public static function deleteAction(){
            $id= $_GET['id'];
            require_once __DIR__.'/../View/admin/delete.php';
        }
    
        public static function destroyAction(){
            $id = $_GET['id'];
            Admin::delete($id);
            header('location:index.php');
        }
    }
?>