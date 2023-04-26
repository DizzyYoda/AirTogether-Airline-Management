
    <?php
    include('../LOGIN/connect.php');   //connects with database 
    $a=$_SESSION["ID"];
    $sql="select * from boards b, a_d a where b.Plane_no=a.Plane_No and P_id='$a' order by dept_date desc";  //query to get all the data with matching credantials
    $res=mysqli_query($con,$sql);
    $r=mysqli_fetch_assoc($res);
    if(mysqli_num_rows($res)>0){
        $a1=$r["Arrival_air_city"];
        $a2=$r["Dept_air_city"];
        $a3=$r["dept_date"];
        $sql="select * from a_d where Arrival_air_city='$a1' and Dept_air_city='$a2' and dept_date='$a3'";  //query to get all the data with matching credantials
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

        if($c_row2>0){   // if number of rows is greater than 1 means user is present
            ?>
                <em>1)  Plane Number: <?php echo $row["Plane_no"];?></em><br>
                <em>Duration of flight: <?php echo $row["Air_time"];?></em><br>
                <em>Arrival Time: <?php echo $row["arrival_time"];?></em><br>
                <em>Arrival Date: <?php echo $row["arrival_date"];?></em><br>
                <em>Departure Time: <?php echo $row["dept_time"];?></em><br>
                <em>Flight Name: <?php echo $row2["Name"];?></em><br>
                <em>Flight Capacity: <?php echo $row2["Capacity"];?></em><br>
                <em>Arrival Airport Name: <?php echo $row3["A_name"];?></em><br>
                <em>Arrival Airport Country: <?php echo $row3["Country"];?></em><br>
                <em>Departure Airport Name: <?php echo $row4["A_name"];?></em><br>
                <em>Departure Airport Country: <?php echo $row4["Country"];?></em><br>
                <em>Pilot Name: <?php echo $row5["Pi_name"];?></em><br>
                <em>Pilot Year Of experience: <?php echo $row5["years_flying"];?></em><br>
                
            <?php
                
            //$_SESSION['IS_LOGIN']='yes';   //declares session variable that this user has logged in
            //declares  session variable to store admin name
        //redirect to index.php page
        }

    }
    else
    {
        ?>
        <em>No Records available</em>
        <?php
    }
    ?>

