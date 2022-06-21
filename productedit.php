<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/productedit.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="./style/bootstrap.css"> -->
</head>

<body>
    <header>

    </header>

    <main class="product-edit">
        <div class="row">
            <aside class="col col-auto pr-0" style="width:420px;">
                <div class="card rounded-0 px-2 py-3" style="height: 95vh">
                    <div class="row">
                        <div class="col col-12" id="nav-tab">

                            <ul class="nav nav-pills nav-tab" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1 active" data-toggle="pill" href="#overviewTab" role="pill" aria-controls="overviewTab" aria-selected="true" aria-labelledby="overview-tab" id="overviewTabBtn">Overview</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="pill" href="#detailsTab" role="pill" aria-controls="detailsTab" aria-selected="false" aria-labelledby="details-tab" id="detailsTabBtn">Details</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="pill" href="#priceTab" role="pill" aria-controls="priceTab" aria-selected="false" aria-labelledby="price-tab" id="priceTabBtn">Price</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" href="/bulkapparel-admin/" id="imagesTabBtn" target="_blank">Images</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="pill" href="#colorsTab" role="pill" aria-controls="colorsTab" aria-selected="false" aria-labelledby="colors-tab" id="colorsTabBtn">Colors</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="pill" href="#inventoryTab" role="pill" aria-controls="inventoryTab" aria-selected="false" aria-labelledby="inventory-tab" id="inventoryTabBtn">Inventory</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="pill" href="#optionsTab" role="pill" aria-controls="optionsTab" aria-selected="false" aria-labelledby="options-tab" id="optionsTabBtn">Options</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="pill" href="#metaTabBtnTab" role="pill" aria-controls="metaTabBtnTab" aria-selected="false" aria-labelledby="metaTabBtn-tab" id="metaTabBtn">Meta</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="btn btn-outline-primary px-1 py-1 mb-1 mr-1" data-toggle="pill" href="#oldVersionTab" role="pill" aria-controls="oldVersionTab" aria-selected="false" aria-labelledby="oldVersion-tab" id="oldVersionTabBtn">Old Version</a>
                                </li>
                            </ul>

                        </div>
                        <div class="col col-12 mt-2">
                            <div class="form-group">
                                <label class="text-muted" for="exampleInputEmail1">
                                    <small>
                                        Search by keyworkd and styleName
                                    </small>
                                </label>
                                <input type="text" class="form-control" placeholder="Search styleID or Product Name">
                            </div>
                        </div>

                        <div class="col col-12 mt-1">
                            <label for="" class="text-muted w-100">
                                <small>Search Filters</small>
                            </label>

                            <button class="btn btn-dark px-2 py-1 mb-1 mr-1">Sub Categories</button>
                            <button class="btn btn-dark px-2 py-1 mb-1 mr-1">Main Categories</button>
                            <button class="btn btn-dark px-2 py-1 mb-1 mr-1">Brands</button>
                        </div>
                    </div>

                </div>



            </aside>

            <div class="col px-0">
                <div class="tab-content py-3 px-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="overviewTab" role="tabpanel" aria-labelledby="overviewTab">
                        <?php
                        include('./components/productedit/section/overview-section.php') ?>
                    </div>
                    <div class="tab-pane fade" id="detailsTab" role="tabpanel" aria-labelledby="detailsTab">
                        <?php
                        include('./components/productedit/section/details-section.php') ?>
                    </div>
                    <div class="tab-pane fade" id="priceTab" role="tabpanel" aria-labelledby="priceTab">
                        <?php
                        include('./components/productedit/section/pricing-section.php') ?>
                    </div>

                    <div class="tab-pane fade" id="colorsTab" role="tabpanel" aria-labelledby="colorsTab">
                        <?php
                        include('./components/productedit/section/colors-section.php') ?>
                    </div>
                    <div class="tab-pane fade" id="inventoryTab" role="tabpanel" aria-labelledby="inventoryTab">
                        <?php
                        include('./components/productedit/section/inventory-section.php') ?>
                    </div>
                    <div class="tab-pane fade" id="optionsTab" role="tabpanel" aria-labelledby="optionsTab">
                        <?php
                        include('./components/productedit/section/options-section.php') ?>
                    </div>
                    <div class="tab-pane fade" id="metaTabBtnTab" role="tabpanel" aria-labelledby="metaTabBtnTab">
                        <?php
                        include('./components/productedit/section/meta-section.php') ?>
                    </div>
                    <div class="tab-pane fade" id="oldVersionTab" role="tabpanel" aria-labelledby="oldVersionTab">oldVersionTab...</div>

                </div>

            </div>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="js/product-image.js"></script>

</body>

</html>