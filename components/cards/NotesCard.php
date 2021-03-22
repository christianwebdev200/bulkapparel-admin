<div class="card card--notes">
    <div class="card-header mb-0 pr-2">
        <h5 class="card--notes__title mb-0">
            <?php echo $author ?>
        </h5>
        <button class="btn btn--flat-primary ml-auto mr-3">Edit</buttona>
            <button class="btn btn--flat-primary text--danger">Delete</button>
    </div>
    <p class="text--lightGray"> <?php echo $time ?></p>
    <p class="card--notes__text mb-0">
        <?php echo $notes ?>
    </p>
</div>