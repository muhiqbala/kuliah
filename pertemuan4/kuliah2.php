<?php

$a = 9;
$b = 4;

// hitung masing masing volume kubus 
$volume_a = pow($a, 3);
$volume_b = pow($b, 3);

// hitung total 2 volume
$total = $volume_a +$volume_b;

// kembalikan nilai total
echo "Jumlah dari volume  kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";
echo "<br>";

echo "<hr>";
// Deklarasi / definisi function
function totalVolumeDuaKubus($a, $b) {
    $volume_a = pow($a, 3);
$volume_b = pow($b, 3);

$total = $volume_a +$volume_b;
    return "Jumlah dari volume  kubus dengan sisi $a dan kubus dengan sisi $b adalah $total";
} 
// Pemanggilan / Eksekusi Function
echo totalVolumeDuaKubus(9,4);
echo "<br>";
echo totalVolumeDuaKubus(10,20);
echo "<br>";
echo totalVolumeDuaKubus(5,6);
echo "<br>";
echo "<hr>";
echo luasSegiTiga (2,4);
function luasSegiTiga($a,$t) {
    $luas =0.5 * $a * $t;
    return "Luas Segi Tiga Dengan Alas $a Dan Tinggi $t Adalah $luas";
}
?>