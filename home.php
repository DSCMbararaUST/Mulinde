<!--HEADER SECTION-->
<?php include "header.php";?>


<!--SEARCH SECTION-->
<div class="jumbotron jumb">
<br/>    
<div class="row justify-content-center">
<div class="col-12 col-md-10 col-lg-8">
<h2 class="text-center text-white"><strong>Get your Work done</strong></h2>
<h3 class="text-center text-white">Browse through thousands of Services. Choose one you trust. Pay as you go.</h3>
 <br>   
<form method="POST" action="work_search.php" method="post">
<input class="form-control form-control-lg" name="" value="" placeholder="Find Services" type="search"/>
<br>
<input type="submit" value="Search" name="work_search_submit" class="btn btn-lg btn-outline-success">
<!-- <button type="submit" class="btn btn-lg btn-outline-success"> <span><i class="fa fa-search"></i>  SEARCH</span> -->
<!-- </button> -->
</form>
</div>
</div>
</div>

<!--HOW MULINDE WORKS-->

<section id="how_akalimo_works">
<div class="container text-center">
    
<div class="row">
<div class="col-xl-6 mx-auto text-center">
<div class="section-title mb-100">
<h4>HOW MULINDE WORKS</h4>
</div>
</div>
</div>
    
<div class="row text-center">
<div class="col-md-3 services">
<img src="image/worker-beard.png" class="service-img">
<h4> Post a Request </h4>
<p> Create your free request posting and start receiving Quotes within hours</p>
</div> 
<div class="col-md-3 services">
<img src="image/worker-beard.png" class="service-img">
<h4> Hire Freelancers </h4>
<p> Compare the Quotes you receive and hire the best freelance professionals for the job </p>
</div> 
<div class="col-md-3 services">
<img src="image/worker-beard.png" class="service-img">
<h4> Get Work Done</h4>
<p> Decide on how and when payments will be made and use WorkRooms to collaborate, communicate and track work</p>
</div> 
<div class="col-md-3 services">
<img src="image/worker-beard.png" class="service-img">
<h4> Make Secure Payments</h4>
<p> Choose from multiple payment methods with SafePay payment protection. </p>
</div> 
</div> 
<!-- <button type="submit" class="btn btn-primary"> PRIVATE POLICY </button> -->
</div> 
      <hr>
</section>
    

<!--SERVICES SECTION-->
<section class="services pt-50 pb-50" id="services">
<div class="container">
<div class="row">
<div class="col-xl-6 mx-auto text-center">
<div class="section-title mb-100">
<h4>SERVICES</h4>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<!-- Single Service -->
<div class="single-service">
<i class="fa fa-laptop"></i>
<h4>Construct </h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- Single Service -->
<div class="single-service">
<i class="fa fa-gears"></i>
<h4>HouseMaids</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- Single Service -->
<div class="single-service">
<i class="fa fa-mobile"></i>
<h4>Luggage</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- Single Service -->
<div class="single-service">
<i class="fa fa-magic"></i>
<h4>Construct</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- Single Service -->
<div class="single-service">
<i class="fa fa-pencil"></i>
<h4>HouseMaid</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- Single Service -->
<div class="single-service">
<i class="fa fa-fa fa-lightbulb-o"></i>
<h4>HouseMaid</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
</div>
</div>
</div>
</div>
<!-- <div class="row text-center">
<button type="submit" class="btn btn-primary"> PRIVATE POLICY </button>
</div> -->
</section>
<!--end of services section-->
    


<!--ASK QUESTION SECTION-->
<section style="background: #2a363f; padding-top:30px;">
    <div class="container text-center" style="height: 200px;">
      <div class="section-title">
      <h4 class="mt-1 text-white">Need help?</h4><!-- <hr class="mb-4" style="border: 1px solid yellow; width: 10%;" /> -->
      </div>
      <div class="row">
        <div class="col-md-12">
        <p class="text-left text-white" style="font-size: 22px; font-height: 25px">Ask your Question here</p>
        </div>
      </div>
      
      <form class="form-group" action="func.php" method="post">
      <div class="input-group mb-3">
      <input type="text" class="form-control" name="question" placeholder="Type your question..."/>
    <div class="input-group-append">
    <!-- <button class="btn btn-success text-white" name="question_submit" type="submit">Submit</button> -->

    <input type="submit" class="btn btn-success text-white"  name="question_submit" value="Submit">
          </div>
      </div>
    </form>
    </div>
</section>



<!--FOOTER SECTION-->

 <?php include "footer.php";?>