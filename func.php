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
        <div class="col col-sm-7 my-5 pt-5">
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if (mysqli_num_rows($sql_query) > 0) {
                                    $nomor = 1;
                                    while ($row = mysqli_fetch_assoc($sql_query)) {
                                        echo '<tr><td>' . $nomor . '</td><td>' . $row['nik'] . '</td><td>' . $row['nama'] . '</td><td>' . $row['nama_departemen'] . '</td><td>' . $row['level_karyawan'] . '</td>
                                        <td><a href="update.php/?id=' . $row['id'] . '"><button type="button" class="btn btn-outline-primary">Update</button></a> &nbsp;
                                        <a href="hapus.php?id=' . $row['id'] . '"><button type="button" class="btn btn-outline-danger">Delete</button></a></td></tr>';
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