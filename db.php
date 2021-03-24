<?php
// Enter your Host, username, password, database below.the bellow code should work.
$con = mysqli_connect("localhost","root","","allphptrick");
    if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
 ?>