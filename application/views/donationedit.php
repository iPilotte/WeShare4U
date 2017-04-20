<body class="weshare">
  <div class="container-fluid news">
    <div class="container">
      <h3>Edit Donation</h3>
      <hr />

      <div class="row">
      <?php $attributes = array("name" => "DonationEdit_Form", "id" => "DonationEdit_Form" , "class" => "form-horizontal");
                echo form_open_multipart("Donation/editShoe", $attributes);?>

          <div class="col-md-2" style="position:relative;text-align:center" >
            <img class="img-rounded" id="previewDonation_img" src="<?php echo base_url($shoe['imurl']); ?>" alt="Preview Img" height="250" width="300" />
          </div>

          <div class="col-md-10">

<!-- Choose File -->
          <div class="form-group">
              <label for="upLoadPhoto" class="col-md-3 control-label" color="green">Photo</label>
            <div class="col-md-5">
              <input type="file" class="form-control" id="imgFile" name="imgFile">
           </div>
           <div class="col-md-3" id="imgFile-alert-msg"><h5>Max : 4MB & 4096px*4096px</h5></div>
        </div>

<!-- Name -->
        <div class="form-group">
          <label for="inputName" class="col-md-3 control-label">Name</label>
          <div class="col-md-5">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $shoe['name']; ?>">
          </div>
          <div class="col-md-3" id="name-alert-msg"></div>
        </div>

<!-- Detail -->
        <div class="form-group">
          <label for="Detail" class="col-md-3 control-label">Detail</label>
          <div class="col-md-5">
            <textarea class="form-control" name="detail" id="detail" placeholder="Detail"><?php echo $shoe['detail']; ?></textarea>
          </div>
          <div class="col-md-3" id="detail-alert-msg"></div>
        </div>

<!-- Gender -->
        <div class="form-group">
          <label for="inputName" class="col-md-3 control-label">Gender</label>
          <div class="col-md-5">
            <select class="form-control selectpicker" name="gender" id="gender" placeholder="Gender">

              <option value="Men" <?php if($shoe['gender']=='Men') echo ' selected'; ?> >Men</option>
              <option value="Women" <?php if($shoe['gender']=='Women') echo ' selected'; ?> >Women</option>
              <option value="Boys" <?php if($shoe['gender']=='Boys') echo ' selected'; ?> >Boys</option>
              <option value="Girls" <?php if($shoe['gender']=='Girls') echo ' selected'; ?> >Girls</option>
              <option value="Baby" <?php if($shoe['gender']=='Baby') echo ' selected'; ?> >Baby</option>

            </select>
          </div>
          <div class="col-md-3" id="gender-alert-msg"></div>
        </div>

