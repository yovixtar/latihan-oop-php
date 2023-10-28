<?php
abstract class Produk{
    abstract public function cekHarga($harga);
}
abstract class Televisi extends Produk{
    abstract public function cekTipe($tipe);
}
class TVLED extends Televisi{
    public function cekHarga($hargax)
    {
        return "Harga : ".$hargax;
    }
    public function cekTipe($tipex)
    {
        return "Tipe : ".$tipex;
    }
}
$produk1 = new TVLED();
echo $produk1->cekHarga(1000)."<br />".$produk1->cekTipe("LED");