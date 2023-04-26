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
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="testcc/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
</head>
<body>

<?php
include('../LOGIN/function.php');
session_start();
$a=$_SESSION['arr'];
$b=$_SESSION['rowcount'];
if($b>0)
{
    ?>
    <div class="card-body">
    <table id="datatablesSimple">    
        <tr>
            <th>Fly Id </th>
            <th>Plane Number </th>
            <th>Duration </th>
            <th>Arrival Time</th>
            <th>Departure Time</th>
            <th>Arrival Date</th>
            <th>Book</th>
        </tr>
    <?php    
    foreach($a as $i)
    {
        ?>
        <tr>
            <td><?php echo $i[0]; ?> </td>
            <td><?php echo $i[1]; ?> </td>
            <td><?php echo $i[2]; ?> </td>
            <td><?php echo $i[3]; ?> </td>
            <td><?php echo $i[4]; ?> </td>
            <td><?php echo $i[5]; ?> </td>
            <td>
                <form method="POST" action="temp.php">
			        <input type="submit" name="Enter" value="<?php echo $i[0]; ?>">
                </form>
            </td>
            
            </tr>
        <?php
        
    }
        
}

else
{
    ?>
    <h3>No flights Available</h3>
    <?php
}
?>
</table> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="testcc/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="testcc/assets/demo/chart-area-demo.js"></script>
        <script src="testcc/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="testcc/js/datatables-simple-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        
    </body>
</html>
<table>
