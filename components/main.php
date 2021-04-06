<div class="order-page__main">
    <div class="container-fluid mt-2" style="display: block;">
        <?php include('./components/order-page/OrderHeader.php') ?>
        <?php include('./components/order-page/OrderButtons.php') ?>

        <div class="row no-gutters mt-2">
            <div class="col-9 pr-2">
                <div class="row">
                    <div class="col-12 mb-2">
                        <?php include('./components/order-page/OrderInformation.php') ?>
                    </div>
                    <div class="col-12 mb-2">
                        <?php include('./components/order-page/orderS&SAlpha.php') ?>
                    </div>
                    <div class="col-12 mb-2">
                        <?php include('./components/order-page/OrderNotesReturn.php') ?>
                    </div>
                    <div class="col-12 mb-2">
                        <?php include('./components/order-page/OrderSummary.php') ?>
                    </div>
                    <div class="col-12 mb-2">
                        <?php include('./components/order-page/OrderAcceptPayment.php') ?>
                    </div>
                    <div class="col-12 mb-2">
                        <?php include('./components/order-page/OrderAdditionalDetails.php') ?>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col-12 mb-2">
                        <?php include('./components/order-page/OrderAlert.php') ?>
                    </div>
                    <div class="col-12 mb-2">
                        <?php include('./components/order-page/OrderCustomer.php') ?>
                    </div>
                    <div class="col-12 mb-2">
                        <?php include('./components/order-page/OrderAutomationLog.php') ?>
                    </div>
                    <div class="col-12 mb-2">
                        <?php include('./components/order-page/OrderStatusLog.php') ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>