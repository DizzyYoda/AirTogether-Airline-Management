<?php
session_start();
include('../LOGIN/connect.php');   //connects with database
include('../LOGIN/function.php');  //has functions like redirect 

if(isset($_POST['CHECK'])){  //checks weather the form is submited or not
	$a1=$_POST['from'];
	$a2=$_POST['to'];
	$a3=$_POST['dep_date'];
    $a4=$_POST['flightnum'];
	$sql="select * from a_d where Arrival_air_city='$a2' and Dept_air_city='$a1' and dept_date='$a3' and Plane_no='$a4'";  //query to get all the data with matching credantials
	$res=mysqli_query($con,$sql);
	$c_row=mysqli_num_rows($res);
    $row=mysqli_fetch_assoc($res);
    $c_row2=mysqli_num_rows($res);
	$_SESSION['rowcount2']=$c_row2;
    
    $b1=$row["Plane_no"];
    $sql="select * from flight where Plane_no='$b1'";
    $res=mysqli_query($con,$sql);
    $row2=mysqli_fetch_assoc($res);
    $_SESSION['arr2']=0;

    $b2=$row["Arrival_air_city"];
    $b3=$row["Dept_air_city"];
    $sql="select * from airport where State='$b2'";
    $res=mysqli_query($con,$sql);
    $row3=mysqli_fetch_assoc($res);
    $sql="select * from airport where State='$b3'";
    $res=mysqli_query($con,$sql);
    $row4=mysqli_fetch_assoc($res);

    $sql="select * from pilot p, fly f where p.Pi_id=f.Pi_id and f.Plane_no='$b1'";
    $res=mysqli_query($con,$sql);
    $row5=mysqli_fetch_assoc($res);

	if($c_row2>0){     // if number of rows is greater than 1 means user is present
        $_SESSION['arr2']=array(
            $row["Plane_no"],$row["Air_time"],$row["arrival_time"],$row["dept_time"],$row["arrival_date"],
            $row2["Name"],$row2["Capacity"],
            $row3["A_name"],$row3["Country"],
            $row4["A_name"],$row4["Country"],
            $row5["Pi_name"],$row5["years_flying"]
        );
			  
		//$_SESSION['IS_LOGIN']='yes';   //declares session variable that this user has logged in
		//declares  session variable to store admin name
	   //redirect to index.php page
	}
	redirect('display.php'); 

}
?>