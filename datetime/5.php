<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal_1 = new DateTime('1-01-2020, 10:30:05');
$tanggal_2 = new DateTime('5-03-2022, 05:10:10');

$format = "%R %y Tahun %M Bulan %d Hari, %h Jam %I Menit %S Detik";
$interval_1 = $tanggal_1->diff($tanggal_2);
$interval_2 = $tanggal_2->diff($tanggal_1);

echo $interval_1->format($format);
echo "<br />";
echo $interval_2->format($format);