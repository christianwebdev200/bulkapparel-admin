<div class="dropdown choose-color-select" id="chooseColorSelect">
    <?php
    $defaultColor = $colorList[0]; ?>

    <button class="btn border dropdown-toggle w-100 d-flex align-items-center" type="button" id="chooseColorAria" data-toggle="dropdown" aria-expanded="false">
        <span class="color-box mr-3" style="background: <?= $defaultColor['hex']; ?>"></span>
        <span class="mr-auto">
            <?= $defaultColor['colorName']; ?>
        </span>
    </button>
    <div class="dropdown-menu" aria-labelledby="chooseColorAria">
        <?php foreach ($colorList as $key => $color) { ?>
            <a class="dropdown-item d-flex align-items-center px-2" href="#" data-hex="<?= $color['hex'] ?>" data-id="<?= $key ?>" data-name="<?= $color['colorName'] ?>">
                <span class="color-box mr-2" style="background: <?= $color['hex']; ?>"></span>
                <span class="mr-auto">
                    <?= $color['colorName']; ?>
                </span>
            </a>
        <?php }; ?>
    </div>
</div>