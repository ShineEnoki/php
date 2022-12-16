<?php

$error = $_FILES['photo']['error'];
$tmp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];
   

    if($error){
        // header('location: ../profile.php?error=file');
        print_r($error);
    };

    if($type === 'image/jpeg' || $type === "image/png"){
        move_uploaded_file($tmp, "photo/profile.jpg");
        header('location: ../profile.php');
    } else{
        header('location: ../profile.php?error=type');
    };


        
    