<!-- Type -->
       <div class="form-group">
          <label for="inputType" class="col-md-3 control-label">Type</label>
          <div class="col-md-5">
            <select class="form-control selectpicker" name="type" id="type">

              <optgroup id="menType" label="-- MEN --"  <?php if($shoe['type']!='Men') echo 'style="display:none"'; ?> >
                <option value="Athletic"  <?php if(($shoe['type']=='Athletic') && ($shoe['gender']=='Men')) echo 'selected'; ?>>Athletic</option>
                <option value="Boots" <?php if(($shoe['type']=='Boots') && ($shoe['gender']=='Men')) echo 'selected'; ?>>Boots</option>
                <option value="Fashion Sneakers" <?php if(($shoe['type']=='Fashion Sneakers') && ($shoe['gender']=='Men')) echo 'selected'; ?>>Fashion Sneakers</option>
                <option value="Loafers_Slip-Ons" <?php if(($shoe['type']=='Loafers_Slip-Ons') && ($shoe['gender']=='Men')) echo 'selected'; ?>>Loafers & Slip-Ons</option>
                <option value="Mules_Clogs" <?php if(($shoe['type']=='Mules_Clogs') && ($shoe['gender']=='Men')) echo 'selected'; ?>>Mules & Clogs</option>
                <option value="Outdoor" <?php if(($shoe['type']=='Outdoor') && ($shoe['gender']=='Men')) echo 'selected'; ?>>Outdoor</option>
                <option value="Oxfords" <?php if(($shoe['type']=='Oxfords') && ($shoe['gender']=='Men')) echo 'selected'; ?>>Oxfords</option>
                <option value="Sandals" <?php if(($shoe['type']=='Sandals') && ($shoe['gender']=='Men')) echo 'selected'; ?>>Sandals</option>
                <option value="Slippers" <?php if(($shoe['type']=='Slippers') && ($shoe['gender']=='Men')) echo 'selected'; ?>>Slippers</option>
                <option value="Work_Safety" <?php if(($shoe['type']=='Work_Safety') && ($shoe['gender']=='Men')) echo 'selected'; ?>>Work & Safety</option>
              </optgroup>

              <optgroup id="womenType" label="-- WOMEN --" <?php if($shoe['gender']!='Women') echo 'style="display:none"'; ?> >
                  <option value="Athletic" <?php if(($shoe['type']=='Athletic') && ($shoe['gender']=='Women')) echo 'selected'; ?>>Athletic</option>
                  <option value="Boots" <?php if(($shoe['type']=='Boots') && ($shoe['gender']=='Women')) echo 'selected'; ?>>Boots</option>
                  <option value="Fashion Sneakers" <?php if(($shoe['type']=='Fashion Sneakers') && ($shoe['gender']=='Women')) echo 'selected'; ?>>Fashion Sneakers</option>
                  <option value="Flats" <?php if(($shoe['type']=='Flats') && ($shoe['gender']=='Women')) echo 'selected'; ?>>Flats</option>
                  <option value="Loafers_Slip-Ons" <?php if(($shoe['type']=='Loafers_Slip-Ons') && ($shoe['gender']=='Women')) echo 'selected'; ?>>Loafers & Slip-Ons</option>
                  <option value="Mules_Clogs" <?php if(($shoe['type']=='Mules_Clogs') && ($shoe['gender']=='Women')) echo 'selected'; ?>>Mules & Clogs</option>
                  <option value="Outdoor" <?php if(($shoe['type']=='Outdoor') && ($shoe['gender']=='Women')) echo 'selected'; ?>>Outdoor</option>
                  <option value="Oxfords" <?php if(($shoe['type']=='Oxfords') && ($shoe['gender']=='Women')) echo 'selected'; ?>>Oxfords</option>
                  <option value="Pumps" <?php if(($shoe['type']=='Pumps') && ($shoe['gender']=='Women')) echo 'selected'; ?>>Pumps</option>
                  <option value="Sandals" <?php if(($shoe['type']=='Sandals') && ($shoe['gender']=='Women')) echo 'selected'; ?>>Sandals</option>
                  <option value="Slippers" <?php if(($shoe['type']=='Slippers') && ($shoe['gender']=='Women')) echo 'selected'; ?>>Slippers</option>
                  <option value="Work_Safety" <?php if(($shoe['type']=='Work_Safety') && ($shoe['gender']=='Women')) echo 'selected'; ?>>Work & Safety</option>
              </optgroup>

              <optgroup id="boysType" label="-- BOYS --" <?php if($shoe['gender']!='Boys') echo 'style="display:none"'; ?> >
                <option value="Athletic" <?php if(($shoe['type']=='Athletic') && ($shoe['gender']=='Boys')) echo 'selected'; ?>>Athletic</option>
                <option value="Boots" <?php if(($shoe['type']=='Boots') && ($shoe['gender']=='Boys')) echo 'selected'; ?>>Boots</option>
                <option value="Clogs_Mules" <?php if(($shoe['type']=='Clogs_Mules') && ($shoe['gender']=='Boys')) echo 'selected'; ?>>Clogs & Mules</option>
                <option value="Loafers" <?php if(($shoe['type']=='Loafers') && ($shoe['gender']=='Boys')) echo 'selected'; ?>>Loafers</option>
                <option value="Outdoor" <?php if(($shoe['type']=='Outdoor') && ($shoe['gender']=='Boys')) echo 'selected'; ?>>Outdoor</option>
                <option value="Oxfords" <?php if(($shoe['type']=='Oxfords') && ($shoe['gender']=='Boys')) echo 'selected'; ?>>Oxfords</option>
                <option value="Sandals" <?php if(($shoe['type']=='Sandals') && ($shoe['gender']=='Boys')) echo 'selected'; ?>>Sandals</option>
                <option value="Slippers" <?php if(($shoe['type']=='Slippers') && ($shoe['gender']=='Boys')) echo 'selected'; ?>>Slippers</option>
                <option value="Sneakers" <?php if(($shoe['type']=='Sneakers') && ($shoe['gender']=='Boys')) echo 'selected'; ?>>Sneakers</option>
              </optgroup>

              <optgroup id="girlsType" label="-- GIRLS --" <?php if($shoe['gender']!='Girls') echo 'style="display:none"'; ?> >
                <option value="Athletic" <?php if(($shoe['type']=='Athletic') && ($shoe['gender']=='Girls')) echo 'selected'; ?>>Athletic</option>
                <option value="Boots" <?php if(($shoe['type']=='Boots') && ($shoe['gender']=='Girls')) echo 'selected'; ?>>Boots</option>
                <option value="Clogs_Mules" <?php if(($shoe['type']=='Clogs_Mules') && ($shoe['gender']=='Girls')) echo 'selected'; ?>>Clogs & Mules</option>
                <option value="Flats" <?php if(($shoe['type']=='Flats') && ($shoe['gender']=='Girls')) echo 'selected'; ?>>Flats</option>
                <option value="Loafers" <?php if(($shoe['type']=='Loafers') && ($shoe['gender']=='Girls')) echo 'selected'; ?>>Loafers</option>
                <option value="Outdoor" <?php if(($shoe['type']=='Outdoor') && ($shoe['gender']=='Girls')) echo 'selected'; ?>>Outdoor</option>
                <option value="Oxfords" <?php if(($shoe['type']=='Oxfords') && ($shoe['gender']=='Girls')) echo 'selected'; ?>>Oxfords</option>
                <option value="Sandals" <?php if(($shoe['type']=='Sandals') && ($shoe['gender']=='Girls')) echo 'selected'; ?>>Sandals</option>
                <option value="Slippers" <?php if(($shoe['type']=='Slippers') && ($shoe['gender']=='Girls')) echo 'selected'; ?>>Slippers</option>
                <option value="Sneakers" <?php if(($shoe['type']=='Sneakers') && ($shoe['gender']=='Girls')) echo 'selected'; ?>>Sneakers</option>
              </optgroup>

              <optgroup id="babyType" label="--   BABY --" <?php if($shoe['gender']!='Baby') echo 'style="display:none"'; ?>>
                <option value="Athletic_Outdoor" <?php if(($shoe['type']=='Athletic_Outdoor') && ($shoe['gender']=='Baby')) echo 'selected'; ?>>Athletic & Outdoor</option>
                <option value="Boots" <?php if(($shoe['type']=='Boots') && ($shoe['gender']=='Baby')) echo 'selected'; ?>>Boots</option>
                <option value="Clogs_Mules" <?php if(($shoe['type']=='Clogs_Mules') && ($shoe['gender']=='Baby')) echo 'selected'; ?>>Clogs & Mules</option>
                <option value="Flats" <?php if(($shoe['type']=='Flats') && ($shoe['gender']=='Baby')) echo 'selected'; ?>>Flats</option>
                <option value="Sandals" <?php if(($shoe['type']=='Sandals') && ($shoe['gender']=='Baby')) echo 'selected'; ?>>Sandals</option>
                <option value="Slippers" <?php if(($shoe['type']=='Slippers') && ($shoe['gender']=='Baby')) echo 'selected'; ?>>Slippers</option>
                <option value="Sneakers" <?php if(($shoe['type']=='Sneakers') && ($shoe['gender']=='Baby')) echo 'selected'; ?>>Sneakers</option>
              </optgroup>

          </select>
            <div class="col-md-3" id="type-alert-msg"></div>
          </div>
        </div>

