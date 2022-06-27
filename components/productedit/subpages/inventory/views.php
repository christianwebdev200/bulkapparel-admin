<?php
?>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="card-title">Inventory</h5>
                <p class="card-subtitle text-muted">Replenish out of stock colors of your product</p>
            </div>
        </div>
    </div>
    <div class="card-body pb-0">
        <div class="row">
            <div class="col-12">
                <p class="mb-0 text-danger">Important* :- if any changes in bulk prices section, please click here for bulk cache update <a class="text-primary"><b>Update Bulk</b></a> </p>
            </div>
            <div class="col-12 mt-3">
                <div class="row">
                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="inv_freeShip">
                            <label class="custom-control-label" for="inv_freeShip">Free Ship</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="inv_bulkDiscount">
                            <label class="custom-control-label" for="inv_bulkDiscount">Bulk Discount</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="inv_coupon">
                            <label class="custom-control-label" for="inv_coupon">Coupon</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="inv_ds">
                            <label class="custom-control-label" for="inv_ds">DS</label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="card-body d-flex pt-0 pb-3">
        <button class="btn btn-primary px-5 ml-auto">Save</button>
    </div>
</div>