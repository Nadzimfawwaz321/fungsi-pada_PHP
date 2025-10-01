<?php

// Mengambil semua informasi tanggal dan waktu saat ini
$tanggal_sekarang = getdate();

// Mengambil komponen yang dibutuhkan dari array
$tanggal = $tanggal_sekarang['mday']; // Hari dalam bulan (1-31)
$bulan = $tanggal_sekarang['mon'];  // Bulan dalam angka (1-12)
$tahun = $tanggal_sekarang['year']; // Tahun dalam 4 digit

// Memformat output menjadi DD-MM-YYYY
// Menggunakan sprintf untuk memastikan tanggal/bulan memiliki 2 digit (misal: 05)
$output_getdate = sprintf("%02d-%02d-%04d", $tanggal, $bulan, $tahun);

echo "Tanggal sekarang menggunakan fungsi getdate(): {$output_getdate}\n";

?>