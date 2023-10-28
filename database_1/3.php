<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "X");
    echo "Menjalankan Query...";
} catch (mysqli_sql_exception $e) {
    echo "Koneksi Database Bermasalah : ".$e->getMessage().", Kode ( ".$e->getCode()." )";
}finally{
    if (isset($mysqli)) {
        $mysqli->close();
    }
}