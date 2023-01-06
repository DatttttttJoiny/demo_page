<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
    <style>
        .top-main{
            align-items: center;
        }
        .top-main li{
              margin-top: 15px;
        }
        
    </style>
</head>

<body>

    <nav class="top-nav">
        <div class="top-main">
            <div class="left">
                <h1 style="color:azure;">DEMO APP</h1>
            </div>
            <ul>
                <li>
                    <a href="<?php echo URLROOT; ?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo URLROOT . '/Post_controller'; ?>">Blog</a>
                </li>
                <li>
                    <a href="">Projects</a>
                </li>

                <li>
                    <a href="<?php echo URLROOT . '/auth_controller/logout'; ?>">Logout</a>
                </li>
                <li>
                    <form action="<?= URLROOT ?>/Home_controller/search" method="POST">
                        <input type="text" name="information">
                        <button type="submit" name="search">Tìm Kiếm</button>
                    </form>
                </li>
                
            </ul>
            <h3 style="color: white; margin-left:100px ">
              <?php print_r($_SESSION['currentuser'][0]['name']) ?>
            </h3>       
        </div>
      
    </nav>

</body>