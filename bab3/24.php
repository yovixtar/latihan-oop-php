<?php
function hitungRata(array $data)
{
    return ($data[0] + $data[1] + $data[2]) / 3;
}
echo hitungRata([3, 6, 12]);

