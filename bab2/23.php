<?php
class Produk{
	public $jenis, $merek, $stok;
	public function __construct($jenis, $merek, $stok = 10)
	{
		$this->jenis = $jenis;
		$this->merek = $merek;
		$this->stok = $stok;
	}
	public function pesanBarang($jumlah = 1)
	{
		$this->stok = $this->stok - $jumlah;
		return "Berhasil memesan ".$jumlah." Unit";
	}
}
class Hp extends Produk{
	public function cekStok()
	{
		return "Sisa Stok ".$jenis." ".$merek.", Stok : ".$stok;
	}
}
$produk1 = new Hp("Hp","Vivo");
$produk2 = new Produk("Hp","Vivo");

$produk1->pesanBarang(2);
print_r($produk1);
echo $produk2->jenis." ".$produk2->merek;