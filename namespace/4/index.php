<?php
include("1.php");
$produk_1 = new Handphone\Produk();
echo $produk_1->merek;
echo "<br />";
echo Handphone\Seri();
echo "<br />";
echo Handphone\JENIS;
echo "<br />";
echo $harga;