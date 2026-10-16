<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Buku</title>
</head>
<body>
    <h2>Edit Data Buku</h2>

    <?php if (isset($_SESSION['error'])): ?>
        <p style="color: red;"><?= $_SESSION['error'] ?></p>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <form method="post" action="index.php?action=update">
        <input type="hidden" name="id" value="<?= $buku['id'] ?>">

        <label>Kode Buku</label><br>
        <input type="text" name="kode_buku" value="<?= htmlspecialchars($buku['kode_buku']) ?>" required><br><br>

        <label>Judul Buku</label><br>
        <input type="text" name="judul" value="<?= htmlspecialchars($buku['judul']) ?>" required><br><br>

        <label>Penulis</label><br>
        <input type="text" name="penulis" value="<?= htmlspecialchars($buku['penulis']) ?>" required><br><br>

        <label>Tahun Terbit</label><br>
        <input type="number" name="tahun_terbit" value="<?= htmlspecialchars($buku['tahun_terbit']) ?>" required><br><br>

        <label>Stok Tersedia</label><br>
        <input type="number" name="stok" value="<?= htmlspecialchars($buku['stok']) ?>" required><br><br>

        <button type="submit">Update Data</button>
        <a href="index.php">Kembali ke Daftar Buku</a>
    </form>
</body>
</html>