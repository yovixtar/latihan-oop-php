<?php
require 'validasi/input.php';
require 'validasi/validasi.php';

if (!empty($_POST) || !empty($_GET)) {
    $error =  [];
    
    $validasi = new Validate($_POST);
    
    $username = $validasi->setRules('username', 'Username', ['required' => TRUE,  'sanitize' => 'string', 'regexp' => "/^[A-Z\a-z]{6,}$/", ]);  
    $password = $validasi->setRules('password', 'Password', ['required' => TRUE]);  
    $ulangi_password = $validasi->setRules('ulangi_password', 'Ulangi Password', ['required' => TRUE, 'matches' => 'password']);
    $email = $validasi->setRules('email', 'Email', ['required' => TRUE,  'sanitize' => 'string', 'email' => TRUE]);  
    

    if ($validasi->passed()) {
        echo "Lolos Validasi";
    }else {
        $error = $validasi->getError();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='Shortcut Icon' href='/favicon.ico' type='image/x-icon' />
    <meta name='description' content='' />
    <meta name='keywords' content='' />
    <link rel='stylesheet' type='text/css' href=''>
    <script type='text/javascript'>

    </script>
    <style type='text/css'>
    .container{
        margin : 20px auto;
        width: 100%;
    }
    form > div {
        margin: 15px 0;
    }
    label {
        display: inline-block;
        width: 100%;
    }
    </style>
</head>
<body>
<div class="container">
<h2>Tambah User</h2>
<?php
if (!empty($error)) {
?>
<ul>
    <?php 
        foreach ($error as $value) {
            echo "<li>$value</li>";
        }
    ?>
</ul>
<?php
}
?>
<form method="POST">
    <div>
        <label for="username">Username</label>
        <input name="username" type="text" value="<?php if(isset($username)){ echo Input::runSanitize($username, 'string'); } ?>" />
    </div>
    <div>
        <label for="password">Password</label>
        <input name="password" type="password" value="<?php if(isset($password)){ echo Input::runSanitize($password, 'string'); } ?>" />
    </div>
    <div>
        <label for="ulangi_password">Ulangi Password</label>
        <input name="ulangi_password" type="password" value="<?php if(isset($ulangi_password)){ echo Input::runSanitize($ulangi_password, 'string'); } ?>" />
    </div>
    <div>
        <label for="email">Email</label>
        <input name="email" type="text" value="<?php if(isset($email)){ echo Input::runSanitize($email, 'email'); } ?>" />
    </div>
    <button type="submit">Simpan</button>
</form>
</div>
</body>
</html>
