<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $title . " | WeShare4U"; ?></title>
    <script src="<?php echo base_url('asset/js/jquery-3.1.1.min.js'); ?>"></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
    <!--<link rel="stylesheet" href="<?php //echo base_url('asset/css/hover.min.css'); ?>">-->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/custom.css'); ?>">
  </head>
  <body class="weshare">
    <div class="container-fluid banner" style="height:105px;">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="text-align: right; padding-top:2%">
        <?php if(isset($_SESSION['firstName'])) { if(isset($_SESSION['role'])){ if($_SESSION['role']=='recipient') echo '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>   |   ';} echo "Hi <a href=" . base_url('index.php/profile') ." name='goProfile'>" .$_SESSION['firstName'] . " " . $_SESSION['lastName'] . "</a>"; ?>
        <br />
        <a href="<?php echo base_url('index.php/Member/logout'); ?>" name="logout">Logout</a>
        <?php }else {
          echo '<button type="button" class="btn btn-wonder" data-toggle="modal" data-target="#loginModal" name="login">Login</button>';
          echo '<br />';
          echo '<a href="'. base_url('index.php/Register') .'" name="register"><span style="text-align:center;margin-right:1%">Register</span></a>';
        }?>
      </div>
    </div>
    <div class="container-fluid">
      <nav class="navbar navbar-wonder" style="margin:0;">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="sliding-u-b-t"><a href="<?php echo base_url(); ?>" name="home">Home</a></li>
              <?php
              if(isset($_SESSION['role'])){
                if($_SESSION['role']=="recipient"){
              ?>
              <li>
                  <a href="#" class="dropdown-toggle sliding-u-b-t" data-toggle="dropdown" name="donateItem">DonateItem<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url('index.php/DonateItem'); ?>" id="v_new" name="v_new">View by New</a>
                      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" id="v_category" name="v_category">View by Category<b class="caret-right"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Men/1'); ?>" id="v_men" name="v_men">Men</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Women/1'); ?>" id="v_women" name="v_women">Women</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Boys/1'); ?>" id="v_boys" name="v_boys">Boys</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Girls/1'); ?>" id="v_girls" name="v_girls">Girls</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Baby/1'); ?>" id="v_baby" name="v_baby">Baby</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Athletic/1'); ?>" id="v_athletic" name="v_athletic">Athletic</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Boots/1'); ?>" id="v_boots" name="v_boots">Boots</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Fashion_Sneakers/1'); ?>" id="v_fashionSneakers" name="v_fashionSneakers">Fashion Sneakers</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Flats/1'); ?>" id="v_flats" name="v_flats">Flats</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Loafers/1'); ?>" id="v_loafers" name="v_loafers">Loafers</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Mules_Clogs/1'); ?>" id="v_mulesClogs" name="v_mulesClogs">Mules & Clogs</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Outdoor/1'); ?>" id="v_outdoor" name="v_outdoor">Outdoor</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Oxfords/1'); ?>" id="v_oxfords" name="v_oxfords">Oxfords</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Pumps/1'); ?>" id="v_pumps" name="v_pumps">Pumps</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Sandals/1'); ?>" id="v_sandals" name="v_sandals">Sandals</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Slippers/1'); ?>" id="v_slippers" name="v_slippers">Slippers</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Slip-Ons/1'); ?>" id="v_slipOns" name="v_slipOns">Slip-Ons</a></li>
                            <li><a href="<?php echo base_url('index.php/DonateItem/Category/Work_Safety/1'); ?>" id="v_workSafety" name="v_workSafety">Work & Safety</a></li>
                          </ul>
                      </li>
                  </ul>
              </li>
              <?php
                }
              }
              ?>
              <li class="sliding-u-b-t"><a href="<?php echo base_url('index.php/statistic'); ?>" name="statistic">Statistic</a></li>
              <li class="sliding-u-b-t"><a href="<?php echo base_url('index.php/faq'); ?>" name="faq"> FAQ </a></li>
              <li class="sliding-u-b-t"><a href="<?php echo base_url('index.php/about'); ?>" name="aboutus">About Us</a></li>
            </ul>
            <ul class="navbar-form navbar-left">
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <?php if(isset($menu)) echo '<li class="sliding-u-b-t"><a href="'. base_url('index.php/profile/resetpwd') . '" name="resetPassword">Reset Password</a></li>'; ?>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      </div>
  </body>
  <script>
  $(document).ready(function() {
    $('.navbar a.dropdown-toggle').on('click',function(e) {
        var $el = $(this);
        var $parent = $(this).offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if(!$parent.parent().hasClass('nav')) {
            $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
        }

        $('.nav li.open').not($(this).parents("li")).removeClass("open");

        return false;
    });
});
  </script>
</html>
