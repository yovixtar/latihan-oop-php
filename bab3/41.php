<?php
$produk = ["merek" => "ASUS", "harga" => 1200000];
$produk_1 = (object) $produk;
echo "HP merek $produk_1->merek dibandrol dengan harga Rp ".number_format($produk_1->harga,0,"",".");

echo "<br /><br />";
echo "Benarkah variabel produk_1 termasuk stdClass ? ";
var_dump($produk_1 instanceof stdClass);