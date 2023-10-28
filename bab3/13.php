<?php
class Televisi {
    public function __set($nama, $value)
    {
        $this->$nama = strtoupper($value);
    }
}
$produk = new Televisi();
$produk->merek = "Politron";
echo $produk->merek;