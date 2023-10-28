<?php
function cek_required($item, $itemLabel)
{
    $formValue = Input::get($item);

    global $error;
    if (empty($formValue)) {
        $error[] = "$itemLabel Tidak Boleh Kosong";
    }
}