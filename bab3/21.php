<?php
class Produk{
    private $merek;
    public function __construct($nama)
    {
        $this->merek = $nama;
    }
    public function __clone()
    {
        echo "Objek di Clone.... <br />";
    }
}
$produk1 = new Produk("Asus");
$produk2 = clone $produk1;
$produk3 = clone $produk2;