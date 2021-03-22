<?php 
   $alert = "Order is sent to alphabroder short Manual Miko WebDev ";
   $badge = "Manual";
   $time = "3/7/2021, 06:04:24 PM";
?>
<div class="card card--alert">
    <p class="mb-0">
        <?php echo $alert ?>
    </p>
    <?php if ($badge) : ?>
        <span class="badge badge-primary mt-1"> <?php echo $badge ?></span>
    <?php endif; ?>

    <p class="text--lightGray mt-1"> <?php echo $time ?></p>
</div>