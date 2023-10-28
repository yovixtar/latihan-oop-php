<?php
class Televisi{
    public $judul = "tv murah";
    public $jenis = "led";
    public $harga = 1200000;
    public $tipe = "gantung";
    public function __get($namaParameter)
    {
        if ($namaParameter == $this->jenis) {
            $hasil = "Jenis : ".strtoupper($this->jenis);
        }else if($namaParameter == $this->harga){
            $hasil = "Harga : Rp ".number_format($this->harga,2,",",".");
        }else if ($namaParameter == "tipe" || $namaParameter == "judul") {
            $hasil = strtoupper($this->$namaParameter);
        }
        else{$hasil = "Maaf Nama '$namaParameter' Tidak diidentifikasi";}
        return $hasil;
    }
}
$produk = new Televisi();
echo $produk->judul;
echo "<br />";
echo $produk->jenis;
echo "<br />";
echo $produk->harga;
echo "<br />";
echo $produk->stok;
echo "<br />";
echo $produk->tipe;