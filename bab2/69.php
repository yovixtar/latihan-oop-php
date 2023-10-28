<?php
class Produk{
    public $hargaUSD = 0;
    const KURSUSD = 15000;
    public function hargaIDR()
    {
        return $this->hargaUSD * self::KURSUSD;
    }
}
$produk01 = new Produk();
$produk01->hargaUSD = 100;
echo $produk01->hargaIDR();