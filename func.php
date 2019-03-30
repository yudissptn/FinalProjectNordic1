<?php 
function tahunKabisat()
{
    ?>
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
                                                Tahun ' . $_GET['tahun'] . ' adalah tahun kabisat
                                            </div>';
                                } else {
                                    echo '<div class="alert alert-danger text-center w-100 my-3" role="alert">
                                                Tahun ' . $_GET['tahun'] . ' bukan tahun kabisat
                                            </div>';
                                }
                            } else {
                                echo '<div class="alert alert-danger text-center w-100 my-3" role="alert">
                                                Tahun ' . $_GET['tahun'] . ' tidak ada di database
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

function hris()
{
    $conn  = mysqli_connect("127.0.0.1", "root", "", "uas");
    $sql = 'SELECT n.id, n.nik, n.nama, d.nama_departemen, l.level_karyawan 
                from tabel_karyawan n 
                JOIN departemen d ON n.id = d.id
                JOIN level l ON l.id = d.id
                ';
    $sql_query = mysqli_query($conn, $sql);
    ?>
<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col col-xl-7 my-5 pt-5">
            <div class="card card-signin">
                <div class="card-body">
                    <div class="alert alert-success text-center w-100" role="alert">
                        Login Success!!
                    </div>
                    <h5 class="card-title text-center">HRIS Admin</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Departemen</th>
                                    <th>Level</th>
                                    <th colspan="5">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if (mysqli_num_rows($sql_query) > 0) {
                                    $nomor = 1;
                                    while ($row = mysqli_fetch_assoc($sql_query)) {
                                        echo '<tr><td>' . $nomor . '</td><td>' . $row['nik'] . '</td><td>' . $row['nama'] . '</td><td>' . $row['nama_departemen'] . '</td><td>' . $row['level_karyawan'] . '</td>
                                        <td><a href="update.php/?id=' . $row['id'] . '"><button type="button" class="btn btn-outline-primary mr-0">Update</button></a>
                                        <a href="hapus.php?id=' . $row['id'] . '"><button type="button" class="btn btn-outline-danger ml-0">Delete</button></a></td></tr>';
                                        $nomor++;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="float-right">
                            <a href="input.php"><button class="btn btn-success btn-lg" type="submit">Tambah data</button></a>
                            <a href="logoff.php"><button class="btn btn-dark btn-lg" type="submit">Logoff</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

}
?>
    <?php
    function angka()
    { ?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-sm-7 my-5 pt-5">
                <div class="card card-signin">
                    <div class="card-body">
                        <div class="alert alert-success text-center w-100" role="alert">
                            Login Success!!
                        </div>
                        <h5 class="card-title text-center">Cek Bilangan</h5>

                        <form class="form-group" method="get" action="">
                            <!-- Example single danger button -->
                            <select class="form-control form-control-md" name="pilihan">
                                <option>Ganjil</option>
                                <option>Genap</option>
                                <option>Prima</option>
                            </select>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase my-3" type="submit">Tampilkan</button>
                            <?php 
                            if (isset($_GET['pilihan']) and $_GET['pilihan'] != '') {
                                $conn  = mysqli_connect("127.0.0.1", "root", "", "uas");
                                $sql = 'SELECT * from bilangan';
                                $sql_query = mysqli_query($conn, $sql);
                                switch ($_GET['pilihan']) {
                                    case 'Ganjil':
                                        echo '<div class="alert alert-info text-center w-100 my-1" role="alert">
                                            Ini adalah bilangan ganjil 
                                            </div>';
                                        while ($row = mysqli_fetch_assoc($sql_query)) {
                                            //echo '1';
                                            if ($row['bilangan'] == 1) {
                                                echo '1';
                                            }
                                            if ($row['bilangan'] % 2 != 0 && $row['bilangan'] != 1) {
                                                echo ' ,' . $row['bilangan'];
                                            }
                                        }
                                        break;
                                    case 'Genap':
                                        echo '<div class="alert alert-info text-center w-100 my-1" role="alert">
                                             Ini adalah bilangan genap 
                                            </div>';
                                        while ($row = mysqli_fetch_assoc($sql_query)) {
                                            //echo '1';
                                            if ($row['bilangan'] == 2) {
                                                echo '2';
                                            }
                                            if ($row['bilangan'] % 2 == 0 && $row['bilangan'] != 2) {
                                                echo ' ,' . $row['bilangan'];
                                            }
                                        }
                                        break;
                                    case 'Prima':
                                        echo '<div class="alert alert-info text-center w-100 my-1" role="alert">
                                            Ini adalah bilangan prima 
                                            </div>';
                                        while ($row = mysqli_fetch_assoc($sql_query)) {
                                            //echo '1';
                                            if ($row['bilangan'] == 2) {
                                                echo '2';
                                            }
                                            if ($row['bilangan'] > 2) {
                                                $pembagi = 0;
                                                for ($i = 1; $i <= $row['bilangan']; $i++) {
                                                    if ($row['bilangan'] % $i == 0) {
                                                        $pembagi++;
                                                    }
                                                }
                                                if ($pembagi < 3) {
                                                    echo ' ,' . $row['bilangan'];
                                                }
                                            }
                                        }
                                        break;
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
} ?> 