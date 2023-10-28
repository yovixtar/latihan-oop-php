<?php
function test($number)
{
    if ($number === 0) {
        throw new Exception("Argumen \$number Tidak Boleh 0 <br />", 543);
    }else if($number < 0){
        throw new Exception("Argumen \$number Tidak Boleh Negatif <br />", 544);
    }else{
        return 1/$number;
    }
}
function TampilanError($e)
{
    return "Terjadi Error pada file <b>".$e->getTrace()[0]["file"]."</b> di baris ke ".$e->getTrace()[0]["line"]." dengan Keterangan : <b>".$e->getMessage()."</b>";
}
try {
    echo test(1)    ."<br />";
} catch (Exception $e) {
    echo TampilanError($e);
}
try {
    echo test(2)    ."<br />";
} catch (Exception $e) {
    echo TampilanError($e);
}
try {
    echo test(0)    ."<br />";
} catch (Exception $e) {
    echo TampilanError($e);
}
try {
    echo test(-2)    ."<br />";
} catch (Exception $e) {
    echo TampilanError($e);
}