<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/main.css">
    <!-- <link rel="stylesheet" href="./style/bootstrap.css"> -->
</head>

<body>
    <header>

    </header>
    <main class="new-admin order-page">
        <aside>
            <?php include('./components/sidebar/orderlist-sidebar.php') ?>
        </aside>

        <?php include('./components/main.php') ?>

        <aside>
            <?php include('./components/sidebar/log-sidebar.php') ?>
        </aside>
    </main>
    <?php include('./components/modals/OrderTrackingModal.php') ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <script>
        var tableOrderTrack = $('#tableOrderTrack');
        var tableAddField = $('#tableAddField');

        function showEditRowById(id) {
            var curRow = tableOrderTrack.find(`tr[data-rowId=${id}]`);
            curRow.find('.value').hide();
            curRow.find('.edit').show();
        }

        function hideEditRowById(id) {
            var curRow = tableOrderTrack.find(`tr[data-rowId=${id}]`);
            curRow.find('.value').show();
            curRow.find('.edit').hide();
        }

        tableOrderTrack.on('click', '.btn-update', function(e) {
            var editId = $(this).data('editid');
            console.log(editId);
            showEditRowById(editId);

        })

        // Save the current editing row
        tableOrderTrack.on('click', '.btn-save-update', function(e) {
            var updateid = $(this).data('updateid');

            // your database logic here

            hideEditRowById(updateid);
        })

        tableOrderTrack.on('click', '.btn-cancel-update', function(e) {
            var updateid = $(this).data('cancelid');

            // your database logic here
            if (confirm('Are you sure to cancel the update this row? ')) {
                hideEditRowById(updateid);
            }

        })

        function removeRowOnTable(id) {
            tableOrderTrack.find(`tr[data-rowid="${id}"]`).remove();
        }

        tableOrderTrack.on('click', '.btn-remove', function(e) {
            var removeid = $(this).data('removeid');
            console.log(removeid)
            // your database logic here

            if (confirm('Are you sure to remove this row? ')) {
                removeRowOnTable(removeid);
            }

        })


        // Add new row on on ORDER TRACKING TABLE (TOP TABLE)
        tableAddField.find('.btn-new-save').click(function() {
            var currentRow = $(this).closest('tr');
            // console.log('Hello',$(currentRow).find('.company-name select').val());
            // return;
            var companyName = currentRow.find('.company-name select').val();
            var warehouse = currentRow.find('.warehouse input').val();
            var orderNumber = currentRow.find('.order-number input').val();
            var poNumber = currentRow.find('.po-number input').val();
            var trackingNo = currentRow.find('.tracking-no input').val();
            var subtotal = currentRow.find('.subtotal input').val();
            var shipping = currentRow.find('.shipping input').val();
            var total = currentRow.find('.total input').val();
            var totalPieces = currentRow.find('.total-pieces input').val();
            var totalPlaces = currentRow.find('.total-places input').val();
            var totalWeight = currentRow.find('.total-weight input').val();
            var totalBoxes = currentRow.find('.total-boxes input').val();
            var sync = currentRow.find('.sync input').is(':checked');

            // database logic here
            addRowOnTable({
                id: 2,
                companyName,
                warehouse,
                orderNumber,
                poNumber,
                trackingNo,
                subtotal,
                shipping,
                total,
                totalPieces,
                totalPlaces,
                totalWeight,
                totalBoxes,
                sync
            })
        });

        // function that add row on Order tracking table (Top table)
        function addRowOnTable({
            id,
            companyName,
            warehouse,
            orderNumber,
            poNumber,
            trackingNo,
            subtotal,
            shipping,
            total,
            totalPieces,
            totalPlaces,
            totalWeight,
            totalBoxes,
            sync
        }) {
            console.log('Tracking', sync)
            var newRowTemplate = `
            <tr data-rowid="${id}">
                <td class="company-name">
                    <span class="value">${companyName}</span>
                    <span class="edit" style="display: none;">
                        <select class="custom-select" value="${companyName}" aria-label="Default select example">
                            <option selected disabled>Company Name</option>
                            <option value="1">Alpha Broder</option>
                            <option value="2">Alpha Broder</option>
                            <option value="3">Alpha Broder</option>
                        </select>
                    </span>
                </td>
                <td class="warehouse">
                    <span class="value">${warehouse}</span>
                    <span class="edit" style="display: none;">
                        <input class="form-control" type="text" value="${warehouse}" placeholder="Warehouse">
                    </span>
                </td>
                <td class="order-number">
                    <span class="value">${orderNumber}</span>
                    <span class="edit" style="display: none;">
                        <input class="form-control" type="text" value="${orderNumber}" placeholder="Order Number">
                    </span>
                </td>
                <td class="po-number">
                    <span class="value">${poNumber}</span>
                    <span class="edit" style="display: none;">
                    <input class="form-control" type="text" value="${poNumber}" placeholder="PO Number">
                    </span>
                </td>
                <td class="tracking-no">
                    <span class="value">${trackingNo}</span>
                    <span class="edit" style="display: none;">
                        <input class="form-control" type="text" value="${trackingNo}" placeholder="Tracking No">
                    </span>
                </td>
                <td class="subtotal">
                    <span class="value">${subtotal}</span>
                    <span class="edit" style="display: none;">
                        <input class="form-control" type="text" value="${subtotal}" placeholder="Subtotal">
                    </span>
                    
                </td>
                <td class="shipping">
                    <span class="value">${shipping}</span>
                    <span class="edit" style="display: none;">
                    <input class="form-control" type="text" value="${shipping}" placeholder="Shipping">
                    </span>
                </td>
                <td class="total">
                    <span class="value">${total}</span>
                    <span class="edit" style="display: none;">
                        <input class="form-control" type="text" value="${total}" placeholder="Total">
                    </span>
                </td>
                <td class="total-pieces">
                    <span class="value">${totalPieces}</span>
                    <span class="edit" style="display: none;">
                        <input class="form-control" type="text" value="${totalPieces}" placeholder="Total Pieces">
                    </span>
                </td>
                <td class="total-places">
                    <span class="value">${totalPlaces}</span>
                    <span class="edit" style="display: none;">
                        <input class="form-control" type="text" value="${totalPlaces}" placeholder="Total Place">
                    </span>
                </td>
                <td class="total-weight">
                    <span class="value">${totalWeight}</span>
                    <span class="edit" style="display: none;">
                        <input class="form-control" type="text" value="${totalWeight}" placeholder="Total Weight">
                    </span>
                </td>
                <td class="total-boxes">
                    <span class="value">${totalBoxes}</span>
                    <span class="edit" style="display: none;">
                        <input class="form-control" type="text" value="${totalBoxes}" placeholder="Total Boxes">
                    </span>
                </td>
                <td class="sync">
                    <span class="value">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" ${sync ? 'checked': ''}>
                        </div>
                    </span>
                    <span class="edit" style="display: none;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" ${sync ? 'checked': ''}>
                        </div>
                    </span>

                </td>
                <td class="table-action">
                    <div class="value">
                        <button class="btn btn-icon btn-update" data-editid="${id}">
                            <svg viewBox="0 0 14 15" fill="#FFA800" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.583 9.387l2.85-.01 6.22-6.16c.245-.245.38-.57.38-.914 0-.345-.135-.67-.38-.913L10.63.365C10.14-.123 9.29-.12 8.805.364L2.583 6.526v2.86zm7.133-8.108L10.743 2.3 9.71 3.323 8.687 2.299l1.03-1.02zM3.875 7.065l3.894-3.858 1.024 1.024L4.9 8.088l-1.025.003V7.065z" fill="#FFA800" />
                                <path d="M1.292 11.962h9.041c.713 0 1.292-.58 1.292-1.292V5.072l-1.292 1.292v4.306H3.331c-.017 0-.034.007-.05.007-.022 0-.044-.006-.065-.007H1.292V1.63h4.422L7.005.337H1.292C.579.337 0 .917 0 1.629v9.041c0 .713.58 1.292 1.292 1.292z" />
                            </svg>
                        </button>
                        <button class="btn btn-icon btn-remove" data-removeid="${id}">
                            <svg viewBox="0 0 14 14" fill="#FF0202" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.442 1.41L10.032 0 5.737 4.295 1.442 0 .032 1.41l4.295 4.295L.032 10l1.41 1.41 4.295-4.295 4.295 4.295 1.41-1.41-4.295-4.295 4.295-4.295z" />
                            </svg>
                        </button>
                    </div>

                    <div class="edit" style="display: none;">
                        <button class="btn btn-icon btn-save-update" data-updateid="${id}">
                                <svg viewBox="0 0 12 12" fill="#22B14C" xmlns="http://www.w3.org/2000/svg"><path d="M1.837.06A1.604 1.604 0 00.233 1.664v7.292a1.604 1.604 0 001.604 1.604h2.479a1.232 1.232 0 01.036-.346l.132-.529H2.858V6.623a.438.438 0 01.438-.438h3.851l.837-.837a1.317 1.317 0 00-.313-.038H3.296a1.312 1.312 0 00-1.313 1.313v3.062h-.146a.73.73 0 01-.729-.73v-7.29a.73.73 0 01.73-.73h.728V2.54A1.312 1.312 0 003.88 3.852h2.625a1.312 1.312 0 001.312-1.313V.95c.21.035.404.134.556.285l1.187 1.187c.192.192.3.451.3.723v1.004c.04-.003.082-.005.123-.005h.002c.255 0 .51.051.75.153V3.144a1.897 1.897 0 00-.556-1.34L8.99.615A1.896 1.896 0 007.65.06H1.837zm1.604 2.48V.934h3.5V2.54a.437.437 0 01-.437.438H3.879a.438.438 0 01-.438-.438z" fill="#22B14C"/><path d="M9.984 4.727h-.002c-.34 0-.682.13-.942.39L5.597 8.56c-.2.201-.343.452-.412.728l-.267 1.068a.634.634 0 00.77.769l1.067-.267c.275-.069.527-.211.728-.412l3.443-3.443a1.332 1.332 0 00-.942-2.276z" /></svg>
                        </button>
                        <button class="btn btn-icon btn-cancel-update" data-cancelid="${id}">
                            <svg viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.442 1.41L10.032 0 5.737 4.295 1.442 0 .032 1.41l4.295 4.295L.032 10l1.41 1.41 4.295-4.295 4.295 4.295 1.41-1.41-4.295-4.295 4.295-4.295z" />
                            </svg>
                        </button>
                    </div>
                </td>
            </tr>
            `
            tableOrderTrack.find('tbody').append(newRowTemplate)
        }

        var addFieldBtn = $('#addFieldBtn');


        function addFieldRow() {
            var fieldRowTemplate = `
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
            `

            tableAddField.find('tbody').append(fieldRowTemplate)
        }

        // Add empty fields on FIELD TABLE (BOTTOM TABLE)
        addFieldBtn.click(function() {
            var currentRow = $(this).closest('tr');
            var companyName = currentRow.find('.company-name select').val();
            console.log(companyName)
    
            addFieldRow();
        })
    </script>

</body>

</html>