<?php
class NolException extends Exception{}
class NegatifException extends Exception{}

set_exception_handler(
    function ($e)
    {
        echo "Terjadi Kesalahan dibaris ke-".$e->getTrace()[0]["line"]." dengan keterangan ".$e->getMessage()."<br />";
    }
);
function test($a)
{
    if ($a === 0) {
        throw new NolException("Argumen Tidak boleh 0", 001);
    }else if($a < 0){
        throw new NegatifException("Argumen tidak boleh Negatif", 002);
    }else if(!is_numeric($a)){
        throw new Exception("Argumen Tidak diperbolehkan", 003);        
    }else{
        return 1 / $a;
    }
}

try {
    echo test("X");
} catch (NolException $e) {
    echo $e->getMessage();
}
try {
    echo test(-2);
} catch (NolException $e) {
    echo $e->getMessage();
}