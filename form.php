<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Produk</title>
</head>
<body>
    <h2>Tambah Produk Baru</h2>
    <form method="POST" action="process.php">
        <label for="nama">Nama Produk:</label><br>
        <input type="text" id="nama" name="nama"><br><br>

        <label for="harga">Harga:</label><br>
        <input type="number" id="harga" name="harga"><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi"></textarea><br><br>

        <label for="kategori">Kategori:</label><br>
        <input type="text" id="kategori" name="kategori"><br><br>

        <input type="submit" value="Simpan">
    </form>

    <br>
    <!-- Tombol kembali ke index.php -->
    <a href="index.php">
        <button>Kembali ke Daftar Produk</button>
    </a>
</body>
</html>
