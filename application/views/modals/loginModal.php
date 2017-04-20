<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <?php $attributes = array("name" => "Login_Form", "id" => "Login_Form");
            echo form_open("Modal_Login/check_Login", $attributes);?>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
        <?php echo validation_errors(); ?>
        <!--<form action="index.php/Member/login" method="post" id="loginForm">-->
        <div id="alert-msg"></div>
          <div class="form-group">
            <!--<label for="email">E-mail address <span style="color:red;">*</span></label>-->
            <div class="col-md-1">
              <img src="<?php echo base_url('asset/img/icon_email.png'); ?>" height="30px">
            </div>
            <div class="col-md-11">
              <input type="email" class="form-control" id="email" name="email" placeholder="E-mail address" value="<?php echo set_value('email'); ?>">
            </div>
            <!--<div id="email-alert-msg"></div>-->
          </div>
          <br />
          <br />
          <div class="form-group">
            <!--<label for="password">Password <span style="color:red;">*</span></label>-->
            <div class="col-md-1">
              <img src="<?php echo base_url('asset/img/icon_password.png'); ?>" height="30px">
            </div>
            <div class="col-md-11">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
            </div>
            <!--<div id="password-alert-msg"></div>-->
          </div>
          <br />
          <br />
          <hr />
          <div class="form-group">
          <div class="row">
            <div class="col-md-8" align="center">
              <div name="goRecaptcha" id="goRecaptcha">
                <!--
                Site key: 6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI
                Secret key: 6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe
               -->
                <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI" data-theme="light" data-type="image" data-callback=""></div>

              </div> <div id="captcha-alert-msg"></div>
            </div>
            <div class="col-md-4">
              <p style="text-align:right;">
                <a href="#" id="Forget_Pwd">Forget Password</a>
              </p>
            </div>
          </div>

          </div>
        <!--</form>-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
      </div>
    </div>
    <?php echo form_close(); ?>
  </div>
</div>
<!-- End Login Modal -->

<?php if(isset($_SESSION['firstName']) && isset($_SESSION['role'])==null)  {?>
<!-- Select Modal -->
<div class="modal fade" id="selectRoleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <h4 class="modal-title" id="myModalLabel">Hello <?php echo $_SESSION['firstName']; ?></h4>
      </div>
      <div class="modal-body" align="center">
        <?php $attributes = array("id" => "SetRole", "style" => "display: inline-block;");
                echo form_open("Member/setRole", $attributes);?>
        <!--<form action="index.php/Member/setRole" method="post" style="display: inline-block;">-->
          <input type="hidden" name="role" value="recipient">
          <button class="donorButton btn" type="submit">I<br />Need<br />Help</button>
          <!--</form>-->
          <?php echo form_close(); ?>

          <?php $attributes = array("id" => "SetRole", "style" => "display: inline-block;");
                  echo form_open("Member/setRole", $attributes);?>
          <!--<form action="index.php/Member/setRole" method="post" style="display: inline-block;">-->
          <input type="hidden" name="role" value="donor">
          <button class="recipientButton btn" type="submit">I<br />Can<br />Help</button>
          <?php echo form_close(); ?>
        <!--</form>-->
      </div>
      <div class="modal-footer" style="text-align:center;">
        <a href="index.php/Member/logout" type="button" class="btn btn-default btn-lg">Logout</a>
      </div>
    </div>
  </div>
</div>
<!-- End Select Modal -->
<?php } ?>

<script type="text/javascript">

$("#email").click(function(){
  //console.log("ASDSAD");
  $('#email-alert-msg').html('');
});

$("#password").click(function(){
  //console.log("ASDSAD");
  $('#password-alert-msg').html('');
});

