<?php
class Produk{
    private $jenis;
    public function __construct($jenis)
    {
        $this->jenis = $jenis;
    }
    public function setjenis($jenis)
    {
        $this->jenis = $jenis;
    }
    public function getjenis()
    {
        return $this->jenis;
    }
}
$produk1 = new Produk("Televisi");
$produk2 = $produk1;
echo $produk1->getjenis();
echo "<br />";
echo $produk2->getjenis();
$produk1->setJenis("Handphone");
echo "<br />";
echo $produk1->getjenis();
echo "<br />";
echo $produk2->getjenis();
