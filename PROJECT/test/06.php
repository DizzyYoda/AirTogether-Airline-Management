
<?php
include('../LOGIN/connect.php');   //connects with database
include('../LOGIN/function.php');  //has functions like redirect 
$a=$_SESSION["ID"];
$sql="select * from boards b, a_d a where b.Plane_no=a.Plane_No and P_id='$a' order by dept_date desc";  //query to get all the data with matching credantials
$res=mysqli_query($con,$sql);

?>
                                                <table id="datatablesSimple">
                                                    <thead>
                                                        <tr>
                                                            <th>Ticket Number</th>
                                                            <th>Arrival Airport City</th>
                                                            <th>Departure Airport City </th>
                                                            <th>Departure Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Ticket Number</th>
                                                            <th>Arrival Airport City</th>
                                                            <th>Departure Airport City </th>
                                                            <th>Departure Date</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    <?php
                                                    while($row=mysqli_fetch_array($res))
                                                    {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row["Ticket_No"]; ?></td>
                                                            <td><?php echo $row["Arrival_air_city"]; ?></td>
                                                            <td><?php echo $row["Dept_air_city"]; ?></td>
                                                            <td><?php echo $row["dept_date"]; ?></td>
                                                            
                                                        </tr>

                                                        <?php
                                                    }
                                                    
                                                    ?>    
                                                    
                                                    </tbody>
                                                </table>
