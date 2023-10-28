<?php
class Produk{
    private $merek;
    public function __construct($nama)
    {
        $this->merek = $nama;
    }
}
$produk1 = new Produk("Asus");
$produk2 = new Produk("Asus");

//Valuenya sama tapi objeknya berbeda
if ($produk1 == $produk2) {
    echo "Produk Sama";
}else{echo "Produk Berbeda";}

echo "<br /><br />";

if ($produk1 === $produk2) {
    echo "Produk Sama";
}else{echo "Produk Berbeda";}

echo "<br /><br />";

//agar sama
$produk2 = $produk1;
if ($produk1 === $produk2) {
    echo "Produk Sama";
}else{echo "Produk Berbeda";}