<?php
include 'db.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];

    $query = "UPDATE products SET nama_produk='$nama', harga='$harga', deskripsi='$deskripsi', kategori='$kategori' WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit Produk</title></head>
<body>
    <h2>Edit Produk</h2>
    <form method="POST">
        Nama Produk: <input type="text" name="nama_produk" value="<?= $data['nama_produk'] ?>"><br>
        Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>"><br>
        Deskripsi: <textarea name="deskripsi"><?= $data['deskripsi'] ?></textarea><br>
        Kategori: <input type="text" name="kategori" value="<?= $data['kategori'] ?>"><br><br>
        <button type="submit" name="update">Simpan Perubahan</button>
    </form>
    <br>
    <a href="index.php">Kembali ke Daftar Produk</a>
</body>
</html>
