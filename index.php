<?php
    require_once __DIR__.'/Controller/BookController.php';
    require_once __DIR__.'/Controller/AuthorController.php';     
    BookConrtoller::indexAction();
    AuthorConrtoller::index();
?>