<div class="order-page__main">
    <div class="container-fluid mt-2" style="display: block;">
        <?php include('./components/orderoptimized/order-page/OrderHeader.php') ?>
        <?php include('./components/orderoptimized/order-page/OrderButtons.php') ?>

        <div class="row no-gutters mt-2">
            <div class="col-9 pr-2">
                <div class="row">
                    <div class="col-12 mb-2">
                        <?php include('./components/orderoptimized/order-page/OrderInformation.php') ?>
                    </div>
                    <div class="col-12 mb-2">
                        <?php include('./components/orderoptimized/order-page/orderS&SAlpha.php') ?>
                    </div>
                    <div class="col-12 mb-2">
                        <?php include('./components/orderoptimized/order-page/OrderNotesReturn.php') ?>
                    </div>
                    <div class="col-12 mb-2">
                        <?php include('./components/orderoptimized/order-page/OrderSummary.php') ?>
                    </div>
                    <div class="col-12 mb-2">
                        <?php include('./components/orderoptimized/order-page/OrderAcceptPayment.php') ?>
                    </div>
                    <div class="col-12 mb-2">
                        <?php include('./components/orderoptimized/order-page/OrderAdditionalDetails.php') ?>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col-12 mb-2">
                        <?php include('./components/orderoptimized/order-page/OrderAlert.php') ?>
                    </div>
                    <!-- <div class="col-12 mb-2">
                        <?php include('./components/orderoptimized/order-page/OrderCustomer.php') ?>
                    </div> -->
                    <div class="col-12 mb-2">
                        <?php include('./components/orderoptimized/order-page/OrderAutomationLog.php') ?>
                    </div>
                    <div class="col-12 mb-2">
                        <?php include('./components/orderoptimized/order-page/OrderStatusLog.php') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>