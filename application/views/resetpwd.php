<div class="container-fluid news">
  <div class="container" style="margin-top:50px; margin-bottom:150px">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
      <h3>
        Reset Password
      </h3>
      <hr />
      <?php //echo form_open('Profile/resetSubmit'); ?>
      <!--<form class="form-horizontal" action="<?php //echo base_url('index.php/Profile/resetSubmit'); ?>" method="post">-->
        <?php $attributes = array("name" => "Reset_Form", "id" => "Reset_Form" , "class" => "form-horizontal");
                echo form_open("Profile/reset_check", $attributes);?>
        <div class="form-group">
          <?php if(isset($email)) echo '<input type="hidden" class="form-control" id="email" name="email" value="' . $email . '">'; ?>
          <label for="inputPassword" class="col-sm-4 control-label">New Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
            <div id="password-alert-msg"></div>
          </div>
        </div>
        <div class="form-group">
          <label for="inputConfirm" class="col-sm-4 control-label">Confirm Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
            <div id="confirmpassword-alert-msg"></div>
          </div>
        </div>
        <div class="form-group" style="text-align:center;">
          <div class="col-md-12">
            <button type="submit" class="btn btn-wonder" name="submit">Reset Password</button>
          </div>
        </div>
      <!--</form>-->
      <?php echo form_close(); ?>
    </div>
    <div class="col-md-2">

    </div>
  </div>
</div>

<script type="text/javascript">

$("#password").click(function(){
  //console.log("ASDSAD");
  $('#password-alert-msg').html('');
});

$("#confirmpassword").click(function(){
  //console.log("ASDSAD");
  $('#confirmpassword-alert-msg').html('');
});

$('#Reset_Form').submit(function(event){
    var form_data = {
       <?php if(isset($email)) echo "email: $('#email').val(),"; ?>
        password: $('#password').val(),
        password_check: $('#password').val(),
        confirmpassword: $('#confirmpassword').val()
    };
    $.ajax({
        url: "<?php echo site_url('Profile/reset_check'); ?>",
        type: 'POST',
        data: form_data,
        success: function(msg) {
          $('#password-alert-msg').html('');
          $('#confirmpassword-alert-msg').html('');
          console.log(msg);
            if (msg == 'Correct'){
              //$('#alert-msg').html('<div class="alert alert-success text-center">True.</div>');
                  var form = document.createElement("form");
                  var element1 = document.createElement("input");
                  var element2 = document.createElement("input");

                  form.method = "POST";

                  <?php if(isset($email)) { ?>
                    form.action = "<?php echo base_url('index.php/Member/resetSubmit'); ?>";
                  <?php }else { ?>
                    form.action = "<?php echo base_url('index.php/Profile/resetSubmit'); ?>";
                  <?php } ?>

                  element1.value=$('#password').val();
                  element1.name="password";
                  form.appendChild(element1);

                  element2.value=$('#confirmpassword').val();
                  element2.name="confirmpassword";
                  form.appendChild(element2);

                  <?php if(isset($email)) { ?>

                    var element3 = document.createElement("input");
                    element3.value=$('#email').val();
                    element3.name="email";
                    form.appendChild(element3);

                  <?php } ?>

                  document.body.appendChild(form);

                  form.submit();
            }
            if(msg.includes("The Password field is required.")){
              $('#password-alert-msg').html('<div style="color:red;">*Please enter new password.</div>');
            }else if((msg.includes("The Password field cannot exceed 16 characters in length.")
                      || msg.includes("The Password field must be at least 8 characters in length."))
                      && msg.includes("Password pattern is incorrect.")){
              $('#password-alert-msg').html('<div style="color:red;">*Passwords must be between 8-16 characters. <br>*Password must contains [A-Z] [a-z] [0-9] [!,%,&,@,#,$,^,*,?,_,~].</div>');
            }else if(msg.includes("The Password field cannot exceed 16 characters in length.") || msg.includes("The Password field must be at least 8 characters in length.")){
              $('#password-alert-msg').html('<div style="color:red;">*Passwords must be between 8-16 characters.</div>');
            }else if(msg.includes("Password pattern is incorrect.")){
              $('#password-alert-msg').html('<div style="color:red;">*Password must contains [A-Z] [a-z] [0-9] [!,%,&,@,#,$,^,*,?,_,~].</div>');
            }
            if(msg.includes("The ConfirmPassword field is required.")){
              $('#confirmpassword-alert-msg').html('<div style="color:red;">*Please enter confirm password.</div>');
            }else if(msg.includes("The ConfirmPassword field does not match the Password field.")){
              $('#confirmpassword-alert-msg').html('<div style="color:red;">*Password does not match.</div>');
            }
            //console.log(msg);
        }
    });
    return false;
});

</script>
