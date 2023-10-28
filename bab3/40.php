<?php
$foo = "Ini adalah variabel foo yang di konversi menjadi objek bar, diakses dengan nama scalar";
$bar = (object) $foo;

var_dump($bar);
echo "<br /> <br />";
echo $bar->scalar;