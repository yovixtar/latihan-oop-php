<?php
//scalar type hunting
declare(strict_types=1);

function tambah_1(int $a, int $b)
{
    return $a + $b;
}
echo tambah_1(3 , 4);
echo "<br />";
echo tambah_1(3.2 , 4.6);
echo "<br />";
echo tambah_1("3" , 4);
echo "<br />";