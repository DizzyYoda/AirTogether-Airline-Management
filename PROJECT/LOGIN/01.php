<?php
session_start();
include('connect.php');   //connects with database
include('function.php');  //has functions like redirect 

if(isset($_POST['Login'])){  //checks weather the form is submited or not
	$username=$_POST['Email'];  // gets username from using post method
	$password=$_POST['password'];  //gets password from using post method
	$sql="select * from reservation where P_Mail='$username' and P_Pass='$password'";  //query to get all the data with matching credantials
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){     // if number of rows is greater than 1 means user is present
		$row=mysqli_fetch_assoc($res);  
		//$_SESSION['IS_LOGIN']='yes';   //declares session variable that this user has logged in
		$_SESSION['user_name']=$row['P_Name']; //declares  session variable to store admin name
		$_SESSION['ID']=$row["P_Id"];
		redirect('../test/dash.php');    //redirect to index.php page
	}else{
        
        $_SESSION['msg']="Please enter valid login details";
        
        $_SESSION['LOGIN_FLAG']=1;
        redirect('main.php');
        
	}
    

}
?>