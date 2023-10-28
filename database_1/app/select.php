<?php
    $query = "SELECT * FROM $namaTabel $addQuery";
    $result = $mysqli->query($query);
    
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }else{
        $i = 0;
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $arr[$i]['id_produk'] = $row['id_produk'];
            $arr[$i]['nama_produk'] = $row['nama_produk'];
            $arr[$i]['stok_produk'] = $row['stok_produk'];
            $arr[$i]['harga_produk'] = number_format($row['harga_produk'],0,"",".");
            
            $tanggal = new DateTime($row['tanggal_update_produk']);
            $arr[$i]['tanggal_update_produk'] = $tanggal->format('j F Y , H : i : s');
            $i++;
        }
        $result->free();
    }