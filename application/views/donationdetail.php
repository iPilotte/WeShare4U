<html>
<body class="weshare">
  <div class="container-fluid news">
    <div class="container">
      <h3>Donation Detail</h3>
      <hr />
      <div class="row">
        <div class="col-md-6" align="center">
          <img src="<?php echo base_url($shoe['imurl']); ?>" class="img-rounded" height="300" width="350" alt="Donation Image">
        </div>
        <div class="col-md-5">
          <b>
          <p>Name : <?php echo $shoe['name']; ?></p>
          <p>Detail : <?php echo $shoe['detail'];/*str_replace(["\r\n", "\r", "\n"],'<br />',$shoe['detail']);*/ ?></p>
          <p>Gender : <?php echo $shoe['gender']; ?></p>
          <p>Type : <?php echo str_replace("_"," & ",$shoe['type']); ?></p>
          <p>Size : <?php echo $shoe['size'] . "  " . $shoe['sizeType']; ?></p>
          <p>Color : <?php echo $shoe['color']; ?></p>
          <p>Amount : <?php echo $shoe['amount']; ?> Pair(s)</p>
          <p>Shipping Method : <?php if($shoe['shipmethod']=='post') echo 'Post/Mail';
          if($shoe['shipmethod']=='company') echo 'Weshare Company';
          if($shoe['shipmethod']=='appointment') echo 'Appointment';
           ?></p>
          <?php if($shoe['shipmethod'] == 'appointment'){
            echo '<p>Appointment place : '. $shoe['shipaddress'] .'</p>';
          } ?>
          </b>
          <br>

          <div class="row">
            <div class="col-md-2">
              <a class="btn btn-wonder" id="editDonate" name="editDonate" href="<?php echo base_url("index.php/Donation/Edit/") ?>">Edit</a>

            </div>
            <div class="col-md-3">
              <a class="btn btn-wonder" id="moreDonate" name="moreDonate" href="<?php echo base_url("index.php/Donation") ?>">Donate More</a>
            </div>
        </div>
          </div>
        </div>
        <hr>
    </div>
  </body>
</html>
