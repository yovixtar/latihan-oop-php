<?php
class Perusahaan{}
class Smartphone{
    public Perusahaan $supplier;
}
$supplier_1 = new Perusahaan();
$produk_1 = new Smartphone();
$produk_1->supplier = $supplier_1;