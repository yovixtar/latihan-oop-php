<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $pdo  = new PDO("mysql:host=localhost;dbname=oop_blj_1","khazimstar","Khazimfikri3");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = "SELECT * FROM produk WHERE id_produk = ? OR nama_produk = ?";
    $stmt = $pdo->prepare($query);
    
    $namaProd = "Hp Vivo S1";
    $stmt->execute([2, $namaProd]);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['id_produk']." | ".$row['nama_produk'];
        echo "<br />";
    }
} catch (\PDOException $e) {
    echo "Koneksi / Query Error : ".$e->getMessage()," , Code : ".$e->getCode();
} finally {
    $pdo = NULL;
}