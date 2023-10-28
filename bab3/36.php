<?php
class Produk{
    protected static $merek = "Asus";
    public static function cekMerek()
    {
        return "Produk merek ".self::$merek;
    }
    public static function getInfo()
    {
        // return self::cekMerek(); //terkait class
        return static::cekMerek(); //tidak terkait class
    }
}
class HP extends Produk{
    public static function cekMerek()
    {
        return "HP merek ".self::$merek;
    }
}
$produk_1 = new Produk();
$produk_2 = new HP();

echo $produk_1->getInfo();
echo "<br />";
echo $produk_2->getInfo();