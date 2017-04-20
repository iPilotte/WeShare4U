<body class="weshare">
  <div class="container-fluid news">
    <div class="container">
      <h3>Donation</h3>
      <hr />

      <div class="row">
      <?php $attributes = array("name" => "Donation_Form", "id" => "Donation_Form" , "class" => "form-horizontal");
                echo form_open_multipart("Donation/addShoe", $attributes);?>

          <div class="col-md-2" style="position:relative;text-align:center" >
            <img class="img-rounded" id="previewDonation_img" src="#" alt="Preview Img" height="250" width="300" />
          </div>
          <div class="col-md-10">


<!-- Choose File -->
          <div class="form-group">
              <label for="upLoadPhoto" class="col-md-3 control-label" color="green">Photo</label>
            <div class="col-md-5">
              <input type="file" class="form-control" id="imgFile" name="imgFile">
           </div>
           <div class="col-md-3" id="imgFile-alert-msg"></div>
        </div>

<!-- Name -->
        <div class="form-group">
          <label for="inputName" class="col-md-3 control-label">Name</label>
          <div class="col-md-5">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
          </div>
          <div class="col-md-3" id="name-alert-msg"></div>
        </div>

<!-- Detail -->
        <div class="form-group">
          <label for="Detail" class="col-md-3 control-label">Detail</label>
          <div class="col-md-5">
            <textarea class="form-control" name="detail" id="detail" placeholder="Detail"></textarea>
          </div>
          <div class="col-md-3" id="detail-alert-msg"></div>
        </div>

<!-- Gender -->
        <div class="form-group">
          <label for="inputName" class="col-md-3 control-label">Gender</label>
          <div class="col-md-5">
            <select class="form-control selectpicker" name="gender" id="gender" placeholder="Gender">

              <option value="Men">Men</option>
              <option value="Women">Women</option>
              <option value="Boys">Boys</option>
              <option value="Girls">Girls</option>
              <option value="Baby">Baby</option>

            </select>
          </div>
          <div class="col-md-3" id="gender-alert-msg"></div>
        </div>

<!-- Type -->
       <div class="form-group">
          <label for="inputType" class="col-md-3 control-label">Type</label>
          <div class="col-md-5">
            <select class="form-control selectpicker" name="type" id="type">

              <optgroup id="menType" label="-- MEN --">
                <option value="Athletic">Athletic</option>
                <option value="Boots">Boots</option>
                <option value="Fashion_Sneakers">Fashion Sneakers</option>
                <option value="Loafers_Slip-Ons">Loafers & Slip-Ons</option>
                <option value="Mules_Clogs">Mules & Clogs</option>
                <option value="Outdoor">Outdoor</option>
                <option value="Oxfords">Oxfords</option>
                <option value="Sandals">Sandals</option>
                <option value="Slippers">Slippers</option>
                <option value="Work_Safety">Work & Safety</option>
              </optgroup>

              <optgroup id="womenType" label="-- WOMEN --" style="display:none">
                  <option value="Athletic">Athletic</option>
                  <option value="Boots">Boots</option>
                  <option value="Fashion_Sneakers">Fashion Sneakers</option>
                  <option value="Flats">Flats</option>
                  <option value="Loafers_Slip-Ons">Loafers & Slip-Ons</option>
                  <option value="Mules_Clogs">Mules & Clogs</option>
                  <option value="Outdoor">Outdoor</option>
                  <option value="Oxfords">Oxfords</option>
                  <option value="Pumps">Pumps</option>
                  <option value="Sandals">Sandals</option>
                  <option value="Slippers">Slippers</option>
                  <option value="Work_Safety">Work & Safety</option>
              </optgroup>

              <optgroup id="boysType" label="-- BOYS --" style="display:none">
                <option value="Athletic">Athletic</option>
                <option value="Boots">Boots</option>
                <option value="Clogs_Mules">Clogs & Mules</option>
                <option value="Loafers">Loafers</option>
                <option value="Outdoor">Outdoor</option>
                <option value="Oxfords">Oxfords</option>
                <option value="Sandals">Sandals</option>
                <option value="Slippers">Slippers</option>
                <option value="Sneakers">Sneakers</option>
              </optgroup>

              <optgroup id="girlsType" label="-- GIRLS --" style="display:none">
                <option value="Athletic">Athletic</option>
                <option value="Boots">Boots</option>
                <option value="Clogs_Mules">Clogs & Mules</option>
                <option value="Flats">Flats</option>
                <option value="Loafers">Loafers</option>
                <option value="Outdoor">Outdoor</option>
                <option value="Oxfords">Oxfords</option>
                <option value="Sandals">Sandals</option>
                <option value="Slippers">Slippers</option>
                <option value="Sneakers">Sneakers</option>
              </optgroup>

              <optgroup id="babyType" label="--   BABY --" style="display:none">
                <option value="Athletic_Outdoor">Athletic & Outdoor</option>
                <option value="Boots">Boots</option>
                <option value="Clogs_Mules">Clogs & Mules</option>
                <option value="Flats">Flats</option>
                <option value="Sandals">Sandals</option>
                <option value="Slippers">Slippers</option>
                <option value="Sneakers">Sneakers</option>
              </optgroup>

          </select>
            <div class="col-md-3" id="type-alert-msg"></div>
          </div>
        </div>

