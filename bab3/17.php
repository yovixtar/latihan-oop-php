<?php
class Produk {
    public $jenis = "Televisi";
    protected $merek = "Politron";

    public function __unset($nama)
    {
        echo "Maaf Properti '$nama' Tidak ada";
    }
}
$produk = new Produk();

echo $produk->jenis;
echo "<br />";
unset($produk->merek);
echo "<br />";
unset($produk->stok);