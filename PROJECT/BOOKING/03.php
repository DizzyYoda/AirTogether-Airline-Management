<?php
session_start();
include('../LOGIN/connect.php');   //connects with database
include('../LOGIN/function.php');  //has functions like redirect 

if(isset($_POST['CHECK'])){  //checks weather the form is submited or not
	$a1=$_POST['from'];  // gets username from using post method
	$a2=$_POST['to'];
	$a3=$_POST['dep_date'];  //gets password from using post method
	$sql="select * from a_d where Arrival_air_city='$a2' and Dept_air_city='$a1' and dept_date='$a3'";  //query to get all the data with matching credantials
	$res=mysqli_query($con,$sql);
	$c_row=mysqli_num_rows($res);
	echo $c_row;
	$a2d=array();
	$_SESSION['rowcount']=$c_row;
	if($c_row>0){     // if number of rows is greater than 1 means user is present
		while($row=mysqli_fetch_array($res))
		{
			$sub=array($row["fly_id"],$row["Plane_no"],$row["Air_time"],$row["arrival_time"],$row["dept_time"],$row["arrival_date"]);
			
			$a2d[]=$sub;
		}
		$_SESSION['arr']=$a2d;  
		//$_SESSION['IS_LOGIN']='yes';   //declares session variable that this user has logged in
		//declares  session variable to store admin name
	   //redirect to index.php page
	}
	redirect('print.php'); 

    

}
?>