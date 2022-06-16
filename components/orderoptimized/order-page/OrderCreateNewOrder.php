<div class="card card--create-order">
    <div class="card-body">
        <div class="card-header py-0 mb-3 d-flex align-items-center">
            <h4 class="card-title mb-0">
                Create order
            </h4>

            <button class="btn btn-success ml-auto">
                Submit
            </button>
        </div>
        <div class="card card--create-order__customer">
            <div class="card-body">
                <h6>Find Customer</h6>
                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group form-control input-group-w-icon flex-nowrap">
                                <button class="input-group-prepend" id="filterOrder">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="#000" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.139 20.216c2.242 0 4.42-.751 6.187-2.133l5.555 5.555 1.786-1.787-5.554-5.554a10.047 10.047 0 002.134-6.189C20.247 4.535 15.712 0 10.139 0 4.565 0 .03 4.535.03 10.108s4.534 10.108 10.108 10.108zm0-17.689c4.18 0 7.58 3.4 7.58 7.581 0 4.18-3.4 7.581-7.58 7.581-4.181 0-7.581-3.4-7.581-7.581 0-4.18 3.4-7.581 7.58-7.581z"></path>
                                    </svg>
                                </button>
                                <input type="text" placeholder="Search" aria-label="Username" aria-describedby="addon-wrapping" id="filterInput">
                            </div>
                        </div>

                        <div class="col-auto ml-auto">
                            <button class="btn btn-primary">Create Customer</button>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-3">
                        <ul>
                            <li class="card--customer__title">
                                <div class="card--customer__header">Ship to</div>
                            </li>

                            <li>
                                <div class="card--customer__text">
                                    <p>Johny Doe</p>
                                </div>

                            </li>
                            <li>
                                <div class="card--customer__text">
                                    <p>aldrin@webdev200.com </p>
                                </div>
                            </li>
                            <li>
                                <div class="card--customer__text">
                                    <p>7817 Kingston Street but longe</p>
                                </div>
                            </li>
                            <li>
                                <div class="card--customer__text">
                                    <p>2nd addy definitely</p>
                                </div>
                            </li>
                            <li>
                                <div class="card--customer__text">
                                    <p>San Diego CA 92121</p>
                                </div>

                            </li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <ul>
                            <li class="card--customer__title">
                                <div class="card--customer__header">Bill to</div>
                            </li>

                            <li>
                                <div class="card--customer__text">
                                    <p>Johny Doe</p>
                                </div>

                            </li>
                            <li>
                                <div class="card--customer__text">
                                    <p>aldrin@webdev200.com </p>
                                </div>
                            </li>
                            <li>
                                <div class="card--customer__text">
                                    <p>7817 Kingston Street but longe</p>
                                </div>
                            </li>
                            <li>
                                <div class="card--customer__text">
                                    <p>2nd addy definitely</p>
                                </div>
                            </li>
                            <li>
                                <div class="card--customer__text">
                                    <p>San Diego CA 92121</p>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
        <div class="card card--create-order__summary mt-2">
            <div class="card-body">
                <h6>Order Summary</h6>
                <!-- Load table here -->
            </div>
        </div>
        <div class="card card--create-order__notes mt-2">
            <div class="card-body">
                <div class="card-header py-0 d-flex align-items-center">
                    <h6 class="mb-0">
                        Accept Payment
                    </h6>

                    <button class="btn btn-success ml-auto mr-2">
                        Mark as Paid
                    </button>
                    <button class="btn btn-warning mr-2">
                        Mark as Pending
                    </button>
                    <button class="btn btn-primary">
                        Pay with credit card
                    </button>
                </div>
            </div>
        </div>
        <div class="card card--create-order__summary mt-2">
            <div class="card-body">
                <h6>Notes</h6>
                <div class="row">
                    <div class="col-6">
                        <?php
                        include('./components/orderoptimized/cards/NotesCard.php') ?>

                        <div class="input-group d-flex">
                            <textarea type="text" rows="3" placeholder="Enter Notes" class="form-control " aria-label="Username" aria-describedby="addon-wrapping"></textarea>
                        </div>
                        <div class="card-action mt-2">
                            <button class="btn btn-primary py-2 px-4 ml-auto">Save</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>