<?php
trait Televisi {
    public static $resolusi = "Full HD";
    public static function cekStok()
    {
        echo "Tersedia";
    }
}
echo Televisi::$resolusi."<br />";
Televisi::cekStok();