<?php
include "koneksi.php";
if (isset($_POST['nama'])) {
    mysqli_query($conn, "INSERT INTO barang VALUES ('', '$_POST[nama]', '$_POST[harga]', '$_POST[stok]')");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Tambah Barang</title>
</head>
<body>
    <div class="container-fluid bg-primary" style="height: 100vh;">
        <div class="row justify-content-center" style="padding-top: 130px; padding-left: 450px; padding-right: 450px;">
            <div class="col shadow-sm p-3 mb-5 bg-body rounded">

                <form method="POST">
                    <p class="text-center h1">Tambah Barang</p>

                    <div class="mb-3 mt-4">
                        <label for="nama" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok">
                    </div>

                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn btn-primary mb-3 px-4 rounded-3">Simpan</button>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="admin.php" class="mb-2 rounded-3 text-center text-decoration-none">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>


