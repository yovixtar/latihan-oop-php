<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "khazimstar", "Khazimfikri3");
    $namaDatabase = "oop_blj_1";
    $mysqli->select_db($namaDatabase);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }else{ echo "Berhasil menghubungkan Database ... <br />"; }

    $query = "DROP TABLE IF EXISTS produk";
    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }

    $query = "CREATE TABLE produk(
            id_produk INT PRIMARY KEY AUTO_INCREMENT,
            nama_produk VARCHAR(50),
            stok_produk INT,
            harga_produk DEC,
            tanggal_update_produk TIMESTAMP
            )";
    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }else{ echo "Berhasil membuat Tabel ... <br />"; }
} catch (mysqli_sql_exception $e) {
    echo "Koneksi Database Bermasalah : ".$e->getMessage().", Kode ( ".$e->getCode()." )";
} catch (Exception $e) {
    echo "Query Bermasalah : ".$e->getMessage()." dengan Code ".$e->getCode();
} finally{
    if (isset($mysqli)) {
        $mysqli->close();
    }
}

echo "<br /><a href='6.php'> Ke Halaman 6</a>";
