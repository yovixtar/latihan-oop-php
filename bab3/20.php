<?php
class Produk{
    private $merek;
    public function __construct($nama)
    {
        $this->merek = $nama;
    }
    public function setMerek($nama)
    {
        $this->merek = $nama;
    }
    public function getMerek()
    {
        return "Merek : ".$this->merek."<br />";
    }
}
$produk1 = new Produk("Asus");
$produk2 = clone $produk1;

echo $produk1->getMerek();
echo $produk2->getMerek();

echo "<br />";
$produk2->setMerek("Dell");

echo $produk1->getMerek();
echo $produk2->getMerek();