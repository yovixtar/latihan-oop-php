<?php
$produk_1 = new class(){
    private $merek = "Asus";
    public function getMerek()
    {
        return $this->merek;
    }
};
echo $produk_1->getMerek();
echo "<br />";
// echo $produk_1->merek(); //private jadi error

echo "<br /><br />";

$produk_2 = new class("Lenovo"){
    private $merek;
    public function __construct($m)
    {
        $this->merek = $m;
    }
    public function getMerek()
    {
        return $this->merek;
    }
};
echo $produk_2->getMerek();

echo "<br /><br />";

class Produk{
    protected $merek;
    public function __construct($m)
    {
        $this->merek = $m;
    }
}
interface PunyaProduk{
    public function getMerek();
}
$produk_3 = new class("Dell") extends Produk implements PunyaProduk{
    public function getMerek()
    {
        return $this->merek;
    }
};
echo $produk_3->getMerek();