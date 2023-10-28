<?php
final class Produk{
    // final public $jenis;
    public $jenis;
    final public function halo()
    {
        return "Test";
    }
}
class Televisi extends Produk{
    public function halo()
    {
        parent::halo();
    }
}
$televisi = new Produk();
print_r($televisi->halo());