<!-- Size -->
        <div class="form-group">
          <label for="inputName" class="col-md-3 control-label">Size</label>
          <div class="col-md-3">
            <input type="number" step="0.1" min="1" class="form-control" id="size" name="size" placeholder="Size" value="<?php echo $shoe['size']; ?>">
          </div>
          <div class="col-md-2">
            <select class="form-control selectpicker" name="sizeType" id="sizeType">
                <option value="US" <?php if($shoe['sizeType']=='US') echo 'selected'; ?>>US</option>
                <option value="EUR" <?php if($shoe['sizeType']=='EUR') echo 'selected'; ?>>EUR</option>
                <option value="CM" <?php if($shoe['sizeType']=='CM') echo 'selected'; ?>>CM</option>
              </select>
          </div>
          <div class="form-group col-md-1 sizeChart" style="text-align:center">
            <h5><a data-toggle="modal" data-target="#sizeChartModal" name="sizeChart">SizeChart</a></h5>
          </div>
          <!--<div class="col-md-1">
            SizeChart
          </div>-->
          <div class="col-md-3" id="size-alert-msg" style="margin-left:10px"></div>
        </div>

<!-- Amount -->
        <div class="form-group">
          <label for="inputAmount" class="col-md-3 control-label">Amount</label>
          <div class="col-md-5">
            <input type="number" min="1" class="form-control" id="amount" name="amount" placeholder="Amount  : Pair(s)" value="<?php echo $shoe['amount']; ?>">
          </div>
          <div class="col-md-3" id="amount-alert-msg"></div>
        </div>

