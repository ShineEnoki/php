<?php 

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if($email === 'jhondoe@gmail.com' && $password === 'password123'){
    $_SESSION['user'] = ['username' => "Jhon Doe"];
    header('location: ../profile.php');
} else {
    header('location: ../index.php?incorrect=1');
}
