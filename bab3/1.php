<?php
abstract class Produk {
    abstract public function cekHarga($harga);
}
class TV extends Produk{
    public function cekHarga($harga){
        return "cek ".$harga;
    }
}
$produk1 = new TV();
echo $produk1->cekHarga(2000);