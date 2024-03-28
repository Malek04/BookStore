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
    <h2>Users List</h2>
    <hr>
    <table class="table table-hover" >
        <tr class="text-center">
            <th scope="col">ID User</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">User_Name</th>
            <th scope="col">Postal Code</th>
            <th scope="col">Telephone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
        </tr>
        <?php
            foreach($users as $user){
                ?>
                <tr class="text-center">
                    <td scope="row"><?=$user->get_id_user()?></td>
                    <td scope="row"><?=$user->get_fname()?></td>
                    <td scope="row"><?=$user->get_lname()?></td>
                    <td scope="row"><?=$user->get_username()?></td>
                    <td scope="row"><?=$user->get_pc()?></td>
                    <td scope="row"><?=$user->get_tel()?></td>
                    <td scope="row"><?=$user->get_email()?></td>
                    <td scope="row"><?=$user->get_pwd()?></td>
                    <td scope="row">
                        <a href="#" class="btn btn-success">Modify</a>  
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                <tr>
        <?php
            }?>
    </table>
    </div>
</body>
</html>