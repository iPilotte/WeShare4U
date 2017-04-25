<html>
<body class="weshare">
  <div class="container-fluid news">
    <div class="container">
      <h3>Cart</h3>
      <hr />
      <div class="col-md-12">
        <br>
        <div class="container" id="cartPageContent">
          <table class="table cart-page-table">
            <thead>
              <tr>
                <th style="width:5%">#</th>
                <th style="width:20%">Image</th>
                <th style="width:55%" align="center">Detail</th>
                <th style="width:10%" align="center">Amount</th>
                <th style="width:10%" align="center">Edit/Delete</th>
              </tr>
            </thead>
            <tbody class="cart-page-content" id="cartTableContent">
              <?php
              /*echo '<tr>';
      				echo	'<td align="center">'. $count .'</td>'; //Count
      				echo	'<td align="center"><img class="img-responsive" src="'. base_url($itemImg) .'" alt height="150" width="150"></td>'; //Image
      				echo	'<td><p>Name : '.$itemName.'</p><p>Detail : '.$itemDetail.'</p></td>'; //Detail
      				echo	'<td align="center"><input type="number" min="1" max="'. $itemMaxAmount . '" class="form-control" id="amount" name="amount" placeholder="Amount : Pair(s)" value="'.$itemAmountInCart.'"></td>'; //Edit-Delete
      				echo	'<td align="center"><div class="btn-group" role="group" aria-label="Edit/Delete">';
      				echo  '<a class="btn btn-info" href="'. site_url('DonateItem/Detail/'.$itemID).'"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>';
      				echo  '<button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>';
      				echo  '</div></td>'; //Edit-Delete
      				echo '</tr>';*/
              ?>
            </tbody>
          </table>
          <div class="row totalPrice">
            <span id="TotalPrice">Total shipping costs :  baht</span>
          </div>
        </div>
        <hr>
        <div  align="right" style="margin-bottom:50px">
          <a href="<?= site_url('DonateItem') ?>" style="margin-right:10px;"><button id="continueLookingbtn" class="btn btn-wonder btn-lg">Continue Looking</button></a>
          <a href="<?= site_url('Checkout') ?>" style="margin-left:10px;"><button  id="readybtn" class="btn btn-wonder btn-lg">I ready to get them</button></a><br>
        </div>
      </div>
      <div class="modal fade" id="confirmRemove" >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h2 class="modal-title">Confirm</h2>
            </div>
            <div class="modal-body" style="text-align:center;">
              <h3>Are you sure?</h3>
            </div>
            <div class="modal-footer">
              <button type="button" data-dismiss="modal" class="btn btn-wonder" id="confirmRemoveShoe">Confirm</button>
              <button type="button" data-dismiss="modal" class="btn" id="cencelRemoveShoe">Cancel</button>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</body>
</html>
<script src="<?php echo base_url('asset/js/custom.js'); ?>"></script>
<script type="text/javascript">

  function RemoveItemInCartModal(id){
    //console.log('Remove'+id);
    $('#confirmRemoveShoe').attr({"onclick" : "RemoveItemInCart("+id+")"})
    $('#confirmRemove').modal({
        backdrop: 'static',
        keyboard: false
      })
  }

  $( document ).ready(function() {
    UpdateCartPage('Yes');
  });

  function ChangeShippingMethod(id,method) {
    var form_data = {
        shoeID : id,
        shippingMethod : method
    };
    $.ajax({
        url: "<?php echo site_url('Cart/updateShipping'); ?>",
        type: 'POST',
        data: form_data,
        success: function(msg) {
          updateCart();
          UpdateCartPage('No');
          //console.log(msg)
        }
    });
    return false;
  }

  function UpdateCartPage(isReload){
    if(isReload == 'Yes'){
      $("#cartTableContent").fadeOut(100);
    }
    $.ajax({
    url: "<?php echo site_url('Cart/getItemListInCart_Page'); ?>",
    })
    .done(function(msg) {
        msg = msg.split('<br><br>');
        var amount = msg[0];
        var content = msg[1];
        var TotalPrice = msg[2];
        if(amount == 0){
          $("#cartPageContent").html(content).fadeOut(1);
          $("#cartPageContent").html(content).fadeIn(300);
        }else{
          if(isReload == 'Yes'){
            $("#cartTableContent").html(content).fadeIn(200).show();
          }else{
            $("#cartTableContent").html(content);
          }
          $("#TotalPrice").html('Total shipping costs : ' +TotalPrice + ' baht');
        }
        //console.log(msg);
    });
  }

  function UpdateItemAmount(id){
    if($('#amount'+id).val() == '0'){
      RemoveItemInCartModal(id);
    }else{
      var form_data = {
          shoeID : id,
          Camount : $('#amount'+id).val()
      };
      $.ajax({
          url: "<?php echo site_url('Cart/updateItemAmount'); ?>",
          type: 'POST',
          data: form_data,
          success: function(msg) {
            updateCart();
            //UpdateCartPage('No');
            cartPage_amountError(msg);
            //cartPage_amountError(msg);
            //console.log(msg)
          }
      });
      return false;
    }
  }

  function RemoveItemInCart(id){
    $('#confirmRemoveShoe').attr({"onclick" : ""})
    var form_data = {
        shoeID : id
    };
    $.ajax({
        url: "<?php echo site_url('Cart/removeItemFormCart'); ?>",
        type: 'POST',
        data: form_data,
        success: function(msg) {
          updateCart();
          UpdateCartPage('Yes');
          //console.log(msg);
        }
    });
    return false;
  }

</script>
