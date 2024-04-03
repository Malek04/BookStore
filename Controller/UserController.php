<?php
    require_once __DIR__.'/../Model/User.php';
    require_once __DIR__.'/../Model/DataBase.php';
    class UserController{

        public static function indexAction(){
            $users = User::all();
            require_once __DIR__.'/../View/User/layout.php';
        }

        public static function editAction(){
            $u = user::view($_GET['id']);
            require_once __DIR__.'/../View/User/modify.php';
        }
    
        public static function updateAction(){
            extract($_POST);
            User::edit($id, $fname, $lname, $username, $pc, $tel, $email, $pwd);
            header('location:index.php');
        }

        public static function deleteAction(){
            $id= $_GET['id'];
            require_once __DIR__.'/../View/user/delete.php';
        }
    
        public static function destroyAction(){
            $id = $_GET['id'];
            user::delete($id);
            header('location:index.php');
        }
    }
?>