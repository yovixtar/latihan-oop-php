<?php
class Input {
    public static function get($item)
    {
        if (isset($_POST[$item])) {
            return trim($_POST[$item]);
        } else if (isset($_GET[$item])){
            return trim($_GET[$item]);
        } 
        return '';
    }
    public static function runSanitize($value, $sanitizeType)
    {
        switch ($sanitizeType) {
            case 'string':
                $sanitizeValue = filter_var($value, FILTER_SANITIZE_STRING);
                break;
            case 'int':
                $sanitizeValue = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                break;
            case 'float':
                $sanitizeValue = filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                break;
            case 'url':
                $sanitizeValue = filter_var($value, FILTER_SANITIZE_URL);
                break;
            case 'email':
                $sanitizeValue = filter_var($value, FILTER_SANITIZE_EMAIL);
                break;
            default:
                $sanitizeValue = "Tipe Sanitize Tidak Tersedia !";
                break;
        }
        return $sanitizeValue;
    }
    
}