<?php
include("1.php");
include("2.php");
include("3.php");

use Elektronik\Rumah\{Kulkas, MesinCuci, Televisi as TV};

$produk_1 = new Kulkas\Produk();
echo $produk_1->jenis;

echo "<br />";
$produk_2 = new MesinCuci\Produk();
echo $produk_2->jenis;

echo "<br />";
$produk_3 = new TV\Produk();
echo $produk_3->jenis;
