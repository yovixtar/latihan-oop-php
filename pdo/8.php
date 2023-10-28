<?php
error_reporting(0);
try {
    $host = "localhost";
    $port = "3306";
    $db = "oop_blj_1";
    $charset = "utf8mb4";
    $user = "khazimstar";
    $pass = "Khazimfikri3";
    
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

    // $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //menjadikan FETCH_LAZI sebagai default .. sebelumnya FETCH BOTH yang jadi Default
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MOD, PDO::FETCH_LAZY);

    echo "Pilih metode fetch : <br />";

    $query = "SELECT * FROM produk";
    $stmt = $pdo->query($query);
    // while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
    //     echo $row[0]." | ";
    //     echo $row[1]." | ";
    //     echo $row[2]." | ";
    //     echo $row[3]." | ";
    //     echo $row[4]." <br /> ";
    // }
    echo "<br />";
    // while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
    //     echo $row["id_produk"]." | ";
    //     echo $row['nama_produk']." | ";
    //     echo $row["stok_produk"]." | ";
    //     echo $row['harga_produk']." | ";
    //     echo $row['tanggal_update_produk']." <br /> ";
    // }
    echo "<br />";
    // while ($row = $stmt->fetch(PDO::FETCH_BOTH)) { //bisa dikosongi tanpa PDO::FETCH_BOTH
    //     echo $row[0]." | ";
    //     echo $row['nama_produk']." | ";
    //     echo $row[2]." | ";
    //     echo $row['harga_produk']." | ";
    //     echo $row['tanggal_update_produk']." <br /> ";
    // }
    echo "<br />";
    // while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    //     echo $row->id_produk." | ";
    //     echo $row->nama_produk." | ";
    //     echo $row->stok_produk." | ";
    //     echo $row->harga_produk." | ";
    //     echo $row->tanggal_update_produk." <br /> ";
    // }
    echo "<br />";
    // while ($row = $stmt->fetch()) {
    // while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
    //     echo $row[0]." | ";
    //     echo $row['nama_produk']." | ";
    //     echo $row[2]." | ";
    //     echo $row['harga_produk']." | ";
    //     echo $row->tanggal_update_produk." <br /> ";
    // }

    echo "<br />";
    // $query = "SELECT nama_produk FROM produk";
    // $stmt = $pdo->query($query);
    // while ($row = $stmt->fetch(PDO::FETCH_COLUMN)) {
    //     echo $row." | ";
    // }

} catch (\PDOException $e) {
    echo "Koneksi / Query Error : ".$e->getMessage()." , Kode : ".$e->getCode();
}  finally{
    $pdo = NULL;
}
echo "<br /><a href='http://oop-php.star/database_1/5.php'>ke halaman 5</a>";
echo "<br /><a href='http://oop-php.star/database_1/10.php'>ke halaman 10</a>";