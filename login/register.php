<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <title>Register</title>


    <style>
        .wrap{
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
    </style>
</head>
<body class="text-center">

    <div class="wrap">
        <h1 class="mb-3 h3">Register</h1>

        <?php if(isset($_GET['error'])) : ?>
            <div class="alert alert-warn">
                Cannot create account.Please try again later.
            </div>
        <?php endif ?>

        <form action="_actions/create.php" method="POST">
            <input 
                type="text"
                name="name"
                class="form-control mb-2"
                placeholder="Name" require
            >

            <input 
                type="email"
                name="email"
                class="form-control mb-2"
                placeholder="Email" require
            >

            <input 
                type="text"
                name="phone"
                class="form-control mb-2"
                placeholder="Phone" require
            >

            <textarea 
                name="address" 
                class="form-control mb-2"
                placeholder="Address" require
            ></textarea>
            
            

            <input 
                type="password"
                name="password"
                class="form-control mb-2"
                placeholder="password" require
            >

            <button
                class="w-100 btn btn-lg btn-primary"
            >
            Register
            </button>

            <br>

            <a href="./index.php">Login</a>
        </form>
        
    </div>
    
</body>
</html>