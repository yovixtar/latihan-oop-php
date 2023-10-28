<?php
class Televisi{
    public $merek = "Politron";
    protected $tipe = "LED";
    private $ukuran = 24;
    public function __isset($nama)
    {
        echo "Apakah ada Property '$nama' ? ";
        return isset($this->$nama);
    }
}
$produk = new Televisi();
var_dump(isset($produk->merek));
echo "<br /><br />";
var_dump(isset($produk->jenis));
echo "<br /><br />";
var_dump(isset($produk->ukuran));
echo "<br /><br />";
var_dump(empty($produk->merek));
echo "<br /><br />";
var_dump(empty($produk->jenis));
echo "<br /><br />";
var_dump(empty($produk->ukuran));