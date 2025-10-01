<?php

// Format yang diminta:
// 'd' = Hari dalam bulan (01 sampai 31)
// 'F' = Nama Bulan penuh (Januari sampai Desember)
// 'Y' = Tahun dalam 4 digit

$output_date = date('d-F-Y');

echo "Tanggal sekarang menggunakan fungsi date('d-F-Y'): {$output_date}\n";

// Contoh lain: format yang persis sama dengan permintaan contoh (DD-MM-YYYY)
echo "Tanggal sekarang menggunakan fungsi date('d-m-Y'): " . date('d-m-Y') . "\n";

?>