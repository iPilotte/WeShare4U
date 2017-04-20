<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>499 Forbidden</title>
  <script src="<?php echo base_url('asset/js/jquery-3.1.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/js/custom.js'); ?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('asset/css/custom.css'); ?>">
</head>
<body>

	<!-- Login Modal -->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <?php echo form_open('Member/login'); ?>
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Sign In</h4>
	      </div>
	      <div class="modal-body">
	        <form action="index.php/Member/login" method="post">
	          <div class="form-group">
	            <label for="idNum">Identification ID</label>
	            <input type="text" class="form-control" name="idNum" placeholder="Identification ID">
	          </div>
	          <div class="form-group">
	            <label for="password">Password</label>
	            <input type="password" class="form-control" name="password" placeholder="Password">
	          </div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Sign In</button>
	      </div>
	    </div>
	    <?php echo form_close(); ?>
	  </div>
	</div>
	<!-- End Login Modal -->

	<script type="text/javascript">
	    $(window).on('load',function(){
	        $('#loginModal').modal('show');
	    });
	</script>
</body>
</html>
