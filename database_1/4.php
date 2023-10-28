<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost","khazimstar","Khazimfikri3");
    $namaDatabase = "oop_blj_1";
    $query = "CREATE DATABASE IF NOT EXISTS $namaDatabase";
    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }else{
        echo "Berhasil membuat database $namaDatabase .... <br />";
    }
    $mysqli->select_db($namaDatabase);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }else{
        echo "Berhasil Terhubung database $namaDatabase ....";
    }
} catch (mysqli_sql_exception $e) {
    echo "Koneksi Database Bermasalah : ".$e->getMessage().", Kode ( ".$e->getCode()." )";
}catch (Exception $e) {
    echo "Query Bermasalah : ".$e->getMessage()." , code : ".$e->getCode();
} finally{
    if (isset($mysqli)) {
        $mysqli->close();
    }
}