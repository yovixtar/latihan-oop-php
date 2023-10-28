<?php
interface produkEkspor{
    public function cekHargaUSD();
    public function cekNegara();
}
interface produkMakanan{
    public function cekExpired();
}
interface produkMakananBeku extends produkMakanan{
    public function cekSuhuMin();
}
class nugget implements produkEkspor, produkMakananBeku{
    public function cekHargaUSD(){
        return 7.5;
    }
    public function cekNegara(){
        return ["Indo", "Malay", "Singapure"];
    }
    public function cekExpired(){
        return "2 Bulan";
    }
    public function cekSuhuMin(){
        return -14;
    }
}
$produk1 = new nugget();
echo $produk1->cekHargaUSD()."<br />";
echo implode(", ",$produk1->cekNegara())."<br />";
echo $produk1->cekExpired()."<br />";
echo $produk1->cekSuhuMin()."<br />";