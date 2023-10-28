<?php
spl_autoload_register('cekClass');
function cekClass($namaClass)
{
    require "$namaClass.php";
}
$produk_1 = new Laptop("HP Pavilion", 12000000);
$produk_2 = new Handphone("Vivo S1", 3600000);

echo $produk_1->getInfo();
echo "<br />";
echo $produk_2->getInfo();