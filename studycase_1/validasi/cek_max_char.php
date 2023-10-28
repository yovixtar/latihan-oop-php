<?php
function cek_max_char($item, $itemLabel, $roleChar)
{
    $formValue = Input::get($item);
    global $error;
    if (strlen($formValue) > $roleChar) {
        $error[] = "$itemLabel Tidak Boleh Lebih dari $roleChar Karakter";
        $_POST['nama_produk'] = "";
    }
}