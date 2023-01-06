<?php require_once APPROOT . '/view/layout/header.php';?>

<div class="container center">
    <h1>
        Create new POST
    </h1>

    <form action="<?= URLROOT ?>/Post_controller/create" method="POST">
        <div class="form-item">
            <input type="text" name="Title"  required placeholder="Title...">
        </div>
        <div class="form-item">
            <input type="text" name="Img" required placeholder="Img...">
        </div>
        <div class="form-item">
            <input type="text" name="Description" required placeholder="Description...">
        </div>
        <div class="form-item">
            <input type="text" name="Banner" required placeholder="Banner...">
        </div>
        <button class="btn green" name="submit" type="submit">Create</button>
    </form>
</div>