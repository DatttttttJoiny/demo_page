<?php
require_once APPROOT . '/view/layout/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
  width: 500px;
  margin: auto;
  text-align: center;
}
.pagination {
  width: 400px;
  margin-left: 50px;
}
.pagination a {
  display: block;
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}
 
.pagination a.active {
    background-color: #4CAF50;
    color: white;
}
 
.pagination a:hover:not(.active) {
  background-color: #ddd;
}
    </style>
    <title>Document</title>
</head>
<body>
<div class="container">
    <a class="btn green" href="<?= URLROOT ?>/Home_controller/create">
        Create
    </a>

    <?php
    if (!empty($data['user'])) :
        foreach ($data['user'] as $user) : extract($user); ?>
            <div class="container-item">

                <a class="btn red" href="<?= URLROOT ?>/Home_controller/delete/<?= $id ?>">
                    Delete
                </a>

                <a class="btn orange" href="<?= URLROOT ?>/Home_controller/update/<?= $id ?>">
                    Update
                </a>

                <h2>
                    <?= $name ?>
                </h2>

                <h3>
                    <?= $email ?>
                </h3>

                <p>
                    <?= $address ?>
                </p>
            </div>
    <?php endforeach; endif; ?>
    <div class="container">
  <div class="pagination">
    <a href="#">&laquo;</a>
    <a href="#">1</a>
    <a class="active" href="index.php?page='.($current_page-1).'">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">7</a>
    <a href="#">&raquo;</a>
  </div>
</div>
</div>
</body>
</html>
