<?php
    require_once __DIR__.'/../Model/Comment.php';
    require_once __DIR__.'/../Model/DataBase.php';
    class CommentController{

        public static function indexAction(){
            $comments = Comment::all();
            require_once __DIR__.'/../View/Comments/list_comment.php';
        }

        public static function storeAction($p){
            $c = Comment::create($p);
            echo '<script>window.location.href = "index.php";</script>';
        }
        
    }
?>