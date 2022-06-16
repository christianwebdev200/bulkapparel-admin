<style>
    .table-order-track th,
    .table-order-track td {
        font-size: 14px !important;
    }

    .table-order-track th {
        border-top: 0 !important;
    }

    .table-order-track .value,
    .table-order-track .edit {
        display: flex;
        ;
    }

    .table-order-track td,
    .table-order-track th {
        padding: 8px;
    }

    .table-order-track td input {
        font-size: 14px;
        padding: 5px;
    }

    .btn-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        height: 35px;
        width: 35px;
        border-radius: 100%;
    }

    .btn-icon svg {

        min-width: 15px;
    }

    .table-order-track-indi td {
        padding: 5px;

    }

    .company-name {
        width: 130px;
    }

    /* 
    .warehouse {
        width: 130px;
    }
    .order-number {
        width: 120px;
    }
    .po-number {
        width: 110px;
    }
    .tracking-no {
        width: 110px;

    }
    .subtotal {
        width: 90px;
    }
    .shipping {
        width: 100px;
    }
    .total {
        width: 80px;
    }
    .total-pieces {
        width: 110px;
    }
    .total-places {
        width: 110px;
    }
    .total-weight {}
    .total-boxes {}
    .sync {}
    .table-action {} */

    #orderTrackingModal .modal-title {
        display: flex;
        align-items: center;
    }

    .order-tracking-title {
        display: flex;
        align-items: center;
        font-weight: 700;
        font-size: 18px !important;
        margin-right: 10px;
    }

    .order-tracking-title button {
        margin-left: 10px;
    }

    .order-tracking-exit {
        border: none;
        background-color: none !important;
        font-size: 25px !important;
        margin-left: auto;
        
    }

    .order-tracking-header {
        display: flex;
    }
</style>

