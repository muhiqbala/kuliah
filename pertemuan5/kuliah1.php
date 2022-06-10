<?php 

// ARRAY
// ARRAY adalah variabel yang dapat menyimpan lebih dari satu nilai sekaligus.
$hari1 ="senin";
$hari2 ="Selasa";
$hari7 ="Minggu";

$bulan1 ="Januari";
$bulan2 = "Desember";

$mahasiswa = "Jimmy";

// Membuat ARRAY 
$hari = ["Senin","Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"]; // Cara Baru
$bulan = array ("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"); // Cara Lama
$myArray = [100, "Jimmy", true ];

// Menampilkan Array
// Menampilkan 1 Elemen Mengguanakan Index, Dimulai Dari 0
echo $hari [1];
echo "<br>";
echo $bulan [2];
echo "<hr>";
// End Array

// Menampilkan Semua Isi Array Sekaligus
// var_dump() atau print_r ()
// Khusus Untuk Debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";
// End Var_dump

// Mencetak Semua Isi Array Menggunakan Looping
//  For
for($i = 0; $i < count($hari); $i++){
echo $hari [$i];
echo "<br>";
}
// End For
echo "<hr>";

// Foreach
foreach($bulan as $bnb) {
    echo $bnb;
    echo "<br>";
}
// End Foreach

// Manipulasi Array
// Menambahkan Elemen Di Akhir Array
$hari[] = "Jum'at";
$hari[] = "Sabtu";
var_dump($hari)

// End Manipulasi Array

// Manual
// echo $hari [1];
// echo "<br>";
// echo $hari [2];
// echo "<br>";
// echo $hari [3];
// echo "<br>";
// End Manual


?>