<?php
class Produk{
    public function __call($nama, $parameter)
    {
        echo "Maaf Method '$nama' Tidak teridentifikasi, Arguimen : ".implode(", ",$parameter);
    }
    public static function __callStatic($nama, $parameter)
    {
        echo "Maaf Method static '$nama' Tidak tersedia, Argumen : ".implode(", ",$parameter);
    }
}
$produk = new Produk();
$produk->tambah("Televisi", "Handphone");
echo "<br /><br />";
Produk::kategori("Baju");