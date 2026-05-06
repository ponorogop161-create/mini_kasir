<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<title>Kasir Desktop</title>

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: #e5e7eb;
}

/* TOPBAR */
.topbar {
    height: 50px;
    background: #111827;
    color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 15px;
}

.topbar .title {
    font-weight: bold;
}

/* WINDOW */
.window {
    width: 95%;
    height: calc(100vh - 70px);
    margin: 10px auto;
    background: white;
    border-radius: 12px;
    display: flex;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

/* SIDEBAR */
.sidebar {
    width: 220px;
    background: #1f2937;
    color: white;
    padding: 15px;
}

.sidebar h4 {
    font-size: 16px;
    margin-bottom: 20px;
}

.menu a {
    display: block;
    padding: 10px;
    margin-bottom: 10px;
    color: #cbd5e1;
    text-decoration: none;
    border-radius: 8px;
    transition: 0.2s;
}

.menu a:hover {
    background: #2563eb;
    color: white;
}

/* CONTENT */
.content {
    flex: 1;
    padding: 20px;
    background: #f9fafb;
}

.card-box {
    background: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 5px 12px rgba(0,0,0,0.08);
    transition: 0.2s;
}

.card-box:hover {
    transform: translateY(-4px);
}

.grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
}

@media(max-width: 900px){
    .grid {
        grid-template-columns: 1fr;
    }
    .sidebar {
        width: 160px;
    }
}
</style>
</head>

<body>

<!-- TOPBAR -->
<div class="topbar">
    <div class="title">💻 Kasir Mini</div>
    <div>Admin</div>
</div>

<!-- WINDOW -->
<div class="window">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h4>Menu</h4>

        <div class="menu">
            <a href="#">🏠 Dashboard</a>
            <a href="tampil_barang.php">📦 Data Barang</a>
            <a href="barang.php">➕ Tambah</a>
            <a href="logout.php" style="color:#f87171;">🚪 Logout</a>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <h3>Dashboard</h3>
        <p class="text-muted">Sistem kasir seperti aplikasi desktop</p>

        <div class="grid mt-3">

            <div class="card-box">
                📦 <b>Data Barang</b>
                <p>Kelola stok barang</p>
            </div>

            <div class="card-box">
                ➕ <b>Tambah Barang</b>
                <p>Input barang baru</p>
            </div>

            <div class="card-box">
                📊 <b>Laporan</b>
                <p>Data transaksi</p>
            </div>

        </div>

    </div>

</div>

</body>
</html>