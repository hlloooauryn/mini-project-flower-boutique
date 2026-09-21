<?php
// =================================================================
// 3. PRESENTATION LAYER (index.php)
// File utama untuk menampilkan tabel HTML ke browser (Slide 17)
// =================================================================

// Memanggil file data dan file fungsi secara modular
require_once 'products.php';
require_once 'functions.php';

// Menghitung total nilai stok barang menggunakan fungsi dari functions.php
$totalAset = hitungTotalNilaiStok($produkBunga);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>System Informasi Produk Toko Bunga</title>
    <style>
        /* Tampilan Sederhana, Rapi, & Soft */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        h1 {
            color: #4a6fa5;
            margin-bottom: 20px;
        }

        .total-box {
            background-color: #eef4fb;
            border-left: 5px solid #4a6fa5;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th {
            background-color: #eef2f7;
            color: #4a6fa5;
            text-align: left;
            padding: 12px;
            border-bottom: 2px solid #dcdcdc;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #eee;
        }

        /* Warna Baris jika Stok Kritis (< 3) sesuai Slide 17 */
        tr.kritis {
            background-color: #ffe6e6; /* Highlight merah muda lembut */
        }

        .badge-kritis {
            color: #c0392b;
            font-weight: bold;
        }

        .badge-normal {
            color: #27ae60;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>System Informasi Produk Toko Bunga</h1>

    <!-- Ringkasan Total Aset Gudang -->
    <div class="total-box">
        <strong>Total Nilai Aset Gudang:</strong> 
        Rp <?= number_format($totalAset, 0, ',', '.'); ?>
    </div>

    <!-- Tabel Data Produk -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Bunga</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Subtotal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // Perulangan foreach untuk menampilkan baris data produk (Slide 17)
            foreach ($produkBunga as $bunga) : 
                // Cek apakah stok kritis (< 3)
                $statusStok = cekStokKritis($bunga['stok']);
                $subtotal   = $bunga['harga'] * $bunga['stok'];
            ?>
                <!-- Class 'kritis' akan memberi warna merah muda jika stok < 3 -->
                <tr class="<?= $statusStok; ?>">
                    <td><?= $bunga['id']; ?></td>
                    <td>
                        <strong><?= $bunga['nama']; ?></strong><br>
                        <small style="color: #777;"><?= $bunga['deskripsi']; ?></small>
                    </td>
                    <td><?= $bunga['kategori']; ?></td>
                    <td>Rp <?= number_format($bunga['harga'], 0, ',', '.'); ?></td>
                    <td><strong><?= $bunga['stok']; ?></strong></td>
                    <td>Rp <?= number_format($subtotal, 0, ',', '.'); ?></td>
                    <td>
                        <?php if ($bunga['stok'] < 3) : ?>
                            <span class="badge-kritis">Stok Kritis!</span>
                        <?php else : ?>
                            <span class="badge-normal">Aman</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
