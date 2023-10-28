<?php
mysqli_report(MYSQLI_REPORT_STRICT);
$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$tanggal = $sekarang->format('Y-m-d H:i:s');

 try {
     $pdo = new PDO("mysql:host=localhost;dbname=oop_blj_1","khazimstar","Khazimfikri3");
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $query = "INSERT INTO produk (nama_produk, stok_produk, harga_produk, tanggal_update_produk) VALUES (:nama, :stok, :harga, :tanggal) ";

     $stmt = $pdo->prepare($query);

     $namaIn = "HP OPPO F1";
     $stokIn = 20;
     $hargaIn = 3200000;
     $stmt->execute(['nama' => $namaIn, 'stok' => $stokIn, 'harga' => $hargaIn, 'tanggal' => $tanggal]);
     echo "Berhasil menambah ".$stmt->rowCount()." baris ke tabel.<br />";

     $arrIn = ['nama' => "HP Lenovo A2", 
                'stok' => 16, 
                'harga' => 1000000, 
                'tanggal' => $tanggal];
     $stmt->execute($arrIn); 
     echo "Berhasil menambah ".$stmt->rowCount()." baris ke tabel.<br />";

     echo "<br />";
     $query = "SELECT * FROM produk";
     $stmt = $pdo->query($query);
     while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
         echo $row[0]," | ".$row[1]," | ".$row[2]," | ".number_format($row[3],0,"",".")," | ".$row[4];
         echo "<br />";
     }

 } catch (\PDOException $e) {
     echo "Koneksi / Query : ".$e->getMessage()." , Kode : ".$e->getCode();
 } finally { $pdo = NULL; }