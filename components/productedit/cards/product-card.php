<div class="product-search-card d-flex mb-2 text-decoration-none" href="">
    <img src="<?= $product['image']; ?>" height="85px" width="68px" alt="<?= $product['title'] ?>" loading="lazy">

    <div class="px-2 py-1 w-100">
        <div class="row no-gutter">
            <div class="col">
                <a class="mb-0 product-search-card__stylecode viewstyleid" data-sid="<?= $product['styleId']; ?>" href="javascript:void(0);"><?= $product['styleCode']; ?></a>
            </div>
            <div class="col-auto ml-auto px-0">
                <?= $product['brand']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-1">
                <p class="product-search-card__description mb-0">
                    <small>
                        <?= $product['description'] ?>

                    </small>
                </p>
            </div>
            <div class="d-flex align-item-center col-12">
                <a class="mb-0 product-search-card__styleid viewstyleid" href="javascript:void(0);" data-sid="<?= $product['styleId']; ?>"><?= $product['styleId']; ?></a>
                <p class="ml-1">
                    <small>
                        <?= $product['pop']; ?>
                    </small>
                </p>

                <p class="product-search-card__price ml-auto">
                <?= $product['price']; ?>
                </p>
            </div>
        </div>
    </div>
</div>