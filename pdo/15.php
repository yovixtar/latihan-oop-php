<?php
mysqli_report(MYSQLI_REPORT_STRICT);
$sekarang = new DateTime('now',new DateTimeZone('Asia/Jakarta'));
$tanggal = $sekarang->format('Y-m-d H:i:s');

try {
    $pdo = new PDO("mysql:host=localhost;dbname=oop_blj_1","khazimstar","Khazimfikri3");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "Sebelum Transaction : <br />";
    $query = "SELECT * FROM produk";
    $stmt = $pdo->query($query);
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        echo $row[0]." | ".$row[1]." | ".$row[2]." | ".$row[3]." | ".$row[4];
        echo "<br />";
    }

    $pdo->beginTransaction();

    $query = "DELETE FROM produk WHERE id_produk = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([2]);

    $query = "INSERT INTO produk (nama_produk, stok_produk, harga_produk, tanggal_update_produk) VALUES (:nama, :stok, :harga, :tanggal)";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['nama' => "HP OPPO F1", ':stok' => 16, 'harga' => 3200000, ':tanggal' => "$tanggal"]);

    echo "<br />Saat Transaction : <br />";
    $query = "SELECT * FROM produk";
    $stmt = $pdo->query($query);
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        echo $row[0]." | ".$row[1]." | ".$row[2]." | ".$row[3]." | ".$row[4];
        echo "<br />";
    }

    $pdo->rollBack();  //atau $pdo->commit();

    echo "<br />Setelah Transaction : <br />";
    $query = "SELECT * FROM produk";
    $stmt = $pdo->query($query);
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        echo $row[0]." | ".$row[1]." | ".$row[2]." | ".$row[3]." | ".$row[4];
        echo "<br />";
    }

} catch (\PDOException $e) {
    echo "KOneksi / Query Error : ".$e->getMessage()." , Kode : ".$e->getCode();
} finally{ $pdo = NULL; }