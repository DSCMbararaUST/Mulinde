<!--HEADER SECTION-->
<?php include "header.php";?>




<section class="container">
<div class="row d-flex justify-content-center"> 
<article class="card border-0" style="width: 55rem;">
<div class="card-body p-5">
<div>
	<h2 class="text-left">Request Service</strong></h2>
	<hr>
</div>

<!-- <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
    <i class="fas fa-user-plus"></i>  SIGN-UP</a></li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
    <i class="fas fa-sign-in-alt"></i>  SIGN-IN</a></li>
</ul> -->

<!-- <div class="tab-content">
<div class="tab-pane fade show active" id="nav-tab-card"> -->
 <!--  <p class="alert alert-success">SELECT YOUR PREFFERED PAYMENT METHOD FROM THE OPTIONS</p> -->
  <form role="form" action="func.php" method="post">
  <div class="form-group">
    <label for="username">SERVICE</label>
<select id="inputState" class="form-control"  name="service">
<option selected>Choose Service</option>
<option>Construction</option>
<option>Housing</option>
</select>
    <!-- <input type="text" class="form-control" name="username" placeholder="" required> -->
  </div> <!-- form-group.// -->

<div class="row">
      <div class="col-sm-6">
          <div class="form-group">
              <label><span class="hidden-xs">DATE</span> </label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="date">
            </div>
          </div>
      </div>
      <div class="col-sm-6">
          <div class="form-group">
              <label data-toggle="" title="">TIME</label>
              <input type="text" class="form-control" required name="time">
          </div> <!-- form-group.// -->
      </div>
  </div> <!-- row.// -->


  <div class="form-group">
    <label for="">DESCRIPTION</label>
      <!-- <input type="text" class="form-control" name="" placeholder="" required style="height:100px;"> -->
      <textarea class="form-control" placeholder="" style="height:80px;" required name="description"></textarea>
  </div> 

<!-- <div class="form-group">
    <label for="">PHONE NUMBER</label>
      <input type="text" class="form-control" name="" placeholder="" required>
  </div> -->


  <div class="form-group">
    <label for="">CONTACT</label>
      <input type="text" class="form-control"  placeholder="" required name="contact">
  </div>

  <!-- <div class="form-group">
    <label for="">CITY</label>
      <input type="text" class="form-control" name="" placeholder="" required>
  </div> -->

  
  <div class="row">
      <div class="col-sm-8">
          <div class="form-group">
              <label><span class="hidden-xs">LOCATION</span> </label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="location">
            </div>
          </div>
      </div>
      <div class="col-sm-4">
          <div class="form-group">
              <label data-toggle="" title="">AMOUNT OFFERED<i class="fa fa-question-circle"></i></label>
              <input type="number" class="form-control" required name="amount">
          </div> <!-- form-group.// -->
      </div>
  </div> <!-- row.// -->
  <input type="submit" class="btn btn-success" name="request_submit" value="REQUEST NOW">
  <!-- <button class="subscribe btn btn-success" type="button">REQUEST NOW</button> -->
  </form>

<!-- </div> 
<div class="tab-pane fade" id="nav-tab-paypal">

<form role="form">
  <div class="form-group">
    <label for="username">FULL NAME</label>
    <input type="text" class="form-control" name="username" placeholder="" required="">
  </div> 


  <button class="subscribe btn btn-primary btn-block" type="button"> SIGN IN </button>
  </form>
 -->


</div> 
</article> <!-- card.// -->
</div>
</section>








<!--FOOTER SECTION-->
 <?php include "footer.php";?>