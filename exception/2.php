<?php
function test($number)
{
    if ($number <= 0) {
        throw new Exception("Argumen \$number Tidak bisa diproses", 543);
    }else{
        return 1/$number;
    }
}
try {
    echo test(1)    ."<br />";
    echo test(2)    ."<br />";
    echo test(-2)   ."<br />";
    echo test(0)    ."<br />";
} catch (Exception $e) {
    echo "Terjadi Error pada file <b>".$e->getTrace()[0]["file"]."</b> di baris ke ".$e->getTrace()[0]["line"]." dengan Keterangan : <b>".$e->getMessage()."</b>";
}