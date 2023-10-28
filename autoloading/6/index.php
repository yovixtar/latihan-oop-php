<?php
spl_autoload_register(
    function ($className){
        require str_replace('\\','/',strtolower("$className.php"));
    }
);

use app\{Library\Mobil, Helper\Motor};

$produk_1 = new Mobil("Lamborgini", 5000000000);
echo $produk_1->getInfo();
echo "<br />";
$produk_2 = new Motor("Megapro", 25000000);
echo $produk_2->getInfo();