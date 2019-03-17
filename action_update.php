<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "uas");
$nikbaru = $_GET['nik'];
$namabaru = $_GET['nama'];
$departemen = $_GET['nama_departemen'];
$level = $_GET['level_karyawan'];

$sql          = "UPDATE tabel_karyawan SET nik='$nikbaru',nama='$namabaru' where id=" . $_GET['id'];
$sql_query    = mysqli_query($conn, $sql);
$sql1         = "UPDATE departemen SET nama_departemen='$departemen'where id=" . $_GET['id'];
$sql_query    = mysqli_query($conn, $sql1);
$sql2         = "UPDATE level SET level_karyawan='$level'where id=" . $_GET['id'];
$sql_query    = mysqli_query($conn, $sql2);
var_dump($sql);
var_dump($sql1);
var_dump($sql2);
header("location:  http://localhost/finalprojectnordic1/index.php");
