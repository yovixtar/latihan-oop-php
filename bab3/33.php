<?php
class Produk{
    protected $merek;
    public function cekMerek()
    {
        return "Produk merek $this->merek Tersedia";
    }
    public function getInfo()
    {
        return $this->cekMerek();
    }
}
class HP extends Produk{
    public function cekMerek()
    {
        return "Handphone merek $this->merek tersedia";
    }
}
$produk_1 = new Produk();
echo $produk_1->getInfo();
echo "<br />";

$produk_2 = new HP();
echo $produk_2->getInfo();