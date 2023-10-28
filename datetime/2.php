<?php
$zonaWIB = new DateTimeZone('Asia/Jakarta');
$sekarang = new DateTime('now', $zonaWIB);

echo $sekarang->format('d-m-Y, H:i:s');

echo "<br /><br />";

echo "<pre>";
var_dump($sekarang);
echo "</pre>";

echo "<br /><br />";

$sekarang_2 = new DateTime('now');

echo "<pre>";
var_dump($sekarang_2);
echo "</pre>";