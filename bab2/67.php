<?php
class produkHelper{
    public static function cekSkuValid($sku)
    {
        return preg_match("/^[A-Z]{3}[0-9]{3}$/", $sku);
    }
    public static function cekMerekValid($merek)
    {
        $allMerek = ["Samsung","Vivo","Asus"];
        return in_array($merek, $allMerek);
    }
}
if (produkHelper::cekSkuValid("HHD123")) {
    echo "SKU HHD123 Valid <br />";
}
if (produkHelper::cekSkuValid("FG562")) {
    echo "SKU FG562 Valid <br />";
}
if (produkHelper::cekMerekValid("Vivo")) {
    echo "Merek Vivo Valid <br />";
}
if (produkHelper::cekMerekValid("vivo")) {
    echo "Merek vivo Valid <br />";
}