<?php
function test($number)
{
    if ($number === 0) {
        throw new Exception("Argumen \$number Tidak bisa diproses", 543);
    }else{
        return 1/$number;
    }
}
try {
    echo test(0);
} catch (Exception $e) {
    echo "<center style='font-family:acre medium;margin-top:50px'><h1>ERROR ".$e->getCode()."</h1>";
    echo "<hr style='width:70%' />";
    echo "<h3>".$e->getMessage()."</h3>";
    echo "File : <b>".$e->getTrace()[0]["file"]."</b> ";
    echo "di baris ke ".$e->getTrace()[0]["line"]."</center>";
}