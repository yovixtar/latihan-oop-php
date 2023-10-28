<?php
include("1.php");
include("2.php");
include("3.php");

use Elektronik\Kulkas as Kulkas;
use Komputer\Aksesoris\Produk as AksesorisKomputer;
use Otomotif\Motor\Ban;

$produk_1 = new Kulkas\Produk();
$produk_2 = new AksesorisKomputer();
$produk_3 = new Ban\Produk();

echo $produk_1->jenis;
echo "<br />";
echo $produk_2->jenis;
echo "<br />";
echo $produk_3->jenis;