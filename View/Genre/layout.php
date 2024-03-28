<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-2">
    <h2>Genres List</h2>
    <hr>
    <a href="create.php" class="btn btn-primary">Add</a>
    <table class="table table-hover" >
        <tr class="text-center">
            <th scope="col">id genre</th>
            <th scope="col">genre</th>
            <th scope="col">action</th>
        </tr>
        <?php
            foreach($genres as $genre){
                ?>
                <tr class="text-center">
                    <td scope="row"><?=$genre->get_id_genre()?></td>
                    <td scope="row"><?=$genre->get_genre()?></td>
                    <td scope="row">
                        <a href="#" class="btn btn-success">Modify</a>
                        <a href="#" class="btn btn-danger">Action</a>
                    </td>
                <tr>
        <?php
            }?>
    </table>
    </div>
</body>
</html>