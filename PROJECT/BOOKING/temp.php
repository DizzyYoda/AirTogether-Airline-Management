<?php 
session_start();
include('../LOGIN/function.php');
$_SESSION["fly"]=$_POST['Enter'];
//echo $_SESSION["fly"];
redirect("ticket.php");
?>