<div class="card rounded-0 px-2 py-3 search-sidebar">
    <div class="row">
        <div class="search-sidebar__tabs col col-12 mb-2">

            <ul class="nav nav-pills nav-tab" role="tablist" id="search-sidebar-tab">

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="list" role="tab" href="#livePreview" id="overviewTabBtn">Live</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1 active" data-toggle="list" role="tab" href="#details" id="detailsTabBtn">Details</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="list" role="tab" href="#cannedMessage" id="cannedTabBtn">Canned Message</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="list" role="tab" href="#price" id="priceTabBtn">Price</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="list" role="tab" href="#images" id="imagesTabBtn" target="_blank">Images</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="list" role="tab" href="#colors" id="colorsTabBtn">Colors</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="list" role="tab" href="#inventory" id="inventoryTabBtn">Inventory</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="list" role="tab" href="#options" id="optionsTabBtn">Options</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="list" role="tab" href="#meta" id="metaTabBtn">Meta</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="list" role="tab" href="#reviews" id="reviewTabBtn">Reviews</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="list" role="tab" href="#promo" id="promoTabBtn">Promo</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="list" role="tab" href="#categories" id="categoriesTabBtn">Categories</a>
                </li>


                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="list" role="tab" href="#legacy" id="legacyTabBtn">Legacy</a>
                </li>
            </ul>

        </div>
        <div class="search-sidebar__searchbar col col-12">
            <div class="form-group">
                <label class="text-muted" for="exampleInputEmail1">
                    <small>
                        Search by keyword and styleName
                    </small>
                </label>
                <input type="text" class="form-control" placeholder="Search styleID or Product Name">
            </div>
        </div>
        <div class="search-sidebar__filters col col-12 mt-1">
            <label for="" class="text-muted w-100">
                <small>Search Filters</small>
            </label>

            <button class="btn btn-dark px-2 py-1 mb-1 mr-1">Sub Categories</button>
            <button class="btn btn-dark px-2 py-1 mb-1 mr-1">Main Categories</button>
            <button class="btn btn-dark px-2 py-1 mb-1 mr-1">Brands</button>
        </div>


        <div class="search-sidebar__items col col-12 mt-1">

            <?php
            $searchedList = [
                [
                    'title' => 'G500 Gildan T-Shirt 5000 Heavy Cotton 5.3oz',
                    'styleCode' => 'G500',
                    'brand' => 'Hanes',
                    'description' => '** On Sale This week Only ** ** Excluded from...',
                    'price' => '$2.11',
                    'styleId' => '11',
                    'pop' => 'pop:71670',
                    'image' => 'https://www.bulkapparel.com/image/fashion-wear/16_fm.jpg',
                    'colorCount' => '65'
                ],
                [
                    'title' => 'Fruit of the Loom 3930R HD Cotton Short Sleeve T-Shirt',
                    'styleCode' => 'G500',
                    'brand' => 'Hanes',
                    'description' => '5.4 oz., 100% ring spun cottonSoft-washed...',
                    'price' => '$2.11',
                    'styleId' => '11',
                    'pop' => 'pop:71670',
                    'image' => 'https://www.bulkapparel.com/image/fashion-wear/12_fm.jpg',
                    'colorCount' => '35'
                ],
                [
                    'title' => 'Hanes 5280 Essential T-Shirt',
                    'styleCode' => '5280',
                    'brand' => 'Hanes',
                    'description' => '5.0 oz., pre-shrunk 100% cottonAsh is 98/2...',
                    'price' => '$2.11',
                    'styleId' => '11',
                    'pop' => 'pop:71670',

                    'image' => 'https://www.bulkapparel.com/image/fashion-wear/10_fm.jpg',
                    'colorCount' => '30'
                ],
                [
                    'title' => 'Fruit of the Loom 4930R HD Cotton Long Sleeve T-Shirt',
                    'styleCode' => '4903R',
                    'brand' => 'Hanes',
                    'description' => '** On Sale This week Only ** ** Color White...',
                    'price' => '$2.11',
                    'styleId' => '11',
                    'pop' => 'pop:71670',
                    'image' => 'https://www.bulkapparel.com/image/fashion-wear/91_fm.jpg',
                    'colorCount' => '23'
                ],
                [
                    'title' => 'Hanes 5286 ComfortSoft Long Sleeve T-Shirt',
                    'styleCode' => '5286',
                    'brand' => 'Hanes',
                    'description' => '3.5 oz., 100% polyester Moisture...',
                    'price' => '$2.11',
                    'styleId' => '11',
                    'pop' => 'pop:71670',
                    'image' => 'https://www.bulkapparel.com/image/fashion-wear/90_fm.jpg',
                    'colorCount' => '11'
                ],
                [
                    'title' => 'Hanes P170 Ecosmart Hooded Sweatshirt',
                    'styleCode' => 'P170',
                    'brand' => 'Hanes',
                    'description' => '5.5 oz., 100% cotton print jersey Urban Digital...',
                    'price' => '$2.11',
                    'styleId' => '11',
                    'pop' => 'pop:71670',
                    'image' => 'https://www.bulkapparel.com/image/fashion-wear/391a_fm.jpg',
                    'colorCount' => '26'
                ],
                [
                    'title' => 'Hanes P170 Ecosmart Hooded Sweatshirt',
                    'styleCode' => 'P170',
                    'brand' => 'Hanes',
                    'description' => '5.5 oz., 100% cotton print jersey Urban Digital...',
                    'price' => '$2.11',
                    'styleId' => '11',
                    'pop' => 'pop:71670',
                    'image' => 'https://www.bulkapparel.com/image/fashion-wear/391a_fm.jpg',
                    'colorCount' => '26'
                ],
            ]; ?>
            <ul class="search-sidebar__list">

                <?php foreach ($searchedList as $value) { ?>
                    <li>
                        <?php $product = $value;
                        include('./components/productedit/cards/product-card.php'); ?>
                    </li>
                <?php }; ?>
            </ul>

        </div>
    </div>

</div>