<!DOCTYPE html>
<?php include("func.php");?>
<html lang="en" dir="ltr">
<head>
	<!-- Important meta tags -->
	<meta charset="utf-8" />
	<meta name="description" content="Official website MULINDE" />
	<meta name="kewords" content="MULINDE, Connecting Workers" />
	<meta name="author" content="NASASIRA DANIEL" />
	<meta http-equiv="refresh" content="5000" />
	
  <!-- Latest compiled and minified Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css.map" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.rtl.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.rtl.css.map" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.rtl.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.rtl.min.css.map" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css.map" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css.map" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.rtl.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.rtl.css.map" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.rtl.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.rtl.min.css.map" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css.map" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css.map" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.min.css.map" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.rtl.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.rtl.css.map" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.rtl.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css.map" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.min.css.map" />
    
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" /> -->

	<!-- Font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" type="text/css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css" type="text/css" />
	
	<!-- AOS CSS -->
	 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" type="text/css" />
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="file.css"/>

	<!-- Website title -->
	<title>MULINDE</title>
</head>


<body>
<!-------------------------NAV BAR----------------------->
<section id="nav-bar"> 
<nav class="navbar navbar-expand-lg py-3 navbar-light shadow-sm">
<div class="container">
<a href="home.php" class="navbar-brand">
<!-- Logo Image -->
<img src="image/mulinde.png" width="45" alt="" class="d-inline-block align-middle">
<!-- Logo Text -->
<span class="text-uppercase font-weight-bold">MULINDE</span>
</a>

<button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
<span class="navbar-toggler-icon"></span>
</button>

<div id="navbarSupportedContent" class="collapse navbar-collapse">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a href="#how_akalimo_works" class="nav-link nas">HOW IT WORKS<span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a href="#services" class="nav-link">SERVICES</a>
</li>
<!-- <li class="nav-item">
<a href="#" class="btn  text-blue"  data-toggle="modal" data-target="#signUp">SIGN-UP/IN</a>
</li>
<li class="nav-item">
<a href="#" class="btn btn-success text"  data-toggle="modal" data-target="#signUp">SIGN-UP/IN</a>
</li> -->
<li class="nav-item">
<a href="#" class="btn btn-success text"  data-toggle="modal" data-target="#signUp">SIGN-UP/IN</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link" data-toggle="modal" data-target="#requestService">REQUEST SERVICE</a>
</li>
<li class="nav-item">
<a href="learn.php" class="nav-link">LEARN</a>
</li>
</ul>
</div>
</div>
</nav>
</section>
       


<!-- SIGN UP MODAL -->
<!-- Modal -->
<div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-user"></i>SIGN UP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">




<article class="card border-0">
<div class="card-body ">

<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#nav-tab-signup">
    <i class="fas fa-user-plus"></i>  SIGN-UP</a></li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#nav-tab-signin">
    <i class="fas fa-sign-in-alt"></i>  SIGN-IN</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane fade show active" id="nav-tab-signup">
 <!--  <p class="alert alert-success">SELECT YOUR PREFFERED PAYMENT METHOD FROM THE OPTIONS</p> -->
  <form role="form">
  <div class="form-group">
    <label for="username">FULL NAME</label>
    <input type="text" class="form-control" name="username" placeholder="" required>
  </div> <!-- form-group.// -->

  <div class="form-group">
    <label for="">NIN NUMBER</label>
   <!--  <div class="input-group"> -->
      <input type="text" class="form-control" name="" placeholder="" required>
     <!--  <div class="input-group-append">
        <span class="input-group-text text-muted">
          <i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>   
          <i class="fab fa-cc-mastercard"></i> 
          <p>+256</p>
        </span>
      </div> -->
    <!-- </div> -->
  </div> <!-- form-group.// -->

  <div class="row">
      <div class="col-sm-8">
          <div class="form-group">
              <label><span class="hidden-xs">CONTACT</span> </label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="">
            </div>
          </div>
      </div>
      <div class="col-sm-4">
          <div class="form-group">
              <label data-toggle="" title="">AGE<i class="fa fa-question-circle"></i></label>
              <input type="number" class="form-control" required="">
          </div> <!-- form-group.// -->
      </div>
  </div> <!-- row.// -->
  <button class="subscribe btn btn-primary btn-block" type="button"> SIGN UP </button>
  </form>

</div> <!-- tab-pane.// -->

<div class="tab-pane fade" id="nav-tab-signin">

<form role="form">
  <div class="form-group">
    <label for="username">FULL NAME</label>
    <input type="text" class="form-control" name="username" placeholder="" required="">
  </div> <!-- form-group.// -->


  <button class="subscribe btn btn-primary btn-block" type="button"> SIGN IN </button>
  </form>



</div> <!-- card-body.// -->
</article> <!-- card.// -->

      </div>
    </div>
  </div>
</div>




<!-- REQUEST NOW MODAL -->
<!-- Modal -->
<div class="modal fade" id="requestService" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text">
        <img src="image/mulindee.png" width="150" class="img-fluid rounded mx-auto d-block" style="margin-top:-20px; margin-bottom:-20px;">
        <!-- <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-user"></i>SIGN UP</h5> -->
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">




<article class="card border-0">
<div class="card-body ">

<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#nav-tab-signUp">
    <i class="fas fa-user-plus"></i>  SIGN-UP</a></li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#nav-tab-login">
    <i class="fas fa-sign-in-alt"></i>  SIGN-IN</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane fade show active" id="nav-tab-signUp">
  <p class="alert alert-success">PLEASE SIGN UP TO REQUEST FOR A SERVICE</p>

  <form role="form" action="func.php" method="post">
  <div class="form-group">
    <label for="username">FULL NAME</label>
    <input type="text" class="form-control" name="fullName" placeholder="" required>
  </div> <!-- form-group.// -->

  <div class="form-group">
    <label for="">NIN NUMBER</label>
      <input type="text" class="form-control" name="nin" placeholder="" required>
  </div> <!-- form-group.// -->

  <div class="form-group">
    <label for="">CONTACT</label>
      <input type="text" class="form-control" name="contact" placeholder="" required>
  </div>

  <!-- <div class="row">
      <div class="col-sm-8">
          <div class="form-group">
              <label><span class="hidden-xs">CONTACT</span> </label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="">
            </div>
          </div>
      </div>
      <div class="col-sm-4">
          <div class="form-group">
              <label data-toggle="" title="">AGE<i class="fa fa-question-circle"></i></label>
              <input type="number" class="form-control" required="">
          </div> 
      </div>
  </div>  -->
  <!-- row.// -->
  <!-- <button class="subscribe btn btn-primary btn-block" type="button"> SIGN UP </button> -->
  <input type="submit" class="btn btn-success btn-block" name="request_signup" value="SIGN UP">
  </form>

</div> <!-- tab-pane.// -->

<div class="tab-pane fade" id="nav-tab-login">

<form role="form" action="func.php" method="post">
  <div class="form-group">
    <label for="username">ENTER NIN NUMBER</label>
    <input type="text" class="form-control" name="nin" placeholder="" required>
  </div> <!-- form-group.// -->
 <!--  <button class="subscribe btn btn-primary btn-block" type="button"> SIGN IN</button> -->
 <input type="submit" value="LOGIN" name="request_login"  class="btn btn-success">
 <!-- <a href="request_service.php" class="btn btn-primary">LOGIN</a> -->
  </form>

</div> <!-- card-body.// -->
</article> <!-- card.// -->




      </div>
    </div>
  </div>
</div>


