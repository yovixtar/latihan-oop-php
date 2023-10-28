<?php
class Televisi {
    public function cekResolusi()
    {
    return "Full HD";
    }
}
trait SmartTelevisi{
    public function cekOS()
    {
        return "Android Pie (9)";
    }
}
trait LowWatt{
    public function cekWatt()
    {
        return "Konsumsi Daya Rendah";
    }
}
class SmartTV extends Televisi{
    use SmartTelevisi, LowWatt;
    public function cekInfo()
    {
        return "Smart TV ".$this->cekResolusi()." OS ".$this->cekOS()." Kelebihannya ".$this->cekWatt();
    }
}
$produk1 = new SmartTV();
echo $produk1->cekInfo();