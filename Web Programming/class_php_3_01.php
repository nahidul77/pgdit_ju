<?php

  $user="root";
  $passw="";
  $db="pgdclass";
  $host="localhost";
  if(!$con=mysqli_connect($host, $user, $passw, $db))
    echo "Sorry, connection not established";

 $sql= "select id, name from personal";
 $rows=mysqli_query($con,$sql);
 if (mysqli_num_rows($rows)>0){
   while($row=mysqli_fetch_assoc($rows)){
     echo "<p>".$row['id']."-". $row['name']; 
   }
     
 }
 
 ?>
     