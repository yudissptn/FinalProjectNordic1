<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "uas");
$nikbaru = $_GET['nik'];
$namabaru = $_GET['nama'];
$departemen = $_GET['nama_departemen'];
$level = $_GET['level_karyawan'];

$sql          = "INSERT INTO tabel_karyawan (nik, nama) VALUES ('$nikbaru', '$namabaru')";
$sql_query    = mysqli_query($conn, $sql);
$sql1         = "INSERT INTO departemen (nama_departemen) VALUES ('$departemen')";
$sql_query    = mysqli_query($conn, $sql1);
$sql2         = "INSERT INTO level (level_karyawan) VALUES ('$level')";
$sql_query    = mysqli_query($conn, $sql2);
header("location:  http://localhost/finalprojectnordic1/index.php");
