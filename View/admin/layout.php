<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admins List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-2">
    <h2>admins List</h2>
    <a href="create.php" class="btn btn-primary">Add</a>
    <hr>
    <table class="table table-hover" >
        <tr class="text-center">
            <th scope="col">ID Admin</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">admin_Name</th>
            <th scope="col">Postal Code</th>
            <th scope="col">Telephone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
        </tr>
        <?php
            foreach($admins as $admin){
                ?>
                <tr class="text-center">
                    <td scope="row"><?=$admin->get_id_admin()?></td>
                    <td scope="row"><?=$admin->get_fname()?></td>
                    <td scope="row"><?=$admin->get_lname()?></td>
                    <td scope="row"><?=$admin->get_admin_name()?></td>
                    <td scope="row"><?=$admin->get_pc()?></td>
                    <td scope="row"><?=$admin->get_tel()?></td>
                    <td scope="row"><?=$admin->get_email()?></td>
                    <td scope="row"><?=$admin->get_pwd()?></td>
                    <td scope="row">
                        <a href="#" class="btn btn-success">Modify</a>  
                        <a href="delete.php?id=<?= $admin->get_id_admin() ?>" class="btn btn-danger">Delete</a>
                    </td>
                <tr>
        <?php
            }?>
    </table>
    </div>
</body>
</html>