<?php
    if(isset($_POST)){
        $var=$_POST;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="view/header/style.css">
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-home"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="index.php">BookStore</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="index.php?controller=admin&action=list" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Admin</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="index.php?controller=user&action=list" class="sidebar-link">
                        <i class="lni lni-users"></i>
                        <span>Users</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="index.php?controller=book&action=list" class="sidebar-link">
                        <i class="lni lni-book"></i>
                        <span>Books</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="index.php?controller=genre&action=list" class="sidebar-link">
                        <i class="lni lni-layers"></i>
                        <span>Genre</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="index.php?controller=author&action=list" class="sidebar-link">
                        <i class="lni lni-users"></i>
                        <span>Authors</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-bubble"></i>
                        <span>Comments</span>
                    </a>
                </li>
            </ul>
            
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">
            <div class="text-center">
                <?php
                if(isset($_GET['controller'])){
                    require_once 'controller/'.$_GET['controller'].'Controller.php';
                    $controller = $_GET['controller'].'Controller';
                }
                ?>
                <?php
                if (isset($_GET['action'])) {
                    $action = $_GET['action'];
                    switch ($action) {
                        case 'create':
                            $controller::createAction();
                            break;
                        case 'list':
                            $controller::indexAction();
                            break;
                        case 'destroy':
                            $controller::destroyAction();
                            break;
                        case 'edit':
                            $controller::editAction();  
                            break;
                        case 'store':
                            $controller::storeAction($var);
                            break;
                        case 'update':
                            $controller::updateAction();
                            break;
                        case 'delete':
                            $controller::deleteAction();
                            break;
                    }
                }
                else{
                    ?>
                        <h1>Welcome to the bookStore</h1>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="view/header/script.js"></script>
</body>

</html>