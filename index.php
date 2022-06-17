<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/product-image.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="./style/bootstrap.css"> -->
</head>

<body>
    <header>

    </header>

    <main class="product-image">
        <div class="row">
            <aside class="col col-2 pr-0">
                <?php include('./components/product-image/sidebar/sidebar-search.php') ?>
            </aside>

            <div class="col col-10 px-0">
                <?php include('./components/product-image/main.php') ?>
            </div>
        </div>
        <?php include('./components/product-image/modals/choose-media-modal.php') ?>
        <?php include('./components/product-image/modals/upload-image-modal.php') ?>
        <?php include('./components/product-image/modals/upload-video-modal.php') ?>
        <?php include('./components/product-image/modals/upload-youtube-modal.php') ?>
        <?php include('./components/product-image/modals/edit-main-model-modal.php') ?>
        <?php include('./components/product-image/modals/preview-image-modal.php') ?>
        <?php include('./components/product-image/modals/preview-video-modal.php') ?>
        <?php include('./components/product-image/modals/preview-youtube-modal.php') ?>
        <?php include('./components/product-image/modals/remove-media-modal.php') ?>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="js/product-image.js"></script>

</body>

</html>