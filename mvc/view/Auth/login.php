<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
</head>
<body>
<div class="container center">
    <h1>
       Login
    </h1>

    <form action="<?= URLROOT ?>/Auth_controller/login" method="POST">
        <div class="form-item">
            <input type="text" name="userName" required placeholder="...">
        </div>
        <div class="form-item">
            <input type="text" name="password" required placeholder="...">
        </div>
        <button class="btn green" name="login" type="submit">Login</button>
    </form>
</div>
</body>
</html>
