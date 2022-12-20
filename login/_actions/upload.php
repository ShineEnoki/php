<?php

include('../vendor/autoload.php');

use Libs\Database\MYSQL;
use Libs\Database\UsersTable;
use Helpers\Auth;
use Helpers\HTTP;

$auth = Auth::check();

$table = new UsersTable(new MYSQL());

$name   = $_FILES['photo']['name'];
$error  = $_FILES['photo']['error'];
$tmp    = $_FILES['photo']['tmp_name'];
$type   = $_FILES['photo']['type'];
         
if($error){
    HTTP::redirect('/profile.php', 'error=file');
}

if($type === 'image/jpeg' || $type === 'image/png'){
    $table->updatePhoto($auth->id, $name);
    move_uploaded_file($tmp, "photo/$name");
    $auth->photo = $name;

    HTTP::redirect('/profile.php');
} else {
    HTTP::redirect('/profile.php', 'error=type');
}