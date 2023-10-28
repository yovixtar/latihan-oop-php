<?php
require 'validasi/input.php';
require 'validasi/validasi.php';

if (!empty($_POST) || !empty($_GET)) {
    $error =  [];
    
    $validasi = new Validate($_POST);
    
    $nama_produk = $validasi->setRules('nama_produk', 'Nama Produk', ['required' => TRUE, 'max_char' => 10, 'sanitize' => 'string']);  
    $stok_produk = $validasi->setRules('stok_produk', 'Stok Produk', ['required' => TRUE]);  
    $harga_produk = $validasi->setRules('harga_produk', 'Harga Produk', ['required' => TRUE, 'max_char' => 5]);

    if ($validasi->passed()) {
        echo "Lolos Validasi";
    }else {
        $error = $validasi->getError();
    }
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
    .container{
        margin : 20px auto;
        width: 100%;
    }
    form > div {
        margin: 15px 0;
    }
    label {
        display: inline-block;
        width: 100%;
    }
    </style>
</head>
<body>
<div class="container">
<h2>Tambah Barang</h2>
<?php
if (!empty($error)) {
?>
<ul>
    <?php 
        foreach ($error as $value) {
            echo "<li>$value</li>";
        }
    ?>
</ul>
<?php
}
?>
<form method="POST">
    <div>
        <label for="nama_produk">Nama Produk</label>
        <input name="nama_produk" type="text" value="<?php if(isset($nama_produk)){ echo Input::runSanitize($nama_produk, 'string'); } ?>" />
    </div>
    <div>
        <label for="stok_produk">Stok Produk</label>
        <input name="stok_produk" type="number" step=".01" value="<?php if(isset($nama_produk)){ echo Input::runSanitize($stok_produk, 'string'); } ?>" />
    </div>
    <div>
        <label for="harga_produk">Harga Produk</label>
        <input name="harga_produk" type="number" step="any" value="<?php if(isset($nama_produk)){ echo Input::runSanitize($harga_produk, 'string'); } ?>" />
    </div>
    <button type="submit">Simpan</button>
</form>
</div>
</body>
</html>
