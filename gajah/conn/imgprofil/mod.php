<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    
$conn = new mysqli('localhost', 'root', '', 'vedul');

    // Dapatkan nilai dari input form
    $title = $_POST['modul'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $fileImg = $_FILES['image'];
    $filePdf = $_FILES['pdf'];

    // Periksa apakah file gambar diunggah
    if (isset($fileImg['tmp_name']) && isset($filePdf['tmp_name'])) {

        // Dapatkan ekstensi file gambar
        $extensionImg = pathinfo($fileImg['name'], PATHINFO_EXTENSION);
        $extensionPdf = pathinfo($filePdf['name'], PATHINFO_EXTENSION);

        // Dapatkan direktori tempat gambar akan disimpan
        $uploadDirImg = 'img/';
        $uploadDirPdf = 'modul/';

        // Periksa apakah direktori upload ada
        if (!is_dir($uploadDirImg) && !is_dir($uploadDirPdf)) {
            mkdir($uploadDirImg, 0777, true);
            mkdir($uploadDirPdf, 0777, true);
        }

        // Buat nama file unik untuk gambar
        $newFilenameImg = uniqid() . '.' . $extensionImg;
        $newFilenamePdf = uniqid() . '.' . $extensionPdf;

        // Pindahkan file gambar ke direktori upload
        move_uploaded_file($fileImg['tmp_name'], $uploadDirImg . $newFilenameImg);
        move_uploaded_file($filePdf['tmp_name'], $uploadDirPdf . $newFilenamePdf);

        // Simpan data modul ke database
        $sql = "INSERT INTO modul (title, type, description, price, url_img, url_modul, date_up_modul) VALUES (?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssss', $title, $type, $description, $price, $newFilenameImg, $newFilenamePdf);
        $stmt->execute();

        // Tutup statement dan koneksi ke database
        $stmt->close();
        $conn->close();

        // Redirect ke halaman modul
        header("Location: ../components-accordion.php");

    }
}
