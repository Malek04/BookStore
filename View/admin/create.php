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
        <h1>Adding an Admin</h1>
    <hr>
        <form method="POST" action="index_admin.php?controller=admin&action=store">
        <div class="mb-3">
            <label for="title" class="form-label">First name</label>
            <input type="text" class="form-control" name="fname" id="fname">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Last name</label>
            <input type="text" class="form-control" name="lname" id="lname">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">admin name</label>
            <input type="text" class="form-control" name="admin_name" id="admin_name">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Postal Code</label>
            <input type="number" class="form-control" name="pc" id="pc">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Telephone Number</label>
            <input type="number" class="form-control" name="tel" id="tel">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">E-mail</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Password</label>
            <input type="password" class="form-control" name="pwd" id="pwd">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</body>
</html>