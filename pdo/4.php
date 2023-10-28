<?php
error_reporting(0);
class QueryException extends Exception{}
try {
    $host = "localhost";
    $port = "3306";
    $db = "oop_blj_1";
    $charset = "utf8mb4";
    $user = "khazimstar";
    $pass = "Khazimfikri3";
    
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

    $pdo = new PDO($dsn, $user, $pass);
    $query = "DELET FROM produk WHERE id_produk = 1";
    $count = $pdo->exec($query);
    if ($count !== FALSE) {
        echo "Query berhasil dijalankan, ada $count baris yang berubah";
    }else{
        throw new QueryException($pdo->errorInfo()[2], $pdo->errorInfo()[1]);
    }
} catch (\PDOException $e) {
    echo "Koneksi Error : ".$e->getMessage()." , Kode : ".$e->getCode();
} catch (QueryException $e) {
    echo "Error : ".$e->getMessage()." , Kode : ".$e->getCode();
} finally{
    $pdo = NULL;
}
echo "<br /><a href='http://oop-php.star/database_1/5.php'>ke halaman 5</a>";
echo "<br /><a href='http://oop-php.star/database_1/10.php'>ke halaman 10</a>";