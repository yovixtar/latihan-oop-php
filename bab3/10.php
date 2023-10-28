<?php
class Produk{
    public function __toString()
    {
        return "Ini dari toString";
    }

}
class Televisi extends Produk{
    public $jenis = "Jenis Televisi";
    // private $jenis = "Jenis Televisi";
    public function __get($namaVariabel)
    {
        return "Maaf Properti ".$namaVariabel." Tidak Terdaftar";
    }
}
$produk1 = new Televisi();
echo $produk1;
echo "<br />";
echo $produk1->jenis;
echo "<br />";
echo $produk1->merek;
