<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-2">
    <h2>Authors List</h2>
    <hr>
    <a href="create.php" class="btn btn-primary">Add</a>
    <table class="table table-hover" >
        <tr class="text-center">
            <th scope="col">ID Author</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">About</th>
            <th scope="col">Action</th>
        </tr>
        <?php
            foreach($authors as $author){
                ?>
                <tr class="text-center">
                    <td scope="row"><?=$author->get_id_author()?></td>
                    <td scope="row"><?=$author->get_name()?></td>
                    <td scope="row"><img class="rounded" src="../../Images/author/<?=$author->get_image()?>" width="100" height="150"/></td>
                    <td scope="row"><?=$author->get_about()?></td>
                    <td scope="row">
                        <a href="#" class="btn btn-success">Modify</a>
                        <br><br>
                        <a href="delete.php?id=<?= $author->get_id_author() ?>" class="btn btn-danger">Delete</a>
                    </td>
                <tr>
        <?php
            }?>
    </table>
    </div>
</body>
</html>