<?php
require_once './system/function.php';
if (isset($_SESSION['admin'])) {
    echo "session login";
} else {
    // var_dump($_SESSION);
    echo "session logout";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css" />
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?page=checker">checker</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="?page=dataList">dataList</a>
                </li>
                <li class="nav-item ">
                </li>
                <!-- <li class="nav-item ">
                        <form action="api/login-api.php" method="post">
                            <input type="submit" value="session login" name="login">
                        </form>
                    </li> -->

            </ul>
            <div class="d-flex">
                <?php if (isset($_SESSION['admin'])) : ?>
                    <form action="api/logout-api.php" method="post">
                        <input class="btn btn-danger" type="submit" value="Logout" name="logout">
                    </form>
                <?php else : ?>
                    <form action="?page=login" method="post">
                        <input class="btn btn-primary" type="submit" value="login" name="login">
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </nav>