<!-- Color -->
        <div class="form-group">
          <label for="selectColor" class="col-md-3 control-label">Color</label>
          <div class="col-md-2">
            <select class="form-control selectpicker" name="color" id="color" placeholder="Color#1">

              <option value="Black" <?php if(explode('/',$shoe['color'])[0] == 'Black') echo 'selected'; ?>>Black</option>
              <option value="White" <?php if(explode('/',$shoe['color'])[0] == 'White') echo 'selected'; ?>>White</option>
              <option value="Gray" <?php if(explode('/',$shoe['color'])[0] == 'Gray') echo 'selected'; ?>>Gray</option>
              <option value="Red" <?php if(explode('/',$shoe['color'])[0] == 'Red') echo 'selected'; ?>>Red</option>
              <option value="Green" <?php if(explode('/',$shoe['color'])[0] == 'Green') echo 'selected'; ?>>Green</option>
              <option value="Blue" <?php if(explode('/',$shoe['color'])[0] == 'Blue') echo 'selected'; ?>>Blue</option>
              <option value="Pink" <?php if(explode('/',$shoe['color'])[0] == 'Pink') echo 'selected'; ?>>Pink</option>
              <option value="Yellow" <?php if(explode('/',$shoe['color'])[0] == 'Yellow') echo 'selected'; ?>>Yellow</option>
              <option value="Brown" <?php if(explode('/',$shoe['color'])[0] == 'Brown') echo 'selected'; ?>>Brown</option>
              <option value="Violet" <?php if(explode('/',$shoe['color'])[0] == 'Violet') echo 'selected'; ?>>Violet</option>
              <option value="Orange" <?php if(explode('/',$shoe['color'])[0] == 'Orange') echo 'selected'; ?>>Orange </option>
             <option value="Metallic" <?php if(explode('/',$shoe['color'])[0] == 'Metallic') echo 'selected'; ?>>Metallic</option>

            </select>
          </div>
          <div class="col-md-3">
            <select class="form-control selectpicker" name="color2" id="color2" placeholder="Color#2">

              <option value="">Choose second color</option>
              <option value="Black" <?php if(isset(explode('/',$shoe['color'])[1])) {if (explode('/',$shoe['color'])[1] == 'Black') echo 'selected';} ?>>Black</option>
              <option value="White" <?php if(isset(explode('/',$shoe['color'])[1])) {if (explode('/',$shoe['color'])[1] == 'White') echo 'selected';} ?>>White</option>
              <option value="Gray" <?php if(isset(explode('/',$shoe['color'])[1])) {if (explode('/',$shoe['color'])[1] == 'Gray') echo 'selected';} ?>>Gray</option>
              <option value="Red" <?php if(isset(explode('/',$shoe['color'])[1])) {if (explode('/',$shoe['color'])[1] == 'Red') echo 'selected';} ?>>Red</option>
              <option value="Green" <?php if(isset(explode('/',$shoe['color'])[1])) {if (explode('/',$shoe['color'])[1] == 'Green') echo 'selected';} ?>>Green</option>
              <option value="Blue" <?php if(isset(explode('/',$shoe['color'])[1])) {if (explode('/',$shoe['color'])[1] == 'Blue') echo 'selected';} ?>>Blue</option>
              <option value="Pink" <?php if(isset(explode('/',$shoe['color'])[1])) {if (explode('/',$shoe['color'])[1] == 'Pink') echo 'selected';} ?>>Pink</option>
              <option value="Yellow" <?php if(isset(explode('/',$shoe['color'])[1])) {if (explode('/',$shoe['color'])[1] == 'Yellow') echo 'selected';} ?>>Yellow</option>
              <option value="Brown" <?php if(isset(explode('/',$shoe['color'])[1])) {if (explode('/',$shoe['color'])[1] == 'Brown') echo 'selected';} ?>>Brown</option>
              <option value="Violet" <?php if(isset(explode('/',$shoe['color'])[1])) {if (explode('/',$shoe['color'])[1] == 'Violet') echo 'selected';} ?>>Violet</option>
              <option value="Orange" <?php if(isset(explode('/',$shoe['color'])[1])) {if (explode('/',$shoe['color'])[1] == 'Orange') echo 'selected';} ?>>Orange </option>
             <option value="Metallic" <?php if(isset(explode('/',$shoe['color'])[1])) {if (explode('/',$shoe['color'])[1] == 'Metallic') echo 'selected';} ?>>Metallic</option>

            </select>
          </div>
          <div class="col-md-3" id="color-alert-msg"></div>
        </div>

