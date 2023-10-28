<?php
$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$timestamp = $sekarang->format('Y-m-d H:i:s');

$query_multi = "INSERT INTO $namaTabel (nama_produk, stok_produk, harga_produk, tanggal_update_produk) VALUES ('HP Lenovo Y30', 12, 3500000, '$timestamp');
    UPDATE $namaTabel SET stok_produk = 2, tanggal_update_produk = '$timestamp' WHERE id_produk = 2;
    DELETE FROM $namaTabel WHERE id_produk = 1;";

$mysqli->multi_query($query_multi);

if ($mysqli->error) {
    throw new Exception($mysqli->error, $mysqli->errno);
}

echo "Setelah dijalankan ada ".$mysqli->affected_rows." Baris yang ditambah";

while ($mysqli->more_results()) {
    $mysqli->next_result();
}