<div class="container-fluid news">
  <div class="container" style="margin-top:50px; margin-bottom:150px">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
      <h3>
        Forget Password <?php if(isset($email)) echo " | " . $email; ?>
      </h3>
      <hr />
      <?php //echo form_open('Profile/resetSubmit'); ?>
      <?php $attributes = array("name" => "Forget_Form", "id" => "Forget_Form" , "class" => "form-horizontal");
              echo form_open("Member/forget_check", $attributes);?>
      <!--<form class="form-horizontal" action="<?php //echo base_url('index.php/Profile/resetSubmit'); ?>" method="post">-->
        <div class="form-group">
          <label for="inputQuestion" class="col-sm-4 control-label">Question</label>
          <input type="hidden" class="form-control" id="email" name="email" placeholder="Answer" value="<?php if(isset($email)) echo $email; ?>">
          <div class="col-sm-8">
            <select class="form-control" id="question" name="question">
              <option value="1">สัตว์เลี้ยงตัวโปรดของคุณชื่ออะไร ?</option>
              <option value="2">นามสกุลเก่าของแม่คุณคืออะไร ?</option>
              <option value="3">เบอร์โทรศัพท์ 4 ตัวท้ายของคุณคืออะไร ? </option>
              <option value="4">เพื่อนสนิทที่สุดของคุณชื่ออะไร ?</option>
              <option value="5">นักแสดงที่คุณชื่นชอบชื่ออะไร</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputAnswer" class="col-sm-4 control-label">Answer</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="answer" name="answer" placeholder="Answer">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">
          </div>
          <div class="col-sm-8">
            <div id="alert-msg"></div>
          </div>
        </div>
        <div class="form-group" style="text-align:right;">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-wonder" name="submit">Submit</button>
          </div>
        </div>
      </form>
      <?php echo form_close(); ?>
    </div>
    <div class="col-md-2">

    </div>
  </div>
</div>

<script type="text/javascript">
$('#Forget_Form').submit(function(event){
  console.log("HELLO");
    var form_data = {
        email: $('#email').val(),
        question: $('#question').val(),
        answer: $('#answer').val()
    };
    $.ajax({
        url: "<?php echo site_url('Member/forget_check'); ?>",
        type: 'POST',
        data: form_data,
        success: function(msg) {
          $('#alert-msg').html('');
            if (msg == 'Correct'){
              var form = document.createElement("form");
              var element1 = document.createElement("input");

              form.method = "POST";
              form.action = "<?php echo base_url('index.php/Member/resetpwd'); ?>";

              element1.value=$('#email').val();
              element1.name="email";
              form.appendChild(element1);

              document.body.appendChild(form);

              form.submit();
            }else if (msg == 'Incorrect'){
              $('#alert-msg').html('<div class="alert alert-danger text-center">Question or answer is incorrect</div>');
            }
            if(msg.includes("The Answer field is required.")){
              $('#alert-msg').html('<div class="alert alert-danger text-center">Please enter an answer.</div>');
              //$('#password-alert-msg').html('');
            }
          }
        });
        return false;
    });
</script>
