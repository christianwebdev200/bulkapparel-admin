 <?php
$logName = "Alpha Border";
$done = true;
$badge = "In Progress";
$PONo = "BULK-960720";
$shipping = "19.34";
$total = "24.08000";
$shipMethod = "";
$shipDate = "0000-00-00 00:00:00";
$orderDate = "2021-03-07 22:04:24";
$weight = "0.000000";
$totalPieces = "3";
$totalLine = "3";
$totalBoxes = "3";
$trackingNumber = "1Z302E48020605290";
$add = "0000-00-00 00:00:00";
    ?>
 <div class="card card--logs">
     <div class="card-body">
         <div class="card-header">
             <div class="card-title"><?php echo $logName ?></div>
             <span class="badge badge-pill badge-warning ml-2"><?php echo $badge ?></span>
             <?php if ($done) : ?>
                 <span class="ml-auto card--logs__check">
                     <svg width="21" height="20" viewBox="0 0 21 20" fill="#000" xmlns="http://www.w3.org/2000/svg">
                         <path d="M10.45.086C5.075.086.718 4.444.718 9.82c0 5.374 4.357 9.732 9.732 9.732 5.375 0 9.733-4.358 9.733-9.732 0-5.375-4.358-9.733-9.733-9.733zm4.204 6.554l-4.575 6.344a.69.69 0 01-1.124 0L6.246 9.23a.174.174 0 01.142-.276h1.019c.221 0 .432.107.562.29l1.547 2.146 3.415-4.736a.695.695 0 01.563-.29h1.019c.14 0 .223.161.14.276z" />
                     </svg>
                 </span>
             <?php endif; ?>
         </div>

         <div class="card--logs__content">
             <p>
                 <span class="text">PO No.</span>
                 <span class="value ml-auto"><?php echo $PONo ?></span>
             </p>
             <p>
                 <span class="text">Shipping</span>
                 <span class="value ml-auto"><?php echo $shipping ?>4</span>
             </p>
             <p>
                 <span class="text">Total</span>
                 <span class="value ml-auto"><?php echo $total ?></span>
             </p>
             <p>
                 <span class="text">Ship Method</span>
                 <span class="value ml-auto"><?php echo $shipMethod ?></span>
             </p>
             <p>
                 <span class="text">Ship Date</span>
                 <span class="value ml-auto"><?php echo $shipDate ?>0</span>
             </p>
             <p>
                 <span class="text">Order Date</span>
                 <span class="value ml-auto"><?php echo $orderDate ?>4</span>
             </p>
             <p>
                 <span class="text">Weight</span>
                 <span class="value ml-auto"><?php echo $weight ?>0</span>
             </p>
             <p>
                 <span class="text">Total Pieces</span>
                 <span class="value ml-auto"><?php echo $totalPieces ?>3</span>
             </p>
             <p>
                 <span class="text">Total Line</span>
                 <span class="value ml-auto"><?php echo $totalLine ?>3</span>
             </p>
             <p>
                 <span class="text">Total Boxes</span>
                 <span class="value ml-auto"><?php echo $totalBoxes ?></span>
             </p>
             <p>
                 <span class="text">Tracking Numbers</span>
                 <span class="value ml-auto"><?php echo $trackingNumber ?></span>
             <p>
                 <span class="text">ADD</span>
                 <span class="value ml-auto"><?php echo $add ?>0</span>
             </p>
         </div>
         <div class="card-action d-flex">
             <button class="btn btn--flat-primary">View Products</button>
             <button class="btn btn--flat-primary ml-auto">Send Track</button>
         </div>
     </div>

 </div>
 <?php?>