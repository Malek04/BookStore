<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
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
        <h1 class="text-center">Do you really want to delete the Admin</h1>
        <h1 class="text-center"><a class="btn btn-danger" href="index_admin.php?controller=admin&action=destroy&id=<?=$_GET['id']?>">Delete Admin</a></h1>
        <h1 class="text-center"><a class="btn btn-warning" href="index_admin.php?controller=admin&action=list">Cancel</a></h1>
    </div>
</div>
</div>
</body>
</html>