<!-- Sending -->
        <div class="form-group">
          <label for="Sending" class="col-md-3 control-label">Shipping Method</label>
          <div class="col-md-5" class="form-group">
            <div class="container">
              <label class="radio-inline control-label"><input type="radio" name="shippingMethod" id="shippingMethod" value="post" <?php if($shoe['shipmethod']=='post') echo 'checked'; ?>>Post/Mail</label>
              <label class="radio-inline control-label"><input type="radio" name="shippingMethod" id="shippingMethod" value="company" <?php if($shoe['shipmethod']=='company') echo 'checked'; ?>>Weshare Company</label>
              <label class="radio-inline control-label"><input type="radio" name="shippingMethod" id="shippingMethod" value="appointment" <?php if($shoe['shipmethod']=='appointment') echo 'checked'; ?>>Appointment</label>
            </div>
            <br>
            <textarea class="form-control" name="shippingAddress" id="shippingAddress" placeholder="Appointment Place" <?php if($shoe['shipmethod']!='appointment') echo 'style="display: none;"'; ?> ><?php if($shoe['shipmethod']=='appointment') echo $shoe['shipaddress']; ?></textarea>
          </div>
          <div class="col-md-3" id="shippingaddress-alert-msg"></div>
        </div>

        <div class="form-group" style="text-align:center;">
          <div class="col-md-12">
            <input type="submit" class="btn btn-wonder" name="donationSubmit" id="donationSubmit" value="Edit"></input>
          </div>
        </div>
        </div>
        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $shoe['id']; ?>">
      <!--</form>-->

      <?php echo form_close(); ?>
    </div>
  </div>
