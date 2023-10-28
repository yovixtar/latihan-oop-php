<?php 
class Produk {
	public $sku = "01";
	public $harga = 1000;
	public $merek = "Samsung";
	
	public function pesanProduk(){
		return "Produk dipesan....";
	}
}

$tv = new Produk();
echo $tv->sku."<br />".$tv->harga."<br />".$tv->merek."<br />".$tv->pesanProduk();

$mesinCuci = new Produk();
$mesinCuci->sku = "02";
$mesinCuci->harga = 2000;
$mesinCuci->merek = "LG";
echo $mesinCuci->sku."<br />".$mesinCuci->harga."<br />".$mesinCuci->merek."<br />".$mesinCuci->pesanProduk();
print_r($mesinCuci);