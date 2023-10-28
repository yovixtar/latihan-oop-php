<?php
class Perusahaan {
    private $namaPerusahaan;
    Private $kotaPerusahaan;
    public function __construct($nama, $kota)
    {
        $this->namaPerusahaan = $nama;
        $this->kotaPerusahaan = $kota;
    }
    public function cekPerusahaan()
    {
        return $this->namaPerusahaan." dari Kota ".$this->kotaPerusahaan;
    }
}
class Smartphone{
    public $merek;
    public $supplier;
    public function __construct($m, Perusahaan $s)
    {
        $this->merek = $m;
        $this->supplier = $s;
    }
    public function cekSmartphone()
    {
        return "Smartphone Merek ".$this->merek." disupply oleh ".$this->supplier->cekPerusahaan();
    }
}
$supplier01 = new Perusahaan("SM Star","Pemalang");
$produk1 = new Smartphone("Asus",$supplier01);
echo $produk1->cekSmartphone();