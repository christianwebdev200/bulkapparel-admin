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
            <aside class="col col-auto pr-0">
                <?php include('./components/productedit/sidebar/search-sidebar.php'); ?>
            </aside>

            <span id="scriptid"></span>

            <div class="col px-0 py-2 px-2">
                <div id="cdetailsh">
                    <div class="od-box-default">
                        <h2 style="padding-top:125px;padding-left:62px;color:#1588e1;">Style data will be displayed when you click on

                            any of style id from style list</h2>
                    </div>
                </div>

                <div class="card w-100 mt-2" id="sectionCardHeader" style="display: none;">
                    <div class="card-body py-3 px-3">
                        <h3 class="card-title"></h3>
                        <div class="card-subtitle">
                        </div>
                    </div>
                </div>
                <div class="py-2 px-2" id="cdetails" style="display:<?php if (isset($results) && !empty($results)) {
                                                                        echo "none";
                                                                    } else {
                                                                        echo "none";
                                                                    } ?>;">


                    <div id="cajaxdata">


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