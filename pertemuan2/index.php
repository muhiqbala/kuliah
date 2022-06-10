<?php 
// Pertemuan 2, Belajar Sintaks PHP
// Nilai
// Angka (Interger), Tulisan (string), True/False (Bolean)
echo 10; // Interger
echo '<br>';
echo "Jimmy"; //String
echo '<br>';
echo False; // Bolean Null
echo '<hr>';

// Variable
// Tempat Menampung Nilai
// Awali Dengan Tanda $
// Awali Dengan Tanda $, Nama nya Bebas
// Boleh Mengandung Angka, Tidak Boleh Diawali Angka
// Tidak Boleh Ada Spaci
$nama_depan ='Jimmy';
$nama_belakang ='Hidayat';
echo $nama_depan;
echo $nama_belakang;
echo '<hr>';
//String
//'',''
$hari = "Jum'at";
echo $hari;
echo '<br>';
// Escape Character 
// \
echo 'Jimmy; "Selamat hari jum\'at"';
echo '<br>';
// Interpolasi
// Mencetak Langsung Isi Variabel
// Hanya Bisa Oleh ""
echo "Halo, nama saya  $nama_depan";
echo '<br>';
echo 'Halo, nama saya $nama_depan $nama_belakang';
// Concat / Penggabung String
//
echo $nama_depan. " " . $nama_belakang;
echo '<br>';
// Operator
// Aritmatika
// +, _, *. /
echo 1 + 1; // Hasil Dari 1 + 1 Adalah 2
echo '<br>';
echo 20 * 9 / 3;
echo '<br>';
echo 5 * 5;
echo '<br>';
echo 240 * 20 / 15 - 20;
echo '<br>';
echo 'Hasil Dari 2130 + 220 * 2 / 10 Adalah' , " " , 2130 + 220 * 2 / 10; // Menggunakan String
echo '<br>';
echo ' Hasil Dari 1 + 1 adalah' , " " , 1 + 1;
echo '<br>';
// Perbandingan
//<, >, <=, >=, ==, !=
echo 1 < 5;
echo '<br>';
echo ! == '1';
echo '<hr>';
//Identitas /Strict Comparison 
// ===, !==
echo 1 === "1";
echo '<hr>';
// Increment / Decrement
// Tambah/ Kurang 1
// ++, --
$x = 10;
$x ++;
$x ++;
$x ++;
$x ++;
$x --;
$x ++;
$x --;
echo $x;