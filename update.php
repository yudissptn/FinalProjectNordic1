<?php
$base_url = "http://" . $_SERVER['SERVER_NAME'] . '/finalprojectnordic1/';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Update Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $base_url; ?>main.css" type="text/css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-2 pt-5">
                <div class="card card-signin my-3">
                    <div class="card-body">
                        <h5 class="card-title text-center">Update Data</h5>
                        <form class="form-signin" name="Taxation" action="<?php echo $base_url; ?>action_update.php" id="taxation_form" method="get">

                            <?php
                            $conn             = mysqli_connect("127.0.0.1", "root", "", "uas");
                            $sql              = 'SELECT n.nik, n.nama, d.nama_departemen, l.level_karyawan 
                                    from tabel_karyawan n 
                                    JOIN departemen d ON n.id = d.id
                                    JOIN level l ON l.id = d.id
                                    WHERE n.id =' . $_GET['id'];

                            //echo $sql;die;
                            $sql_query        = mysqli_query($conn, $sql);
                            $sql_fetch_row    = mysqli_fetch_row($sql_query);
                            ?>
                            <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">
                            <div class="form-label-group"><input class="form-control" type="text" name="nik" id="nik" value="<?php echo $sql_fetch_row[0]; ?>"><br></div>
                            <div class="form-label-group"><input class="form-control" type="text" name="nama" id="nama" value="<?php echo  $sql_fetch_row[1]; ?>"><br></div>
                            <div class="form-label-group"><input class="form-control" type="text" name="nama_departemen" id="nama_departemen" value="<?php echo  $sql_fetch_row[2]; ?>"><br></div>
                            <div class="form-label-group"><input class="form-control" type="text" name="level_karyawan" id="level_karyawan" value="<?php echo  $sql_fetch_row[3]; ?>"><br></div>
                            <br><br>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html> 