<?php
require_once APPROOT . '/view/layout/header.php';
?>

<div class="container">
    <a class="btn green" href="<?= URLROOT ?>/Post_controller/create">
        Create
    </a>

    <?php
    if (!empty($data['post'])) :
        foreach ($data['post'] as $post) : extract($post); ?>
            <div class="container-item">

                <a class="btn red" href="<?= URLROOT ?>/Post_controller/delete/<?= $id ?>">
                    Delete
                </a>

                <a class="btn orange" href="<?= URLROOT ?>/Post_controller/update/<?= $id ?>">
                    Update
                </a>

                <h2>
                    <?= $title ?>
                </h2>

                <h3>
                    <?= $img ?>
                </h3>

                <p>
                    <?= $description ?>
                </p>
                <p>
                    <?= $banner ?>
                </p>
            </div>
    <?php endforeach;
    endif; ?>

</div>