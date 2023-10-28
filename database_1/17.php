<?php
mysqli_report(MYSQLI_REPORT_STRICT);

$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$tanggal = $sekarang->format('Y-m-d H:i:s');

try {
    $mysqli = new mysqli("localhost","khazimstar", "Khazimfikri3","oop_blj_1");

    echo "Sebelum Transaction : <br />";
    $query = "SELECT * FROM produk";
    $result = $mysqli->query($query);
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo $row["id_produk"]." | ";
        echo $row["nama_produk"]." | ";
        echo $row["stok_produk"]." | ";
        echo $row["harga_produk"]." | ";
        echo $row["tanggal_update_produk"]." | ";
        echo "<br />";
    }

    echo "<br />Saat Transaction : <br />";
    $mysqli->begin_transaction();
    $mysqli->query("INSERT INTO produk (nama_produk, stok_produk, harga_produk, tanggal_update_produk) VALUES ('HP Oppo F1', 10, 2000000,'$tanggal')");
    $mysqli->query("DELETE FROM produk WHERE id_produk = 2");
    $mysqli->query("DELETE FROM produk WHERE id_produk = 3");

    $query = "SELECT * FROM produk";
    $result = $mysqli->query($query);
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo $row["id_produk"]." | ";
        echo $row["nama_produk"]." | ";
        echo $row["stok_produk"]." | ";
        echo $row["harga_produk"]." | ";
        echo $row["tanggal_update_produk"]." | ";
        echo "<br />";
    }

    $mysqli->rollback();

    echo "<br />Seteleh Transaction : <br />";
    $query = "SELECT * FROM produk";
    $result = $mysqli->query($query);
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo $row["id_produk"]." | ";
        echo $row["nama_produk"]." | ";
        echo $row["stok_produk"]." | ";
        echo $row["harga_produk"]." | ";
        echo $row["tanggal_update_produk"]." | ";
        echo "<br />";
    }
} catch (mysqli_sql_exception $e) {
    echo "Koneksi Bermasalah : ".$e->getMessage()." , kode : ".$e->getCode();
} catch (Exception $e){
    echo "Query Bermasalah : ".$e->getMessage()." , kode : ".$e->getCode();
}

echo "<br /><a href='5.php'> Ke Halaman 5</a>";
echo "<br /><a href='10.php'> Ke Halaman 10</a>";