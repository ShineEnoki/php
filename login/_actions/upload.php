<?php

$error = $_FILES['photo']['error'];
$tmp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];
   

    if($error){
        header('location: ../profile.php?error=file');
    };

    if($type === 'image/jpeg' || $type === "image/png"){
        copy($tmp, "photo/profile.jpg");
        header('location: ../profile.php');
    } else{
        header('location: ../profile.php?error=type');
    };


        
    