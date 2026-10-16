<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Buku</title>
</head>
<body>
    <h2>Tambah Data Buku Baru</h2>

    <?php if (isset($_SESSION['error'])): ?>
        <p style="color: red;"><?= $_SESSION['error'] ?></p>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <form method="post" action="index.php?action=store">
        <label>Kode Buku</label><br>
        <input type="text" name="kode_buku" required><br><br>

        <label>Judul Buku</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Penulis</label><br>
        <input type="text" name="penulis" required><br><br>

        <label>Tahun Terbit</label><br>
        <input type="number" name="tahun_terbit" required><br><br>

        <label>Stok Tersedia</label><br>
        <input type="number" name="stok" required><br><br>

        <button type="submit">Simpan Data</button>
        <a href="index.php">Kembali ke Daftar Buku</a>
    </form>
</body>
</html>