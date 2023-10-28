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