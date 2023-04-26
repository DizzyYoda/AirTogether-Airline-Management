<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    $a=$_SESSION["fly"];
    include('../LOGIN/connect.php');   //connects with database
    include('../LOGIN/function.php');  //has functions like redirect
    $sql="select * from a_d where fly_id='$a'";  //query to get all the data with matching credantials
	$res=mysqli_query($con,$sql); 
    $row=mysqli_fetch_assoc($res);
    $c_row2=mysqli_num_rows($res);
    
    $b1=$row["Plane_no"];
    $c=$_SESSION["ID"];
    $sql="insert into boards values('$c','$b1',NULL)";
    mysqli_query($con,$sql);

    $sql="select * from flight where Plane_no='$b1'";
    $res=mysqli_query($con,$sql);
    $row2=mysqli_fetch_assoc($res);
    $_SESSION['array']=0;

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

    $sql="select * from boards where Plane_no='$b1' and P_id='$c'";
    $res=mysqli_query($con,$sql);
    $row6=mysqli_fetch_assoc($res);

	if($c_row2>0){     // if number of rows is greater than 1 means user is present
        $_SESSION['array']=array(
            $row6["Ticket_No"],
            $row["Plane_no"],$row["Air_time"],$row["arrival_time"],$row["dept_time"],$row["arrival_date"],
            $row2["Name"],$row2["Capacity"],
            $row3["A_name"],$row3["Country"],
            $row4["A_name"],$row4["Country"],
            $row5["Pi_name"],$row5["years_flying"],$a
        );
		redirect("display01.php");
		//$_SESSION['IS_LOGIN']='yes';   //declares session variable that this user has logged in
		//declares  session variable to store admin name
	   //redirect to index.php page
	}

?>
</body>
</html>

    
