<?php

/**
 * Fungsi untuk menentukan dan mengembalikan nilai terbesar dari dua bilangan.
 *
 * @param int $a Bilangan pertama
 * @param int $b Bilangan kedua
 * @return int Bilangan terbesar
 */
function bilanganTerbesar($a, $b)
{
    // Logika kontrol if/else
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh Penggunaan
$bilangan1 = 100;
$bilangan2 = 150;

$hasil = bilanganTerbesar($bilangan1, $bilangan2);

echo "Dua bilangan adalah: {$bilangan1} dan {$bilangan2}\n";
echo "Bilangan terbesarnya adalah: {$hasil}\n";

// Contoh lain
echo "\nBilangan terbesar antara 55 dan 320 adalah: " . bilanganTerbesar(55, 320) . "\n";

?>