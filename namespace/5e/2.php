<?php
namespace Elektronik;
class Televisi{
    private $merek;
    private $harga;
    public function __construct($merek, $harga)
    {
        $this->merek = $merek;
        $this->harga = $harga;
    }
    public function getInfo()
    {
        return "Televisi Merek $this->merek dibandrol dengan harga Rp ".number_format($this->harga,0,"",".");
    }
}