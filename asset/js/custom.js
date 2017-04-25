function cartPage_amountError(msg){
  if(msg.includes("*Plase enter correct amount.")){
    $('#amount-error-msg-cart').html('<div class="h5" style="color:red;">*Plase enter correct amount.</div>');
  }else{
    $('#amount-error-msg-cart').html('');
  }
}

function donationDetail_amountError(msg){
  if(msg.includes("*Plase enter correct amount.")){
    $('#amount-error-msg-detail').html('<div class="h5" style="color:red;">*Plase enter correct amount.</div>');
  }else{
    $('#amount-error-msg-detail').html('');
  }
}

function inputError_Donation(msg){
  if(msg.includes("The Image field is required.")){
    $('#imgFile-alert-msg').html('<div class="h5" style="color:red;">Please choose an image.</div>');
  }

  if(msg.includes("The Name field is required.")){
    $('#name-alert-msg').html('<div class="h5" style="color:red;">Please enter a name.</div>');
  }else if(msg.includes("The Name field cannot exceed 50 characters in length.")){
    $('#name-alert-msg').html('<div class="h5" style="color:red;">Name must be between 0-50 characters.</div>');
  }

  if(msg.includes("The Detail field is required.")){
    $('#detail-alert-msg').html('<div class="h5" style="color:red;">Please enter a detail.</div>');
  }else if(msg.includes("The Detail field cannot exceed 100 characters in length.")){
    $('#detail-alert-msg').html('<div class="h5" style="color:red;">Detail must be between 0-100 characters.</div>');
  }

  if(msg.includes("The Color field is required.")){
    $('#color-alert-msg').html('<div class="h5" style="color:red;">Please enter a color.</div>');
  }

  if(msg.includes("The Amount field is required.")){
    $('#amount-alert-msg').html('<div class="h5" style="color:red;">Please enter an amount.</div>');
  }else if(msg.includes("The Amount field must only contain digits and must be greater than zero.")){
    $('#amount-alert-msg').html('<div class="h5" style="color:red;">Amount must be greater than 0.</div>');
  }

  if(msg.includes("The Size field is required.")){
    $('#size-alert-msg').html('<div class="h5" style="color:red;">Please enter a size.</div>');
  }else if(msg.includes("The Size field must be number and greater than 0.")){
    $('#size-alert-msg').html('<div class="h5" style="color:red;">Size must be greater than 0.</div>');
  }

  if(msg.includes("The ShippingAddress field is required.")){
    $('#shippingaddress-alert-msg').html('<div class="h5" style="color:red;">Please enter appointment place.</div>');
  }else if(msg.includes("The ShippingAddress field cannot exceed 100 characters in length.")){
    $('#shippingaddress-alert-msg').html('<div class="h5" style="color:red;">Appointment Place must be between 0-100 characters.</div>');
  }
}

function inputClear_Donation(){
  $('#name-alert-msg').html('');
  $('#detail-alert-msg').html('');
  $('#color-alert-msg').html('');
  $('#size-alert-msg').html('');
  $('#shippingaddress-alert-msg').html('');
  $('#amount-alert-msg').html('');
  $('#imgFile-alert-msg').html('');
}

function readURL_PreviewImg(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#previewDonation_img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
