<?php
session_start();
include('../LOGIN/connect.php');   //connects with database
include('../LOGIN/function.php');  //has functions like redirect 

if(isset($_POST['show'])){  //checks weather the form is submited or not
	$a=$_POST['ticket'];  // gets username from using post method
	$b=$_POST['f_id'];  //gets password from using post method
	$sql="select * from a_d where fly_id='$b'";  //query to get all the data with matching credantials
	$res=mysqli_query($con,$sql); 
    $row=mysqli_fetch_assoc($res);

    $c_row2=mysqli_num_rows($res);
    
	$b1=$row["Plane_no"];
    $sql="select * from flight where Plane_no='$b1'";
    $res=mysqli_query($con,$sql);
    $row2=mysqli_fetch_assoc($res);
    $_SESSION['array1']=0;

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

    $sql="select * from boards where ticket_No='$a'";
    $res=mysqli_query($con,$sql);
    $row6=mysqli_fetch_assoc($res);
	//$characters1 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	//$characters2 = '123456';
	//$seat=$characters1[rand(0, 26)].$characters2[rand(0, 6)];

	$d=$row6["P_id"];
	$sql="select * from reservation where P_id='$d'";
    $res=mysqli_query($con,$sql);
    $row7=mysqli_fetch_assoc($res);

	if($c_row2>0){     // if number of rows is greater than 1 means user is present
        $_SESSION['array1']=array(
            $row6["Ticket_No"],
            $row["Plane_no"],$row["Air_time"],$row["arrival_time"],$row["dept_time"],$row["arrival_date"],
            $row2["Name"],$row2["Capacity"],
            $row3["A_name"],$row3["Country"],
            $row4["A_name"],$row4["Country"],
            $row5["Pi_name"],$row5["years_flying"],
			$row7["P_Name"],$row7["P_Gender"],$row7["P_DOB"]//$seat
        );
        redirect("display01.php");

}
}
?>