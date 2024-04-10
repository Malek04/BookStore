<?php
    require_once __DIR__.'/../Model/User.php';
    require_once __DIR__.'/../Model/DataBase.php';
    class UserController{

        public static function indexAction(){
            $users = User::all();
            require_once __DIR__.'/../View/User/list_user.php';
        }

        public static function editAction(){
            $var=$_GET['id'];
            $u = user::view($var);
            require_once __DIR__.'/../View/User/edit.php';
        }
    
        public static function updateAction(){
            extract($_POST);
            User::edit($id, $fname, $lname, $username, $pc, $tel, $email, $pwd);
            echo '<script>window.location.href = "index.php?controller=user&action=list";</script>';
        }

        public static function deleteAction(){
            require_once __DIR__.'/../View/user/delete.php';
        }
    
        public static function destroyAction(){
            $id = $_GET['id'];
            user::delete($id);
            echo '<script>window.location.href = "index.php?controller=user&action=list";</script>';
        }
    }
?>