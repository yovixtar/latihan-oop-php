<?php
class Televisi{
    private $merek;
    private $harga;
    public function __set($nama, $value)
    {
        if ($nama == "merek") {
            if (is_string($value)) {
                return $this->merek = strtoupper($value);
            }else{
                echo "Error : Value Harus String <br />";
            }
        }
        else if ($nama == "harga") {
            if (is_int($value)) {
                return $this->harga = "Rp ".number_format($value, 2, ",", ".");
            }else{echo "Error : Value Harus Integer <br />";}
        }else{echo "Maaf Properti '$nama' tidak bisa di set menjadi $value";}
    }
}
$produk = new Televisi();
// $produk->merek = "politron";
// $produk->harga = 1000000;
$produk->merek = 2000;
$produk->harga = "1000000";
$produk->tipe = "led";

echo "<pre>";
print_r($produk);
echo "</pre>";