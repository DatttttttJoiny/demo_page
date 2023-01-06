<?php require_once APPROOT . '/view/layout/header.php'; ?>

<div class="container center">
    <h1>
        Update user
    </h1>
    <?php foreach ($data['findUser'] as $user) : extract($user); ?>
        <form action="<?= URLROOT ?>/Home_controller/update/<?= $id ?>" method="POST">

            <div class="form-item">
                <input type="text" name="Name" value="<?= $name ?>" required placeholder="Name...">
            </div>
            <div class="form-item">
                <input type="Email" name="Email" value="<?= $email ?>" required placeholder="Email...">
            </div>
            <div class="form-item">
                <input type="text" name="Address" value="<?= $address ?>" required placeholder="Address...">
            </div>

            <button class="btn green" name="submit" type="submit">Update</button>
        </form>
    <?php endforeach; ?>
</div>