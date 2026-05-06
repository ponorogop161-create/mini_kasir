<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Kasir</title>
</head>
<body>

<div class="container-fluid bg-body-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-11 col-sm-8 col-md-5 col-lg-4">
        <div class="card shadow-lg p-4 border-0">

            <form method="POST" action="proses_transaksi.php">
                <p class="text-center mb-4 fs-2 fw-bold">Kasir</p>

                <div class="mb-3">
                    <label for="harga" class="form-label fw-semibold">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga" required>
                </div>

                <div class="mb-3">
                    <label for="diskon" class="form-label fw-semibold">Diskon (%)</label>
                    <input type="number" class="form-control" id="diskon" name="diskon" placeholder="Diskon">
                </div>

                <div class="mb-3">
                    <label for="bayar" class="form-label fw-semibold">Bayar</label>
                    <input type="number" class="form-control" id="bayar" name="bayar" placeholder="Bayar" required>
                </div>

                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-primary rounded-3">Proses</button>
                </div>

                <div class="text-center mt-3">
                    <a href="login.php" class="text-decoration-none">Kembali</a>
                </div>
            </form>

        </div>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>