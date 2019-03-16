<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "uas");
$tahun = 1900;
$last_id      = mysqli_insert_id($conn);
for ($i = 0; $i < 120; $i++) {
    $sql          = "INSERT INTO tahun (id, nama_tahun) VALUES ('$last_id', '$tahun' + '$i')";
    $sql_query    = mysqli_query($conn, $sql);
    echo $tahun;
}
header("location: http://localhost/finalprojectnordic1/index.php");
