<?php 

// Array Multidimensi
// Array Didalam Array
$myArr = [100, "Jimmy", true, [1,2,3]];
echo $myArr [3][1];
echo "<hr>";
$angka = [
[1,2,3],
[4,5,6],
[7,8,9,]
];
echo $angka [2][1];

echo "<hr>";
$angka = [
[1,2,3],
[4,5,6],
[7,[8],9,]
];
echo $angka [2][1][0];
?>