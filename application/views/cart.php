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
            <span id="TotalPrice">Total shipping cost :  baht</span>
          </div>
        </div>
        <hr>
        <div  align="center" style="margin-bottom:50px">
          <a id="continueLookingbtn" href="<?= site_url('DonateItem') ?>" style="margin-right:10px;"><button class="btn btn-wonder btn-lg">Continue Looking</button></a>
          <a id="readybtn" href="<?= site_url('Checkout') ?>" style="margin-left:10px;"><button class="btn btn-wonder btn-lg">I ready to get them</button></a><br>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<script type="text/javascript">
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
          $("#TotalPrice").html('Total shipping cost : ' +TotalPrice + ' baht');
        }
        //console.log(msg);
    });
  }

  function UpdateItemAmount(id){
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
          UpdateCartPage('No');
          //console.log(msg)
        }
    });
    return false;
  }

  function RemoveItemInCart(id){
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
