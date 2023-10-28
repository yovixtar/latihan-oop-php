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
} catch (mysqli_sql_exception $e) {
    echo "Koneksi Bermasalah : ".$e->getMessage()." , code : ".$e->getCode();
} catch (Exception $e){
    echo "Query Bermasalah : ".$e->getMessage()." , Code : ".$e->getCode();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='Shortcut Icon' href='/favicon.ico' type='image/x-icon' />
    <meta name='description' content='' />
    <meta name='keywords' content='' />
    <link rel='stylesheet' type='text/css' href=''>
    <script type='text/javascript'>

    </script>
    <style type='text/css'>
    table{
        border-collapse: collapse;
        margin:0 auto;
    }
    tr,th{
        border-bottom: solid 1px #333;
    }
    th, td{
        padding: 10px 15px;
        text-align: center;
    }
    tr:nth-child(even){background-color: #eee;}
    </style>
</head>
<body>
<table>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Stok Produk</th>
        <th>Harga Produk</th>
        <th>Waktu Upload</th>
    </tr>
    <tr>
        <?php foreach($arr as $key => $val){ ?>
            <tr>
                <td><?php echo $val['id_produk']; ?></td>
                <td><?php echo $val['nama_produk']; ?></td>
                <td><?php echo $val['stok_produk']; ?></td>
                <td>Rp<?php echo $val['harga_produk']; ?></td>
                <td><?php ; echo $val['tanggal_update_produk'] ; ?></td>
            </tr>
        <?php } ?>
    </tr>
</table>
</body>
</html>