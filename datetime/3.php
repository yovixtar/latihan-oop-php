<?php
$tanggal_1 = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$tanggal_2 = new DateTime('17-08-1945, 10:30', new DateTimeZone('Asia/Jakarta'));
$selisih_2 = new DateInterval('P9Y9M9DT9H9M9S');

echo $tanggal_1->add(new DateInterval('P1000D'))->format('j F Y');
echo "<br />";
echo $tanggal_2->add($selisih_2)->format('j F Y, H : i : s');