<!-- Size -->
        <div class="form-group">
          <label for="inputName" class="col-md-3 control-label">Size</label>
          <div class="col-md-3">
            <input type="number" step="0.1" min="1" class="form-control" id="size" name="size" placeholder="Size">
          </div>
          <div class="col-md-2">
            <select class="form-control selectpicker" name="sizeType" id="sizeType">
                <option value="US">US</option>
                <option value="EUR">EUR</option>
                <option value="CM">CM</option>
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
            <input type="number" min="1" class="form-control" id="amount" name="amount" placeholder="Amount : Pair(s)">
          </div>
          <div class="col-md-3" id="amount-alert-msg"></div>
        </div>

<!-- Color -->
        <div class="form-group">
          <label for="selectColor" class="col-md-3 control-label">Color</label>
          <div class="col-md-2">
            <select class="form-control selectpicker" name="color" id="color" placeholder="Color#1">

              <option value="Black">Black</option>
              <option value="White">White</option>
              <option value="Gray">Gray</option>
              <option value="Red">Red</option>
              <option value="Green">Green</option>
              <option value="Blue">Blue</option>
              <option value="Pink">Pink</option>
              <option value="Yellow">Yellow</option>
              <option value="Brown">Brown</option>
              <option value="Violet">Violet</option>
              <option value="Orange">Orange </option>
             <option value="Metallic">Metallic</option>

            </select>
          </div>
          <div class="col-md-3">
            <select class="form-control selectpicker" name="color2" id="color2" placeholder="Color#2">

              <option value="">Choose second color</option>
              <option value="Black">Black</option>
              <option value="White">White</option>
              <option value="Gray">Gray</option>
              <option value="Red">Red</option>
              <option value="Green">Green</option>
              <option value="Blue">Blue</option>
              <option value="Pink">Pink</option>
              <option value="Yellow">Yellow</option>
              <option value="Brown">Brown</option>
              <option value="Violet">Violet</option>
              <option value="Orange">Orange </option>
             <option value="Metallic">Metallic</option>

            </select>
          </div>
          <div class="col-md-3" id="color-alert-msg"></div>
        </div>

<!-- Sending -->
        <div class="form-group">
          <label for="Sending" class="col-md-3 control-label">Shipping Method</label>
          <div class="col-md-5" class="form-group">
            <div class="container">
              <label class="radio-inline control-label"><input type="radio" name="shippingMethod" id="shippingMethod" value="post" checked>Post/Mail</label>
              <label class="radio-inline control-label"><input type="radio" name="shippingMethod" id="shippingMethod" value="company">Weshare Company</label>
              <label class="radio-inline control-label"><input type="radio" name="shippingMethod" id="shippingMethod" value="appointment">Appointment</label>
            </div>
            <br>
            <textarea class="form-control" name="shippingAddress" id="shippingAddress" style="display: none;" placeholder="Appointment Place"></textarea>
          </div>
          <div class="col-md-3" id="shippingaddress-alert-msg"></div>
        </div>

        <div class="form-group" style="text-align:center;">
          <div class="col-md-12">
            <input type="submit" class="btn btn-wonder" name="donationSubmit" id="donationSubmit" value="Donate"></input>
          </div>
        </div>
        </div>
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

$("#previewDonation_img").hide();

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
        url: "<?php echo site_url('Donation/check_Donation'); ?>",
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
            document.getElementById("Donation_Form").submit();
          }else{
            inputError_Donation(msg);
          }
        }
    });
    return false;
});

</script>
<script src="<?php echo base_url('asset/js/custom.js'); ?>"></script>
