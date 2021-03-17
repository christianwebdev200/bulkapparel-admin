<div class="card">
    <div class="card-body">
        <div class="card-header py-0">
            <h5 class="card-title mr-auto">
                Alerts
            </h5>
        </div>
        <?php
        $alert = "Phone and/or email is associated with an order marked as <b>Fraud</b>";
        $badge = "Fraud";
        $type = "danger";
        $time = "3/7/2021, 06:04:24 PM";
        include('./components/cards/AlertCard.php') ?>
        <?php
        $alert = "<b>Order is sent to EDI.</b>";
        $badge = "";
        $type = "success";
        $time = "2/7/2021, 10:04:24 PM";
        include('./components/cards/AlertCard.php') ?>
    </div>
</div>