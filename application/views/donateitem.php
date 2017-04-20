<html>
<body class="weshare">
  <div class="container-fluid donatelist">
    <div class="container">
      <h3>Shoes for Share</h3>
      <hr />
      <div class="row">
        <div class="col-sm-4 col-md-5 col-sm-offset-6 col-md-offset-7" style="text-align:center;">
                <div class="">
                    <?php $attributes = array("name" => "Search_Form", "id" => "Search_Form" , "class" => "form-horizontal" , "method" => "get");
                            echo form_open("DonateItem/Search", $attributes);?>
                            <div class="form-inline">
                              <div class="form group">
                                <?php if(isset($_GET['search']) && isset($_GET['method']) ) {
                                        $searchValue = $_GET['search'];
                                        $method = $_GET['method'];
                                      }
                                      else {
                                        $searchValue = '';
                                        $method = '';
                                      } ?>
                                  <input type="text" class="form-control" name="search" id="search" value="<?php echo $searchValue; ?>">
                                  <button type="submit" class="btn btn-wonder" id="searchSubmit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
                                </div>
                                <div class="row">
                                  <label class="radio-inline"><input type="radio" name="method" id="methodName" value="1" <?php if($method == '1' || $method == '') echo'checked'; ?> >Name</label>
                                  <label class="radio-inline"><input type="radio" name="method" id="methodType" value="2" <?php if($method == '2') echo'checked'; ?>>Type</label>
                                  <label class="radio-inline"><input type="radio" name="method" id="methodKeyword" value="3" <?php if($method == '3') echo'checked'; ?>>Keyword</label>
                                </div>
                            </div>
                            <input type="hidden" class="form-control"  name="page" value="1">
                  <!--</form>-->
                  <?php echo form_close(); ?>
            </div>
        </div>
      </div>
      <div class="row half-offset">
        <?php
          if (is_array($list)){ //Check isset
            $count = 0;
          foreach ($list as $row){
            $itemid = $row['id'];
            $itemimg = $row['imurl'];
            $itemdate = $row['datetime'];
            if(intval($row['id'])%5 == 1) //new row
            echo '<div class="col-md-2 col-sm-3 col-xs-5 donateitem">';
            else {
              echo '<div class="col-md-2 col-sm-3 col-xs-5 donateitem">';
            }
            if($count<5 && $title=='DonateItem' && $page=='1'){
              echo '<img class="img-responsive" src="'. base_url('asset/img/new_tag.png') .'" style="position:absolute;z-index:10;height:35%;top:0;right:0">';
              $count++;
            }
            echo '<div class="donateImage">';
            echo '<a name="imgURL" href="'. base_url("index.php/DonateItem/Detail/".$itemid) .'"><img class="img-responsive" name="shoe'.$itemid.'" src="'. base_url($itemimg) .'" alt height="224" width="224"></a>';
            echo '</div>';
            echo '<div class="donateText">';
            echo '<span name="datetime'.$itemid.'" value="'.$itemdate.'" hidden></span>';
            echo '<a href="'. base_url("index.php/DonateItem/Detail/".$itemid) .'" name="textURL">'. $row["name"] .'</a>';
            echo '</div>';
            echo '</div>';
          }
        }else{
          if(strpos($title,"Search")>0){
            echo "<h3 align='center'>Search not found.</h3>";
          }else{
            echo "<h3 align='center'>Page not found.</h3>";
          }
        }
        ?>
      </div>
      <?php if (is_array($list)){
        echo '<div class="row" align="center">';
        echo '<ul class="pagination">';
        $size = ceil(intval($amount[0]['COUNT(id)'])/10);
        if(strpos($title,"Search")>0){
          for($page=1;  $page<=$size; $page++){
            echo '<li><a href="'. base_url('index.php/DonateItem/Search?search='.$_GET['search'].'&method='.$_GET['method'].'&page=' . $page .'') .'" id="page'.$page.'">'. $page .'</a></li>';
          }

        }else if(strpos($title,"Category")>0){
          echo '<li><a href="'. base_url('index.php/DonateItem/Category/'.$category.'/'.$page) .'" id="page'.$page.'">'. $page .'</a></li>';
        }else{
          for($page=1;  $page<=$size; $page++){
            echo '<li><a href="'. base_url('index.php/DonateItem/Page/'. $page .'') .'" id="page'.$page.'">'. $page .'</a></li>';
          }
        }
        echo '</ul>';
        echo '</div>';
      }
      ?>
      <hr />
    </div>
  </div>
</body>
</html>
