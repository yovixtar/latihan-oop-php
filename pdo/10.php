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
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Pilih metode fetch All : <br />";

    $query = "SELECT id_produk, harga_produk FROM produk";
    $stmt = $pdo->query($query);

        $arr = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
        echo "<br /> menampilkan \$arr[1] : ".$arr[1];

} catch (\PDOException $e) {
    echo "Koneksi / Query Error : ".$e->getMessage()." , Kode : ".$e->getCode();
}  finally{
    $pdo = NULL;
}
echo "<br /><br /><a href='http://oop-php.star/database_1/5.php'>ke halaman 5</a>";
echo "<br /><a href='http://oop-php.star/database_1/10.php'>ke halaman 10</a>";