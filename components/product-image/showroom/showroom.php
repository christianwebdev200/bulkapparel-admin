<div class="showroom">
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-wrap">
                <?php foreach ($medias as $key => $media) { ?>
                    <?php $media = $media;
                    include('./components/product-image/cards/showroom-card.php') ?>
                <?php } ?>

                <?php include('./components/product-image/cards/add-showroom-card.php') ?>
            </div>
        </div>

        <div class="col-12">
            <?php include('./components/product-image/showroom/showroom-footer.php') ?>
        </div>
    </div>


</div>