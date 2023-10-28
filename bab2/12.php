<?php 
class Produk {
	public $jenis = "";
	public $merek = "";
	
	public function pesanProduk(){
		return $this->jenis." dipesan....";
	}
}

$tv = new Produk();
$tv->jenis = "Televisi";
$tv->merek = "Politron";

$laptop = new Produk();
$laptop->jenis = "Laptop";
$laptop->merek = "HP";

echo $tv->pesanProduk()."<br />".$laptop->pesanProduk();