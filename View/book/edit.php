<?php
    include __DIR__.'/../header.php';
    require_once __DIR__.'/../../model/DataBase.php';
    require_once __DIR__.'/../../model/genre.php';
    require_once __DIR__.'/../../model/author.php';
    $genres = Genre::all();
    $authors = Author::all();
?>
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
    <div class="container mt-2">
        <form method="POST" action="index.php?controller=book&action=update">
        <?php 
            foreach($b as $book){
        ?>
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" name="id_book" id="id_book" readonly value="<?=$book->get_id_book()?>">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                </br>
                <select name="id_genre">
                <?php
                    foreach($genres as $genre){
                        ?>
                        <option value="<?=$genre->get_id_genre()?>"><?=$genre->get_genre()?></option>
                        <?php
                    }
                ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_author" class="form-label">Author</label>
                </br>
                <select name="id_author">
                <?php
                    foreach($authors as $author){
                        ?>
                        <option value="<?=$author->get_id_author()?>"><?=$author->get_name()?></option>
                        <?php
                    }
                ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="<?=$book->get_title()?>">
            </div>
            <div class="mb-3">
                <label for="length" class="form-label">length</label>
                <input type="number" class="form-control" name="length" id="length" value="<?=$book->get_length()?>">
            </div>
            <div class="mb-3">
                <label for="language" class="form-label">Language</label>
                <input type="text" class="form-control" name="language" id="language" value="<?=$book->get_language()?>">
            </div>
            <div class="mb-3">
                <label for="publisher" class="form-label">Publisher</label>
                <input type="text" class="form-control" name="publisher" id="publisher" value="<?=$book->get_publisher()?>">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" value="<?=$book->get_price()?>">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="image" value="<?=$book->get_image()?>">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Dscription</label>
                <textarea class="form-control" name="description" id="description" rows="5" cols="173"><?=$book->get_description()?>"</textarea>
            </div>
            <div class="mb-3">
                <label for="qte" class="form-label">Quantité</label>
                <input type="number" class="form-control" name="qte" id="qte" value="<?=$book->get_qte()?>">
            </div>
            <button type="submit" class="btn btn-primary">Modify</button>
            </form>
        <?php
            }
        ?>
    </div>
</body>
</html>