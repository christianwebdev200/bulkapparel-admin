<a class="d-flex mb-2 text-decoration-none" href="">
    <img src="<?= $product['image']; ?>" height="65px" width="52px" alt="<?= $product['title'] ?>" loading="lazy">

    <div class="px-2 py-1">
        <h6 class="mb-0"><?= $product['title']; ?></h6>
        <p class="text-muted mb-0">
            <small>
                +<?= $product['colorCount'] ?> Colors Available
            </small>
        </p>
    </div>
</a>