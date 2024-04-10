<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        foreach($g as $genre){
    ?>
    <div class="container mt-2">
        <form method="POST" action="index.php?controller=genre&action=update">
        <div class="mb-3">
            <label for="title" class="form-label">ID</label>
            <input type="text" class="form-control" name="id" id="id" value="<?=$genre->get_id_genre();?>"readonly >
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Genre</label>
            <input type="text" class="form-control" name="genre" id="genre" value="<?=$genre->get_genre();?>">
        </div>
        <button type="submit" class="btn btn-primary">Modify</button>
        </form>
    </div>
    <?php
        }
    ?>
</body>
</html>
<?php
?>