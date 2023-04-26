<?php
$con=mysqli_connect("localhost","root","","airport");
if(mysqli_connect_error())
{
die("cannot connect".mysqli_connect_error());
}

//$sql="select * from reservation where P_mail='abcd@gmail.com' and password='1234'";  //query to get all the data with matching credantials
//$res=mysqli_query($con,$sql);
//$row=mysqli_fetch_assoc($res);
//echo $row['P_mail'];


?>