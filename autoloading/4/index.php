<?php
function __autoload($namaClass)
{
    $namaFile = strtolower("$namaClass.php");
    if (file_exists($namaFile)) {
        require $namaFile;
    }else{
        die("File $namaFile Tidak Tersedia");
    }
}

$produk_1 = new Mobil("Mitsubisu", 400000000);
echo $produk_1->getInfo();
echo "<br />";
$produk_2 = new Motor("Supra", 14000000);
echo $produk_2->getInfo();
echo "<br />";
$produk_3 = new Pesawat("Garuda", 1);
