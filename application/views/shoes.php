<!DOCTYPE html>
<html lang="en">
<head>
  <title>SixElpis | Shoes Donate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
  <style>
 body {
     font-family: 'Athiti';font-size: 22px;
 }
 </style>
</head>
<body style="background-color:#41A7FF;">

<nav class="navbar navbar-inverse" style="position: fixed; width: 100%; z-index: 1" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>


    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li style="color:red;"><a href="<?php echo base_url() ?>index.php" style='color:white;'>หน้าแรก</a></li>
        <li><a href="#" style='color:white;'>บริจาค</a></li>
        <li class="active" ><a href="#" style='color:white;'>รับบริจาค</a></li>

        <li><a href="#" style='color:white;'>ติดต่อเรา</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
<nav class="navbar navbar-inverse visible-xs" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Age</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs" style="background-color:#41A7FF;">
      <img src="../../img/logo.png" style="width: 100%;  height:100%;    " >
    </div>
    <br>

    <div class="col-sm-9">
      <div class="well" style="background-color:#41A7FF;">
        <h2  style="text-align: center; color:white;">รองเท้าที่พร้อมแบ่งปัน</h2>
        <h4 style="text-align: center; color:white;">เหล่ารองเท้าที่รอคุณเป็นเจ้าของ หลากหลายประเภท อาทิ รองเท้ากีฬา ร้องเท้าผ้าใบ รองเท้าใส่เล่น ร้องเท้าส้นสูง เป็นต้น</h4>
      </div>


      <div class="row">

        <div class="col-sm-4">
          <div class="well">

              <img src="../../img/new.png" style="width: 20%;  height: auto;   margin-left: -6%; " >

          <img src="../../img/b.png" id="product">
            <?php
                $t=time();
                echo "<h5 align='right'>สถานะ : <p style='color:red'>พร้อมแบ่งปัน</p> </h5>";
                echo "โพสเมื่อ : ";
                echo(date("Y-m-d",$t));




                echo "<br>";
                echo "โดย : avarta";
                ?>
            <h3 style="text-align: center;">nike Air191</h3>
            <h5 style="text-align: center;"><a href="<?php echo base_url() ?>index.php/Redirect/detail">รายละเอียดเพิ่มเติม</a></h5>

          </div>
        </div>

        <div class="col-sm-4">
          <div class="well">
            <img src="../../img/new.png" style="width: 20%;  height: auto;   margin-left: -6%; " >
            <img src="../../img/b.png" id="product">
            <?php
                $t=time();
                echo "<h5 align='right'>สถานะ : <p style='color:red'>พร้อมแบ่งปัน</p> </h5>";
                echo "โพสเมื่อ : ";
                echo(date("Y-m-d",$t));




                echo "<br>";
                echo "โดย : avarta";
                ?>
            <h3 style="text-align: center;">nike Air191</h3>
            <h5 style="text-align: center;"><a href="<?php echo base_url() ?>index.php/Redirect/detail">รายละเอียดเพิ่มเติม</a></h5>

          </div>
        </div>

        <div class="col-sm-4">
          <div class="well">
            <img src="../../img/new.png" style="width: 20%;  height: auto;   margin-left: -6%; " >
              <img src="../../img/c.png" id="product">
              <?php
                  $t=time();
                  echo "<h5 align='right'>สถานะ : <p style='color:red'>พร้อมแบ่งปัน</p> </h5>";
                  echo "โพสเมื่อ : ";
                  echo(date("Y-m-d",$t));




                  echo "<br>";
                  echo "โดย : avarta";
                  ?>
              <h3 style="text-align: center;">nike Air191</h3>
              <h5 style="text-align: center;"><a href="<?php echo base_url() ?>index.php/Redirect/detail">รายละเอียดเพิ่มเติม</a></h5>

          </div>
        </div>

        <div class="col-sm-4">
          <div class="well">
            <img src="../../img/new.png" style="width: 20%;  height: auto;   margin-left: -6%; " >
              <img src="../../img/c.png" id="product">
              <?php
                  $t=time();
                  echo "<h5 align='right'>สถานะ : <p style='color:red'>พร้อมแบ่งปัน</p> </h5>";
                  echo "โพสเมื่อ : ";
                  echo(date("Y-m-d",$t));




                  echo "<br>";
                  echo "โดย : avarta";
                  ?>
              <h3 style="text-align: center;">nike Air191</h3>
              <h5 style="text-align: center;"><a href="<?php echo base_url() ?>index.php/Redirect/detail">รายละเอียดเพิ่มเติม</a></h5>

          </div>
        </div>

        <div class="col-sm-4">
          <div class="well">
            <img src="../../img/new.png" style="width: 20%;  height: auto;   margin-left: -6%; " >
              <img src="../../img/c.png" id="product">
              <?php
                  $t=time();
                  echo "<h5 align='right'>สถานะ : <p style='color:red'>พร้อมแบ่งปัน</p> </h5>";
                  echo "โพสเมื่อ : ";
                  echo(date("Y-m-d",$t));




                  echo "<br>";
                  echo "โดย : avarta";
                  ?>
              <h3 style="text-align: center;">nike Air191</h3>
              <h5 style="text-align: center;"><a href="<?php echo base_url() ?>index.php/Redirect/detail">รายละเอียดเพิ่มเติม</a></h5>

          </div>
        </div>

        <div class="col-sm-4">
          <div class="well">
            <img src="../../img/new.png" style="width: 20%;  height: auto;   margin-left: -6%; " >
              <img src="../../img/c.png" id="product">
              <?php
                  $t=time();
                  echo "<h5 align='right'>สถานะ : <p style='color:red'>พร้อมแบ่งปัน</p> </h5>";
                  echo "โพสเมื่อ : ";
                  echo(date("Y-m-d",$t));




                  echo "<br>";
                  echo "โดย : avarta";
                  ?>
              <h3 style="text-align: center;">nike Air191</h3>
              <h5 style="text-align: center;"><a href="<?php echo base_url() ?>index.php/Redirect/detail">รายละเอียดเพิ่มเติม</a></h5>

          </div>
        </div>


      </div>


  </div>
</div>

</body>
</html>
