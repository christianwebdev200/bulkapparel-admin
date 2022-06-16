<?php
$orderName = "John Doe";
$orderCount = "175";
$overallPurchase = '$299.25';
$lastOrder = "2021-03-10 15:15:47 AM";
$zipCode = "92121";
$orderEmail = "johndoe@gmail.com";
$orderMethod = "Y-P-1111Y";
$inBatch = "IN BATCH";
$invoice = "1152524";
$orderNo = "B615268964905";
$scStatus = "Approved";
$totalPrice = "$46.65";
$orderDate = "03/11/2021 04:08:1 PM";
$accountType = "G";
?>
<div class="card card--order">
    <div class="card-body">
        <div class="card--order__header mb-1">

            <div class="card--order__header-title">
                <div class="card--order__title mb-1">
                    <h5 class="title mb-0"><a href=""><?php echo $orderName ?></a> </h5>
                    <span class="ml-2 account-type badge badge--violet-shade"><?php echo $accountType ?></span>
                    <span class="ml-2 order-count card--order__count text--danger">
                        <b>
                            (<?php echo $orderCount ?>)
                        </b>
                    </span>
                </div>
                <div class="card--order__subtitle">
                    <p class="text--primary mr-2"><b><?php echo $overallPurchase ?></b></p>
                    <p class="text--success"><b><?php echo $lastOrder ?></b></p>
                </div>
            </div>


            <div class="card--order__action">
                <span class="badge badge--secondary-outline">
                    <?php echo $zipCode ?>
                </span>

                <span class="card--order__arrow">
                    <svg width="12" height="20" viewBox="0 0 20 12" fill="#000" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M.56 18.941a1.913 1.913 0 010-2.705l6.3-6.3-6.3-6.3A1.913 1.913 0 013.265.931l7.653 7.652a1.913 1.913 0 010 2.706L3.265 18.94a1.913 1.913 0 01-2.705 0z" />
                    </svg>
                </span>
            </div>
        </div>

        <div class="card--order__content mb-2">
            <p class="email text--primary mr-2"><a href=""><?php echo $orderEmail ?>m</a></p>
            <p class="method text--violet"><b><?php echo $orderMethod ?></b></p>

            <p class="d-inline-block ml-auto in-batch"><b><?php echo $inBatch ?></b></p>
        </div>

        <div class="card--order__content mb-2">
            <p class="invoice"><b><a href=""><?php echo $invoice ?></a></b></p>
            <p class="order-number mx-1">|</p>
            <p><b><a href=""><?php echo $orderNo ?></a></b></p>

            <p class="sc-status ml-auto"><span>SC:</span><b class="text--primary"><?php echo $scStatus ?></b>
            <div class="form-check ml-1">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            </div>
            </p>
        </div>
        <div class="card--order__content mb-1">
            <p class="h6"><b><a href=""><?php echo $orderDate ?>M</a></b></p>

            <p class="h5 total-price ml-auto text--blue"><b><?php echo $totalPrice ?></b></p>
        </div>

        <div class="separator"></div>
    </div>
</div>
<?php?>