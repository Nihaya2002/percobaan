<?php 
// array cra baru
// bisa memiliki tipe data yang berbeda
// menampilkn ary tdk bisa denga echo tapi gunain vardump

$hari=["senin","selasa","rabu"];
$bulan=["1","januari","2","februari"];

var_dump($hari); 
echo "<br>";
//satu element pada arrey menggunakan echo
echo $hari[1];
echo "<br>";
echo $bulan[0];
echo "<br>";

$hari=["kamis"];
var_dump($hari);
?>