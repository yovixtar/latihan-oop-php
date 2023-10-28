<?php
mysqli_report(MYSQLI_REPORT_STRICT);
$_GET['nama'] = "HP Asu's";
try {
    $mysqli = new mysqli('localhost', 'khazimstar', 'Khazimfikri3', 'oop_blj_1');
    $namaTabel = "produk";
    if (isset($_GET['nama'])) {
        $data = $mysqli->real_escape_string($_GET['nama']);
    }else{$data = "HP Vivo S1";}
    // $addQuery = "WHERE id_produk = 10";
    $addQuery = "WHERE nama_produk = '$data'";

    $query = "SELECT * FROM $namaTabel $addQuery";
    $result = $mysqli->query($query);
    
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }else{
        if ($result->num_rows === 0) {
            echo "Data Tidak ditemukan";
        }else{
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                echo $row["id_produk"]." | ";
                echo $row["nama_produk"]." | ";
                echo $row["stok_produk"]." | ";
                echo $row["harga_produk"]." | ";
                echo $row["tanggal_update_produk"]." | ";
                echo "<br />";
            }
        $result->free();
        }
    }

} catch (mysqli_sql_exception $e) {
    echo "Koneksi Bermasalah : ".$e->getMessage()." , code : ".$e->getCode();
} catch (Exception $e){
    echo "Query Bermasalah : ".$e->getMessage()." , Code : ".$e->getCode();
}

echo "<br /><a href='5.php'> Ke Halaman 5</a>";
echo "<br /><a href='10.php'> Ke Halaman 10</a>";