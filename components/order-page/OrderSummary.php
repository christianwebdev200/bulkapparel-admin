<?php
$edit = false;
?>
<div class="card mb-2">
    <div class="card-body">
        <div class="card-header py-0 mb-2 d-flex align-items-center">
            <h5 class="card-title mb-0">
                Order Summary
            </h5>

            <button class="btn btn-primary ml-auto">
                <svg viewBox="0 0 20 20" width="20" height="20" fill="#000" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.937 8.428h-8.342V.086H8.814v8.342H.472v2.781h8.342v8.342h2.78V11.21h8.343V8.43z" />
                </svg>
                Add New Item
            </button>
        </div>


        <div class="row">
            <div class="col-6 d-flex">
                <div class="mr-3">
                    <h6 class="text--blue">SS Total:</h6>
                    <h6>$4.56 NJ, KS, TX, GA, NV, IL</h6>
                    <span class="badge badge-success">Stock Available</span>
                </div>
                <div>
                    <h6 class="text--danger">SS Total:</h6>
                    <h6>$4.56 NJ, KS, TX, GA, NV, IL</h6>
                    <span class="badge badge-danger">No Stock Available</span>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <div class="text-value-col mr-3">
                    <p class="text">Line</p>
                    <p class="value"><b>3</b></p>
                </div>
                <div class="text-value-col mr-3">
                    <p class="text">Quantity</p>
                    <p class="value"><b>3</b></p>
                </div>
                <div class="text-value-col mr-3">
                    <p class="text">Total</p>
                    <p class="value"><b>$15.39</b></p>
                </div>
                <div class="text-value-col mr-3 text--success">
                    <p class="text">Shipped QTY</p>
                    <p class="value"><b>3</b></p>
                </div>
                <div class="text-value-col mr-3 text--violet">
                    <p class="text">Total COG</p>
                    <p class="value"><b>24.08</b></p>
                </div>
            </div>

            <div class="col-12 d-flex mt-2">
                <div class="custom-control custom-checkbox not-shipped mr-3">
                    <input type="checkbox" class="custom-control-input" id="notShipped" checked>
                    <label class="custom-control-label" for="notShipped">Not shipped</label>
                </div>
                <div class="custom-control custom-checkbox snsNoStock mr-3">
                    <input type="checkbox" class="custom-control-input" id="snsNoStock" checked>
                    <label class="custom-control-label" for="snsNoStock">SNS No Stock</label>
                </div>
                <div class="custom-control custom-checkbox alphaNoStock mr-3">
                    <input type="checkbox" class="custom-control-input" id="alphaNoStock" checked>
                    <label class="custom-control-label" for="alphaNoStock">Alpha No Stock</label>
                </div>
                <div class="custom-control custom-checkbox alphaNoStock2 mr-3">
                    <input type="checkbox" class="custom-control-input" id="alphaNoStock2" checked>
                    <label class="custom-control-label" for="alphaNoStock2">Alpha No Stock</label>
                </div>
            </div>
        </div>

        <?php include('./components/tables/OrderSummaryTable.php'); ?>


        <div class="order-summary__footer">
            <div class="order-summary__others py-2">
                <div class="details-main__more text--primary mt-2">
                    <p>
                        <span>
                            <b>Alpha:</b>
                            p170 WHITE S
                        </span>
                        <span>
                            <b>Special Price:</b>
                            $8.18
                        </span>
                        <span>
                            <b>GTIN:</b>
                            007663 69059546
                        </span>
                    </p>
                    <p>
                        <span>
                            <b>Stock:</b>
                            CSS: 551,
                        </span>
                        <span>
                            <b>FO:</b>
                            6,
                        </span>
                        <span>
                            <b>TD:</b>
                            25,
                        </span>
                        <span>
                            <b>CN:</b>
                            1011,
                        </span>
                        <span>
                            <b>MA:</b>
                            262
                        </span>
                    </p>
                    <p>
                        <span>
                            <b>Alpha Total:</b>
                            $16.36
                        </span>
                    </p>
                </div>
                <div class="details-main__more text--danger mt-1">
                    <p>
                        <span>
                            <b>Alpha:</b>
                            p170 WHITE S
                        </span>
                        <span>
                            <b>Special Price:</b>
                            $8.18
                        </span>
                        <span>
                            <b>GTIN:</b>
                            007663 69059546
                        </span>
                    </p>
                    <p>
                        <span>
                            <b>Stock:</b>
                            CSS: 551,
                        </span>
                        <span>
                            <b>FO:</b>
                            6,
                        </span>
                        <span>
                            <b>TD:</b>
                            25,
                        </span>
                        <span>
                            <b>CN:</b>
                            1011,
                        </span>
                        <span>
                            <b>MA:</b>
                            262
                        </span>
                    </p>
                    <p>
                        <span>
                            <b>Alpha Total:</b>
                            $16.36
                        </span>
                    </p>
                </div>
                <div class="details-main__more mt-1">
                    <p>
                        <span>
                            <b>Alpha:</b>
                            p170 WHITE S
                        </span>
                        <span>
                            <b>Special Price:</b>
                            $8.18
                        </span>
                        <span>
                            <b>GTIN:</b>
                            007663 69059546
                        </span>
                    </p>
                    <p>
                        <span>
                            <b>Stock:</b>
                            CSS: 551,
                        </span>
                        <span>
                            <b>FO:</b>
                            6,
                        </span>
                        <span>
                            <b>TD:</b>
                            25,
                        </span>
                        <span>
                            <b>CN:</b>
                            1011,
                        </span>
                        <span>
                            <b>MA:</b>
                            262
                        </span>
                    </p>
                    <p>
                        <span>
                            <b>Alpha Total:</b>
                            $16.36
                        </span>
                    </p>
                </div>
            </div>
            <div class="order-summary__amounts">
                <ul>
                    <li>
                        <?php if ($edit) : ?>
                            <input type="text" class="form-control" value="1.76">
                        <?php else : ?>
                            <p class="title">Subtotal</p>
                            <p class="value"><b>$1.76</b></p>
                        <?php endif ?>
                    </li>
                    <li>
                        <?php if ($edit) : ?>
                            <input type="text" class="form-control" value="1.76">
                        <?php else : ?>
                            <p class="title">Shipping</p>
                            <p class="value"><b>$1.76</b></p>
                        <?php endif ?>
                    </li>
                    <li>
                        <?php if ($edit) : ?>
                            <input type="text" class="form-control" value="1.76">
                        <?php else : ?>
                            <p class="title">Text</p>
                            <p class="value"><b>$0.14</b></p>
                        <?php endif ?>
                    </li>
                    <li>
                        <?php if ($edit) : ?>
                            <input type="text" class="form-control" value="1.76">
                        <?php else : ?>
                            <p class="title text--danger">Bulk Discount</p>
                            <p class="value text--danger"><b>-$0.00</b></p>
                        <?php endif ?>
                    </li>
                    <li>
                        <?php if ($edit) : ?>
                            <input type="text" class="form-control" value="1.76">
                        <?php else : ?>
                            <p class="title">
                            <h5>Total</h5>
                            </p>
                            <p class="value">
                            <h5>$10.89</h5>
                            </p>
                        <?php endif ?>
                    </li>
                    <li>
                        <?php if ($edit) : ?>
                            <input type="text" class="form-control" value="1.76">
                        <?php else : ?>
                            <p class="title">Refund amount</p>
                            <p class="value"><b>$0.00</b></p>
                        <?php endif ?>
                    </li>
                    <li>
                        <?php if ($edit) : ?>
                            <input type="text" class="form-control" value="1.76">
                        <?php else : ?>
                            <p class="title">Remaining amount</p>
                            <p class="value"><b>$10.80</b></p>
                        <?php endif ?>
                       
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>