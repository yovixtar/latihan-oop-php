<?php
class Validate {
    private $_errors = array();
    private $_formMethod = null;
    public function __construct($formMethod)
    {
        $this->_formMethod = $formMethod;
    }
    public function setRules($item, $itemLabel, $rules)
    {
        $formValue = trim($this->_formMethod[$item]);
        if (array_key_exists('sanitize',$rules)) {
            $formValue = Input::runSanitize($formValue, $rules['sanitize']);
        }
        foreach ($rules as $rule => $ruleValue) {
            switch ($rule) {
                case 'required':
                    if($ruleValue === TRUE && empty($formValue)){
                        $this->_errors[$item] = "$itemLabel Tidak Boleh Kosong !";
                    }
                    break;
                case 'min_num':
                    if ($formValue < $ruleValue) {
                        $this->_errors[$item] = "$itemLabel Tidak Boleh kurang dari $ruleValue";
                    }
                    break;
                case 'max_num':
                    if ($formValue > $ruleValue) {
                        $this->_errors[$item] = "$itemLabel Tidak Boleh lebih dari $ruleValue";
                    }
                    break;
                case 'max_char':
                    $countValue = strlen($formValue);
                    if ($countValue > $ruleValue) {
                        $this->_errors[$item] = "$itemLabel Tidak boleh lebih dari $ruleValue karakter !";
                    }
                    break;
                case 'matches':
                    if ($_POST['ulangi_password'] != $_POST['password']) {
                        $this->_errors[$item] = "$itemLabel Tidak Sama dengan form Password";
                    }
                    break;
                case 'email':
                    if ($ruleValue === TRUE && !filter_var($formValue, FILTER_VALIDATE_EMAIL)) {
                        $this->_errors[$item] ="Format $itemLabel Tidak Benar"; 
                    }
                    break;
                case 'url':
                    if ($ruleValue === TRUE && !filter_var($formValue, FILTER_VALIDATE_URL)) {
                        $this->_errors[$item] = "Format $itemLabel Tidak Benar";
                    }
                    break;
                case 'regexp':
                    if (!preg_match($ruleValue, $formValue)) {
                        $this->_errors[$item] = "Pola $itemLabel Tidak Benar";
                    }
                    break;
            }
            if (!empty($this->_errors[$item])) {
                break;
            }
        }
        return $formValue;
    }
    public function getError()
    {
        return $this->_errors;
    }
    public function passed()
    {
        return empty($this->_errors) ? TRUE : FALSE;
    }
    
}