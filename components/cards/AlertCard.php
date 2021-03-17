<div class="card card--alert text--<?php echo $type ?>">
    <p class="mb-0">
        <?php echo $alert ?>
    </p>
    <?php if ($badge) : ?>
        <span class="badge badge-<?php echo $type ?> mt-1"> <?php echo $badge ?></span>
    <?php endif; ?>

    <p class="text--lightGray mt-1"> <?php echo $time ?></p>
</div>