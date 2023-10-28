<?php
class Mobil{
    private $merek;
    private $harga;
    public function __construct($merek, $harga)
    {
        $this->merek = $merek;
        $this->harga = $harga;
    }
    public function getInfo()
    {
        return "Mobil Merek $this->merek , Harganya Rp ".number_format($this->harga,0,"",".");
    }
}