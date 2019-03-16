<?php
$base_url = "http://" . $_SERVER['SERVER_NAME'] . '/finalprojectnordic1/';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" type="text/css">
    <title>Web Developer-Apprentice (Final Project)</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['username']) and $_SESSION['username'] != '' and $_SESSION['role_id'] == 1) { ?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-sm-7 my-5 pt-5">
                <div class="card card-signin">
                    <div class="card-body">
                        <div class="alert alert-success text-center w-100" role="alert">
                            Login Success!!
                        </div>
                        <h5 class="card-title text-center">Cek Tahun Kabisat</h5>
                        <form class="form-signin" method="get" action="">
                            <div class="form-label-group">
                                <input type="text" id="tahun" name="tahun" class="form-control" placeholder="Input tahun" required>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Check</button>
                            <?php 
                            if (isset($_GET['tahun']) and $_GET['tahun'] != '') {
                                $conn         = mysqli_connect("127.0.0.1", "root", "", "uas");
                                $sql          = 'SELECT * FROM tahun WHERE nama_tahun ="' . $_GET['tahun'] . '"';
                                $sql_query    = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($sql_query) > 0) {
                                    if ($_GET['tahun'] % 4 == 0) {
                                        echo '<div class="alert alert-success text-center w-100 my-3" role="alert">
                                                Tahun adalah tahun kabisat
                                            </div>';
                                    } else {
                                        echo '<div class="alert alert-danger text-center w-100 my-3" role="alert">
                                                Tahun bukan tahun kabisat
                                            </div>';
                                    }
                                } else {
                                    echo '<div class="alert alert-danger text-center w-100 my-3" role="alert">
                                                Tahun tidak ada di database
                                            </div>';
                                }
                            }
                            ?>
                            <hr class="my-4">
                        </form>
                        <div class="float-right"><a href="logoff.php"><button class="btn btn-dark btn-lg" type="submit">Logoff</button></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

}
if (isset($_SESSION['username']) and $_SESSION['username'] != '' and $_SESSION['role_id'] == 2) { ?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-sm-7 my-5 pt-5">
                <div class="card card-signin">
                    <div class="card-body">
                        <div class="alert alert-success text-center w-100" role="alert">
                            Login Success!!
                        </div>
                        <h5 class="card-title text-center">Cek Tahun Kabisat</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
}
if (!isset($_SESSION['username'])) { ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-5 pt-5">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Login Page</h5>
                        <form class="form-signin" method="post" action="login.php">
                            <div class="form-label-group">
                                <input type="text" id="username" name="username" class="form-control" placeholder="Input Username" required>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Input Password" required>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
} ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html> 