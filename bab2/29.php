<?php
class Produk{
    public $sku;
    public $stok;
}
class Televisi extends Produk{
    public $lebar;
}
class MesinCuci extends Produk{
    public $kapasitas;
}
$produk01 = new Televisi();
$produk02 = new MesinCuci();

var_dump(is_a($produk01, 'Produk'));
var_dump(is_a($produk01, 'Televisi'));
var_dump(is_a($produk02, 'Produk'));
var_dump(is_a($produk02, 'Televisi'));