<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $pdo = new PDO("mysql:host=localhost;dbname=oop_blj_1","khazimstar", "Khazimfikri3");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM produk WHERE id_produk = :id OR nama_produk = :nama";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['id' => 3, 'nama' => "Hp Vivo S1"]);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['id_produk']." | ".$row['nama_produk'];
        echo "<br />";
    }

} catch (\PDOException $e) {
    echo "Koneksi / Query Error : ".$e->getMessage()." , Kode : ".$e->getCode();
} finally{
    $pdo = NULL;
}