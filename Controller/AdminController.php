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

        public static function editAction(){
            $a = admin::view($_GET['id']);
            require_once __DIR__.'/../View/admin/modify.php';
        }
    
        public static function updateAction(){
            extract($_POST);
            Admin::edit($id, $fname, $lname, $admin_name, $pc, $tel, $email, $pwd);
            header('location:index.php');
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