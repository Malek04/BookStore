<?php
    require_once __DIR__.'/../Model/User.php';
    require_once __DIR__.'/../Model/DataBase.php';
    class UserController{

        public static function indexAction(){
            $users = User::all();
            require_once __DIR__.'/../View/User/layout.php';
        }

    }
?>