<?php
class Produk{}

interface SmartElectronic{
    public function cekOS();
}

trait LowWatt{
    public function resolusi()
    {
        return "19 Inci";
    }
}

class HP extends Produk implements SmartElectronic{
    use LowWatt;
    public function cekOS()
    {
        return "Android Pie 9.0";
    }
}

$produk = new HP();
echo var_dump($produk instanceof Produk)."<br />";
echo var_dump($produk instanceof HP)."<br />";
echo var_dump($produk instanceof SmartElectronic)."<br />";
echo var_dump($produk instanceof LowWatt)."<br />";
echo var_dump($produk instanceof Smartphone)."<br />";