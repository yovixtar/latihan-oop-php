<?php
date_default_timezone_set('Asia/Jakarta');
$sekarang = new DateTime();
echo $sekarang->modify('+10 Month +100 Day')->format('j F Y');
echo "<br />";
$tanggal = new DateTime('17-8-1945, 10:30');
echo $tanggal->modify('-3Day -5 Hour -10 minute')->format('j F Y, H:i');