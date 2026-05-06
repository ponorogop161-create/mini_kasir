<?php
include "koneksi.php";

function hitungDiskon($harga, $diskon) {
    return $harga - ($harga * $diskon / 100);
}

function hitungKembalian($bayar, $total) {
    return $bayar - $total;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $harga = (int) $_POST['harga'];
    $diskon = (int) $_POST['diskon'];
    $bayar = (int) $_POST['bayar'];

    // validasi dasar
    if ($harga <= 0) {
        die("Harga tidak valid");
    }

    if ($diskon < 0 || $diskon > 100) {
        die("Diskon harus 0 - 100%");
    }

    $total = hitungDiskon($harga, $diskon);
    $kembalian = hitungKembalian($bayar, $total);

    if ($bayar < $total) {
        die("Uang kurang!");
    }

    $simpan = mysqli_query($conn, "
        INSERT INTO transaksi 
        VALUES ('', NOW(), '$total', '$bayar', '$kembalian', '1')
    ");

    if ($simpan) {
        echo "
        <h2>Struk Transaksi</h2>
        <hr>
        Harga: Rp " . number_format($harga, 0, ',', '.') . "<br>
        Diskon: $diskon%<br>
        Total: Rp " . number_format($total, 0, ',', '.') . "<br>
        Bayar: Rp " . number_format($bayar, 0, ',', '.') . "<br>
        Kembalian: Rp " . number_format($kembalian, 0, ',', '.') . "<br><br>

        <a href='kasir.php'>Kembali</a>
        ";
    } else {
        echo "Gagal menyimpan transaksi";
    }
}
?>