<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="card-title">Options</h5>
                <p class="card-subtitle text-muted">Edit Product Options </p>
            </div>
        </div>
    </div>
    <div class="card-body pb-0">
        <div class="row">
            <div class="col-12">
                <h6>Email Stock</h6>
            </div>
            <div class="col-12 mt-2">
                <div class="row">
                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="op_emailStockSent">
                            <label class="custom-control-label" for="op_emailStockSent">Sent Stock Email</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4">

        <div class="row">
            <div class="col-12">
                <h6>Image Info</h6>
            </div>
            <div class="col-12 mt-2">
                <div class="row">
                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="op_imageInfoWhiteInfo">
                            <label class="custom-control-label" for="op_imageInfoWhiteInfo">White Text Info (isWhiteInfo)</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="op_imageOrientation">Orientation</label>
                            <select id="op_imageOrientation" name="ribbonOrientation" class="form-control">
                                <option value="0" selected="">Diagonal</option>
                                <option value="1">Horizontal</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4">


        <div class="row">
            <div class="col-12">
                <h6>Display</h6>
            </div>
            <div class="col-12 mt-2">
                <div class="row">
                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="op_displayRecomItem">
                            <label class="custom-control-label" for="op_displayRecomItem">Display Recommend Item</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="op_displayRelateItem">
                            <label class="custom-control-label" for="op_displayRelateItem">Display Related items</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="op_displayCustomerViews">
                            <label class="custom-control-label" for="op_displayCustomerViews">Customer Who Views</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4">

        <div class="row">
            <div class="col-12">
                <h6>Discount</h6>
            </div>
            <div class="col-12 mt-2">
                <div class="row">
                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="op_discountBulkDiscountStyle">
                            <label class="custom-control-label" for="op_discountBulkDiscountStyle">Don't allow bulk discount with this style</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="op_discountAllowCoupStyle">
                            <label class="custom-control-label" for="op_discountAllowCoupStyle">Don't allow coupon use with this style.</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="op_discountShowBelow">
                            <label class="custom-control-label" for="op_discountShowBelow">Don't show below</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4">

        <div class="row">
            <div class="col-12">
                <h6>CRON</h6>
            </div>
            <div class="col-12 mt-2">
                <div class="row">
                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="op_cronSyncTSC">
                            <label class="custom-control-label" for="op_cronSyncTSC">Sync TSC</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="op_cronCombineStock">
                            <label class="custom-control-label" for="op_cronCombineStock">Combine Stock</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="op_cronDontSync">
                            <label class="custom-control-label" for="op_cronDontSync">Don’t sync</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="op_cronIncCronUpdate">
                            <label class="custom-control-label" for="op_cronIncCronUpdate">Include in CRON Update</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <button type="button" class="btn bg-warning">Sync Invetory Now</button>
            </div>
        </div>


    </div>

    <hr>
    <div class="card-body d-flex pt-0 pb-3">
        <button type="submit" class="btn btn-primary px-5 ml-auto">Save</button>
    </div>
</div>