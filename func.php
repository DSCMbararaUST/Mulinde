<?php
$con=mysqli_connect("localhost","root","","mulinde");
if(isset($_POST['request_login'])){
$nin=$_POST['nin'];
$query="select nin from requestSignup where nin='$nin'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	header("Location:request_service.php");
}
else
{
    echo "<script>alert('Enter Correct Details ')</script>";
    echo "<script>window.open('home.php','_self')</script>";   
}
}

if(isset($_POST['request_signup']))
{
	$fullName=$_POST['fullName'];
	$nin=$_POST['nin'];
	$contact=$_POST['contact'];
	$query="insert into requestSignup(fullName,nin,contact)values('$fullName','$nin','$contact')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script>alert('THANKS FOR SIGNING UP')</script>";
        echo "<script>window.open('home.php','_self')</script>"; 
	}
}



if(isset($_POST['request_submit']))
{
	$service=$_POST['service']; 
	$date=$_POST['date'];
	$time=$_POST['time']; 
	$description=$_POST['description'];
	$contact=$_POST['contact']; 
	$location=$_POST['location'];
	$amount=$_POST['amount'];
	$query="insert into requestService (service,date,time,description,contact,location,amount)values('$service','$date','$time','$description','$contact','$location','$amount')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script>alert('THANK YOU FOR TRUSTING MULINDE. WORKER WILL AVAILABLE ON SITE IN MINUTES')</script>";
        echo "<script>window.open('home.php','_self')</script>"; 
	}
}



// if(isset($_POST['request_service'])){
// $manageID=$_POST['manageID'];
// $password=$_POST['password'];
// $query="select manageID, password from managelogin where manageID='$manageID' and password='$password'";
// $result=mysqli_query($con,$query);
// if(mysqli_num_rows($result)==1)
// {
// 	header("Location:register.php");
// }
// else
// {
//     echo "<script>alert('YOU MUST BE A HOSTEL MANAGEMENT TO REGISTER HOSTEL ')</script>";
//     echo "<script>window.open('index.php','_self')</script>";   
// }
// }


// function get_patient_details(){
// global $con;
// $query="select * from patient";
// $result=mysqli_query($con,$query);
// while ($row=mysqli_fetch_array($result)) {
// 	$patientID=$row['patientID'];
// 	$firstName=$row['firstName'];
// 	$lastName=$row['lastName'];
// 	$village=$row['village'];
// 	$contact=$row['contact'];
// 	$symptoms=$row['symptoms'];
// 	echo "<tr>
// 	  <td>$patientID</td>
//       <td>$firstName</td>
//       <td>$lastName</td>
//       <td>$village</td>
//       <td>$contact</td>
//       <td>$symptoms</td>
// 	</tr>";
// }

// }

// if(isset($_POST['app_submit']))
// {
// 	$appointmentID=$_POST['appointmentID'];
// 	$patientID=$_POST['patientID'];
// 	$patientName=$_POST['patientName'];
// 	$patientContact=$_POST['patientContact'];
// 	$doctorAppointed=$_POST['doctorAppointed'];
// 	$query="insert into appointment(appointmentID,patientID,patientName,patientContact,doctorAppointed)values('$appointmentID','$patientID','$patientName','$patientContact','$doctorAppointed')";
// 	$result=mysqli_query($con,$query);
// 	if($result)
// 	{
// 		echo "<script>alert('Appointment Allocated ')</script>";
//         echo "<script>window.open('appointi.php','_self')</script>"; 
// 	}
// }

?>