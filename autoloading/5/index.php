<?php
spl_autoload_register(
    function ($className){
        $filePath_1 = strtolower("library/$className.php");
        if (file_exists($filePath_1)) {
            require $filePath_1;
        }
        $filePath_2 = strtolower("helper/$className.php");
        if (file_exists($filePath_2)) {
            require $filePath_2;
        }
    }
);
// $produk_1 = new Pesawat("Garuda", 1000000000);
$produk_2 = new Mobil("Avanza", 600000000);
echo $produk_2->getInfo();
echo "<br />";

$produk_3 = new Motor("Mio", 15000000);
echo $produk_3->getInfo();
