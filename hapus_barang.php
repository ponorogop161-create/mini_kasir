<?php
include "koneksi.php";

if (isset($_GET['id'])) {

    $id = (int) $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM barang WHERE id='$id'");

    if ($query) {
        header("Location: tampil_barang.php");
        exit;
    } else {
        echo "Gagal menghapus data";
    }

} else {
    echo "ID tidak ditemukan";
}
?>