</div>


</body>
<script type="text/javascript">
$("input[name$='shippingMethod']").click(function () {
    /*var value = $( 'input[name=shippingMethod]:checked' ).val();
    alert(value);*/
    var value = $(this).val();
    if (value == 'appointment') {
        $("#shippingAddress").show();
    } else if (value == 'company' || value == 'post' ) {
        $("#shippingAddress").hide();
    }
    $('#shippingaddress-alert-msg').html('');
});

$("#imgFile").change(function(){
    $('#imgFile-alert-msg').html('');
    $("#previewDonation_img").show();
    readURL_PreviewImg(this);
});

$("#gender").change(function(){
  $("#menType").hide();
  $("#womenType").hide();
  $("#boysType").hide();
  $("#girlsType").hide();
  $("#babyType").hide();
  if($("#gender").val()=="Men"){
    $("#menType").show();
    document.getElementById("type").selectedIndex = "0";
  }else if($("#gender").val()=="Women"){
    $("#womenType").show();
    document.getElementById("type").selectedIndex = "10";
  }else if($("#gender").val()=="Boys"){
    $("#boysType").show();
    document.getElementById("type").selectedIndex = "22";
  }else if($("#gender").val()=="Girls"){
    $("#girlsType").show();
    document.getElementById("type").selectedIndex = "31";
  }else if($("#gender").val()=="Baby"){
    $("#babyType").show();
    document.getElementById("type").selectedIndex = "41";
  }
});

$("#name").keyup(function(){
  $('#name-alert-msg').html('');
});

$("#detail").keyup(function(){
  $('#detail-alert-msg').html('');
});

$("#color").keyup(function(){
  $('#color-alert-msg').html('');
});

$("#size").keyup(function(){
  $('#size-alert-msg').html('');
});

$("#amount").keyup(function(){
  $('#amount-alert-msg').html('');
});

$("#shippingAddress").keyup(function(){
  $('#shippingAddress-alert-msg').html('');
});

$('#donationSubmit').click(function(event){
  //alert($('#color').val()+'/'+$('#color2').val());
    var form_data = {
        name: $('#name').val(),
        detail: $('#detail').val(),
        color: $('#color').val(),
        color2: $('#color2').val(),
        type: $('#type').val(),
        amount: $('#amount').val(),
        size: $('#size').val(),
        shippingMethod: $('#shippingMethod').val(),
        shippingAddress: $('#shippingAddress').val(),
        imgFile: $('#imgFile').val()
    };
    $.ajax({
        url: "<?php echo site_url('Donation/check_EditDonation'); ?>",
        type: 'POST',
        data: form_data,
        success: function(msg) {
          inputClear_Donation();
          //console.log(msg);
          if($('input[name="shippingMethod"]:checked').val() == 'appointment'){
            if($('#shippingAddress').val() == ''){
              msg += 'The ShippingAddress field is required.';
            }else if($('#shippingAddress').val().length>100){
              msg+= 'The ShippingAddress field cannot exceed 100 characters in length.';
            }
          }
          if (msg == 'Correct'){
            document.getElementById("DonationEdit_Form").submit();
          }else{
            inputError_Donation(msg);
          }
        }
    });
    return false;
});

</script>
<script src="<?php echo base_url('asset/js/custom.js'); ?>"></script>
