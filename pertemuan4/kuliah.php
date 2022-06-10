<?php 
// 4 - FUNCTION
// built-in functiom

// date()
// untuk mengetahui waktu saat ini
// default timezone: UTC (-7)
echo date('G l, j F Y');
echo "<hr>";
echo date("l", time());
echo "<hr>";

// time()
//  UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 januari 1970
echo time();
echo "<br>";
echo time() +60 * 60 * 24;
echo "<hr>";
//  hari apa 100 hari kedepan
echo date('l', time() +60 * 60 * 100);
// hari apa 100 hari kebelakang
echo date('l', time() -60 * 60 * 100);
echo "<hr>";

// mktike()
// membuat waktu berdasarkan format
// mktime (0.0.0.0.0.0)
// jam, menit, detik, bulan, tanggal, tahun
echo mktime(10,45,0,3,5,2022);
echo "<hr>";
echo date('l', mktime(0,0,0,10,18,2002));
echo "<hr>";
echo strtotime('18 Oct 2002');
echo "<br>";
echo mktime(0,0,0,10,18,2002);
echo "<hr>";

// Fungsi Matematika
// Pow()
echo pow(2,3);
echo "<br>";
echo rand(1,10); // pembulatan ke nilai terdekat
echo "<br>";
// pembulatan
echo round(2.7);
echo ceil(2.1); // ke atas (ceiling/langit2)
echo "<br>";
echo floor(2.9); // ke bawah (floor/lantai)
?>