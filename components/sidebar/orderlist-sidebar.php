<div class="card order-page__order-list">
    <div class="card-body card-body-custom">
        <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0">
                All Order
            </h5>

            <div class="btn btn-primary ml-auto">
                <svg viewBox="0 0 20 20" width="20" height="20" fill="#000" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.937 8.428h-8.342V.086H8.814v8.342H.472v2.781h8.342v8.342h2.78V11.21h8.343V8.43z" />
                </svg>
                New
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12">
                <div class="form-group">
                    <div class="input-group form-control input-group-w-icon flex-nowrap">
                        <div class="input-group-prepend">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="#000" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.139 20.216c2.242 0 4.42-.751 6.187-2.133l5.555 5.555 1.786-1.787-5.554-5.554a10.047 10.047 0 002.134-6.189C20.247 4.535 15.712 0 10.139 0 4.565 0 .03 4.535.03 10.108s4.534 10.108 10.108 10.108zm0-17.689c4.18 0 7.58 3.4 7.58 7.581 0 4.18-3.4 7.581-7.58 7.581-4.181 0-7.581-3.4-7.581-7.581 0-4.18 3.4-7.581 7.58-7.581z" />
                            </svg>
                        </div>
                        <input type="text" placeholder="Search" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
            </div>

            <div class="col-6 pr-1">
                <div class="form-group">
                    <div class="input-group flex-nowrap">
                        <input type="date" class="form-control" placeholder="Date From" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
            </div>
            <div class="col-6 pl-1">
                <div class="form-group">
                    <div class="input-group flex-nowrap">
                        <input type="date" class="form-control" placeholder="Date to" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row no-gutters">
                    <div class="col-4 pr-1">
                        <div class="input-group">
                            <select class="select-transparent custom-select" id="scStatusSelect">
                                <option selected>SC Status</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4 pr-1">
                        <div class="input-group">
                            <select class="select-transparent custom-select" id="ediStatusSelect">
                                <option selected>EDI Status</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-center pl-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="isPhoneCheckbox">
                            <label class="custom-control-label" for="customCheck1">is Phone#</label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="separator my-2"></div>
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <p class="h6 mb-0"><b>64 Results</b></p>

            </div>
            <div class="col-6">
                <div class="input-group">
                    <select class="custom-select" id="numResultSelect">
                        <option selected>10</option>
                        <option value="1">10</option>
                        <option value="2">20</option>
                        <option value="3">30</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="card-scrollable">
        <div class="row">
            <div class="col-12">
                <?php include('./components/cards/OrderCard.php') ?>
            </div>
            <div class="col-12">
                <?php include('./components/cards/OrderCard.php') ?>
            </div>
            <div class="col-12">
                <?php include('./components/cards/OrderCard.php') ?>
            </div>
            <div class="col-12">
                <?php include('./components/cards/OrderCard.php') ?>
            </div>
            <div class="col-12">
                <?php include('./components/cards/OrderCard.php') ?>
            </div>
            <div class="col-12">
                <?php include('./components/cards/OrderCard.php') ?>
            </div>
        </div>
    </div>
</div>