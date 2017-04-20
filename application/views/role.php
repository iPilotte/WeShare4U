<div class="container-fluid news">
  <div class="container-fluid" style="width:100%;display: inline-block;">
    <?php /*<a href="<?php echo base_url('index.php/Member/setRole/recipient'); ?>">
      <!--<img src="<?php //echo base_url('asset/img/role_ineedhelp.png'); ?>" style="width:50%;height:50%;background-color:#e3c7fa;display: inline-block;">
      <div class="col-md-6" style="background-color: #e3c7fa; text-align:right;" id="recipientButton" name="goRecipient">
        padding:15%$
        <h1>I</h1><br />
        <h1>NEED</h1><br />
        <h1>HELP</h1>

      </div>-->
    </a>*/?>
    <a href="<?php echo base_url('index.php/Member/setRole/recipient'); ?>" id="goRecipient" name="goRecipient"><div style="background-color:#e3c7fa;background-image:url('<?php echo base_url('asset/img/role_ineedhelp.png'); ?>');background-size: 100% 100%; width:50%;height:50%;padding:25%;padding-top:30%;margin:0;display:inline-block;vertical-align: top;" ></div></a><!--
    --><a href="<?php echo base_url('index.php/Member/setRole/donor'); ?>" id="goDonor" name="goDonor"><div style="background-color:#cdd5f7;background-image:url('<?php echo base_url('asset/img/role_icanhelp.png'); ?>');background-size: 100% 100%; width:50%;height:50%;padding:25%;padding-top:30%;margin:0;display:inline-block;vertical-align: top;" ></div></a>
    <?php /*<a href="<?php //echo base_url('index.php/Member/setRole/donor'); ?>">
      <!--<img src="<?php //echo base_url('asset/img/role_icanhelp.png'); ?>" style="width:50%;height:50%;display: inline-block;">
      <div class="col-md-6" style="background-color: #cdd5f7; text-align:right; color:white;" id="donorButton" name="goDonor" style="">
        <h1>I</h1><br />
        <h1>CAN</h1><br />
        <h1>HELP</h1>
        <img src="<?php //echo base_url('asset/img/role_icanhelp.png'); ?>" style="width:100%;height:100%;">
      </div>-->
    </a> */?>
  </div>
</div>

<script type="text/javascript">
$(function() { // when the DOM is ready...
  //  Move the window's scrollTop to the offset position of #now
  $(window).scrollTop($('#goRecipient').offset().top);
});
</script>
