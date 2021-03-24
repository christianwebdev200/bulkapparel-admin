<?php
$edit = false;
?>
<tr>
    <td class="details" scope="col">
        <div class="details-main">
            <div class="details-main__action">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="row-1">
                    <label class="custom-control-label" for="row-1"></label>
                </div>
            </div>
            <div class="details-main__image">
                <img src="./assets/images/shirtt.jpg" alt="">
            </div>

            <div class="details-main__info">
                <h6>Gildan 5000 Heavy Cotton T-Shirts in bulk</h6>
                <div class="text-value-row align-items-center">
                    <p class="text">
                        Color:
                    </p>
                    <?php if ($edit) : ?>
                        <?php
                        include('./components/picker/Select.php'); ?>
                    <?php else : ?>
                        <p class="value"><b>White</b></p>
                    <?php endif ?>
                </div>
                <div class="text-value-row align-items-center">
                    <p class="text">
                        Size:
                    </p>
                    <?php if ($edit) : ?>
                        <?php
                        include('./components/picker/Select.php'); ?>
                    <?php else : ?>
                        <p class="value"><b>XL</b></p>
                    <?php endif ?>
                </div>
                <div class="text-value-row">
                    <p class="text">
                        Estimated Delivery:
                    </p>
                    <p><b>1-3 Bussiness Days</b></p>
                </div>


                <div class="details-main__more text--primary">
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
                <div class="details-main__more text--danger">
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
        </div>
    </td>
    <td class="price" scope="col">
        <div class="price-content">
            <span><b>$</b></span>
            <span class="price-content__value"><b>3.96</b></span>
            <input class="form-control price-content__input" type="text" class="form-control" value="3.96">
        </div>
    </td>
    <td class="quantity" scope="col">
        <div class="quantity-content">
            <span class="quantity-content__value"><b>8</b> </span>
            <input class="form-control quantity-content__input" type="text" class="form-control" value="3.96">
        </div>
    </td>
    <td class="total" scope="col"><b>$31.68</b></td>
    <td class="remove" scope="col"><button class="btn btn-outline-danger px-1 py-0">×</button></td>
</tr>