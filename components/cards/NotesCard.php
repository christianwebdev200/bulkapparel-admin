<?php
$notes = "Hello, World. Test 1";
$author = "Webdev Dev";
$time = "Mar 10, 2021 03:03:15 AM";
$edit = false;
?>

<div class="card card--notes">
    <div class="card-header mb-0 pr-2">
        <h5 class="card--notes__title mb-0">
            <?php echo $author ?>
        </h5>

        <?php if($edit) : ?>
        <button class="btn btn--flat-primary ml-auto mr-3">Save Changes</button>
        <button class="btn btn--flat-primary text--warning">Cancel</button>
        <?php else : ?>
        <button class="btn btn--flat-primary ml-auto mr-3">Edit</button>
        <button class="btn btn--flat-primary text--danger">Delete</button>
        <?php endif; ?>
    </div>
    <p class="text--lightGray"> <?php echo $time ?></p>
    <p class="card--notes__text mb-0">
        <?php if($edit) : ?> 
            <div class="input-group d-flex">
                <textarea type="text" rows="2" placeholder="Enter Notes" class="form-control " aria-label="Username" aria-describedby="addon-wrapping"></textarea>
            </div>
        <?php else : ?>
            <?php echo $notes ?>
        <?php endif; ?>
    </p>
</div>