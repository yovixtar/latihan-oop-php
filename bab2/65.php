<?php
class Produk{
    private static $totalProduk = 0;
    public function __construct($nama)
    {
        self::$totalProduk++;
        echo "Produk Berhasil ditambahkan = ".$nama."<br />";
        echo "Total Produk : ".self::$totalProduk."<br /><br />";
    }
}
$produk01 = new Produk("HP Vivo");
$produk02 = new Produk("HP Asus");
$produk03 = new Produk("HP Lenovo");
