<div class="card rounded-0 px-2 py-3 search-sidebar">
    <div class="row">
        <div class="search-sidebar__tabs col col-12 mb-2" style="display: none;">

            <ul class="nav nav-pills nav-tab" role="tablist" id="search-sidebar-tab">

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-target="overview" id="overviewTabBtn">Overview</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-target="details" id="detailsTabBtn">Details</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-target="canned" id="cannedTabBtn">Canned Message</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-target="price" id="priceTabBtn">Price</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-target="images" id="imagesTabBtn" target="_blank">Images</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-target="colors" id="colorsTabBtn">Colors</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-target="inventory" id="inventoryTabBtn">Inventory</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-target="options" id="optionsTabBtn">Options</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-target="meta" id="metaTabBtn">Meta</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-target="oldVersion" id="oldVersionTabBtn">Old Version</a>
                </li>
            </ul>

        </div>
        <div class="search-sidebar__searchbar col col-12">
            <div class="form-group">
                <label class="text-muted" for="exampleInputEmail1">
                    <small>
                        Search by keyworkd and styleName
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
            <ul>

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