<?php if(isset($_SESSION['firstName'])) { echo "Hello";?>
<!-- Select Modal -->
<div class="modal fade" id="selectRuleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <?php echo form_open('Member/selectRule'); ?>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Rule</h4>
      </div>
      <div class="modal-body">
        <form action="index.php/Member/selectRule" method="post">
          <div class="form-group">
            <button class="btn info">Info</button>
          </div>
          <div class="form-group">
            <button class="btn warning">Warning</button>
          </div>
        </form>
      </div>
    </div>
    <?php echo form_close(); ?>
  </div>
</div>
<!-- End Select Modal -->
<?php } ?>
