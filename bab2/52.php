<?php
class Produk{
    private $merek;
    private $stok;
    public function setMerek($merek)
    {
        if(is_string($merek)){
            $this->merek = $merek;
        }else{
            echo "ERROR : Masukan String";
        }
    }
    public function setStok($stok)
    {
        if(is_int($stok)){
            $this->stok = $stok;
        }else{
            echo "ERROR : Masukan integer";
        }
    }
    public function getMerek()
    {
        return "Merek : ".strtoupper($this->merek);
    }
    public function getStok()
    {
        return "Sisa Stok : ".$this->stok;
    }
}
$produk01 = new Produk();
$produk01->setMerek("asus");
// $produk01->setMerek(123);
echo $produk01->getMerek();
$produk01->setStok(20);
echo "<br />".$produk01->getStok();