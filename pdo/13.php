<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $pdo = new PDO("mysql:host=localhost;dbname=oop_blj_1","khazimstar", "Khazimfikri3");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM produk WHERE stok_produk > :stok AND harga_produk >= :harga";
    $stmt = $pdo->prepare($query);

    $stok = 10;
    $harga = 4000000;
    $stmt->execute([':harga'=> $harga, 'stok' => $stok]);

    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        echo $row[0]." | ".$row[1]." | ".$row[2]." | ".$row[3]." | ".$row[4];
        echo "<br />";
    }
} catch (\PDOException $e) {
    echo "Koneksi / Query Error : ".$e->getMessage()." , Kode : ".$e->getCode();
} finally { $pdo = NULL; }