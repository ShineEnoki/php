<?php
    session_start();

    if(!isset($_SESSION['user'])){
        header('location: index.php');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="mb-3">Jhon Doe (Manager)</div>


        <?php if (isset($_GET['error'])) : ?>
            <div class="alert alert-warn">
                Cannot Upload file
            </div>
        <?php endif ?>

        <?php if(file_exists('_actions/photo/profile.jpg')) : ?>
            <div class="d-flex justify-content-center">
                <div>
                    <img 
                        src="_actions/photo/profile.jpg" 
                        alt="Profile photo"
                        class="img-thumbnail"
                        width="200"
                        height="200"
                    >
                </div>
            </div>
            
        <?php endif ?>

        <form 
            action="_actions/upload.php" 
            method="post"
            enctype="multipart/form-data"
        >
            <div class="input-group mb-3">
                <input type="file" name="photo" class="form-control">
                <button class="btn btn-primary">Upload</button>
            </div>
            
        </form>


        <ul class="list-group">
            <li class="list-group-item">
                <b>Email:</b> john.doe@gmail.com
            </li>

            <li class="list-group-item">
                <b>Phone:</b> (09) 243 867 645
            </li>

            <li class="list-group-item">
                <b>Address:</b> No. 321, Main Street, West City
            </li>
        </ul>

        <br>

        <a href="_actions/logout.php">Logout</a>
    </div>
</body>
</html>