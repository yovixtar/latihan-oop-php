<?php
trait SmartElectronic{
    public function efisiensi()
    {
        return "Konsumsi 1.0";
    }
}
trait LowWatt{
    public function efisiensi()
    {
        return "Konsumsi 0.8";
    }
}
class SmartTV {
    use SmartElectronic,LowWatt{
        //memprioritaskan SmartElectronic
        SmartElectronic::efisiensi insteadOf LowWatt;
        //mangganti efisiensi LowWatt
        LowWatt::efisiensi as efisiensiLow;
    }
}
$produk = new SmartTV();
echo $produk->efisiensi()."<br />".$produk->efisiensiLow();
