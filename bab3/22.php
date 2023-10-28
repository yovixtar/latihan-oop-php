<?php
class Perusahaan{
    public $nama;
    public function __construct($namaPerusahaan)
    {
        $this->nama = $namaPerusahaan;
    }
}
class Laptop{
    public $merek;
    public $suplier;
    public function __construct($nama)
    {
        $this->merek = $nama;
    }
    public function __clone()
    {
        $this->suplier = clone $this->suplier;
    }
}
$suplierProduk = new Perusahaan("PT SM");
$produk1 = new Laptop("Asus");
$produk1->suplier = $suplierProduk;

$produk2 = clone $produk1;
$produk2->suplier->nama = "CV Coeg";

echo "<pre>";
print_r($produk1);
echo "<pre>";
echo "<pre>";
print_r($produk2);
echo "<pre>";