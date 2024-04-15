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
        foreach($a as $author){
    ?>
    <div class="container mt-2">
        <form method="POST" action="index_admin.php?controller=author&action=update" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">ID</label>
            <input type="text" class="form-control" name="id_author" id="id_author" value="<?=$author->get_id_author();?>"readonly >
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="<?=$author->get_name();?>" >
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" id="image" value="../../Images/author/<?=$author->get_image();?>" >
        </div>
        <div class="mb-3">
            <label for="about" class="form-label">About</label>
            <textarea id="about" name="about" rows="4" cols="173"><?=$author->get_about();?></textarea>
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