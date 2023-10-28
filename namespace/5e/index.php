<?php
include("1.php");
include("2.php");

use Elektronik\{Komputer\Laptop as Lappy, Televisi as TV};

$produk_1 = new Lappy("Asus TUF Gaming");
$produk_2 = new TV("Sharp",2000000);

echo $produk_1->getInfo();
echo "<br />";
echo $produk_2->getInfo();