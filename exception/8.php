<?php
function pesan($a)
{
    if ($a === 0) {
        throw new Exception("Argumen Tidak boleh 0", 571);
    }else if($a < 0){
        throw new Exception("Argumen Tidak bodelh Negatif", 572);
    }else if(!is_numeric($a)){
        throw new Exception("Argumen Tidak diperbohkan", 573);
    }else{return 1/$a;}
}
function lempar_1($num){
    return pesan($num);
}
function lempar_2($num)
{
    return lempar_1($num);
}
try {
    echo lempar_2("A");
} catch (Exception $e) {
    echo "Error <b>".$e->getCode()." : ".$e->getMessage()."</b><br />";
    echo "<br />Trace Line : <br />";
    foreach ($e->getTrace() as $value) {
        echo "- Baris ke-".$value["line"]." pada function ".$value["function"].", dengan Argumen ".$value["args"][0]."<br />";
    }
}