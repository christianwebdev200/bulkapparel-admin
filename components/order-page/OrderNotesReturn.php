<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="card-header py-0 mb-2">
                    <h5 class="card-title mr-auto">
                        Notes
                    </h5>

                </div>


                <?php
                $notes = "Hello, World. Test 1";
                $author = "Webdev Dev";
                $time = "Mar 10, 2021 03:03:15 AM";
                include('./components/cards/NotesCard.php') ?>


                <?php
                $notes = "Hello, World. Test 1";
                $author = "Webdev Dev";
                $time = "Mar 10, 2021 03:03:15 AM";
                include('./components/cards/NotesCard.php') ?>

                <div class="input-group d-flex">
                    <textarea type="text" rows="3" placeholder="Enter Notes" class="form-control " aria-label="Username" aria-describedby="addon-wrapping"></textarea>
                </div>
                <div class="card-action mt-2">
                    <button class="btn btn-primary py-2 px-4 ml-auto">Save</button>
                </div>

            </div>
            <div class="col-6">
                <div class="card-header py-0">
                    <h5 class="card-title mr-auto">
                        Return List
                    </h5>
                </div>

                <?php include('./components/cards/ReturnCard.php') ?>
                <?php include('./components/cards/ReturnCard.php') ?>


            </div>
        </div>
    </div>
</div>