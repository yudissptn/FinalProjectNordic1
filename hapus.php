<?php
$id = $_GET['id'];
$conn  = mysqli_connect("127.0.0.1","root","","uas");
mysqli_query($conn,"delete from tabel_karyawan where id='$id'");
mysqli_query($conn,"delete from departemen where id='$id'");
mysqli_query($conn,"delete from level where id='$id'");
header("location: http://localhost/finalprojectnordic1/index.php");
 ?>