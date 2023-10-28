<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "khazimstar", "Khazimfikri3");
    $namaDatabase = "oop_blj_1";
    $namaTable ="produk";

    $mysqli->select_db($namaDatabase);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }
    
    $sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $timestamp = $sekarang->format('Y-m-d H:i:s');
    $query = "INSERT INTO produk (nama_produk,stok_produk,harga_produk,tanggal_update_produk) VALUES ('HP Vivo S1', 10, 3000000, '$timestamp')
    , ('HP Asus Rog', 7, 21000000, '$timestamp') , ('HP Redmi 9', 15, 4000000, '$timestamp');";
    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }else{
        echo "Berhasil menambahkan produk....";
    }
    
} catch (mysqli_sql_exception $e) {
    echo "Koneksi Bermasalah : ".$e->getMessage()." , Code : ".$e->getCode();
} catch (Exception $e){
    echo "Query Bermasalah : ".$e->getMessage()." , Code : ".$e->getCode();
} finally{
    if (isset($mysqli)) {
        $mysqli->close();
    }
}

echo "<br /><a href='10.php'> Ke Halaman 10</a>";
