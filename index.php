<?php
include 'db.php';

$kategori_filter = isset($_GET['kategori']) ? $_GET['kategori'] : '';

$query = "SELECT * FROM products";
if (!empty($kategori_filter)) {
    $query .= " WHERE kategori = '" . mysqli_real_escape_string($conn, $kategori_filter) . "'";
}
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Produk E-Commerce</title>
</head>
<body>
    <h2>TAMBAH PRODUK</h2>
        <a href="form.php">
        <button>Tambah Produk Baru</button>
    </a>
    <h2>Filter Produk Berdasarkan Kategori</h2>
    <form method="GET" action="">
        <label for="kategori">Kategori:</label>
        <input type="text" name="kategori" id="kategori" value="<?= htmlspecialchars($kategori_filter) ?>">
        <button type="submit">Filter</button>
    </form>

    <h2>Daftar Produk</h2>
    <ul>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <li>
                <strong><?= htmlspecialchars($row['nama_produk']) ?></strong><br>
                Harga: <?= htmlspecialchars($row['harga']) ?><br>
                Deskripsi: <?= htmlspecialchars($row['deskripsi']) ?><br>
                Kategori: <?= htmlspecialchars($row['kategori']) ?><br>
            </li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
