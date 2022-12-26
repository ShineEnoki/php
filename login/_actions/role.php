<?php

include('../vendor/autoload.php');

use Libs\Database\MYSQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;
use Helpers\Auth;

$auth = Auth::check();

$table = new UsersTable(new MYSQL());

$id = $_GET['id'];
$role = $_GET['role'];

$table->changeRole($id, $role);

HTTP::redirect('/admin.php');