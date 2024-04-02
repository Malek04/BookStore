<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
<?php
    include __DIR__.'/../header.php';
?> 
<div class="container center-text">
<div class="row">
    <div class="col">
        <h1 class="text-center">Do you really want to delete the Author</h1>
        <h1 class="text-center"><a class="btn btn-danger" href="destroy.php?id=<?=$_GET['id']?>">Delete Admin</a></h1>
        <h1 class="text-center"><a class="btn btn-warning" href="index.php">Cancel</a></h1>
    </div>
</div>
</div>
</body>
</html>
