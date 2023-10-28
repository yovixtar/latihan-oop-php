<?php
class Produk{
    private $sku;
    private $stok;
    private function setSku($sku)
    {
        if(preg_match("/^[A-Z]{3}[0-9]{3}$/",$sku)){
            $this->sku = $sku;
        }else{
            die("ERROR : SKU harus berformat AAA111");
        }
    }
    private function setStok($stok)
    {
        if(is_int($stok) && $stok>0){
            $this->stok = $stok;
        }else{
            die("ERROR : Stok harus Integer > 0");
        }
    }
    public function __construct($sku,$stok)
    {
        $this->setSku($sku);
        $this->setStok($stok);
    }
    public function getSku()
    {
        return "SKU : ".$this->sku;
    }
    public function getStok()
    {
        return "Sisa Stok : ".$this->stok;
    }
}
$produk01 = new Produk("KKK333",10);
echo $produk01->getSku()." dan ".$produk01->getStok();