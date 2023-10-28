<?php
class Produk{
    private $merek;
    private $stok;
    private function setMerek($merek)
    {
        if(is_string($merek)){
            $this->merek = $merek;
        }else{
            die("ERROR : Masukan String");
        }
    }
    private function setStok($stok)
    {
        if(is_int($stok)){
            $this->stok = $stok;
        }else{
            die("ERROR : Masukan integer");
        }
    }
    public function __construct($merek, $stok)
    {
        $this->setMerek($merek);
        $this->setStok($stok);
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
$produk01 = new Produk("asus", 30);
echo $produk01->getMerek();
echo "<br />".$produk01->getStok();