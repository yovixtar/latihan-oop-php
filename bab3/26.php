<?php
class Produk{
    public $merek;
    public $seri;
    public function __construct($m, $s)
    {
        $this->merek = $m;
        $this->seri = $s;
    }
}
class HP extends Produk{

}
class TV extends Produk{

}
function cekProduk(Produk $var)
{
    return "Produk Merek ".$var->merek." dengan Seri ".$var->seri;
}
$produk1 = new HP("Asus", "N01");
$produk2 = new TV ("Sharp", "D02");
echo cekProduk($produk1);
echo "<br />";
echo cekProduk($produk2);