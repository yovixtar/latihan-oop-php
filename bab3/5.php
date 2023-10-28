<?php
class Televisi{
    public function efisiensi()
    {
        return "Konsumsi 1.0 Watt";
    }
}
trait LowWatt{
    public function efisiensi()
    {
        return "Konsumsi 0.8 Watt";
    }
}
class SmartTV extends Televisi{
    use LowWatt;
    public function efisiensi()
    {
        return "konsumsi 0.5 Watt";
    }
}
$produk = new SmartTV();
echo $produk->efisiensi();