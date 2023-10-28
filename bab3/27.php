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
interface smartElectronic {
    public function cekOS();
}
class HP extends Produk implements smartElectronic{
    public function cekOS()
    {
        return "OS Android 9.0";
    }
}
function viewProduk(smartElectronic $barang)
{
    return "Produk Merek ".$barang->merek." Seri ".$barang->seri;
}
$produk1 = new HP("Asus","A01");
echo viewProduk($produk1);