$("#Forget_Pwd").click(function(){
  //console.log("Forget");
  var form_data = {
      email: $('#email').val()
  };
  $.ajax({
      url: "<?php echo site_url('Modal_Login/check_Forget'); ?>",
      type: 'POST',
      data: form_data,
      success: function(msg) {
        $('#alert-msg').html('');
          if (msg == 'Correct'){
            //$('#alert-msg').html('<div class="alert alert-success text-center">True.</div>');
                var form = document.createElement("form");
                var element1 = document.createElement("input");

                form.method = "POST";
                form.action = "<?php echo base_url('index.php/Member/forgetPassword'); ?>";

                element1.value=$('#email').val();
                element1.name="email";
                form.appendChild(element1);

                document.body.appendChild(form);

                form.submit();
          }else if (msg == 'Wrong Email' || msg.includes("The Email field must contain a valid email address.")){
              $('#alert-msg').html('<div class="alert alert-danger text-center">Please enter valid email.</div>');
          }
          if(msg.includes("The Email field is required.")){
            $('#alert-msg').html('<div class="alert alert-danger text-center">Please enter an email.</div>');
            //$('#password-alert-msg').html('');
          }
      }
  });
  return false;
  /*var form = document.createElement("form");
  var element1 = document.createElement("input");

  form.method = "POST";
  form.action = "<?php //echo base_url('index.php/Member/forgetPassword'); ?>";

  element1.value=$('#email').val();
  element1.name="email";
  form.appendChild(element1);

  document.body.appendChild(form);
  form.submit();*/
});

$('#Login_Form').submit(function(event){
    var form_data = {
        email: $('#email').val(),
        password: $('#password').val(),
        g_recaptcha_response: grecaptcha.getResponse()
    };
    //console.log(grecaptcha.getResponse());
    $.ajax({
        url: "<?php echo site_url('Modal_Login/check_Login'); ?>",
        type: 'POST',
        data: form_data,
        success: function(msg) {
          //$('#email-alert-msg').html('');
          //$('#password-alert-msg').html('');
          $('#alert-msg').html('');
          $('#captcha-alert-msg').html('');
            if (msg == 'Correct'){
              //$('#alert-msg').html('<div class="alert alert-success text-center">True.</div>');
                  var form = document.createElement("form");
                  var element1 = document.createElement("input");
                  var element2 = document.createElement("input");

                  form.method = "POST";
                  form.action = "<?php echo base_url('index.php/Member/login'); ?>";

                  element1.value=$('#email').val();
                  element1.name="email";
                  form.appendChild(element1);

                  element2.value=$('#password').val();;
                  element2.name="password";
                  form.appendChild(element2);

                  document.body.appendChild(form);

                  form.submit();
            }else if (msg.includes("The Email field must contain a valid email address.")){
                //$('#email-alert-msg').html('<div class="alert alert-danger text-center">Please enter valid email.</div>');
                //$('#password-alert-msg').html('');
                $('#alert-msg').html('<div class="alert alert-danger text-center">Please enter valid email.</div>');
            }else if (msg == 'Wrong Password' || msg == 'Wrong Email'){
                //$('#password-alert-msg').html('<div class="alert alert-danger text-center">Please enter valid password.</div>');
                //$('#email-alert-msg').html('');
                $('#alert-msg').html('<div class="alert alert-danger text-center">Email or Password is incorrect.</div>');
            }
            if(msg.includes("The Email field is required.") && msg.includes("The Password field is required.")){
              $('#alert-msg').html('<div class="alert alert-danger text-center">Please enter Email and Password.</div>');
            }else{
              if(msg.includes("The Email field is required.")){
                //$('#email-alert-msg').html('<div class="alert alert-danger text-center">Please enter an email.</div>');
                //$('#password-alert-msg').html('');
                $('#alert-msg').html('<div class="alert alert-danger text-center">Please enter an email.</div>');
              }
              if(msg.includes("The Password field is required.")){
                //$('#password-alert-msg').html('<div class="alert alert-danger text-center">Please enter password.</div>');
                //$('#email-alert-msg').html('');
                $('#alert-msg').html('<div class="alert alert-danger text-center">Please enter password.</div>');
              }
            }
            if(msg.includes("Captcha Needed.")){
              $('#captcha-alert-msg').html('<div class="h5" style="color:red;">Please enter captcha.</div>');
              //$('#email-alert-msg').html('');
            }
            console.log(msg);
            grecaptcha.reset();
        }
    });
    return false;
});
</script>
