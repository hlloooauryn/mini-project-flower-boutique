<?php
// =================================================================
// 2. PROCESSING LAYER (functions.php)
// File ini berisi fungsi hitung total nilai stok & cek stok kritis
// (Sesuai Aturan Slide 17)
// =================================================================

/**
 * Fungsi 1: hitungTotalNilaiStok
 * Menghitung total nilai aset barang di gudang (Harga x Stok)
 */
function hitungTotalNilaiStok($daftarBarang) {
    $totalNilai = 0;
    
    // Perulangan foreach untuk menjumlahkan subtotal setiap barang
    foreach ($daftarBarang as $barang) {
        $subtotal = $barang['harga'] * $barang['stok'];
        $totalNilai += $subtotal;
    }
    
    return $totalNilai;
}

/**
 * Fungsi 2: cekStokKritis
 * Mengembalikan class CSS 'kritis' jika stok kurang dari 3 (< 3)
 */
function cekStokKritis($stok) {
    if ($stok < 3) {
        return 'kritis'; // Menandai stok kritis < 3
    } else {
        return 'normal';
    }
}
