<?php
echo "Fungsi is_object() <br />";
class Produk{}
interface LaptopGaming{}
class Laptop extends Produk implements LaptopGaming{}

$produk_1 = new Produk();
echo "Apakah variabel produk_1 termasuk object ? ";
var_dump(is_object($produk_1));

echo "<br /><br />";

echo "Fungsi is_a() <br />";
$produk_2 = new Laptop();
echo "Apakah variabel produk_2 turunan class Produk ? ";
var_dump(is_a($produk_2, "Produk"));
echo "<br />";
echo "Apakah variabel produk_2 termasuk class Laptop ? ";
var_dump(is_a($produk_2, "Laptop"));
echo "<br />";
echo "Apakah variabel produk_2 impemenasi class LaptopGaming ? ";
var_dump(is_a($produk_2, "LaptopGaming"));

echo "<br /><br />";

echo "perintah instanceof <br />";
$produk_3 = new Laptop();
echo "Apakah variabel produk_2 turunan class Produk ? ";
var_dump($produk_3 instanceof Produk);
echo "<br />";
echo "Apakah variabel produk_2 termasuk class Laptop ? ";
var_dump($produk_3 instanceof Laptop);
echo "<br />";
echo "Apakah variabel produk_2 impemenasi class LaptopGaming ? ";
var_dump($produk_3 instanceof LaptopGaming);

echo "<br /><br />";

echo "Fungsi is_subclass_of() <br />";
$produk_4 = new Laptop();
echo "Apakah variabel produk_2 turunan class Produk ? ";
var_dump(is_subclass_of($produk_4, "Produk"));
echo "<br />";
echo "Apakah variabel produk_2 termasuk class Laptop ? ";
var_dump(is_subclass_of($produk_4, "Laptop"));
echo "<br /><div style='margin-left:50px;height:0;'>Karena subclass seperti is_a hanya bernilai false</div>";
echo "<br />";
echo "Apakah variabel produk_2 impemenasi class LaptopGaming ? ";
var_dump(is_subclass_of($produk_4, "LaptopGaming"));

echo "<br /><br />";
echo "Bisa dibaca kelanjutannya dari halaman 207 <br />";
echo "Bisa dibaca kelanjutannya dari halaman 207 <br />";
echo "Bisa dibaca kelanjutannya dari halaman 207 <br />";