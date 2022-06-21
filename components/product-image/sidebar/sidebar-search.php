<div class="card background-white" style="height:100vh;border-radius: 0;">
    <div class="row">
        <div class="col col-12">
            <div class="form-group mb-0 px-2 py-2">
                <label class="text-muted" for="exampleInputEmail1">
                    <small>
                        Search Product Style Here
                    </small>
                </label>
                <input type="text" class="form-control" placeholder="Search styleID or Product Name">
            </div>
        </div>
        <div class="col-12">
            <hr class="my-2">
        </div>

        <div class="col-12">
            <div class="row px-2">
                <div class="col-12 mb-2">
                    <p class="text-muted mb-0">6 Items</p>
                </div>

                <div class="col-12" style="display: none">
                    <div class="spinner-border my-5 mx-auto" role="status" id="loadingSpinner">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>

                <div class="col-12">
                    <?php
                    $searchedList = [
                        [
                            'title' => 'G500 Gildan T-Shirt 5000 Heavy Cotton 5.3oz',
                            'image' => 'https://www.bulkapparel.com/image/fashion-wear/16_fm.jpg',
                            'colorCount' => '65'
                        ],
                        [
                            'title' => 'Fruit of the Loom 3930R HD Cotton Short Sleeve T-Shirt',
                            'image' => 'https://www.bulkapparel.com/image/fashion-wear/12_fm.jpg',
                            'colorCount' => '35'
                        ],
                        [
                            'title' => 'Hanes 5280 Essential T-Shirt',
                            'image' => 'https://www.bulkapparel.com/image/fashion-wear/10_fm.jpg',
                            'colorCount' => '30'
                        ],
                        [
                            'title' => 'Fruit of the Loom 4930R HD Cotton Long Sleeve T-Shirt',
                            'image' => 'https://www.bulkapparel.com/image/fashion-wear/91_fm.jpg',
                            'colorCount' => '23'
                        ],
                        [
                            'title' => 'Hanes 5286 ComfortSoft Long Sleeve T-Shirt',
                            'image' => 'https://www.bulkapparel.com/image/fashion-wear/90_fm.jpg',
                            'colorCount' => '11'
                        ],
                        [
                            'title' => 'Hanes P170 Ecosmart Hooded Sweatshirt',
                            'image' => 'https://www.bulkapparel.com/image/fashion-wear/391a_fm.jpg',
                            'colorCount' => '26'
                        ],
                    ]; ?>
                    <?php foreach ($searchedList as $value) { ?>

                        <?php $product = $value;
                        include('./components/product-image/cards/search-item-card.php'); ?>

                    <?php }; ?>

                </div>
            </div>
        </div>
    </div>
</div>