<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>

<nav class="navbar navbar-inverse" style="position: fixed; width: 100%; z-index: 1" >
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
        <li><a href="<?php echo base_url() ?>index.php">หน้าแรก</a></li>
        <li><a href="#">บริจาค</a></li>
        <li class="active"><a href="#">รับบริจาค</a></li>

        <li><a href="#">ติดต่อเรา</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Age</a></li>
        <li><a href="#section3">Gender</a></li>
        <li><a href="#section3">Geo</a></li>
      </ul><br>
    </div>
    <br>




      <div class="row">

        <div class="col-sm-4">
          <div class="well">

          <div class='text-center'>
            <img src="../../img/b.png" id="product" >
          </div>

          </div>
        </div>



        <div class="col-sm-4">
          <div class="well">

            <?php

                echo "<img src='../../img/new.png' style='width: 30%;  height: auto;   margin-left: 90%; ' >";

                echo "<h3 style='text-align: center;'>nike kekekek</h3>";
                echo "<br><br>";
                $t=time();
                echo "<h5 >ประเภท : </h5>";
                echo "<h5 >ขนาดรองเท้า : </h5>";
                echo "<h5 >ระยะเวลาการใช้งาน : </h5>";
                echo "<h5 >เหมาะสำหรับ : </h5>";
                echo "<h5 >รายละเอียดสินค้า : </h5>";
                echo "<h5 >สถานะ : </h5>";
                echo "โพสเมื่อ : ";
                echo(date("Y-m-d",$t));




                echo "<br>";
                echo "โดย : ";
                echo "<br><br><br><br>";
                echo "<div class='text-center'>";
                echo " <button type='button' class='btn btn-info'   >สนใจรับบริจาค</button>";
               echo "</div>";
                ?>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>Text</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
