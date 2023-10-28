<?php
class Produk{
    public static $totalProduk = 50;

    public static function cekProduk()
    {
        return "Total Produk ".self::$totalProduk;
    }
}
class Televisi extends Produk{
    public function cekBlender()
    {
        return "Televisi ada 10 dari ".self::cekProduk();
    }
}
echo Televisi::cekBlender();