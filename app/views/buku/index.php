<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog Data Buku</title>
</head>
<body>
    <h2>Daftar Buku Perpustakaan</h2>

    <?php if (isset($_SESSION['success'])): ?>
        <p style="color: green;"><?= $_SESSION['success'] ?></p>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['error'])): ?>
        <p style="color: red;"><?= $_SESSION['error'] ?></p>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <a href="index.php?action=create">Tambah Data Buku Baru</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($bukuList as $buku): 
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($buku['kode_buku']) ?></td>
                <td><?= htmlspecialchars($buku['judul']) ?></td>
                <td><?= htmlspecialchars($buku['penulis']) ?></td>
                <td><?= htmlspecialchars($buku['tahun_terbit']) ?></td>
                <td><?= htmlspecialchars($buku['stok']) ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $buku['id'] ?>">Edit</a> | 
                    <form method="post" action="index.php?action=delete" style="display:inline" onsubmit="return confirm('Hapus data buku ini?')">
                        <input type="hidden" name="id" value="<?= $buku['id'] ?>">
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>