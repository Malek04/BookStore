<?php
    $title = "Books List";
    ob_start();
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-2">
    <h2> Books List</h2>
    <hr>
    <a href="index_admin.php?controller=book&action=create" class="btn btn-primary">Add</a>
    <table class="table table-hover" >
        <tr class="text-center">
            <th scope="col">id book</th>
            <th scope="col">id genre</th>
            <th scope="col">id author</th>
            <th scope="col">title</th>
            <th scope="col">length</th>
            <th scope="col">language</th>
            <th scope="col">price</th>
            <th scope="col">image</th>
            <th scope="col">description</th>
            <th scope="col">qte</th>
            <th scope="col">Action</th>
        </tr>
        <?php
            foreach($books as $book){
                ?>
                <tr class="text-center">
                    <td scope="row"><?=$book->get_id_book()?></td>
                    <td scope="row"><?=$book->get_id_genre()?></td>
                    <td scope="row"><?=$book->get_id_author()?></td>
                    <td scope="row"><?=$book->get_title()?></td>
                    <td scope="row"><?=$book->get_length()?></td>
                    <td scope="row"><?=$book->get_language()?></td>
                    <td scope="row"><?=$book->get_price()?></td>
                    <td scope="row"><img class="rounded" src="Images/cover/<?=$book->get_image()?>" width="100" height="150"/></td>
                    <td scope="row"><?=$book->get_description()?></td>
                    <td scope="row"><?=$book->get_qte()?></td>
                    <td scope="row">
                        <a href="index_admin.php?controller=book&action=edit&id=<?= $book->get_id_book() ?>" class="btn btn-success">Modify</a>
                        <br><br>
                        <a class="btn btn-danger" href="index_admin.php?controller=book&action=delete&id=<?= $book->get_id_book() ?>">Delete</a>
                    </td>
                <tr>
        <?php
            }?>
    </table>
    </div>
</body>
</html>