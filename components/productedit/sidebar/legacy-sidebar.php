<div class="ob-list">
      <?php

      $msg = get_flashmsg('flsh_msg');
      print($msg);
      ?>
      <style>
        .ob-list ul li.selected {
          background: #f9f9f9;
        }
      </style>
      <?php echo form_open('', array('class' => 'rowsfilter', 'id' => 'customfrmid')); ?>

      <div class="ob-list-control ob-list-control-ctrl">
       
        <h3>All Styles <span> (Products style listing) </span></h3>
        <!--adjust product edit view | WL 11/23/2021 -->

        <div class="ob-search">
          <input class="form-control" placeholder="Search..." id="srchtext" name="srchtext" value="" type="text">
          <a href="javascript:void(0);" id="btnSearch">Search</a>
        </div>
        <div class="d-flex flex-wrap mb-3">
           <div class="btn btn-dark px-1 py-1 mb-2 mr-2">Sub Categories</div>
           <div class="btn btn-dark px-1 py-1 mb-2 mr-2">Main Categories</div>
           <div class="btn btn-dark px-1 py-1 mb-2 mr-2">Brands</div>
        </div>
        <div class="ob-ctrl">
          <!--<input type="checkbox" name="selectall" id="select1" class="cpncheckbox" value="selectall" />-->
          <?php /*?><a href="javascript:void(0);" id="exportcouponid"><img src="<?php echo base_url('public/admin/images/export.png');?>" alt="export"></a><?php */ ?>

        </div>

       

      </div>
      <ul id="cgetdataid">
        <?php if (isset($results) && !empty($results)) { ?>

          <?php

          $k = 1;
          $position = 100;
          foreach ($results as $key => $data) :

            $desc = strip_tags($data->description);
            //$description1 = substr($desc, 0, $position); 




            if (strlen($desc) > 50) {

              // truncate string
              $stringCut = substr($desc, 0, 50);

              // make sure it ends in a word so assassinate doesn't become ass...
              $desc = substr($stringCut, 0, strrpos($stringCut, ' ')) . '...';
            }


            echo '<li>';


          ?>
            <div class="ob-check">
              <?php /*?> <input type="checkbox" id="chkIds" name="chkIds[]" class="checkbox" value="<?php echo $data->styleID;?>"/><?php */ ?>
            </div>
            <!-- Start - Product edit layout adjustment and thumbnail - CL - 10/22/2021 -->
            <div class="ob-list-info product-style-item">
              <!-- Start - Product edit layout adjustment and thumbnail - RM - 10/22/2021 -->
              <div class="ob-image">
                <?php
                if (!empty($data->colorFrontImage)) {
                  $fileName = str_replace('Images/Color/', '', $data->colorFrontImage);
                  $image_path = 'https://' . $_SERVER['HTTP_HOST'] . '/image/thumbnail/' . $fileName;
                  echo '<img src="' . $image_path . '" alt="' . $data->customTitle . '" height="290" width="232" loading="lazy"/>';
                } else if ($data->styleImageStatus == 1) {

                  if (!empty($data->cpmodelImage)) {
                    $fileName = str_replace('Images/Color/', '', $data->cpmodelImage);
                    $image_path = 'https://' . $_SERVER['HTTP_HOST'] . '/image/thumbnail/' . $fileName;
                    echo '<img src="' . $image_path . '" alt="' . $data->customTitle . '" height="290" width="232" loading="lazy"/>';
                  }
                } else {
                  if (!empty($data->styleImage)) {
                    $fileName = str_replace('Images/Style/', '', $data->styleImage);
                    $image_path = 'https://' . $_SERVER['HTTP_HOST'] . '/image/thumbnail/' . $fileName;
                    echo '<img src="' . $image_path . '" alt="' . $data->customTitle . '" height="290" width="232" loading="lazy"/>';
                  }
                }
                ?>
              </div>

              <div class="ob-body">
                <!-- End - Product edit layout adjustment and thumbnail - RM - 10/22/2021 -->
                <div class="ob-list-row">
                  <a href="javascript:void(0);" class="pro-style-name viewstyleid" data-sid="<?php echo $data->styleID; ?>"><?php echo $data->styleName; ?></a>
                  <div class="pro-style-brand"><?php echo $data->brandName; ?></div>
                </div>
                <div class="ob-list-row-1">
                  <?php echo $desc; ?>
                </div>
                <div class="ob-list-row-1">
                  <div class="ob-list-info-number">
                    <a href="javascript:void(0);" class="viewstyleid" data-sid="<?php echo $data->styleID; ?>"><?php echo $data->styleID; ?></a>
                    pop:<?php echo $data->bestsellerrank; ?>
                  </div> <!-- Start - Product edit layout adjustment and thumbnail - RM - 10/22/2021 -->
                  <div class="ob-list-info-status"><span class="num"><?php echo SYMBOL . $data->pPrice; ?></span> </div>
                </div>
              </div>
              <!-- End - Product edit layout adjustment and thumbnail - CL - 10/22/2021 -->
            </div>
            </li>
          <?php
            $k++;
          endforeach; ?>


        <?php } ?>


      </ul>
    </div>