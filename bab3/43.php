<?php
class Produk{}
class_alias('Produk' , 'Barang');

$produk_1 = new Produk();
$barang_1 = new Barang();

echo "Class Alias : ";
echo "<br /><br />";
echo "Apakah variabel produk_1 dari class Produk ? ";
var_dump($produk_1 instanceof Produk);
echo "<br />";
echo "Apakah variabel produk_1 dari class Barang ? ";
var_dump($produk_1 instanceof Barang);
echo "<br /><br />";
echo "Apakah variabel barang_1 dari class Produk ? ";
var_dump($barang_1 instanceof Produk);
echo "<br />";
echo "Apakah variabel barang_1 dari class Barang ? ";
var_dump($barang_1 instanceof Barang);

echo "<br /><br />";
echo "Perintah get_called_class";
echo "<br /><br />";

class Laptop {
    public static function getInfo()
    {
        return get_called_class();
    }
}
class LaptopGaming extends Laptop {

}
echo Laptop::getInfo();
echo "<br />";
echo LaptopGaming::getInfo();