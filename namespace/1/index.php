<?php
include("1.php");
include("2.php");

$produk_1 = new Asus\produk();
$produk_2 = new HP\Pavilion\produk();

echo $produk_1->merek;
echo "<br />";
echo $produk_2->merek;