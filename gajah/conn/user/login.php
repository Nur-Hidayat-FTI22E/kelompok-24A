<?php

$con = new mysqli('localhost', 'root', '', 'vedul');
// Proses pengisian form
$username = $_POST['username'];
$password = $_POST['password'];

// Validasi data
if (empty($username) || empty($password)) {
    // Jika data kosong, tampilkan pesan error
    echo "Data tidak boleh kosong!";
} else {
    // Jika data tidak kosong, cek data di database
    $sql = "SELECT * FROM user_account WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);

    // Jika data ditemukan, set session
    if (mysqli_num_rows($result) > 0 && password_verify($password, $row["password"])) {
        session_start();
        $row = mysqli_fetch_assoc($result);
        
        // $user_row = mysqli_fetch_assoc($result);
            $_SESSION['nama'] = $row['nama_lengkap'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['img'] = $row['foto'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['no_hp'] = $row['no_hp'];
            $_SESSION['alamat'] = $row['alamat'];
            $_SESSION['create_account'] = $row['date_user_create'];
            $_SESSION['logged_in'] = true;
            // Arahkan ke halaman home
            header("Location: ../../../halaman_utama/index.php");

    } else {
        // // Jika data tidak ditemukan, tampilkan pesan error
        // echo "username atau password salah!";
        echo "Username does not exist.";
        echo "Invalid password.";
        
    }
}

// Tutup koneksi database
mysqli_close($con);

?>