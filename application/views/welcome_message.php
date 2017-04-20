<!DOCTYPE html>
<html lang="en">
<head>
  <title>SixElpis | Shoes Donate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css/style.css">
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
        <li class="active"><a href="#" style="color:white;">หน้าแรก</a></li>
        <li><a href="#" style="color:white;">บริจาค</a></li>
        <li><a href="<?php echo base_url() ?>index.php/Redirect/shoes" style="color:white;">รับบริจาค</a></li>

        <li><a href="" style="color:white;">ติดต่อเรา</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/1.png" style="width: 50%; height: auto;" >
        <div class="carousel-caption">
          <h3>Sell $</h3>
          <p>Money Money.</p>
        </div>
      </div>

      <div class="item">
         <img src="img/2.png" style="width: 50%; height: auto;" >
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>
      </div>

      <div class="item">
         <img src="img/3.png" style="width: 50%; height: auto;" >
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>
      </div>

      <div class="item">
         <img src="img/4.png" style="width: 50%; height: auto;" >
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="container text-center">
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>
    </div>
 <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>
    </div>
     <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>
    </div>

    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
