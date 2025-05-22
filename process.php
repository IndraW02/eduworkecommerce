<?php
include 'db.php';

// Validasi sederhana
if (
    !empty($_POST['nama']) &&
    !empty($_POST['harga']) &&
    !empty($_POST['deskripsi']) &&
    !empty($_POST['kategori'])
) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $harga = mysqli_real_escape_string($conn, $_POST['harga']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);

    $query = "INSERT INTO products (nama_produk, harga, deskripsi, kategori)
              VALUES ('$nama', '$harga', '$deskripsi', '$kategori')";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
} else {
    echo "Semua field wajib diisi.";
}
?>
