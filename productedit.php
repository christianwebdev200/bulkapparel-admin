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

<body class="products">
    <header>

    </header>

    <main class="product-edit">
        <input type="hidden" value="https://300dev.bulkapparel.com/tshirts/g500-gildan-t-shirt-5000-heavy-cotton-53" id="productUrl">


        <div class="row">
            <aside class="col col-auto pr-0">
                <?php include('./components/productedit/sidebar/search-sidebar.php'); ?>
            </aside>

            <!-- <span id="scriptid"></span> -->

            <div class="col py-2 px-2">
                <div class="row no-gutters" id="productEditLoading" style="display: none;">
                    <div class="col-12">
                        <div class="product-edit__loading">
                            <div class="spinner-border text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>

                            <h2 class="headline-3 mt-3 text-primary">
                                Fetching Product Information...
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row no-gutters" id="productSelectFirst" style="display: none;">
                    <div class="col-12">
                        <div class="product-edit__select-first">
                            <h2 class="headline-2 text-primary">
                                Style data will be displayed when you click on any of style id from style list
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters" id="productEditMain" style="">
                    <div class="col col-9 pr-2" id="productEditContent">
                        <div class="tab-content" id="nav-tabContent">
                            <!-- Live Preview -->
                            <div class="tab-pane" id="livePreview" role="tabpanel">
                                <?php include('./components/productedit/subpages/live-preview/views.php'); ?>
                            </div>
                            <!-- Live Preview -->

                            <!-- Product details -->
                            <div class="tab-pane show active" id="details" role="tabpanel">
                                <?php include('./components/productedit/subpages/product-details/views.php'); ?>
                            </div>
                            <!-- Product details -->

                            <!-- Canned message -->
                            <div class="tab-pane fade" id="cannedMessage" role="tabpanel">
                                <?php include('./components/productedit/subpages/canned-message/views.php'); ?>
                            </div>
                            <!-- Canned message -->

                            <!-- Prices -->
                            <div class="tab-pane fade" id="price" role="tabpanel">
                                <?php include('./components/productedit/subpages/price/views.php'); ?>
                            </div>
                            <!-- Prices -->

                            <!-- Images -->
                            <div class="tab-pane fade" id="images" role="tabpanel">
                                <?php include('./components/productedit/subpages/images/views.php'); ?>
                            </div>
                            <!-- Images -->

                            <!-- Colors -->
                            <div class="tab-pane fade" id="colors" role="tabpanel">
                                <?php include('./components/productedit/subpages/colors/views.php'); ?>
                            </div>
                            <!-- Colors -->

                            <!-- Inventory -->
                            <div class="tab-pane fade" id="inventory" role="tabpanel">
                                <?php include('./components/productedit/subpages/inventory/views.php'); ?>
                            </div>
                            <!-- Inventory -->


                            <!-- Options -->
                            <div class="tab-pane fade" id="options" role="tabpanel">
                                <?php include('./components/productedit/subpages/options/views.php'); ?>
                            </div>
                            <!-- Options -->

                            <!-- Meta -->
                            <div class="tab-pane fade" id="meta" role="tabpanel">
                                <?php include('./components/productedit/subpages/meta/views.php'); ?>
                            </div>
                            <!-- Meta -->

                            <!-- Reviews -->
                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <?php include('./components/productedit/subpages/reviews/views.php'); ?>
                            </div>
                            <!-- Reviews -->

                            <!-- Promo -->
                            <div class="tab-pane fade" id="promo" role="tabpanel">
                                <?php include('./components/productedit/subpages/promo/views.php'); ?>
                            </div>
                            <!-- Promo -->

                            <!-- Categories -->
                            <div class="tab-pane fade" id="categories" role="tabpanel">
                                <?php include('./components/productedit/subpages/categories/views.php'); ?>
                            </div>
                            <!-- Categories -->

                            <!-- Categories -->
                            <div class="tab-pane fade" id="legacy" role="tabpanel">
                                <?php include('./components/productedit/subpages/legacy/views.php'); ?>
                            </div>
                            <!-- Categories -->
                        </div>
                    </div>
                    <div class="col col-3 pr-3" id="productEditOverview">
                        <?php include('./components/productedit/section/product-overview.php'); ?>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="js/product-edit.js"></script>

</body>

</html>