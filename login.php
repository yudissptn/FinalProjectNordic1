<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "uas";

//Crate connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    //print_r($conn);
    ///echo "Connection Success";
    //echo "<br>";
    //echo "<br>";
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = 'SELECT * FROM login WHERE username="' . $username . '"';
$sql_query = mysqli_query($conn, $sql);
$sql_fetch_row = mysqli_fetch_row($sql_query);

if (mysqli_num_rows($sql_query) > 0) {
    //output data of each row
    if ($password == $sql_fetch_row[2]) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['role_id'] = $sql_fetch_row[3];
        header("location: http://localhost/finalprojectnordic1/index.php");
        die;
    } else {
        echo "Password Salah";
        header("location: http://localhost/finalprojectnordic1/index.php");
        die;
    }
} else {
    header("location: http://localhost/finalprojectnordic1/index.php");
    die;
    # code...
}
