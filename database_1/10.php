<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli('localhost', 'khazimstar', 'Khazimfikri3', 'oop_blj_1');
    $namaTabel = "produk";
    // $addQuery = "WHERE id_produk = 10";
    $addQuery = "";
    $query = "SELECT * FROM $namaTabel $addQuery";
    $result = $mysqli->query($query);
    $arr = $result->fetch_all(MYSQLI_ASSOC);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }else{
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
                <td>Rp<?php echo number_format($val['harga_produk'],0,"","."); ?></td>
                <td><?php $tanggal = new DateTime($val['tanggal_update_produk']); echo $tanggal->format('j F Y , H : i : s'); ?></td>
            </tr>
        <?php } ?>
    </tr>
</table>
<?php
for ($i=13; $i <= 20 ; $i++) { 
    ?>
    <a href="<?php echo $i.'.php'; ?>">Halaman <?php echo $i; ?></a><br />
    <?php
}
?>
<br />
<br />
<a href="http://oop-php.star/pdo/">Ke Folder PDO</a>
<br />
<a href="http://oop-php.star/studycase_1/">Ke Folder Studycase 1</a>
</body>
</html>