<?php
class Laptop {
    private $merek;
    private $harga;
    public function __construct($merek, $harga)
    {
        $this->merek = $merek;
        $this->harga = $harga;
    }
    public function getInfo()
    {
        return "Laptop Merek $this->merek dibandrol dengan harga Rp ".number_format($this->harga,0,"",".");
    }
}