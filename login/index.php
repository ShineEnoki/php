<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <style>
        .wrap {
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
    </style>

</head>
<body class="text-center">
    <div class="wrap">
        <h1 class="h-3 mb-3">Login</h1>

        <?php if(isset($_GET['incorrect'])) : ?>
            <div class="alert alert-warning">
                Incorrect Email or password!
            </div>
        <?php endif ?>

        <form action="_actions/login.php" method="POST">
            <input
                type="email" name="email"
                class="form-control mb-2"
                placeholder="email" require
            >
            <input
                type="password" name="password"
                class="form-control mb-2"
                placeholder="password" require
            >
            <button 
                type="submit"
                class="btn btn-100 btn-lg btn-primary"
            >
            Login
            </button>
        </form>
        <br>
        <a href="register.php">Register</a>
    </div>
    
</body>
</html>