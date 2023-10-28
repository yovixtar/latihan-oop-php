<?php
spl_autoload_register('cekClass');
function cekClass($namaClass)
{
    $namaFile = strtolower($namaClass).".php";
    if (file_exists($namaFile)) {
        require $namaFile;
    }else{
        die("File $namaFile Tidak ditemukan");
    }
}
$produk_1 = new Mobil("Toyota", 500000000);
echo $produk_1->getInfo();
echo "<br />";
$produk_2 = new Motor("Verza", 20000000);
echo $produk_2->getInfo();
echo "<br />";
$produk_3 = new Becak("Carry", 3000000);
echo $produk_3->getInfo();