<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli('localhost', 'khazimstar', 'Khazimfikri3', 'oop_blj_1');
    $namaTabel = "produk";
    // $addQuery = "WHERE id_produk = 10";
    $addQuery = "";
    $query = "SELECT * FROM $namaTabel $addQuery";
    $result = $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }else{
        echo "Fetch Row : <br />";
        // while($row = $result->fetch_row()){
        //     for ($i=0; $i < $result->field_count; $i++) { 
        //         echo $row[$i]." | ";
        //     }
        //     echo "<br />";
        // }

        echo "<br />Fetch Array : <br />";
        // while($row = $result->fetch_array(MYSQLI_NUM)){
        //     for ($i=0; $i < $result->field_count; $i++) { 
        //         echo $row[$i]." | ";
        //     }
        //     echo "<br />";
        // }

        echo "<br />Fetch Array - Assoc: <br />";
        // while($row = $result->fetch_array(MYSQLI_ASSOC)){
        //     echo $row["id_produk"]." | ";
        //     echo $row["nama_produk"]." | ";
        //     echo $row["stok_produk"]." | ";
        //     echo $row["harga_produk"]." | ";
        //     echo $row["tanggal_update_produk"]." | ";
        //     echo "<br />";
        // }

        echo "<br />Fetch Array - Both: <br />";
        // while($row = $result->fetch_array(MYSQLI_BOTH)){
        //     echo $row["0"]." | ";
        //     echo $row["nama_produk"]." | ";
        //     echo $row["2"]." | ";
        //     echo $row["harga_produk"]." | ";
        //     echo $row["4"]." | ";
        //     echo "<br />";
        // }

        echo "<br />Fetch Array - Normal: <br />";
        // while($row = $result->fetch_array()){
        //     echo $row["0"]." | ";
        //     echo $row["nama_produk"]." | ";
        //     echo $row["2"]." | ";
        //     echo $row["harga_produk"]." | ";
        //     echo $row["4"]." | ";
        //     echo "<br />";
        // }

        echo "<br />Fetch Assosiative : <br />";
        // while($row = $result->fetch_assoc()){
        //     echo $row["id_produk"]." | ";
        //     echo $row["nama_produk"]." | ";
        //     echo $row["stok_produk"]." | ";
        //     echo $row["harga_produk"]." | ";
        //     echo $row["tanggal_update_produk"]." | ";
        //     echo "<br />";
        // }

        echo "<br />Fetch Object : <br />";
        while($row = $result->fetch_object()){
            echo $row->id_produk." | ";
            echo $row->nama_produk." | ";
            echo $row->stok_produk." | ";
            echo $row->harga_produk." | ";
            echo $row->tanggal_update_produk." | ";
            echo "<br />";
        }
    }
    
    $result->free();

} catch (mysqli_sql_exception $e) {
    echo "Koneksi Bermasalah : ".$e->getMessage()." , code : ".$e->getCode();
} catch (Exception $e){
    echo "Query Bermasalah : ".$e->getMessage()." , Code : ".$e->getCode();
} finally {
    if (isset($mysqli)) {
        $mysqli->close();
    }
}