<?php
    require_once __DIR__.'/../Model/Admin.php';
    require_once __DIR__.'/../Model/DataBase.php';
    class AdminController{

        public static function indexAction(){
            $admins = Admin::all();
            require_once __DIR__.'/../View/admin/list_admin.php';
        }

        public static function createAction(){
            require_once __DIR__.'/../View/admin/create.php';
        }

        public static function storeAction($p){
            $o = Admin::create($p);
            echo '<script>window.location.href = "index.php?controller=admin&action=list";</script>';
        }

        public static function editAction(){
            $var=$_GET['id'];
            $a = Admin::view($var);
            require_once __DIR__.'/../View/admin/edit.php';
        }
    
        public static function updateAction(){
            extract($_POST);
            Admin::edit($id, $fname, $lname, $admin_name, $pc, $tel, $email, $pwd);
            echo '<script>window.location.href = "index.php?controller=admin&action=list";</script>';
        }

        public static function deleteAction(){
            require_once __DIR__.'/../View/admin/delete.php';
        }
    
        public static function destroyAction(){
            $id = $_GET['id'];
            Admin::delete($id);
            echo '<script>window.location.href = "index.php?controller=admin&action=list";</script>';
        }
    }
?>