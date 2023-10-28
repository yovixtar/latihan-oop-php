<?php
function getInfo($hp)
{
    return "Handphone merek $hp->merek dibandrol dengan harga Rp ".number_format($hp->harga,2,",",".");
}
echo getInfo(new class(){
    public $merek = "ASUS";
    public $harga = 1200000;
});