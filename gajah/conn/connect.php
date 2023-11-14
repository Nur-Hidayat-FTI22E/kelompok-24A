<?php

// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "vedul";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Proses pendaftaran akun
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $tipeFile = $_FILES['foto']['type'];
    $tmpFile = $_FILES['foto']['tmp_name'];

    if ($ukuranFile > 2097152) {
        echo "Ukuran file terlalu besar. Maksimal 2MB.";
        exit;
    }

    if ($tipeFile != 'image/jpeg' && $tipeFile != 'image/png') {
        echo "Tipe file tidak valid. Hanya JPEG dan PNG yang diizinkan.";
        exit;
    }

    // $namaFileBaru = time() . '_' . $namaFile;
    $lokasiFile = 'uploads/' . $namaFile;

    if (move_uploaded_file($tmpFile, $lokasiFile)) {
        // Simpan data pengguna ke database
        $sql = "INSERT INTO user_account (foto, nama_lengkap, username, email, password, date_user_create) VALUES ('$namaFile', '$nama', '$username', '$email', '$password', CURRENT_TIMESTAMP())";

        $result = $conn->query($sql);

        if ($result) {
            header("Location: ../../sukses.html");
        } else {
            echo "Gagal menyimpan data pengguna: " . $conn->error;
        }
    } else {
        echo "Gagal mengunggah foto.";
    }
}
?>
