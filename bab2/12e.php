<?php
class Produk{
	public $jenis = "";public $merek="";public $stok=0;
	public function borongProduk($jumlah = 5)
	{
		$this->stok = $this->stok - $jumlah;
		return "Stok Setelah di Borong = ".$this->stok;
	}
	public function pesanProduk(){
		$this->stok = $this->stok - 1;
		return "Stok Setelah di Pesan = ".$this->stok;
	}
	public function cekStok()
	{
		return $this->jenis." ".$this->merek.", Sisa Stok : ".$this->stok;
	}
	public function tambahProduk($jumlah = 12)
	{
		$totalStok = $this->stok + $jumlah;
		if ($totalStok <= 100) {
			$this->stok = $totalStok;
			$pesan = "Berhasil Menambah Produk Sejumlah ".$jumlah."<br />Jumlah Stok : ".$this->stok;
		}else{
			$pesan = "Gagal Menambah Produk Sejumlah ".$jumlah."<br />Jumlah Stok : ".$this->stok;
		}
		return $pesan;
	}
}
$produk1 = new Produk();
$produk1->jenis = "HP";$produk1->merek = "Vivo";$produk1->stok = 50;
echo $produk1->pesanProduk()."<br />".
	$produk1->pesanProduk()."<br />".
	$produk1->borongProduk()."<br />".
	$produk1->borongProduk(10)."<br />".
	$produk1->cekStok()."<br />".
	$produk1->tambahProduk()."<br />".
	$produk1->tambahProduk(60);