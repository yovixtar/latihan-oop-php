<?php
class NolException extends Exception{
    public function TampilanError()
    {
        return "Argumen \$number Tidak Boleh 0  di baris ke ".$this->getTrace()[0]["line"]."<br />";
    }
}
class NegatifException extends Exception{
    public function TampilanError()
    {
        return "Argumen \$number Tidak Boleh Negatif  di baris ke ".$this->getTrace()[0]["line"]."<br />";
    }
}
class AlfaException extends Exception{
    public function TampilanError()
    {
        return "Argumen \$number harus Angka di baris ke ".$this->getTrace()[0]["line"]."<br />";
    }
}
function test($number)
{
    if ($number === 0) {
        throw new NolException();
    }else if($number < 0){
        throw new NegatifException();
    }else if(!is_numeric($number)){
        throw new AlfaException();
    }else{
        return 1/$number;
    }
}

try {
    echo test(1)    ."<br />";
} catch (NolException $e) {
    echo $e->TampilanError();
} catch (NegatifException $e) {
    echo $e->TampilanError();
} catch (AlfaException $e) {
    echo $e->TampilanError();
}
try {
    echo test('A')    ."<br />";
} catch (NolException $e) {
    echo $e->TampilanError();
} catch (NegatifException $e) {
    echo $e->TampilanError();
} catch (AlfaException $e) {
    echo $e->TampilanError();
}
try {
    echo test(0)    ."<br />";
} catch (NolException $e) {
    echo $e->TampilanError();
} catch (NegatifException $e) {
    echo $e->TampilanError();
} catch (AlfaException $e) {
    echo $e->TampilanError();
}
try {
    echo test(-2)    ."<br />";
} catch (NolException $e) {
    echo $e->TampilanError();
} catch (NegatifException $e) {
    echo $e->TampilanError();
} catch (AlfaException $e) {
    echo $e->TampilanError();
}