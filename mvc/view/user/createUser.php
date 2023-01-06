<?php require_once APPROOT . '/view/layout/header.php';?>

<div class="container center">
    <h1>
        Create new user
    </h1>

    <form action="<?= URLROOT ?>/Home_controller/create" method="POST">
        <div class="form-item">
            <input type="text" name="Name"  required placeholder="Name...">
        </div>
        <div class="form-item">
            <input type="Email" name="Email" required placeholder="Email...">
        </div>
        <div class="form-item">
            <input type="text" name="Address" required placeholder="Address...">
        </div>
        <button class="btn green" name="submit" type="submit">Create</button>
    </form>
</div>