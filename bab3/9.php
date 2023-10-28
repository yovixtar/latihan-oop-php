<?php
echo "Letak File : ".__file__."<br />";
echo "Letak Folder : ".__DIR__."<br />";
echo "Perintah ini dari baris : ".__LINE__."<br />";
function Nama_Class()
{
    return "nama class : ".__FUNCTION__." Name Space ".__NAMESPACE__;
}
echo Nama_Class();
echo "<br /><br />";

trait HardCover{
    public function cekTrait()
    {
        $pesan = "Ini dari Method ".__method__;
        $pesan .= " Ini dari trait ".__TRAIT__;
    return $pesan;
    }
}
class Buku{
    use HardCover;
    public function cekClass()
    {
        $pesan = "Ini dari Method ".__METHOD__;
        $pesan .= " Ini dari Class ".__class__;
    return $pesan;
    }
}
$produk = new Buku();
echo $produk->cekTrait()."<br />".$produk->cekCLass();