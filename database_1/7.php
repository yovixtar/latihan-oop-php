<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli('localhost', 'khazimstar', 'Khazimfikri3', 'oop_blj_1');
    $namaTabel = "produk";
    // $addQuery = "WHERE id_produk = 10";
    $addQuery = "";
    $query = "SELECT * FROM $namaTabel $addQuery";
    $result = $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }else{
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }
    echo "<br /><br />";
    echo "Tabel terdiri dari $result->field_count kolom dan $result->num_rows  baris<br /><br />";
    if ($result->num_rows == 0) {
        echo "Tabel Kosong ... <br />";
    } else {
        echo "Tabel tidak kosong...  <br />";
    }
    $result->free();

} catch (mysqli_sql_exception $e) {
    echo "Koneksi Bermasalah : ".$e->getMessage()." , code : ".$e->getCode();
} catch (Exception $e){
    echo "Query Bermasalah : ".$e->getMessage()." , Code : ".$e->getCode();
} finally {
    if (isset($mysqli)) {
        $mysqli->close();
    }
}