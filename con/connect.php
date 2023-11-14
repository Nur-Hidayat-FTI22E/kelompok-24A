<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $nama=$_POST['username'];
    $email=$_POST['email'];    
    $password=$_POST['password'];   


$con = new mysqli('localhost', 'root', '', 'vedul');

if ($con) {
    // echo "Koneksi berhasil bos";
    $sql="insert into user(id, nama_lengkap, email, , password, date_user_create) values(' ', '$nama', '$email', '$password', CURRENT_TIMESTAMP())";
    $result=mysqli_query($con, $sql);
    if ($result) {
        header("Location: ../login.html");
    }else {
        die(mysqli_error($con));
    }
} else {
    die(mysqli_error($con));
}

}

?>