<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-2">
    <h2>Comments List</h2>
    <hr>
    <table class="table table-hover" >
        <tr class="text-center">
            <th scope="col">ID Comment</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Message</th>
        </tr>
        <?php
            foreach($comments as $comment){
                ?>
                <tr class="text-center">
                    <td scope="row"><?=$comment->get_id_comment()?></td>
                    <td scope="row"><?=$comment->get_fname()?></td>
                    <td scope="row"><?=$comment->get_lname()?></td>
                    <td scope="row"><?=$comment->get_email()?></td>
                    <td scope="row"><?=$comment->get_message()?></td>
                <tr>
        <?php
            }?>
    </table>
    </div>
</body>
</html>