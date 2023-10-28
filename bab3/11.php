<?php
class Televisi{
    public function __get($namaParameter)
    {
        if ($namaParameter == "jenis") {
            $hasil = "Ini Jenis LED  ";  
        }elseif($namaParameter == "merek"){
            $hasil = "Ini Merek Politron";
        }else{$hasil = "Maaf Parameter ".$namaParameter." tidak Diidentifikasi";}
    return $hasil;
    }
}
$produk = new Televisi();
echo $produk->jenis;
echo "<br />";
echo $produk->merek;
echo "<br />";
echo $produk->resolusi;