<div class="modal" tabindex="-1" style=" display: none;">
    <div class="modal-dialog" style="min-width: 1500px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">Modal title
                    <button type="button" class="btn btn-primary ml-2" id="addFieldBtn">Add Row</button>
                </h5>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-order-track" id="tableOrderTrack">
                    <thead>
                        <tr>
                            <th class="company-name">Company Name</th>
                            <th class="warehouse">Warehouse</th>
                            <th class="order-number">Order Number</th>
                            <th class="po-number">PO Number</th>
                            <th class="tracking-no">Tracking No</th>
                            <th class="subtotal">Subtotal</th>
                            <th class="shipping">Shipping</th>
                            <th class="total">Total</th>
                            <th class="total-pieces">Total Pieces</th>
                            <th class="total-places">Total Places</th>
                            <th class="total-weight">Total Weight</th>
                            <th class="total-boxes">Total Boxes</th>
                            <th class="sync">Sync</th>
                            <th class="table-action">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-rowid="1">
                            <td class="company-name">
                                <span class="value">Alpha Broder</span>
                                <span class="edit" style="display: none;">
                                    <select class="custom-select" value="1" aria-label="Default select example">
                                        <option selected disabled>Company Name</option>
                                        <option value="1">Alpha Broder</option>
                                        <option value="2">Alpha Broder</option>
                                        <option value="3">Alpha Broder</option>
                                    </select>
                                </span>
                            </td>
                            <td class="warehouse">
                                <span class="value">CA Warehouse</span>
                                <span class="edit" style="display: none;">
                                    <input class="form-control" type="text" value="CA Warehouse" placeholder="Warehouse">
                                </span>
                            </td>
                            <td class="order-number">
                                <span class="value">#1613551123212</span>
                                <span class="edit" style="display: none;">
                                    <input class="form-control" type="text" value="#1613551123212" placeholder="Order Number">
                                </span>
                            </td>
                            <td class="po-number">
                                <span class="value">#21212222</span>
                                <span class="edit" style="display: none;">
                                    <input class="form-control" type="text" value="#21212222" placeholder="PO Number">
                                </span>
                            </td>
                            <td class="tracking-no">
                                <span class="value">$498</span>
                                <span class="edit" style="display: none;">
                                    <input class="form-control" type="text" value="$498" placeholder="Tracking No">
                                </span>
                            </td>
                            <td class="subtotal">
                                <span class="value">$2</span>
                                <span class="edit" style="display: none;">
                                    <input class="form-control" type="text" value="$2" placeholder="Subtotal">
                                </span>

                            </td>
                            <td class="shipping">
                                <span class="value">$500</span>
                                <span class="edit" style="display: none;">
                                    <input class="form-control" type="text" value="$500" placeholder="Shipping">
                                </span>
                            </td>
                            <td class="total">
                                <span class="value">5</span>
                                <span class="edit" style="display: none;">
                                    <input class="form-control" type="text" value="5" placeholder="Total">
                                </span>
                            </td>
                            <td class="total-pieces">
                                <span class="value">1</span>
                                <span class="edit" style="display: none;">
                                    <input class="form-control" type="text" value="1" placeholder="Total Pieces">
                                </span>
                            </td>
                            <td class="total-places">
                                <span class="value">500</span>
                                <span class="edit" style="display: none;">
                                    <input class="form-control" type="text" value="500" placeholder="Total Place">
                                </span>
                            </td>
                            <td class="total-weight">
                                <span class="value">100kg</span>
                                <span class="edit" style="display: none;">
                                    <input class="form-control" type="text" value="100kg" placeholder="Total Weight">
                                </span>
                            </td>
                            <td class="total-boxes">
                                <span class="value">100</span>
                                <span class="edit" style="display: none;">
                                    <input class="form-control" type="text" value="100" placeholder="Total Boxes">
                                </span>
                            </td>
                            <td class="sync">
                                <span class="value">
                                    <div class="form-check">
                                        <input class="form-check-input" value="true" type="checkbox">
                                    </div>
                                </span>
                                <span class="edit" style="display: none;">
                                    <div class="form-check">
                                        <input class="form-check-input" value="true" type="checkbox">
                                    </div>
                                </span>

                            </td>
                            <td class="table-action">
                                <div class="value">
                                    <button class="btn btn-icon btn-update" data-editid="1">
                                        <svg viewBox="0 0 14 15" fill="#FFA800" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.583 9.387l2.85-.01 6.22-6.16c.245-.245.38-.57.38-.914 0-.345-.135-.67-.38-.913L10.63.365C10.14-.123 9.29-.12 8.805.364L2.583 6.526v2.86zm7.133-8.108L10.743 2.3 9.71 3.323 8.687 2.299l1.03-1.02zM3.875 7.065l3.894-3.858 1.024 1.024L4.9 8.088l-1.025.003V7.065z" fill="#FFA800" />
                                            <path d="M1.292 11.962h9.041c.713 0 1.292-.58 1.292-1.292V5.072l-1.292 1.292v4.306H3.331c-.017 0-.034.007-.05.007-.022 0-.044-.006-.065-.007H1.292V1.63h4.422L7.005.337H1.292C.579.337 0 .917 0 1.629v9.041c0 .713.58 1.292 1.292 1.292z" />
                                        </svg>
                                    </button>
                                    <button class="btn btn-icon btn-remove" data-removeid="1">
                                        <svg viewBox="0 0 14 14" fill="#FF0202" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.442 1.41L10.032 0 5.737 4.295 1.442 0 .032 1.41l4.295 4.295L.032 10l1.41 1.41 4.295-4.295 4.295 4.295 1.41-1.41-4.295-4.295 4.295-4.295z" />
                                        </svg>
                                    </button>
                                </div>

                                <div class="edit" style="display: none;">
                                    <button class="btn btn-icon btn-save-update" data-updateid="1">
                                        <svg viewBox="0 0 12 12" fill="#22B14C" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.837.06A1.604 1.604 0 00.233 1.664v7.292a1.604 1.604 0 001.604 1.604h2.479a1.232 1.232 0 01.036-.346l.132-.529H2.858V6.623a.438.438 0 01.438-.438h3.851l.837-.837a1.317 1.317 0 00-.313-.038H3.296a1.312 1.312 0 00-1.313 1.313v3.062h-.146a.73.73 0 01-.729-.73v-7.29a.73.73 0 01.73-.73h.728V2.54A1.312 1.312 0 003.88 3.852h2.625a1.312 1.312 0 001.312-1.313V.95c.21.035.404.134.556.285l1.187 1.187c.192.192.3.451.3.723v1.004c.04-.003.082-.005.123-.005h.002c.255 0 .51.051.75.153V3.144a1.897 1.897 0 00-.556-1.34L8.99.615A1.896 1.896 0 007.65.06H1.837zm1.604 2.48V.934h3.5V2.54a.437.437 0 01-.437.438H3.879a.438.438 0 01-.438-.438z" fill="#22B14C" />
                                            <path d="M9.984 4.727h-.002c-.34 0-.682.13-.942.39L5.597 8.56c-.2.201-.343.452-.412.728l-.267 1.068a.634.634 0 00.77.769l1.067-.267c.275-.069.527-.211.728-.412l3.443-3.443a1.332 1.332 0 00-.942-2.276z" />
                                        </svg>
                                    </button>
                                    <button class="btn btn-icon btn-cancel-update" data-cancelid="1">
                                        <svg viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.442 1.41L10.032 0 5.737 4.295 1.442 0 .032 1.41l4.295 4.295L.032 10l1.41 1.41 4.295-4.295 4.295 4.295 1.41-1.41-4.295-4.295 4.295-4.295z" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-order-track table-order-track-indi" id="tableAddField">
                    <tbody>
                        <tr>
                            <td class="company-name">
                                <select class="custom-select" aria-label="Default select example">
                                    <option selected disabled>Company Name</option>
                                    <option value="1">Alpha Broder</option>
                                    <option value="2">Alpha Broder</option>
                                    <option value="3">Alpha Broder</option>
                                </select>
                            </td>
                            <td class="warehouse">
                                <input class="form-control" type="text" placeholder="Warehouse">
                            </td>
                            <td class="order-number">
                                <input class="form-control" type="text" placeholder="Order Number">
                            </td>
                            <td class="po-number">
                                <input class="form-control" type="text" placeholder="PO number">
                            </td>
                            <td class="tracking-no">
                                <input class="form-control" type="text" placeholder="Tracking number">
                            </td>
                            <td class="subtotal">
                                <input class="form-control" type="text" placeholder="Subtotal">
                            </td>
                            <td class="shipping">
                                <input class="form-control" type="text" placeholder="Shipping">
                            </td>
                            <td class="total">
                                <input class="form-control" type="text" placeholder="Total">
                            </td>
                            <td class="total-pieces">
                                <input class="form-control" type="text" placeholder="Total Pieces">
                            </td>
                            <td class="total-places">
                                <input class="form-control" type="text" placeholder="Total Places">
                            </td>
                            <td class="total-weight">
                                <input class="form-control" type="text" placeholder="Total Weight">
                            </td>
                            <td class="total-boxes">
                                <input class="form-control" type="text" placeholder="Total Boxes">
                            </td>
                            <td class="sync">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td class="table-action">
                                <button class="btn btn-primary btn-new-save">Save</button>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>