<?php
ob_start();
session_start();
$con = mysqli_connect("localhost","root","","learnsync");
if($con->connect_error)
{
    die("Failed to connect : ".$con->connect_error);
}
else{
$sql = "SELECT *
FROM `streams` ;";
$result = $con->query($sql);
}
$con->close();
?>





<table class="table">
            <thead>
                  <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Room Name</th>
                    <th scope="col">Time Created</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                while($rows=$result->fetch_assoc())
                {
                  echo"
                  <tr>
                    <td>".$rows['Name']."</td>
                    <td>". $rows['Room_name']."</td>
                    <td>". $rows['Time_created']."</td>
                  </tr>
                  ";
                }
            ?>                
                </tbody>
              </table>