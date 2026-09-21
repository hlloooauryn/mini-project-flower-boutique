<?php
// =================================================================
// 1. DATA LAYER (products.php)
// File ini menyimpan data produk toko bunga (Array Multidimensi)
// (Aturan Slide 17 - Pemrograman Web Pertemuan 2)
// =================================================================

$produkBunga = [
    [
        "id"        => "BNG-01",
        "nama"      => "Buket Mawar Merah",
        "kategori"  => "Buket Bunga",
        "harga"     => 45000, // Harga 30 ribu ke atas
        "stok"      => 5,
        "deskripsi" => "Buket mawar merah segar 10 tangkai."
    ],
    [
        "id"        => "BNG-02",
        "nama"      => "Bunga Lily Putih",
        "kategori"  => "Bunga Segar",
        "harga"     => 35000, // Harga 30 ribu ke atas
        "stok"      => 2, // Stok kritis (< 3)
        "deskripsi" => "Bunga lily harum warna putih."
    ],
    [
        "id"        => "BNG-03",
        "nama"      => "Bunga Tulip Pink",
        "kategori"  => "Bunga Impor",
        "harga"     => 65000, // Harga 30 ribu ke atas
        "stok"      => 1, // Stok kritis (< 3)
        "deskripsi" => "Bunga tulip pink impor dari Belanda."
    ],
    [
        "id"        => "BNG-04",
        "nama"      => "Bunga Matahari",
        "kategori"  => "Bunga Segar",
        "harga"     => 30000, // Harga 30 ribu ke atas
        "stok"      => 8,
        "deskripsi" => "Bunga matahari mekar segar."
    ],
    [
        "id"        => "BNG-05",
        "nama"      => "Lavender Kering",
        "kategori"  => "Bunga Kering",
        "harga"     => 40000, // Harga 30 ribu ke atas
        "stok"      => 12,
        "deskripsi" => "Bunga lavender kering wangi."
    ]
];
