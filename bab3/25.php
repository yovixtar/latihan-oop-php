<?php
class HP {
    public $merek;
    public $seri;
    public function __construct($m, $s)
    {
        $this->merek = $m;
        $this->seri = $s;
    }
}
class TV {
    public $merek;
    public $seri;
    public function __construct($m, $s)
    {
        $this->merek = $m;
        $this->seri = $s;
    }
}
function viewHP(HP $var)
{
    return "Handphone baru, Merek ".$var->merek." Seri ".$var->seri;
}
function viewTV(TV $var)
{
    return "Televisi baru, Merek ".$var->merek." Seri ".$var->seri;
}
$produk1 = new HP("Asus", "X10N");
$produk2 = new TV("Politron", "VE30");

echo viewHP($produk1);
echo "<br />";
echo viewTV($produk2);
echo "<br />";

echo viewHP($produk2);
echo "<br />";