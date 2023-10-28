<?php
$produk_1 = new stdClass;

$produk_1->merek = "ASUS";
$produk_1->harga = 1200000;

echo "Produk Merek $produk_1->merek dibandrol dengan harga Rp ".number_format($produk_1->harga,0,"",".");