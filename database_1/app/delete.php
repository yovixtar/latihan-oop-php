<?php
    // $addQuery = "WHERE id_produk = 10";
    $addQuery_delete = "WHERE id_produk = 6";

    $query_delete = "DELETE FROM $namaTabel $addQuery_delete";
    $result_delete = $mysqli->query($query_delete);
    
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }