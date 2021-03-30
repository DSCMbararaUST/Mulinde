<!-- <!doctype html>
<html lang="en">

<head>  
 <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap-grid.min.css">
 <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.min.css">
 </head>
<body>  -->

<?php
include("func.php");
if(isset($_POST['work_search_submit']))
{
	$service=$_POST['Search'];
	$query="select * from requestservice where service='$service'";
	$result=mysqli_query($con,$query);

	echo "<div class'container-fluid'>
	<div class'card'>
	<div class='card-body'  style='background-color:#BEBEBE; color:#ffffff;'>


<!-- <div class='row'>
          <div class='col-md-1'>
        <a href='host.php' class='btn btn-primary'>Go Back</a>
      </div>
      <div class='col-md-3 text-center' style='color:blue;'><h3>VARSITY BOOK</h3></div>
      <div class='col-md-8'>
        <form class='form-group' action='hostel_search.php' method='post'>
          <div class='row'>
            <div class='col-md-10'>
          <input type='text' name='search' class='form-control' placeholder='ENTER CORRECT UNIVERSITY NAME TO VIEW LIST OF HOSTELS AND THEIR PRICES'></div>
          <div class='col-md-2'>
          <input type='submit' value='Search' name='hostel_search_submit' class='btn btn-primary'></div></div>
        </form>
      </div>
      </div> -->

	<div class='card-body' style='background-color:#BEBEBE;color:#ffffff;'>
<table class='table table-hover text-center'>
  <thead>
    <tr>
      <th>WORK TYPE</th>
      <th>LOCATION</th>
      <th>AMOUNT</th>
    </tr>
  </thead>
  <tbody>
  ";

	while ($row=mysqli_fetch_array($result)) {
    $service=$row['service'];
	$location=$row['location'];
	$amount=$row['amount'];



	echo"<tr>
	  <td>$service</td>
      <td>$location</td>
      <td>$amount</td>
	</tr>";
	}
	echo "</tbody></table></div></div></div>";

}

?>
