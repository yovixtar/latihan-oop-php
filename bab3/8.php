<?php 
trait SmartTelevisi{
    public function cekOS()
    {
        return "Cek OS";
    }
    abstract public function cekProsesor();
}
class SmartTV{
    use SmartTelevisi {cekOS as Protected;}
    public function cekProsesor()
    {
        return "cek Prosesor";
    }
}
$produk = new SmartTV();
echo $produk->cekOS()."<br /><br />".$produk->cekProsesor();