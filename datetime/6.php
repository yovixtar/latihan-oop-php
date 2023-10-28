<?php
$tanggal_1 = new DateTIme('1-1-2021');
echo "DateTime : ".$tanggal_1->add(new DateInterval('P5D'))->format('j F Y');

echo "<br /><br />";
$tanggal_2 = new DateTimeImmutable();
$hasil = $tanggal_2->add(new DateInterval('P5D'));
echo "DateTimeImmutable : ".$hasil->format('j F Y');