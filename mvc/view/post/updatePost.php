<?php require_once APPROOT . '/view/layout/header.php'; ?>

<div class="container center">
    <h1>
        Update Post
    </h1>
    <?php 
    foreach($data['findpost'] as $postt) : extract($postt)?>
        <form action="<?= URLROOT ?>/Post_controller/update/<?= $id ?>" method="POST">
            <div class="form-item">
                <input type="text" name="Title" value="<?= $title ?>" required placeholder="Title...">
            </div>
            <div class="form-item">
                <input type="text" name="Img" value="<?= $img ?>" required placeholder="Img...">
            </div>
            <div class="form-item">
                <input type="text" name="Description" value="<?= $description ?>" required placeholder="Description...">
            </div>
            <div class="form-item">
                <input type="text" name="Banner" value="<?= $banner ?>" required placeholder="Banner...">
            </div>

            <button class="btn green" name="submit" type="submit">Update</button>
        </form>
        <?php 
         endforeach ?>
</div>

