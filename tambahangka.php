<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "uas");
$angka = 1;
$last_id      = mysqli_insert_id($conn);
for ($i = 0; $i < 500; $i++) {
    $sql          = "INSERT INTO bilangan (id, bilangan) VALUES ('$last_id', '$angka' + '$i')";
    $sql_query    = mysqli_query($conn, $sql);
    echo $angka;
}
echo $success;
die;

header("location: http://localhost/finalprojectnordic1/index.php");
