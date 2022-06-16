<div class="row">
    <div class="col-12">
        <h6>Choose Colors</h6>
    </div>
    <div class="col col-12">
        <ul class="d-flex px-0 flex-wrap align-start mb-0">
            <?php foreach ($colorList as $key => $color) { ?>
                <li data-hex="<?= $color['hex'] ?>" data-id="<?= $key ?>" data-name="<?= $color['colorName'] ?>" class="color-box" style="background: <?= $color['hex']; ?>"></li>

            <?php }; ?>
        </ul>
    </div>
</div>