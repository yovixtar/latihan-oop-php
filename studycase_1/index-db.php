<?php
require "database/db.php";

$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$tanggal = $sekarang->format('Y-m-d H:i:s');

$DB = DB::getInstance();

// $query = "SELECT * FROM produk";
// $result = $DB->runQuery($query);
// $hasil = $result->fetchAll(PDO::FETCH_OBJ);

// $query = "SELECT * FROM produk WHERE id_produk = :id";
// $bind = ['id' => 2];
// $result = $DB->runQuery($query, $bind);
// $hasil = $result->fetchAll(PDO::FETCH_OBJ);

// $DB->select('nama_produk, harga_produk');
// $hasil = $DB->select('nama_produk, harga_produk')->get('produk');

// $DB->select('id_produk, nama_produk, harga_produk');
// $DB->orderBy('id_produk', 'DESC');
// $hasil = $DB->select('id_produk, nama_produk, harga_produk')->orderBy('id_produk', 'DESC')->get('produk');

// $hasil = $DB->select('id_produk, nama_produk, harga_produk')->orderBy('id_produk', 'DESC')->get('produk', 'WHERE harga_produk > :harga', ['harga' => 10000000]);

// $hasil = $DB->getWhere('produk', ['harga_produk', '>', 10000000]);

// $hasil = $DB->getWhereOnce('produk', ['id_produk', '=', 3]);
// echo $hasil->nama_produk;

// $hasil = $DB->select('nama_produk, harga_produk')->getLike('produk', 'nama_produk', '%vivo%');

// $id_produk = 2;
// $hasil = $DB->check('produk', 'id_produk', $id_produk);
// if ($hasil) {
//     echo "<br />ID Produk $id_produk Tersedia <br />";
// }else { echo "<br />ID Produk $id_produk Tidak Tersedia <br />"; }

// $masuk = $DB->insert('produk',
//                     [
//                         'nama_produk' => 'HP Samsung A2',
//                         'stok_produk' => 6,
//                         'harga_produk' => 7000000,
//                     ]);
// echo "Terdapat ".$DB->countEffect()." Baris yang bertambah";
// $hasil = $DB->get('produk');

// $update = $DB->update('produk',
//                     [
//                         'nama_produk' => 'HP Xiaomi Redmi 9',
//                         'tanggal_update_produk' => $tanggal
//                     ], [ 'id_produk', '=', 3 ]);
// $hasil = $DB->select('nama_produk, harga_produk, tanggal_update_produk')->get('produk');
// echo "Terdapat ".$DB->countEffect()." Baris yang bertambah";
// $hasil = $DB->get('produk');

// $hasil = $DB->delete('produk', ['id_produk', '=', 2]);

$hasil = $DB->get('produk');

echo "<pre>";
print_r($hasil);
echo "</pre>";

echo "<br /><a href='http://oop-php.star/database_1/5.php'>Reset Tabel (Back to filename 5.php)</a>";

