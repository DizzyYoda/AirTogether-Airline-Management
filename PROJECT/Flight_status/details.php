<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>





<?php
session_start();
$i=$_SESSION['arr2'];
$b=$_SESSION['rowcount2'];
if($b>0)
{
    ?>

            <p class="text-white-50 mb-5">Plane Number: </p>
            <p class="form-white mb-4"><?php echo $i[0]; ?> </p>

            <p class="text-white-50 mb-5">Duration: </p>
            <p class="form-white mb-4"><?php echo $i[1]; ?></p>
            
            <p class="text-white-50 mb-5">Arrival Time:</p>
            <p class="form-white mb-4"><?php echo $i[2]; ?> </p>

            <p class="text-white-50 mb-5">Departure Time:</p>
            <p class="form-white mb-4"><?php echo $i[3]; ?> </p>

            <p class="text-white-50 mb-5">Arrival Date:</p>
            <p class="form-white mb-4"><?php echo $i[4]; ?> </p>

            <p class="text-white-50 mb-5">Flight name:</p>
            <p class="form-white mb-4"><?php echo $i[5]; ?> </p>

            <p class="text-white-50 mb-5">Flight Capacity:</p>
            <p class="form-white mb-4"><?php echo $i[6]; ?> </p>

            <p class="text-white-50 mb-5">Arrival airport name:</p>
            <p class="form-white mb-4"><?php echo $i[7]; ?> </p>
            
            <p class="text-white-50 mb-5">Arrival airport Country:</p>
            <p class="form-white mb-4"><?php echo $i[8]; ?> </p>

            <p class="text-white-50 mb-5">Dept airport name:</p>
            <p class="form-white mb-4"><?php echo $i[9]; ?> </p>
            
            <p class="text-white-50 mb-5">Dept airport Country:</p>
            <p class="form-white mb-4"><?php echo $i[10]; ?> </p>
            
            <p class="text-white-50 mb-5">Pilot Name:</p>
            <p class="form-white mb-4"><?php echo $i[11]; ?> </p>
            
            <p class="text-white-50 mb-5">years of flying:</p>
            <p class="form-white mb-4"><?php echo $i[12]; ?> </p>

        <?php
    
}

else
{
    ?>
    <h3>No Such Flight Exist</h3>
    <?php
}
?>


 
</body>
</html>
<table>
