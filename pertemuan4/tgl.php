<?php 
// Date
// Untuk menampilkan tanggal dengan nilai tertentu
echo date("l, d-M-Y");
echo "<hr>";
// TIME
// UNIX Timestamp / EPOCH time 
// Detik yang sudah berlalu sejak 1 Januari 1970 
echo time();   
echo "<br>";
echo date("l", time() + 60 * 60 * 24 * 100);
echo "<br>";
echo date("d M Y", time() - 60 * 60 * 24 * 100);
echo "<hr>";

// MKTIME 
// / Membuat detik sendiri 
// mktime(0, 0, 0, 0, 0, 0) 
// jam, menit, detik, tanggal, tahun 
echo "Jimmy Hidayat " , date("l", mktime(0, 0, 0, 18, 10, 2002));
echo "<hr>";

// STRTOTIME 
echo date("l", strtotime("18 October 2002"));

?>