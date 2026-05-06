<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Barang</title>
</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h3 class="fw-bold mb-3">Data Barang</h3>

        <table class="table table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM barang");

            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $d['nama_barang']; ?></td>
                    <td>Rp <?= number_format($d['harga'], 0, ',', '.'); ?></td>
                    <td>
                        <a href="hapus_barang.php?id=<?= $d['id']; ?>" 
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin mau hapus?')">
                           Hapus
                        </a>
                    </td>
                </tr>
            <?php } ?>

            </tbody>
        </table>

        <a href="barang.php" class="btn btn-primary mt-3">Tambah Barang</a>
        <a href="admin.php" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</div>

</body>
</html>