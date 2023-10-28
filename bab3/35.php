<?php
class Perusahaan {
  public function __construct(public $nama, public $kota) { 
  }
  public function getInfo(){
    return "$this->nama dari kota $this->kota";
  }
}

class Produk {
  public ?Perusahaan $suplier;

  public function __construct($suplier) { 
    $this->suplier = $suplier;
  }
}

$perusahaan01 = new Perusahaan("PT. ABC","Bandung");
$produk01 = new Produk(null);

echo $produk01->suplier->getInfo();  
// Fatal error: Uncaught Error: Call to a member function getInfo() on null