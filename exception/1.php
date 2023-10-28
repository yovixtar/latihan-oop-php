<?php
function test($num)
{
    if ($num === 0) {
        throw new Exception("Error : Argumen \$num tidak bisa diproses", 5769);
    }else{
    return 1/$num;
    }
}
try {
    echo test(0);
} catch (Exception $e) {
    echo $e->getMessage()."<br />";
    echo $e->getCode()."<br />"; //baris 5 belakang
    echo $e->getFile()."<br />";
    echo $e->getLine()."<br />";
    echo $e->getTraceAsString()."<br />";

    echo "<pre>";
    print_r($e->getTrace());
    echo "</pre>";
    echo "<br />";
    echo $e->getTrace()[0]["file"]."<br >";
    echo $e->getTrace()[0]["line"]."<br >";
    echo $e->getTrace()[0]["function"]."<br >";
}