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

    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "DELET FROM produk WHERE id_produk = 1";
    $count = $pdo->exec($query);
    if ($count !== FALSE) {
        echo "Query berhasil dijalankan, ada $count baris yang berubah";
    }
} catch (\PDOException $e) {
    echo "Koneksi / Query Error : ".$e->getMessage()." , Kode : ".$e->getCode();
}  finally{
    $pdo = NULL;
}
echo "<br /><a href='http://oop-php.star/database_1/5.php'>ke halaman 5</a>";
echo "<br /><a href='http://oop-php.star/database_1/10.php'>ke halaman 10</a>";