<?php
   require_once __DIR__.'/../../Controller/AuthorController.php';
   AuthorConrtoller::storeAction($_POST);
   include __DIR__.'/../header.php';
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Added</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
   .center-text {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 75vh;
   }
</style>
</head>
<body>
   <div class="container center-text">
   <div class="row">
      <div class="col">
         <h1 class="text-center">Insertion operation performed successfully </h1>
      </div>
   </div>
   </div>
</body>
</html>
