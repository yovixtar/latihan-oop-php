<?php
namespace Komputer {
    class Produk{
        public $merek = "Dell";
    }
    $produk_1 = new Produk();
    echo $produk_1->merek;
echo "<br />";
echo __NAMESPACE__;
}
namespace HP{
    class Produk{
        public $merek = "Asus";
    }
    $produk_2 = new Produk();
echo "<br />";
echo "<br />";
echo $produk_2->merek;
echo "<br />";
echo __NAMESPACE__;
}