<?php
session_start();
include('connect.php');   //connects with database
include('function.php');  //has functions like redirect 

if(isset($_POST['Register']))
{
	
    $a1=$_POST["fname"]." ".$_POST["lname"];
    $a2=$_POST["Phone"];
    $a3=$_POST["email"];
    $a4=$_POST["password"];
    $a5=$_POST["Gender"];
    $a6=$_POST["city"];
    $a7=$_POST["state"];
    $a8=$_POST["address"];
    $a9=$_POST["pincode"];
    $a10=$_POST["DOB"];
    $sql="insert into reservation values(NULL,'$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10')";
	mysqli_query($con,$sql);
    //'$_POST['fname']+$_POST['lname']','$_POST['Phone']','$_POST['email']','$_POST['password']','$_POST['Gender']','$_POST['city']','$_POST['state']','$_POST['address']','$_POST['pincode']','$_POST['DOB']';  query to get all the data with matching credantials
    redirect('main.php');

}
?>