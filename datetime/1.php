<?php
$sekarang = new DateTime(null);
echo $sekarang->format('d-m-Y');
echo "<br />";

$sekarang = new DateTime('now');
echo $sekarang->format('d-m-Y');
echo "<br />";

$sekarang = new DateTime('17 Feb 2021');
echo $sekarang->format('d-m-Y');
echo "<br />";

$sekarang = new DateTime('2021/02/17');
echo $sekarang->format('d-m-Y');
echo "<br />";

$sekarang = new DateTime('17 August 2021');
echo $sekarang->format('d-m-Y');
echo "<br />";

$sekarang = new DateTime('17FEB2021');
echo $sekarang->format('d-m-Y');
echo "<br />";

$sekarang = new DateTime('17-02-2021');
echo $sekarang->format('d-m-Y');
echo "<br />";

$sekarang = new DateTime('2021-02-17');
echo $sekarang->format('d-m-Y');
echo "<br />";